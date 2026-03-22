<?php

namespace App\Controller\Admin;

use App\Entity\Cart;
use App\Entity\Category;
use App\Entity\Product;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Attribute\AdminDashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;

#[AdminDashboard(routePath: '/admin', routeName: 'admin')]
class DashboardController extends AbstractDashboardController
{
    public function __construct(
    private AdminUrlGenerator $adminUrlGenerator
) {}
    public function index(): Response
{
    return $this->redirect($this->adminUrlGenerator
        ->setController(ProductCrudController::class)
        ->setAction('index')
        ->generateUrl()
    );
}

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('PhoneShop Admin');
    }

    public function configureMenuItems(): iterable
{
   yield MenuItem::linkToDashboard('Dashboard', 'fas fa-home');
yield MenuItem::section('Catalogue');
yield MenuItem::linkTo('Produits', 'fas fa-mobile-alt', Product::class)->setAction('index');
yield MenuItem::linkTo('Catégories', 'fas fa-list', Category::class)->setAction('index');
yield MenuItem::section('Utilisateurs');
yield MenuItem::linkTo('Utilisateurs', 'fas fa-users', User::class)->setAction('index');
yield MenuItem::section('Commandes');
yield MenuItem::linkTo('Paniers', 'fas fa-shopping-cart', Cart::class)->setAction('index');
}

public function configureAssets(): Assets
{
    return Assets::new()
        ->addHtmlContentToHead('<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">');
}
}