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
        ['name' => 'Telephones Portables',         'description' => 'Smartphones et telephones reconditionnés toutes marques'],
        ['name' => 'Telephones Reconditionnés',     'description' => 'Telephones remis a neuf garantis 12 mois'],
        ['name' => 'Cables USB-C',                  'description' => 'Cables USB-C charge rapide et transfert de donnees'],
        ['name' => 'Cables Lightning',              'description' => 'Cables Lightning certifies MFi compatibles Apple'],
        ['name' => 'Cables Micro-USB',              'description' => 'Cables Micro-USB standard et tresses solides'],
        ['name' => 'Cables Magnetiques',            'description' => 'Cables magnetiques 3-en-1 charge rapide'],
        ['name' => 'Chargeurs Secteur',             'description' => 'Chargeurs muraux rapides GaN et standards'],
        ['name' => 'Chargeurs GaN',                 'description' => 'Chargeurs GaN compacts haute puissance multi-ports'],
        ['name' => 'Chargeurs Voiture',             'description' => 'Chargeurs allume-cigare USB-C et USB-A'],
        ['name' => 'Chargeurs Sans Fil',            'description' => 'Chargeurs Qi et MagSafe induction sans fil'],
        ['name' => 'Stations de Charge',            'description' => 'Stations multi-appareils filaires et sans fil'],
        ['name' => 'Chargeurs Solaires',            'description' => 'Panneaux solaires portables pour smartphone'],
        ['name' => 'AirPods Apple',                 'description' => 'AirPods Pro et AirPods toutes generations'],
        ['name' => 'Ecouteurs Samsung',             'description' => 'Galaxy Buds Pro et Buds FE Samsung'],
        ['name' => 'Ecouteurs Bluetooth',           'description' => 'Ecouteurs sans fil toutes marques Bluetooth 5.3'],
        ['name' => 'Ecouteurs Filaires USB-C',      'description' => 'Ecouteurs filaires connecteur USB-C'],
        ['name' => 'Ecouteurs Filaires Lightning',  'description' => 'Ecouteurs filaires connecteur Lightning Apple'],
        ['name' => 'Coques iPhone',                 'description' => 'Coques de protection pour tous les modeles iPhone'],
        ['name' => 'Coques Samsung Galaxy',         'description' => 'Coques de protection pour Galaxy S et A'],
        ['name' => 'Coques Xiaomi',                 'description' => 'Coques de protection pour Xiaomi et Redmi'],
        ['name' => 'Coques Huawei',                 'description' => 'Coques de protection pour Huawei et Honor'],
        ['name' => 'Coques Antichoc',               'description' => 'Coques renforcees protection maximale military grade'],
        ['name' => 'Coques Portefeuille',           'description' => 'Coques avec porte-cartes et rangements integres'],
        ['name' => 'Coques Transparentes',          'description' => 'Coques transparentes silicone et rigides'],
        ['name' => 'Verres Trempes iPhone',         'description' => 'Protection ecran verre trempe pour iPhone'],
        ['name' => 'Verres Trempes Samsung',        'description' => 'Protection ecran verre trempe pour Galaxy'],
        ['name' => 'Verres Trempes Xiaomi',         'description' => 'Protection ecran verre trempe pour Xiaomi'],
        ['name' => 'Protection Camera',             'description' => 'Films et verres protection objectif camera arriere'],
        ['name' => 'Etuis & Pochettes',             'description' => 'Etuis portefeuille et pochettes de transport'],
        ['name' => 'Batteries Externes',            'description' => 'Power banks et batteries de secours 10000mAh+'],
        ['name' => 'Batteries MagSafe',             'description' => 'Batteries externes compatibles MagSafe iPhone'],
        ['name' => 'Supports Bureau',               'description' => 'Supports de bureau reglables pour smartphone'],
        ['name' => 'Supports Voiture',              'description' => 'Supports voiture tableau de bord et grille aeration'],
        ['name' => 'Adaptateurs & Convertisseurs',  'description' => 'Adaptateurs USB-C Lightning jack et HDMI'],
        ['name' => 'Stylets Tactiles',              'description' => 'Stylets tactiles precision pour smartphone et tablette'],
        ['name' => 'Haut-parleurs Bluetooth',       'description' => 'Enceintes portables Bluetooth waterproof'],
        ['name' => 'Montres Connectees',            'description' => 'Smartwatches sport et connectees toutes marques'],
        ['name' => 'Bracelets Connectes',           'description' => 'Fitness trackers et bracelets sport connectes'],
        ['name' => 'Accessoires Gaming Mobile',     'description' => 'Manettes triggers et refroidisseurs pour gaming mobile'],
        ['name' => 'Selfie & Photo Mobile',         'description' => 'Trepied stabilisateur et accessoires photo smartphone'],
    ];

       foreach($categories as $key=>$data)
        {
            $category = new Category();
            $category->setName($data['name']);
            $category->setDescription($data['description']);
            $manager->persist($category);
            $this->addReference('category_' . $key , $category);
        }
         // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
