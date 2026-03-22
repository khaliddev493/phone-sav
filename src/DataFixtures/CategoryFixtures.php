<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $categories = [

            // 0
            ['name' => 'Téléphones neufs', 'description' => 'Smartphones neufs des dernières générations Apple, Samsung, Xiaomi et autres marques.'],

            // 1
            ['name' => 'Téléphones reconditionnés', 'description' => 'Smartphones reconditionnés testés, vérifiés et garantis à prix réduit.'],

            // 2
            ['name' => 'Câbles USB-C', 'description' => 'Câbles USB-C pour charge rapide et transfert de données pour smartphones et ordinateurs.'],

            // 3
            ['name' => 'Câbles Lightning', 'description' => 'Câbles Lightning certifiés pour iPhone, iPad et accessoires Apple.'],

            // 4
            ['name' => 'Câbles Micro-USB', 'description' => 'Câbles Micro-USB compatibles avec anciens smartphones et accessoires.'],

            // 5
            ['name' => 'Câbles magnétiques', 'description' => 'Câbles magnétiques pratiques pour une connexion rapide et sans effort.'],

            // 6
            ['name' => 'Chargeurs secteur', 'description' => 'Chargeurs muraux pour smartphones, tablettes et autres appareils.'],

            // 7
            ['name' => 'Chargeurs GaN', 'description' => 'Chargeurs GaN puissants, compacts et multi-ports pour tous vos appareils.'],

            // 8
            ['name' => 'Chargeurs voiture', 'description' => 'Chargeurs pour voiture compatibles allume-cigare pour recharger en déplacement.'],

            // 9
            ['name' => 'Chargeurs sans fil', 'description' => 'Chargeurs sans fil Qi et MagSafe pour une recharge pratique sans câble.'],

            // 10
            ['name' => 'Stations de charge', 'description' => 'Stations permettant de charger plusieurs appareils simultanément.'],

            // 11
            ['name' => 'Chargeurs solaires', 'description' => 'Solutions de recharge solaire pour une utilisation en extérieur.'],

            // 12
            ['name' => 'AirPods Apple', 'description' => 'Écouteurs sans fil Apple avec réduction de bruit et audio spatial.'],

            // 13
            ['name' => 'Écouteurs Samsung', 'description' => 'Écouteurs sans fil Samsung Galaxy Buds avec son immersif.'],

            // 14
            ['name' => 'Écouteurs Bluetooth', 'description' => 'Écouteurs Bluetooth compatibles avec tous les smartphones.'],

            // 15
            ['name' => 'Écouteurs filaires USB-C', 'description' => 'Écouteurs filaires avec connecteur USB-C pour smartphones récents.'],

            // 16
            ['name' => 'Écouteurs filaires Lightning', 'description' => 'Écouteurs filaires Apple avec connecteur Lightning.'],

            // 17
            ['name' => 'Coques iPhone', 'description' => 'Coques de protection pour iPhone : silicone, cuir, antichoc, etc.'],

            // 18
            ['name' => 'Coques Samsung', 'description' => 'Coques de protection pour smartphones Samsung Galaxy.'],

            // 19
            ['name' => 'Coques Xiaomi', 'description' => 'Coques adaptées aux smartphones Xiaomi et Redmi.'],

            // 20
            ['name' => 'Coques Huawei', 'description' => 'Coques de protection pour smartphones Huawei.'],

            // 21
            ['name' => 'Coques antichoc', 'description' => 'Coques renforcées offrant une protection maximale contre les chocs.'],

            // 22
            ['name' => 'Coques portefeuille', 'description' => 'Coques avec rangement pour cartes et billets.'],

            // 23
            ['name' => 'Coques transparentes', 'description' => 'Coques transparentes pour protéger sans cacher le design.'],

            // 24
            ['name' => 'Verres trempés iPhone', 'description' => 'Protections écran en verre trempé pour iPhone.'],

            // 25
            ['name' => 'Verres trempés Samsung', 'description' => 'Protections écran pour smartphones Samsung Galaxy.'],

            // 26
            ['name' => 'Verres trempés Xiaomi', 'description' => 'Protections écran pour smartphones Xiaomi.'],

            // 27
            ['name' => 'Protection caméra', 'description' => 'Protections pour les objectifs caméra des smartphones.'],

            // 28
            ['name' => 'Étuis et pochettes', 'description' => 'Étuis et pochettes pour transporter et protéger votre smartphone.'],

            // 29
            ['name' => 'Batteries externes', 'description' => 'Power banks pour recharger vos appareils en mobilité.'],

            // 30
            ['name' => 'Batteries MagSafe', 'description' => 'Batteries externes compatibles MagSafe pour iPhone.'],

            // 31
            ['name' => 'Supports bureau', 'description' => 'Supports pour smartphone à utiliser sur un bureau.'],

            // 32
            ['name' => 'Supports voiture', 'description' => 'Supports pour fixer votre smartphone en voiture.'],

            // 33
            ['name' => 'Adaptateurs', 'description' => 'Adaptateurs pour connecter différents types de ports.'],

            // 34
            ['name' => 'Stylets tactiles', 'description' => 'Stylets pour écrans tactiles précis et confortables.'],

            // 35
            ['name' => 'Haut-parleurs Bluetooth', 'description' => 'Enceintes Bluetooth portables avec son puissant.'],

            // 36
            ['name' => 'Montres connectées', 'description' => 'Smartwatches avec suivi santé, sport et notifications.'],

            // 37
            ['name' => 'Bracelets connectés', 'description' => 'Bracelets fitness pour suivi d’activité et santé.'],

            // 38
            ['name' => 'Chargeurs solaires outdoor', 'description' => 'Chargeurs solaires conçus pour le camping et les activités extérieures.'],

            // 39
            ['name' => 'Accessoires gaming mobile', 'description' => 'Accessoires pour améliorer votre expérience de jeu mobile.'],
        ];

        foreach ($categories as $index => $data) {
            $category = new Category();
            $category->setName($data['name']);
            $category->setDescription($data['description']);

            $manager->persist($category);

            $this->addReference('category_' . $index, $category);
        }

        $manager->flush();
    }
}