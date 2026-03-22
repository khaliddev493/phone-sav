<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SauvetageController extends AbstractController
{
    #[Route('/sauvetage', name: 'app_sauvetage')]
    public function index(): Response
    {
        $services = [
            'apple' => [
                'nom' => 'Apple iPhone',
                'icon' => 'bi-apple',
                'couleur' => '#555555',
                'ecrans' => [
                    ['modele' => 'iPhone X / XR / XS', 'prix' => 69.99],
                    ['modele' => 'iPhone 11', 'prix' => 89.99],
                    ['modele' => 'iPhone 11 Pro', 'prix' => 89.99],
                    ['modele' => 'iPhone 12 / 12 Mini', 'prix' => 99.99],
                    ['modele' => 'iPhone 12 Pro', 'prix' => 89.99],
                    ['modele' => 'iPhone 12 Pro Max', 'prix' => 109.99],
                    ['modele' => 'iPhone 13 / 13 Pro', 'prix' => 179.99],
                    ['modele' => 'iPhone 13 Pro Max', 'prix' => 199.99],
                    ['modele' => 'iPhone 14 / 14 Plus', 'prix' => 219.99],
                    ['modele' => 'iPhone 14 Pro / Pro Max', 'prix' => 289.99],
                    ['modele' => 'iPhone 15 / 15 Plus', 'prix' => 189.99],
                    ['modele' => 'iPhone 15 Pro / Pro Max', 'prix' => 249.99],
                    ['modele' => 'iPhone 16', 'prix' => 250.00],
                ],
                'batteries' => [
                    ['modele' => 'iPhone X / XR / XS', 'prix' => 39.99],
                    ['modele' => 'iPhone 11 / 11 Pro', 'prix' => 44.99],
                    ['modele' => 'iPhone 12 / 12 Mini', 'prix' => 49.99],
                    ['modele' => 'iPhone 12 Pro / Pro Max', 'prix' => 54.99],
                    ['modele' => 'iPhone 13 / 13 Mini', 'prix' => 54.99],
                    ['modele' => 'iPhone 13 Pro / Pro Max', 'prix' => 59.99],
                    ['modele' => 'iPhone 14 / 14 Plus', 'prix' => 64.99],
                    ['modele' => 'iPhone 14 Pro / Pro Max', 'prix' => 69.99],
                    ['modele' => 'iPhone 15 / 15 Plus', 'prix' => 69.99],
                    ['modele' => 'iPhone 15 Pro / Pro Max', 'prix' => 74.99],
                    ['modele' => 'iPhone 16', 'prix' => 79.99],
                ],
            ],
            'samsung' => [
                'nom' => 'Samsung Galaxy',
                'icon' => 'bi-phone',
                'couleur' => '#1428A0',
                'ecrans' => [
                    ['modele' => 'Galaxy A15 / A25', 'prix' => 49.99],
                    ['modele' => 'Galaxy A35 / A55', 'prix' => 59.99],
                    ['modele' => 'Galaxy S23 / S23 Plus', 'prix' => 89.99],
                    ['modele' => 'Galaxy S23 Ultra', 'prix' => 119.99],
                    ['modele' => 'Galaxy S24 / S24 Plus', 'prix' => 99.99],
                    ['modele' => 'Galaxy S24 Ultra', 'prix' => 129.99],
                    ['modele' => 'Galaxy Z Flip 5', 'prix' => 149.99],
                    ['modele' => 'Galaxy Z Fold 5', 'prix' => 199.99],
                ],
                'batteries' => [
                    ['modele' => 'Galaxy A15 / A25', 'prix' => 29.99],
                    ['modele' => 'Galaxy A35 / A55', 'prix' => 34.99],
                    ['modele' => 'Galaxy S23 / S23 Plus', 'prix' => 44.99],
                    ['modele' => 'Galaxy S23 Ultra', 'prix' => 54.99],
                    ['modele' => 'Galaxy S24 / S24 Plus', 'prix' => 49.99],
                    ['modele' => 'Galaxy S24 Ultra', 'prix' => 59.99],
                    ['modele' => 'Galaxy Z Flip 5', 'prix' => 69.99],
                    ['modele' => 'Galaxy Z Fold 5', 'prix' => 89.99],
                ],
            ],
        ];

        return $this->render('sauvetage/index.html.twig', [
            'services' => $services,
        ]);
    }
}