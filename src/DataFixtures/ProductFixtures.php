<?php
namespace App\DataFixtures;

use App\Entity\Product;
use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture implements DependentFixtureInterface
{
    private const IMG = [
    'iphone15promax' => 'iphone-15-pro-max.jpg',
    'iphone15pro'    => 'iphone-15-pro.jpg',
    'iphone15'       => 'iphone-15.jpg',
    'iphone14'       => 'iphone-14.jpg',
    'iphone13'       => 'iphone-13.jpg',
    'iphone13mini'   => 'iphone-13-mini.jpg',
    'samsungs24ultra'=> 'samsung-s24-ultra.jpg',
    'samsungs24plus' => 'samsung-s24-plus.jpg',
    'samsungs24'     => 'samsung-s24.jpg',
    'samsungzfold5'  => 'samsung-z-fold5.jpg',
    'samsungzflip6'  => 'samsung-z-flip6.jpg',
    'samsunga55'     => 'samsung-a55.jpg',
    'xiaomi14ultra'  => 'xiaomi-14-ultra.jpg',
    'xiaomi14'       => 'xiaomi-14.jpg',
    'redminote13'    => 'redmi-note13-pro.jpg',
    'redmi13c'       => 'redmi-13c.jpg',
    'xiaomi13t'      => 'xiaomi-13t.jpg',
    'huawei'         => 'huawei-p60-pro.jpg',
    'huawei2'        => 'huawei-mate60.jpg',
    'huawei3'        => 'huawei-nova11.jpg',
    'huawei4'        => 'huawei-p50.jpg',
    'huawei5'        => 'huawei-y9s.jpg',
    'verre-trempés-iphone'  => 'verre-trempe-iphone.jpg',
    'verre-trempés-samsung'  => 'verre-trempe-samsung.jpg',
    'cable_usbc'      => 'cable-usbc.jpg',
   'cable_lightning' => 'cable-lightning-apple.jpg',
   'cable_magnetique'=> 'cable-magnetique.jpg',
    'chargeur'       => 'chargeur.jpg',
    'station'        => 'station.jpg',
    'airpods'        => 'airpods.jpg',
    'coque-iphone-silicone'  => 'coque-iphone-silicone.jpg',
    'coque-iphone-spigen'     => 'coque-iphone-spigen.jpg',
    'coque-iphone-rigide'     => 'coque-iphone-rigide.jpg',
    'coque-samsung-silicone'  => 'coque-samsung-silicone.jpg',
    'coque-samsung-spigen'    => 'coque-samsung-spigen.jpg',
    'coque-samsung-rigide'    => 'coque-samsung-rigide.jpg',
    'batterie'       => 'batterie.jpg',
    'support'        => 'support.jpg',
    'montre'         => 'montre.jpg',
];

    public function load(ObjectManager $manager): void
    {
        $i = self::IMG;

 $products = [      // ══════════════════════════════════════════════
// CAT 0 - TÉLÉPHONES NEUFS APPLE
// ══════════════════════════════════════════════
['name' => 'iPhone 15 Pro Max 256Go',  'description' => 'iPhone avec puce A17 Pro, écran 6.7 pouces Super Retina XDR.', 'price' => 1299.99, 'stock' => 15, 'brand' => 'Apple', 'image' => $i['iphone15promax'], 'isActive' => true, 'cat' => 0],
['name' => 'iPhone 15 Pro 128Go',      'description' => 'iPhone 15 Pro avec puce A17 Pro et Dynamic Island.',           'price' => 1149.99, 'stock' => 18, 'brand' => 'Apple', 'image' => $i['iphone15pro'],    'isActive' => true, 'cat' => 0],
['name' => 'iPhone 15 128Go',          'description' => 'iPhone 15 avec puce A16 Bionic et port USB-C.',               'price' => 969.99,  'stock' => 22, 'brand' => 'Apple', 'image' => $i['iphone15'],       'isActive' => true, 'cat' => 0],
['name' => 'iPhone 14 128Go',          'description' => 'iPhone 14 avec puce A15 Bionic et SOS satellite.',            'price' => 799.99,  'stock' => 14, 'brand' => 'Apple', 'image' => $i['iphone14'],       'isActive' => true, 'cat' => 0],
['name' => 'iPhone 13 128Go',          'description' => 'iPhone 13 avec puce A15 Bionic et double caméra.',            'price' => 699.99,  'stock' => 10, 'brand' => 'Apple', 'image' => $i['iphone13'],       'isActive' => true, 'cat' => 0],
['name' => 'iPhone 13 mini 128Go',     'description' => 'iPhone 13 mini compact avec puce A15 Bionic.',                'price' => 599.00,  'stock' => 8,  'brand' => 'Apple', 'image' => $i['iphone13mini'],   'isActive' => true, 'cat' => 0],

// ══════════════════════════════════════════════
// CAT 0 - TÉLÉPHONES NEUFS SAMSUNG
// ══════════════════════════════════════════════
['name' => 'Samsung Galaxy S24 Ultra 512Go', 'description' => 'Smartphone haut de gamme avec S Pen intégré et caméra 200MP.', 'price' => 1399.00, 'stock' => 12, 'brand' => 'Samsung', 'image' => $i['samsungs24ultra'], 'isActive' => true, 'cat' => 0],
['name' => 'Samsung Galaxy S24+ 256Go',      'description' => 'Galaxy S24+ avec écran 6.7 pouces AMOLED et Galaxy AI.',       'price' => 1099.00, 'stock' => 15, 'brand' => 'Samsung', 'image' => $i['samsungs24plus'],  'isActive' => true, 'cat' => 0],
['name' => 'Samsung Galaxy S24 128Go',       'description' => 'Galaxy S24 compact avec puce Exynos 2400 et caméra 50MP.',     'price' => 849.00,  'stock' => 20, 'brand' => 'Samsung', 'image' => $i['samsungs24'],      'isActive' => true, 'cat' => 0],
['name' => 'Samsung Galaxy Z Fold 5 512Go',  'description' => 'Smartphone pliable avec grand écran intérieur 7.6 pouces.',    'price' => 1799.00, 'stock' => 5,  'brand' => 'Samsung', 'image' => $i['samsungzfold5'],   'isActive' => true, 'cat' => 0],
['name' => 'Samsung Galaxy Z Flip 6 256Go',  'description' => 'Smartphone pliable compact avec Flex Window.',                 'price' => 1299.00, 'stock' => 8,  'brand' => 'Samsung', 'image' => $i['samsungzflip6'],   'isActive' => true, 'cat' => 0],
['name' => 'Samsung Galaxy A55 256Go',       'description' => 'Smartphone milieu de gamme avec écran AMOLED 120Hz et 5G.',    'price' => 449.00,  'stock' => 25, 'brand' => 'Samsung', 'image' => $i['samsunga55'],      'isActive' => true, 'cat' => 0],

// ══════════════════════════════════════════════
// CAT 0 - TÉLÉPHONES NEUFS XIAOMI
// ══════════════════════════════════════════════
['name' => 'Xiaomi 14 Ultra 512Go',          'description' => 'Smartphone phare Xiaomi avec optique Leica et charge 90W.',  'price' => 1099.00, 'stock' => 10, 'brand' => 'Xiaomi', 'image' => $i['xiaomi14ultra'], 'isActive' => true, 'cat' => 0],
['name' => 'Xiaomi 14 256Go',                'description' => 'Xiaomi 14 avec Snapdragon 8 Gen 3 et charge rapide 90W.',   'price' => 899.00,  'stock' => 14, 'brand' => 'Xiaomi', 'image' => $i['xiaomi14'],      'isActive' => true, 'cat' => 0],
['name' => 'Xiaomi 13T Pro 256Go',           'description' => 'Xiaomi 13T Pro avec caméra Leica et charge 120W.',          'price' => 649.00,  'stock' => 16, 'brand' => 'Xiaomi', 'image' => $i['xiaomi13t'],     'isActive' => true, 'cat' => 0],

// ══════════════════════════════════════════════
// CAT 2 - CÂBLES
// ══════════════════════════════════════════════
['name' => 'Câble USB-C 100W Anker',    'description' => 'Câble USB-C nylon tressé charge rapide 100W.',        'price' => 15.99, 'stock' => 100, 'brand' => 'Anker',  'image' => $i['cable_usbc'], 'isActive' => true, 'cat' => 1],
['name' => 'Câble Lightning Apple',     'description' => 'Câble Lightning certifié MFi Apple charge 20W.',      'price' => 19.99, 'stock' => 80,  'brand' => 'Apple',  'image' => $i['cable_lightning'], 'isActive' => true, 'cat' => 1],
['name' => 'Câble Magnétique Baseus',   'description' => 'Câble magnétique 3-en-1 USB-C Lightning Micro-USB.',  'price' => 14.99, 'stock' => 60,  'brand' => 'Baseus', 'image' => $i['cable_magnetique'], 'isActive' => true, 'cat' => 1],
// ══════════════════════════════════════════════
// CAT 3 - CHARGEURS
// ══════════════════════════════════════════════
['name' => 'Chargeur 20W Apple',        'description' => 'Chargeur secteur Apple 20W USB-C charge rapide iPhone.', 'price' => 25.99, 'stock' => 50, 'brand' => 'Apple',   'image' => $i['chargeur'], 'isActive' => true, 'cat' => 2],
['name' => 'Chargeur 25W Samsung',      'description' => 'Chargeur Samsung 25W Super Fast Charging Galaxy.',       'price' => 22.99, 'stock' => 45, 'brand' => 'Samsung', 'image' => $i['chargeur'], 'isActive' => true, 'cat' => 2],
['name' => 'Chargeur GaN 65W Anker',    'description' => 'Chargeur GaN compact 65W 2 USB-C et 1 USB-A.',          'price' => 45.99, 'stock' => 35, 'brand' => 'Anker',   'image' => $i['chargeur'], 'isActive' => true, 'cat' => 2],
['name' => 'Chargeur 65W USB-C GaN',           'description' => 'Chargeur rapide 65W GaN USB-C compatible MacBook, iPad et smartphones, compact et léger.',            'price' => 34.99, 'stock' => 50,  'brand' => 'Anker',    'image' => $i['chargeur'], 'isActive' => true, 'cat' => 2],
['name' => 'Chargeur 20W Apple USB-C',          'description' => 'Chargeur Apple 20W USB-C Power Adapter, charge rapide compatible iPhone 12 et versions ultérieures.', 'price' => 24.99, 'stock' => 75,  'brand' => 'Apple',    'image' => $i['chargeur'], 'isActive' => true, 'cat' => 2],
['name' => 'Chargeur 45W Xiaomi HyperCharge',   'description' => 'Chargeur Xiaomi 45W HyperCharge, charge ultra-rapide compatible Xiaomi 13 et Redmi Note 12.',         'price' => 19.99, 'stock' => 60,  'brand' => 'Xiaomi',   'image' => $i['chargeur'], 'isActive' => true, 'cat' => 2],
['name' => 'Chargeur Sans Fil 15W MagSafe',     'description' => 'Chargeur sans fil MagSafe 15W pour iPhone 12/13/14/15, alignement magnétique précis et charge rapide.', 'price' => 39.99, 'stock' => 35,  'brand' => 'Apple',    'image' => $i['chargeur'], 'isActive' => true, 'cat' => 2],


// ══════════════════════════════════════════════
// CAT 6 - COQUES & PROTECTION
// ══════════════════════════════════════════════
['name' => 'Coque iPhone 15 Pro Apple Rigide',      'description' => 'Coque silicone officielle Apple MagSafe iPhone 15 Pro.',    'price' => 59.00, 'stock' => 45, 'brand' => 'Apple',   'image' => $i['coque-iphone-rigide'], 'isActive' => true, 'cat' => 3],
['name' => 'Coque iPhone 15 Spigen',         'description' => 'Coque transparente Spigen Ultra Hybrid anti-jaunissement.', 'price' => 14.99, 'stock' => 55, 'brand' => 'Apple',  'image' => $i['coque-iphone-spigen'], 'isActive' => true, 'cat' => 3],
['name' => 'Coque iPhone 15 Silicone',         'description' => 'Coque transparente Spigen Ultra Hybrid anti-jaunissement.', 'price' => 14.99, 'stock' => 55, 'brand' => 'Apple',  'image' => $i['coque-iphone-silicone'], 'isActive' => true, 'cat' => 3],
['name' => 'Coque Samsung S24 Ultra Silicone', 'description' => 'Coque antichoc Spigen Rugged Armor Galaxy S24 Ultra.',      'price' => 16.99, 'stock' => 55, 'brand' => 'Samsung',  'image' => $i['coque-samsung-silicone'], 'isActive' => true, 'cat' => 3],
['name' => 'Coque Samsung S24 Samsung Spigen',      'description' => 'Coque silicone officielle Samsung Galaxy S24 avec anneau.', 'price' => 39.99, 'stock' => 30, 'brand' => 'Samsung', 'image' => $i['coque-samsung-spigen'], 'isActive' => true, 'cat' => 3],
['name' => 'Coque Samsung S24 Samsung Rigide',      'description' => 'Coque silicone officielle Samsung Galaxy S24 avec anneau.', 'price' => 39.99, 'stock' => 30, 'brand' => 'Samsung', 'image' => $i['coque-samsung-rigide'], 'isActive' => true, 'cat' => 3],

// ══════════════════════════════════════════════
// CAT 7 - BATTERIES EXTERNES
// ══════════════════════════════════════════════
['name' => 'Batterie Externe 20000mAh Anker',      'description' => 'Power bank 20000mAh charge rapide 22.5W 2 ports USB-C.', 'price' => 49.99,  'stock' => 30, 'brand' => 'Anker',  'image' => $i['batterie'], 'isActive' => true, 'cat' => 4],
['name' => 'Batterie Externe 10000mAh Xiaomi',     'description' => 'Power bank Xiaomi 10000mAh charge rapide 30W USB-C.',    'price' => 29.99,  'stock' => 45, 'brand' => 'Xiaomi', 'image' => $i['batterie'], 'isActive' => true, 'cat' => 4],
['name' => 'Batterie MagSafe 5000mAh Apple',       'description' => 'Batterie externe MagSafe officielle Apple pour iPhone.', 'price' => 109.00, 'stock' => 20, 'brand' => 'Apple',  'image' => $i['batterie'], 'isActive' => true, 'cat' => 4],
['name' => 'Batterie Externe Solaire Baseus',       'description' => 'Power bank solaire 10000mAh avec panneau intégré.',      'price' => 39.99,  'stock' => 20, 'brand' => 'Baseus', 'image' => $i['batterie'], 'isActive' => true, 'cat' => 4],


// ══════════════════════════════════════════════
// CAT 8 - VERRES TREMPÉS
// ══════════════════════════════════════════════
['name' => 'Verre Trempé iPhone 15 Pro Max Spigen', 'description' => 'Verre trempé Spigen pour iPhone 15 Pro Max, dureté 9H.',     'price' => 12.99, 'stock' => 80, 'brand' => 'Spigen',  'image' => $i['verre-trempés-iphone'], 'isActive' => true, 'cat' => 5],
['name' => 'Verre Trempé iPhone 15 Pro Belkin',     'description' => 'Verre trempé Belkin pour iPhone 15 Pro, anti-rayures.',      'price' => 14.99, 'stock' => 70, 'brand' => 'Belkin',  'image' => $i['verre-trempés-iphone'], 'isActive' => true, 'cat' => 5],
['name' => 'Verre Trempé Samsung S24 Ultra Spigen', 'description' => 'Verre trempé Spigen pour Galaxy S24 Ultra, dureté 9H.',      'price' => 11.99, 'stock' => 75, 'brand' => 'Spigen',  'image' => $i['verre-trempés-samsung'], 'isActive' => true, 'cat' => 5],
['name' => 'Verre Trempé Xiaomi 14 ESR',            'description' => 'Verre trempé ESR pour Xiaomi 14, anti-empreintes.',          'price' => 9.99,  'stock' => 60, 'brand' => 'ESR',     'image' => $i['verre-trempés-samsung'], 'isActive' => true, 'cat' => 5],
['name' => 'Verre Trempé Universel Baseus',         'description' => 'Verre trempé universel Baseus pour écrans jusqu\'à 6.7".',   'price' => 7.99,  'stock' => 90, 'brand' => 'Baseus',  'image' => $i['verre-trempés-samsung'], 'isActive' => true, 'cat' => 5],
['name' => 'Verre Trempé Universel Baseus1',         'description' => 'Verre trempé universel Baseus pour écrans jusqu\'à 6.7".',   'price' => 7.99,  'stock' => 90, 'brand' => 'Baseus',  'image' => $i['verre-trempés-samsung'], 'isActive' => true, 'cat' => 5],



 ];

        foreach ($products as $data) {
            $product = new Product();
            $product->setName($data['name']);
            $product->setDescription($data['description']);
            $product->setPrice($data['price']);
            $product->setStock($data['stock']);
            $product->setImage($data['image']);
            $product->setBrand($data['brand']);
            $product->setIsActive($data['isActive']);
            $product->setCreatedAt(new \DateTimeImmutable());
            $category = $this->getReference('category_' . $data['cat'], Category::class);
            $product->setCategory($category);
            $manager->persist($product);
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [CategoryFixtures::class];
    }
}