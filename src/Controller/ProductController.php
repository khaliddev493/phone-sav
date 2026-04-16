<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

final class ProductController extends AbstractController
{ //src/Controller/ProductController.php
    #[Route('/produits', name: 'app_product_index')]
    public function index(Request $request ,CategoryRepository $categoryRepository , ProductRepository $productRepository): Response
    {
         $search = $request->query->get('q');
         $catId = $request->query->get('cat');

         $produits = $productRepository->search($search ,$catId);
         $categories = $categoryRepository->findAll() ;
        return $this->render('product/index.html.twig', [
            'produits' => $produits,
            'categories' => $categories,
            'search' => $search,
            'catId' => $catId
        ]);
    }
    #[Route('/produits/{id}' ,name: 'app_product_show')]

    public  function show( Product $product): Response
    {

        return $this->render('product/show.html.twig' ,
        ['product' => $product]);

    }
}
