<?php

namespace App\Controller;

use App\Entity\Cart;
use App\Entity\Order;
use App\Entity\OrderItem;
use Doctrine\ORM\EntityManagerInterface;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/paiement')]
#[IsGranted('ROLE_USER')]
class PaymentController extends AbstractController
{
    public function __construct(
        private string $stripeSecretKey,
        private string $stripePublicKey,
    ) {
    }

    #[Route('/checkout', name: 'app_payment_checkout')]
    public function checkout(EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        $cart = $em->getRepository(Cart::class)->findOneBy(['user' => $user]);

        if (!$cart || $cart->getCartItems()->isEmpty()) {
            $this->addFlash('danger', 'Votre panier est vide !');
            return $this->redirectToRoute('app_cart_show');
        }
        Stripe::setApiKey($this->stripeSecretKey);
        // Préparer les articles pour Stripe
        $lineItems = [];
        foreach ($cart->getCartItems() as $item) {
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => $item->getProduct()->getName(),
                    ],
                    'unit_amount' => (int) ($item->getProduct()->getPrice() * 100),
                ],
                'quantity' => $item->getQuantity(),
            ];
        }
        // Créer la session Stripe
        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => $lineItems,
            'mode' => 'payment',
            'success_url' => $this->generateUrl('app_payment_success', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('app_payment_cancel', [], UrlGeneratorInterface::ABSOLUTE_URL),
        ]);
        return $this->redirect($session->url);
    }

    #[Route('/succes', name: 'app_payment_success')]
    public function success(EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        $cart = $em->getRepository(Cart::class)->findOneBy(['user' => $user]);

        if ($cart && !$cart->getCartItems()->isEmpty()) {
            // Calculer le total
            $total = 0;
            foreach ($cart->getCartItems() as $item) {
                $total += $item->getProduct()->getPrice() * $item->getQuantity();
            }

            // Créer la commande
            $order = new Order();
            $order->setUser($user);
            $order->setStatus('payée');
            $order->setTotal($total);
            $order->setCreatedAt(new \DateTimeImmutable());
            $em->persist($order);

            // Créer les articles de la commande
            foreach ($cart->getCartItems() as $item) {
                $orderItem = new OrderItem();
                $orderItem->setCommande($order);
                $orderItem->setProduct($item->getProduct());
                $orderItem->setQuantity($item->getQuantity());
                $orderItem->setPrice($item->getProduct()->getPrice());
                $em->persist($orderItem);
            }
            // Vider le panier
            foreach ($cart->getCartItems() as $item) {
                $em->remove($item);
            }
            $em->flush();
        }
        return $this->render('payment/success.html.twig');
    }
    #[Route('/annule', name: 'app_payment_cancel')]
    public function cancel(): Response
    {
        return $this->render('payment/cancel.html.twig');
    }
}