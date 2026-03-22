<?php

namespace App\Controller;

use App\Entity\Cart;
use App\Entity\CartItem;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/panier')]
#[IsGranted('ROLE_USER')]
class CartController extends AbstractController
{
    private function getOrCreateCart(EntityManagerInterface $em): Cart
    {
        $user = $this->getUser();
        $cart = $em->getRepository(Cart::class)->findOneBy(['user' => $user]);

        if (!$cart) {
            $cart = new Cart();
            $cart->setUser($user);
            $cart->setCreatedAt(new \DateTimeImmutable());
            $em->persist($cart);
            $em->flush();
        }

        return $cart;
    }

    #[Route('/', name: 'app_cart_show')]
    public function show(EntityManagerInterface $em): Response
    {
        $cart = $this->getOrCreateCart($em);

        return $this->render('cart/show.html.twig', [
            'cart' => $cart,
        ]);
    }

    #[Route('/ajouter/{id}', name: 'app_cart_add')]
    public function add(int $id, EntityManagerInterface $em): Response
    {
        $product = $em->getRepository(Product::class)->find($id);

        if (!$product) {
            throw $this->createNotFoundException('Produit introuvable');
        }

        $cart = $this->getOrCreateCart($em);

        $existing = null;
        foreach ($cart->getCartItems() as $item) {
            if ($item->getProduct()->getId() === $product->getId()) {
                $existing = $item;
                break;
            }
        }

        if ($existing) {
            $existing->setQuantity($existing->getQuantity() + 1);
        } else {
            $cartItem = new CartItem();
            $cartItem->setProduct($product);
            $cartItem->setQuantity(1);
            $cartItem->setCart($cart);
            $em->persist($cartItem);
        }

        $em->flush();

        $this->addFlash('success', $product->getName() . ' ajouté au panier !');

        return $this->redirectToRoute('app_cart_show');
    }

    #[Route('/augmenter/{id}', name: 'app_cart_increase')]
    public function increase(int $id, EntityManagerInterface $em): Response
    {
        $item = $em->getRepository(CartItem::class)->find($id);

        if ($item) {
            $item->setQuantity($item->getQuantity() + 1);
            $em->flush();
        }

        return $this->redirectToRoute('app_cart_show');
    }

    #[Route('/diminuer/{id}', name: 'app_cart_decrease')]
    public function decrease(int $id, EntityManagerInterface $em): Response
    {
        $item = $em->getRepository(CartItem::class)->find($id);

        if ($item) {
            if ($item->getQuantity() > 1) {
                $item->setQuantity($item->getQuantity() - 1);
            } else {
                $em->remove($item);
            }
            $em->flush();
        }

        return $this->redirectToRoute('app_cart_show');
    }

    #[Route('/supprimer/{id}', name: 'app_cart_remove')]
    public function remove(int $id, EntityManagerInterface $em): Response
    {
        $item = $em->getRepository(CartItem::class)->find($id);

        if ($item) {
            $em->remove($item);
            $em->flush();
            $this->addFlash('success', 'Article supprimé du panier !');
        }

        return $this->redirectToRoute('app_cart_show');
    }

    #[Route('/vider', name: 'app_cart_clear')]
    public function clear(EntityManagerInterface $em): Response
    {
        $cart = $this->getOrCreateCart($em);

        foreach ($cart->getCartItems() as $item) {
            $em->remove($item);
        }

        $em->flush();

        $this->addFlash('success', 'Panier vidé !');

        return $this->redirectToRoute('app_cart_show');
    }
}