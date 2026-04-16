<?php

namespace App\Controller;

use App\Entity\Cart;
use App\Entity\Order;
use App\Entity\OrderItem;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

#[Route('/commande')]
#[IsGranted('ROLE_USER')]
class OrderController extends AbstractController
{
    #[Route('/confirmer', name: 'app_order_confirm')]
    public function confirm(EntityManagerInterface $em, MailerInterface $mailer): Response
    {
         /** @var \App\Entity\User $user */ 
        $user = $this->getUser();
        // Récupérer le panier
        $cart = $em->getRepository(Cart::class)->findOneBy(['user' => $user]);

        // Panier vide
        if (!$cart || $cart->getCartItems()->isEmpty()) {
            $this->addFlash('danger', 'Votre panier est vide !');
            return $this->redirectToRoute('app_cart_show');
        }

        // Calculer le total
        $total = 0;
        foreach ($cart->getCartItems() as $item) {
            $total += $item->getProduct()->getPrice() * $item->getQuantity();
        }

        // Créer la commande
        $order = new Order();
        $order->setUser($user);
        $order->setStatus('en attente');
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

        // ✅ AJOUT : Envoi de l'email de confirmation
        $email = (new Email())
            ->from('noreply@phoneshop.com')
            ->to($user->getEmail())
            ->subject('Confirmation de votre commande #' . $order->getId() . ' - PhoneShop')
            ->html('
                <h1>Merci pour votre commande !</h1>
                <p>Bonjour <strong>' . $user->getEmail() . '</strong>,</p>
                <p>Votre commande <strong>#' . $order->getId() . '</strong> a bien été enregistrée.</p>
                <p>Montant total : <strong>' . number_format($total, 2) . ' €</strong></p>
                <p>Statut : En attente</p>
                <br>
                <p>Merci de votre confiance,<br>L\'équipe PhoneShop</p>
            ');

        $mailer->send($email);

        $this->addFlash('success', 'Commande passée avec succès !');

        return $this->redirectToRoute('app_order_success', ['id' => $order->getId()]);
    }
    #[Route('/succes/{id}', name: 'app_order_success')]
    public function success(int $id, EntityManagerInterface $em): Response
    {
        $order = $em->getRepository(Order::class)->find($id);

        return $this->render('order/success.html.twig', [
            'order' => $order,
        ]);
    }
    #[Route('/mes-commandes', name: 'app_order_list')]
    public function list(EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        $orders = $em->getRepository(Order::class)->findBy(
            ['user' => $user],
            ['createdAt' => 'DESC']
        );
        return $this->render('order/list.html.twig', [
            'orders' => $orders,
        ]);
    }
}