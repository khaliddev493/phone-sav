<?php
namespace App\DataFixtures;

use App\Entity\Product;
use App\Entity\Category;
use App\DataFixtures\CategoryFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture implements DependentFixtureInterface
{
    // ─────────────────────────────────────────────────────────────────
    // picsum.photos/seed/{mot}/400/300 — image fixe par mot-clé,
    // aucun compte requis, aucun hotlink blocking, toujours disponible
    // ─────────────────────────────────────────────────────────────────
    private const IMG = [
        'iphone'        => 'https://picsum.photos/seed/iphone/400/300',
        'samsung'       => 'https://picsum.photos/seed/samsung/400/300',
        'xiaomi'        => 'https://picsum.photos/seed/xiaomi/400/300',
        'android'       => 'https://picsum.photos/seed/android/400/300',
        'cable_usbc'    => 'https://picsum.photos/seed/usbc/400/300',
        'cable_light'   => 'https://picsum.photos/seed/lightning/400/300',
        'cable_micro'   => 'https://picsum.photos/seed/microusb/400/300',
        'cable_mag'     => 'https://picsum.photos/seed/magnetic/400/300',
        'chargeur_mur'  => 'https://picsum.photos/seed/charger/400/300',
        'chargeur_gan'  => 'https://picsum.photos/seed/gan/400/300',
        'chargeur_voit' => 'https://picsum.photos/seed/carcharger/400/300',
        'chargeur_wifi' => 'https://picsum.photos/seed/wireless/400/300',
        'station'       => 'https://picsum.photos/seed/station/400/300',
        'solaire'       => 'https://picsum.photos/seed/solar/400/300',
        'airpods'       => 'https://picsum.photos/seed/airpods/400/300',
        'ecouteurs_bt'  => 'https://picsum.photos/seed/earbuds/400/300',
        'ecouteurs_fil' => 'https://picsum.photos/seed/earphones/400/300',
        'enceinte'      => 'https://picsum.photos/seed/speaker/400/300',
        'coque'         => 'https://picsum.photos/seed/phonecase/400/300',
        'verre'         => 'https://picsum.photos/seed/glass/400/300',
        'pochette'      => 'https://picsum.photos/seed/pouch/400/300',
        'batterie'      => 'https://picsum.photos/seed/battery/400/300',
        'apple_watch'   => 'https://picsum.photos/seed/applewatch/400/300',
        'bracelet'      => 'https://picsum.photos/seed/smartband/400/300',
        'support'       => 'https://picsum.photos/seed/phonestand/400/300',
        'adaptateur'    => 'https://picsum.photos/seed/adapter/400/300',
        'stylet'        => 'https://picsum.photos/seed/stylus/400/300',
        'gaming'        => 'https://picsum.photos/seed/gaming/400/300',
        'gimbal'        => 'https://picsum.photos/seed/gimbal/400/300',
    ];

    public function load(ObjectManager $manager): void
    {
        $i = self::IMG;

        $products = [

            // ══════════════════════════════════════════════
            // TELEPHONES NEUFS (cat 0)
            // ══════════════════════════════════════════════
            ['name' => 'iPhone 15 Pro Max 256Go',        'description' => 'Dernier iPhone avec puce A17 Pro, ecran 6.7 pouces Super Retina XDR',           'price' => 1299.99, 'stock' => 15, 'brand' => 'Apple',   'image' => $i['iphone'],  'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 0],
            ['name' => 'iPhone 15 Pro 128Go',            'description' => 'iPhone 15 Pro avec puce A17 Pro et Dynamic Island ecran 6.1 pouces',            'price' => 1149.99, 'stock' => 18, 'brand' => 'Apple',   'image' => $i['iphone'],  'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 0],
            ['name' => 'iPhone 15 128Go',                'description' => 'iPhone 15 avec puce A16 Bionic et port USB-C ecran 6.1 pouces',                 'price' => 969.99,  'stock' => 22, 'brand' => 'Apple',   'image' => $i['iphone'],  'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 0],
            ['name' => 'iPhone 14 Pro 256Go',            'description' => 'iPhone 14 Pro avec puce A16 Bionic et Dynamic Island',                          'price' => 899.99,  'stock' => 10, 'brand' => 'Apple',   'image' => $i['iphone'],  'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 0],
            ['name' => 'iPhone 14 128Go',                'description' => 'iPhone 14 avec puce A15 Bionic mode urgence SOS par satellite',                 'price' => 799.99,  'stock' => 14, 'brand' => 'Apple',   'image' => $i['iphone'],  'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 0],
            ['name' => 'iPhone 13 mini 128Go',           'description' => 'iPhone 13 mini compact avec puce A15 Bionic ecran 5.4 pouces',                  'price' => 599.00,  'stock' => 8,  'brand' => 'Apple',   'image' => $i['iphone'],  'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 0],
            ['name' => 'iPhone 15 Pro 256Go Titane',     'description' => 'iPhone 15 Pro 256Go titane naturel puce A17 Pro camera 48MP',                   'price' => 1229.00, 'stock' => 9,  'brand' => 'Apple',   'image' => $i['iphone'],  'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 0],
            ['name' => 'Samsung Galaxy S24 Ultra 512Go', 'description' => 'Smartphone haut de gamme avec S Pen integre et camera 200MP',                   'price' => 1399.00, 'stock' => 12, 'brand' => 'Samsung', 'image' => $i['samsung'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 0],
            ['name' => 'Samsung Galaxy S24+ 256Go',      'description' => 'Galaxy S24+ avec ecran 6.7 pouces AMOLED et Galaxy AI',                         'price' => 1099.00, 'stock' => 15, 'brand' => 'Samsung', 'image' => $i['samsung'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 0],
            ['name' => 'Samsung Galaxy S24 128Go',       'description' => 'Galaxy S24 compact avec puce Exynos 2400 et camera 50MP',                       'price' => 849.00,  'stock' => 20, 'brand' => 'Samsung', 'image' => $i['samsung'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 0],
            ['name' => 'Samsung Galaxy A55 256Go',       'description' => 'Smartphone milieu de gamme avec ecran AMOLED 120Hz et 5G',                      'price' => 449.00,  'stock' => 25, 'brand' => 'Samsung', 'image' => $i['samsung'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 0],
            ['name' => 'Samsung Galaxy A35 128Go',       'description' => 'Galaxy A35 avec ecran Super AMOLED 120Hz et triple camera',                     'price' => 349.00,  'stock' => 30, 'brand' => 'Samsung', 'image' => $i['samsung'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 0],
            ['name' => 'Samsung Galaxy Z Fold 5 512Go',  'description' => 'Smartphone pliable Galaxy Z Fold 5 avec grand ecran interieur 7.6 pouces',       'price' => 1799.00, 'stock' => 5,  'brand' => 'Samsung', 'image' => $i['samsung'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 0],
            ['name' => 'Samsung Galaxy Z Flip 5 256Go',  'description' => 'Smartphone pliable compact Galaxy Z Flip 5 avec Flex Window',                   'price' => 1099.00, 'stock' => 8,  'brand' => 'Samsung', 'image' => $i['samsung'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 0],
            ['name' => 'Samsung Galaxy S23 FE 256Go',    'description' => 'Galaxy S23 Fan Edition avec Exynos 2200 et triple camera 50MP',                 'price' => 499.00,  'stock' => 18, 'brand' => 'Samsung', 'image' => $i['samsung'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 0],
            ['name' => 'Samsung Galaxy A15 128Go',       'description' => 'Galaxy A15 avec ecran Super AMOLED 6.5 pouces et triple camera',                'price' => 219.00,  'stock' => 40, 'brand' => 'Samsung', 'image' => $i['samsung'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 0],
            ['name' => 'Xiaomi 14 Ultra 512Go',          'description' => 'Smartphone phare Xiaomi avec optique Leica et charge 90W',                      'price' => 1099.00, 'stock' => 10, 'brand' => 'Xiaomi',  'image' => $i['xiaomi'],  'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 0],
            ['name' => 'Xiaomi 14 256Go',                'description' => 'Xiaomi 14 avec Snapdragon 8 Gen 3 et charge rapide 90W',                        'price' => 899.00,  'stock' => 14, 'brand' => 'Xiaomi',  'image' => $i['xiaomi'],  'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 0],
            ['name' => 'Xiaomi Redmi Note 13 Pro 256Go', 'description' => 'Redmi Note 13 Pro avec camera 200MP et charge 67W',                             'price' => 329.00,  'stock' => 28, 'brand' => 'Xiaomi',  'image' => $i['xiaomi'],  'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 0],
            ['name' => 'Xiaomi Redmi 13C 256Go',         'description' => 'Redmi 13C avec MediaTek Helio G85 et triple camera 50MP',                       'price' => 179.00,  'stock' => 35, 'brand' => 'Xiaomi',  'image' => $i['xiaomi'],  'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 0],
            ['name' => 'OnePlus 12 256Go',               'description' => 'OnePlus 12 avec Snapdragon 8 Gen 3 et charge 100W SUPERVOOC',                   'price' => 849.00,  'stock' => 12, 'brand' => 'OnePlus', 'image' => $i['android'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 0],
            ['name' => 'Google Pixel 8 Pro 256Go',       'description' => 'Pixel 8 Pro avec puce Tensor G3 et IA Google avancee',                          'price' => 1099.00, 'stock' => 10, 'brand' => 'Google',  'image' => $i['android'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 0],
            ['name' => 'Google Pixel 8 128Go',           'description' => 'Pixel 8 avec puce Tensor G3 camera 50MP et 7 ans mises a jour',                 'price' => 799.00,  'stock' => 12, 'brand' => 'Google',  'image' => $i['android'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 0],
            ['name' => 'Oppo Find X7 Ultra 512Go',       'description' => 'Oppo Find X7 Ultra avec Snapdragon 8 Gen 3 et camera Hasselblad',               'price' => 1299.00, 'stock' => 6,  'brand' => 'Oppo',   'image' => $i['android'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 0],

            // ══════════════════════════════════════════════
            // TELEPHONES RECONDITIONES (cat 1)
            // ══════════════════════════════════════════════
            ['name' => 'iPhone 14 128Go Reconditionne Grade A',  'description' => 'iPhone 14 reconditionne grade A comme neuf garanti 12 mois',      'price' => 649.00, 'stock' => 8,  'brand' => 'Apple',   'image' => $i['iphone'],  'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 1],
            ['name' => 'iPhone 13 128Go Reconditionne Grade A',  'description' => 'iPhone 13 reconditionne grade A batterie superieure a 85%',       'price' => 499.00, 'stock' => 10, 'brand' => 'Apple',   'image' => $i['iphone'],  'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 1],
            ['name' => 'iPhone 12 64Go Reconditionne Grade B',   'description' => 'iPhone 12 reconditionne grade B bon etat garanti 6 mois',         'price' => 369.00, 'stock' => 7,  'brand' => 'Apple',   'image' => $i['iphone'],  'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 1],
            ['name' => 'Samsung Galaxy S23 256Go Reconditionne', 'description' => 'Galaxy S23 reconditionne grade B excellent etat garanti 6 mois',  'price' => 549.00, 'stock' => 6,  'brand' => 'Samsung', 'image' => $i['samsung'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 1],

            // ══════════════════════════════════════════════
            // CABLES USB-C (cat 2)
            // ══════════════════════════════════════════════
            ['name' => 'Cable USB-C 100W 2m Anker Nylon',    'description' => 'Cable USB-C nylon tresse charge rapide 100W transfert 480Mbps',       'price' => 15.99, 'stock' => 100, 'brand' => 'Anker',  'image' => $i['cable_usbc'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 2],
            ['name' => 'Cable USB-C 240W 2m Baseus',         'description' => 'Cable USB-C 240W charge ultra rapide pour laptop et smartphone',       'price' => 19.99, 'stock' => 80,  'brand' => 'Baseus', 'image' => $i['cable_usbc'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 2],
            ['name' => 'Cable USB-C 60W 1m Belkin',          'description' => 'Cable USB-C Belkin 60W certifie charge iPhone et Android',             'price' => 12.99, 'stock' => 90,  'brand' => 'Belkin', 'image' => $i['cable_usbc'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 2],
            ['name' => 'Cable USB-C 3m Extra Long Anker',    'description' => 'Cable USB-C extra long 3m charge et donnees pour lit et bureau',       'price' => 17.99, 'stock' => 70,  'brand' => 'Anker',  'image' => $i['cable_usbc'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 2],
            ['name' => 'Cable USB-C Retractable Anker',      'description' => 'Cable USB-C retractable compact 60W ideal voyage et sac a dos',        'price' => 13.99, 'stock' => 75,  'brand' => 'Anker',  'image' => $i['cable_usbc'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 2],
            ['name' => 'Cable USB-C Plat Baseus',            'description' => 'Cable USB-C plat 100W anti-noeud et anti-enchevêtrement Baseus',       'price' => 11.99, 'stock' => 80,  'brand' => 'Baseus', 'image' => $i['cable_usbc'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 2],
            ['name' => 'Cable USB-C 1m Original Apple',      'description' => 'Cable USB-C original Apple 1m pour iPhone 15 charge et donnees',       'price' => 25.00, 'stock' => 65,  'brand' => 'Apple',  'image' => $i['cable_usbc'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 2],

            // ══════════════════════════════════════════════
            // CABLES LIGHTNING (cat 3)
            // ══════════════════════════════════════════════
            ['name' => 'Cable Lightning MFi 1m Apple',         'description' => 'Cable Lightning certifie MFi Apple charge rapide 20W pour iPhone',  'price' => 19.99, 'stock' => 80, 'brand' => 'Apple',  'image' => $i['cable_light'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 3],
            ['name' => 'Cable Lightning Tresse 2m Anker',      'description' => 'Cable Lightning tresse solide 2m certifie MFi charge iPhone iPad',   'price' => 14.99, 'stock' => 90, 'brand' => 'Anker',  'image' => $i['cable_light'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 3],
            ['name' => 'Cable USB-C vers Lightning Belkin',    'description' => 'Cable USB-C vers Lightning MFi pour charge rapide iPhone 14',         'price' => 22.99, 'stock' => 75, 'brand' => 'Belkin', 'image' => $i['cable_light'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 3],
            ['name' => 'Cable Lightning 0.5m Apple',           'description' => 'Cable Lightning ultra court 0.5m pour chargeur de chevet',           'price' => 15.99, 'stock' => 70, 'brand' => 'Apple',  'image' => $i['cable_light'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 3],

            // ══════════════════════════════════════════════
            // CABLES MICRO-USB (cat 4)
            // ══════════════════════════════════════════════
            ['name' => 'Cable Micro-USB Tresse 1m Belkin', 'description' => 'Cable Micro-USB tresse solide charge et synchronisation',     'price' => 9.99, 'stock' => 90,  'brand' => 'Belkin', 'image' => $i['cable_micro'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 4],
            ['name' => 'Cable Micro-USB 2m Anker',         'description' => 'Cable Micro-USB 2m nylon compatible Android et manettes',     'price' => 8.99, 'stock' => 100, 'brand' => 'Anker',  'image' => $i['cable_micro'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 4],

            // ══════════════════════════════════════════════
            // CABLES MAGNETIQUES (cat 5)
            // ══════════════════════════════════════════════
            ['name' => 'Cable Magnetique 3-en-1 Baseus',   'description' => 'Cable magnetique compatible USB-C Lightning Micro-USB 100W',  'price' => 14.99, 'stock' => 60, 'brand' => 'Baseus', 'image' => $i['cable_mag'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 5],
            ['name' => 'Cable Magnetique Retractable USB-C','description' => 'Cable magnetique retractable USB-C charge 60W compact',      'price' => 16.99, 'stock' => 50, 'brand' => 'Baseus', 'image' => $i['cable_mag'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 5],

            // ══════════════════════════════════════════════
            // CHARGEURS SECTEUR (cat 6)
            // ══════════════════════════════════════════════
            ['name' => 'Chargeur 20W USB-C Apple',   'description' => 'Chargeur secteur Apple 20W USB-C charge rapide iPhone et iPad',   'price' => 25.99, 'stock' => 50, 'brand' => 'Apple',   'image' => $i['chargeur_mur'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 6],
            ['name' => 'Chargeur 25W USB-C Samsung', 'description' => 'Chargeur Samsung 25W Super Fast Charging compatible Galaxy',       'price' => 22.99, 'stock' => 45, 'brand' => 'Samsung', 'image' => $i['chargeur_mur'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 6],
            ['name' => 'Chargeur 30W USB-C Belkin',  'description' => 'Chargeur compact 30W USB-C compatible iPhone iPad MacBook',        'price' => 29.99, 'stock' => 40, 'brand' => 'Belkin',  'image' => $i['chargeur_mur'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 6],
            ['name' => 'Chargeur 15W USB-A Samsung', 'description' => 'Chargeur Samsung 15W USB-A Adaptive Fast Charging Galaxy A',       'price' => 14.99, 'stock' => 55, 'brand' => 'Samsung', 'image' => $i['chargeur_mur'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 6],

            // ══════════════════════════════════════════════
            // CHARGEURS GAN (cat 7)
            // ══════════════════════════════════════════════
            ['name' => 'Chargeur GaN 65W 3 ports Anker',      'description' => 'Chargeur GaN compact 65W 2 USB-C et 1 USB-A charge simultanee',      'price' => 45.99, 'stock' => 35, 'brand' => 'Anker',  'image' => $i['chargeur_gan'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 7],
            ['name' => 'Chargeur GaN 100W 4 ports Baseus',    'description' => 'Chargeur GaN 100W 4 ports USB-C charge laptop et smartphone',         'price' => 59.99, 'stock' => 25, 'brand' => 'Baseus', 'image' => $i['chargeur_gan'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 7],
            ['name' => 'Chargeur GaN 140W Anker Prime',       'description' => 'Chargeur GaN ultra puissant 140W compatible MacBook Pro et iPhone',   'price' => 89.99, 'stock' => 20, 'brand' => 'Anker',  'image' => $i['chargeur_gan'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 7],
            ['name' => 'Chargeur GaN 30W Belkin BoostCharge', 'description' => 'Chargeur GaN 30W Belkin pliable USB-C compatible PD 3.0',             'price' => 29.99, 'stock' => 42, 'brand' => 'Belkin', 'image' => $i['chargeur_gan'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 7],
            ['name' => 'Chargeur GaN 200W Ugreen Nexode',     'description' => 'Chargeur GaN 200W Ugreen 4 ports USB-C pour bureau puissance max',    'price' => 99.99, 'stock' => 10, 'brand' => 'Ugreen', 'image' => $i['chargeur_gan'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 7],

            // ══════════════════════════════════════════════
            // CHARGEURS VOITURE (cat 8)
            // ══════════════════════════════════════════════
            ['name' => 'Chargeur Voiture 36W Belkin',  'description' => 'Chargeur allume-cigare 36W USB-C charge rapide en voiture',      'price' => 18.99, 'stock' => 40, 'brand' => 'Belkin', 'image' => $i['chargeur_voit'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 8],
            ['name' => 'Chargeur Voiture 40W Anker',   'description' => 'Chargeur allume-cigare 40W 2 ports USB-C charge deux appareils', 'price' => 22.99, 'stock' => 35, 'brand' => 'Anker',  'image' => $i['chargeur_voit'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 8],

            // ══════════════════════════════════════════════
            // CHARGEURS SANS FIL (cat 9)
            // ══════════════════════════════════════════════
            ['name' => 'Chargeur MagSafe 15W Apple',     'description' => 'Chargeur MagSafe 15W charge rapide sans fil pour iPhone 12 et +',    'price' => 45.00, 'stock' => 30, 'brand' => 'Apple',   'image' => $i['chargeur_wifi'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 9],
            ['name' => 'Chargeur Sans Fil Qi 15W Anker', 'description' => 'Chargeur induction Qi 15W compatible iPhone et Samsung Galaxy',       'price' => 19.99, 'stock' => 40, 'brand' => 'Anker',   'image' => $i['chargeur_wifi'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 9],
            ['name' => 'Chargeur Sans Fil 15W Samsung',  'description' => 'Chargeur induction Samsung 15W Fast Charge Galaxy S et Note',         'price' => 34.99, 'stock' => 28, 'brand' => 'Samsung', 'image' => $i['chargeur_wifi'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 9],

            // ══════════════════════════════════════════════
            // STATIONS DE CHARGE (cat 10)
            // ══════════════════════════════════════════════
            ['name' => 'Station de Charge 4-en-1 Anker',     'description' => 'Station charge 4 appareils simultanes iPhone Apple Watch AirPods iPad', 'price' => 79.99,  'stock' => 20, 'brand' => 'Anker',  'image' => $i['station'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 10],
            ['name' => 'Station MagSafe 3-en-1 Belkin',      'description' => 'Station MagSafe charge iPhone Apple Watch et AirPods simultanement',    'price' => 149.99, 'stock' => 15, 'brand' => 'Belkin', 'image' => $i['station'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 10],
            ['name' => 'Chargeur Duo MagSafe Apple',         'description' => 'Chargeur sans fil double MagSafe pour iPhone et Apple Watch',           'price' => 149.00, 'stock' => 12, 'brand' => 'Apple',  'image' => $i['station'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 10],

            // ══════════════════════════════════════════════
            // CHARGEURS SOLAIRES (cat 11)
            // ══════════════════════════════════════════════
            ['name' => 'Chargeur Solaire 21W Anker',         'description' => 'Panneau solaire portable 21W 2 ports USB charge rapide en exterieur', 'price' => 59.99,  'stock' => 18, 'brand' => 'Anker',  'image' => $i['solaire'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 11],
            ['name' => 'Chargeur Solaire 10W Baseus',        'description' => 'Panneau solaire pliable 10W USB-C ultra leger pour randonnee',        'price' => 39.99,  'stock' => 22, 'brand' => 'Baseus', 'image' => $i['solaire'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 11],
            ['name' => 'Chargeur Solaire Pliable 40W Anker', 'description' => 'Panneau solaire pliable 40W 2 ports USB-C pour camping trek',         'price' => 129.99, 'stock' => 12, 'brand' => 'Anker',  'image' => $i['solaire'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 11],

            // ══════════════════════════════════════════════
            // AIRPODS APPLE (cat 12)
            // ══════════════════════════════════════════════
            ['name' => 'AirPods Pro 2e generation', 'description' => 'AirPods Pro avec reduction de bruit active et audio spatial',          'price' => 279.00, 'stock' => 20, 'brand' => 'Apple', 'image' => $i['airpods'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 12],
            ['name' => 'AirPods 3e generation',     'description' => 'AirPods avec audio spatial et boitier de charge MagSafe',              'price' => 199.00, 'stock' => 25, 'brand' => 'Apple', 'image' => $i['airpods'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 12],
            ['name' => 'AirPods 2e generation',     'description' => 'AirPods 2e gen avec boitier de charge filaire et Siri mains libres',   'price' => 149.00, 'stock' => 30, 'brand' => 'Apple', 'image' => $i['airpods'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 12],

            // ══════════════════════════════════════════════
            // ECOUTEURS SAMSUNG (cat 13)
            // ══════════════════════════════════════════════
            ['name' => 'Samsung Galaxy Buds2 Pro', 'description' => 'Ecouteurs sans fil Samsung avec reduction de bruit 360 Audio', 'price' => 189.00, 'stock' => 18, 'brand' => 'Samsung', 'image' => $i['ecouteurs_bt'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 13],
            ['name' => 'Samsung Galaxy Buds FE',   'description' => 'Galaxy Buds FE avec reduction bruit active autonomie 6h',      'price' => 99.00,  'stock' => 25, 'brand' => 'Samsung', 'image' => $i['ecouteurs_bt'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 13],

            // ══════════════════════════════════════════════
            // ECOUTEURS BLUETOOTH (cat 14)
            // ══════════════════════════════════════════════
            ['name' => 'Ecouteurs Bluetooth Anker Q45',      'description' => 'Ecouteurs sans fil Bluetooth 5.3 reduction bruit autonomie 50h', 'price' => 49.99, 'stock' => 35, 'brand' => 'Anker',   'image' => $i['ecouteurs_bt'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 14],
            ['name' => 'Ecouteurs Bluetooth OnePlus Buds 3', 'description' => 'OnePlus Buds 3 avec reduction bruit adaptative et audio 49dB',   'price' => 79.00, 'stock' => 22, 'brand' => 'OnePlus', 'image' => $i['ecouteurs_bt'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 14],

            // ══════════════════════════════════════════════
            // ECOUTEURS FILAIRES USB-C (cat 15)
            // ══════════════════════════════════════════════
            ['name' => 'Ecouteurs USB-C OnePlus',    'description' => 'Ecouteurs filaires USB-C avec micro integre son cristallin',   'price' => 29.99, 'stock' => 40, 'brand' => 'OnePlus', 'image' => $i['ecouteurs_fil'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 15],
            ['name' => 'Ecouteurs USB-C Xiaomi Pro', 'description' => 'Ecouteurs filaires Xiaomi USB-C Hi-Res Audio certifie',        'price' => 24.99, 'stock' => 45, 'brand' => 'Xiaomi',  'image' => $i['ecouteurs_fil'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 15],
            ['name' => 'EarPods USB-C Apple',        'description' => 'Ecouteurs Apple EarPods avec connecteur USB-C pour iPhone 15', 'price' => 19.00, 'stock' => 70, 'brand' => 'Apple',   'image' => $i['ecouteurs_fil'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 15],

            // ══════════════════════════════════════════════
            // ECOUTEURS FILAIRES LIGHTNING (cat 16)
            // ══════════════════════════════════════════════
            ['name' => 'EarPods Lightning Apple', 'description' => 'Ecouteurs Apple EarPods avec connecteur Lightning pour iPhone', 'price' => 19.00, 'stock' => 60, 'brand' => 'Apple', 'image' => $i['ecouteurs_fil'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 16],

            // ══════════════════════════════════════════════
            // COQUES IPHONE (cat 17)
            // ══════════════════════════════════════════════
            ['name' => 'Coque MagSafe iPhone 15 Pro Silicone',      'description' => 'Coque silicone officielle Apple MagSafe pour iPhone 15 Pro',                 'price' => 59.00, 'stock' => 45, 'brand' => 'Apple',    'image' => $i['coque'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 17],
            ['name' => 'Coque iPhone 15 Pro Max Spigen',            'description' => 'Coque transparente Spigen Ultra Hybrid anti-jaunissement iPhone 15 Pro Max', 'price' => 14.99, 'stock' => 55, 'brand' => 'Spigen',   'image' => $i['coque'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 17],
            ['name' => 'Coque iPhone 14 Cuir Nomad',               'description' => 'Coque cuir premium Nomad pour iPhone 14 compatible MagSafe',                 'price' => 59.99, 'stock' => 20, 'brand' => 'Nomad',    'image' => $i['coque'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 17],
            ['name' => 'Coque iPhone 15 UAG Pathfinder',           'description' => 'Coque UAG Pathfinder protection militaire MIL-STD-810G iPhone 15',           'price' => 49.99, 'stock' => 25, 'brand' => 'UAG',      'image' => $i['coque'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 17],
            ['name' => 'Coque iPhone 15 OtterBox Defender',        'description' => 'Coque OtterBox Defender protection extreme 3 couches iPhone 15',             'price' => 54.99, 'stock' => 18, 'brand' => 'OtterBox', 'image' => $i['coque'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 17],
            ['name' => 'Coque iPhone 13 Spigen Liquid Crystal',    'description' => 'Coque transparente Spigen Liquid Crystal pour iPhone 13 ultra fine',          'price' => 10.99, 'stock' => 65, 'brand' => 'Spigen',   'image' => $i['coque'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 17],
            ['name' => 'Coque iPhone 15 Plus Moshi Arx Slim',      'description' => 'Coque Moshi Arx Slim ultra mince 0.85mm pour iPhone 15 Plus',               'price' => 44.99, 'stock' => 18, 'brand' => 'Moshi',    'image' => $i['coque'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 17],
            ['name' => 'Coque iPhone 15 Pro MagSafe Cuir Beige',   'description' => 'Coque cuir beige MagSafe pour iPhone 15 Pro finition premium',               'price' => 55.00, 'stock' => 20, 'brand' => 'Apple',    'image' => $i['coque'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 17],
            ['name' => 'Coque iPhone 15 Pro Ring Holder Spigen',   'description' => 'Coque Spigen Style Armor avec anneau magnetique pour iPhone 15 Pro',          'price' => 19.99, 'stock' => 30, 'brand' => 'Spigen',   'image' => $i['coque'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 17],

            // ══════════════════════════════════════════════
            // COQUES SAMSUNG (cat 18)
            // ══════════════════════════════════════════════
            ['name' => 'Coque Samsung S24 Ultra Spigen Rugged', 'description' => 'Coque antichoc Spigen Rugged Armor pour Galaxy S24 Ultra',           'price' => 16.99, 'stock' => 55, 'brand' => 'Spigen',  'image' => $i['coque'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 18],
            ['name' => 'Coque Samsung S24 Silicone Officielle', 'description' => 'Coque silicone officielle Samsung Galaxy S24 avec doigt annulaire',  'price' => 39.99, 'stock' => 30, 'brand' => 'Samsung', 'image' => $i['coque'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 18],
            ['name' => 'Coque Samsung A55 Transparente ESR',    'description' => 'Coque transparente ESR anti-choc pour Samsung Galaxy A55',           'price' => 9.99,  'stock' => 60, 'brand' => 'ESR',     'image' => $i['coque'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 18],
            ['name' => 'Coque Samsung S24 Ultra Cuir Noir',     'description' => 'Coque standing cuir noir Samsung Galaxy S24 Ultra avec anneau',      'price' => 34.99, 'stock' => 22, 'brand' => 'Samsung', 'image' => $i['coque'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 18],

            // ══════════════════════════════════════════════
            // COQUES XIAOMI (cat 19)
            // ══════════════════════════════════════════════
            ['name' => 'Coque Xiaomi 14 Transparente',      'description' => 'Coque transparente rigide anti-jaunissement pour Xiaomi 14',  'price' => 9.99,  'stock' => 60, 'brand' => 'Xiaomi', 'image' => $i['coque'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 19],
            ['name' => 'Coque Xiaomi Redmi Note 13 Spigen', 'description' => 'Coque Spigen Liquid Crystal pour Xiaomi Redmi Note 13 Pro',   'price' => 12.99, 'stock' => 45, 'brand' => 'Spigen', 'image' => $i['coque'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 19],

            // ══════════════════════════════════════════════
            // COQUES HUAWEI (cat 20)
            // ══════════════════════════════════════════════
            ['name' => 'Coque Huawei P60 Pro Silicone', 'description' => 'Coque silicone souple pour Huawei P60 Pro protection complete', 'price' => 11.99, 'stock' => 30, 'brand' => 'Huawei', 'image' => $i['coque'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 20],

            // ══════════════════════════════════════════════
            // COQUES ANTICHOC (cat 21)
            // ══════════════════════════════════════════════
            ['name' => 'Coque Antichoc UAG iPhone 15 Pro',   'description' => 'Coque UAG Pathfinder protection militaire MIL-STD-810G',   'price' => 49.99, 'stock' => 25, 'brand' => 'UAG',      'image' => $i['coque'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 21],
            ['name' => 'Coque Antichoc OtterBox Samsung S24','description' => 'Coque OtterBox Commuter protection 2 couches Galaxy S24',   'price' => 44.99, 'stock' => 22, 'brand' => 'OtterBox', 'image' => $i['coque'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 21],

            // ══════════════════════════════════════════════
            // COQUES PORTEFEUILLE (cat 22)
            // ══════════════════════════════════════════════
            ['name' => 'Coque Portefeuille iPhone 15 Moshi', 'description' => 'Coque portefeuille cuir Moshi avec 3 emplacements carte iPhone 15',     'price' => 49.99, 'stock' => 20, 'brand' => 'Moshi',  'image' => $i['coque'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 22],
            ['name' => 'Coque Portefeuille Samsung S24',     'description' => 'Coque portefeuille cuir PU Samsung Galaxy S24 Ultra porte-monnaie',     'price' => 24.99, 'stock' => 28, 'brand' => 'Spigen', 'image' => $i['coque'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 22],

            // ══════════════════════════════════════════════
            // COQUES TRANSPARENTES (cat 23)
            // ══════════════════════════════════════════════
            ['name' => 'Coque Transparente iPhone 15 ESR',      'description' => 'Coque ESR HaloLock MagSafe anti-jaunissement iPhone 15',        'price' => 14.99, 'stock' => 70, 'brand' => 'ESR',    'image' => $i['coque'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 23],
            ['name' => 'Coque Transparente Samsung S24 Spigen', 'description' => 'Coque Spigen Liquid Crystal transparente Galaxy S24 ultra fine', 'price' => 11.99, 'stock' => 65, 'brand' => 'Spigen', 'image' => $i['coque'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 23],
            ['name' => 'Coque Transparente Xiaomi 14 ESR',      'description' => 'Coque ESR transparente air armor pour Xiaomi 14 Ultra',          'price' => 12.99, 'stock' => 40, 'brand' => 'ESR',    'image' => $i['coque'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 23],

            // ══════════════════════════════════════════════
            // VERRES TREMPES IPHONE (cat 24)
            // ══════════════════════════════════════════════
            ['name' => 'Verre Trempe iPhone 15 Pro Max ESR', 'description' => 'Verre trempe 2.5D 9H protection ecran iPhone 15 Pro Max',          'price' => 9.99,  'stock' => 100, 'brand' => 'ESR',    'image' => $i['verre'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 24],
            ['name' => 'Verre Trempe iPhone 15 Pro Belkin',  'description' => 'Protection ecran Belkin TrueClear verre trempe iPhone 15 Pro',      'price' => 12.99, 'stock' => 85,  'brand' => 'Belkin', 'image' => $i['verre'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 24],
            ['name' => 'Verre Trempe iPhone 14 Spigen',      'description' => 'Pack 2 verres trempes Spigen GLAS.tR EZ FIT pour iPhone 14',        'price' => 11.99, 'stock' => 90,  'brand' => 'Spigen', 'image' => $i['verre'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 24],
            ['name' => 'Verre Trempe iPhone 13 Pro Belkin',  'description' => 'Protection ecran Belkin TrueClear pour iPhone 13 Pro pack 3',       'price' => 10.99, 'stock' => 80,  'brand' => 'Belkin', 'image' => $i['verre'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 24],
            ['name' => 'Verre Trempe iPhone 15 Full Cover',  'description' => 'Verre trempe full cover bords noirs pour iPhone 15',                'price' => 10.99, 'stock' => 85,  'brand' => 'Spigen', 'image' => $i['verre'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 24],

            // ══════════════════════════════════════════════
            // VERRES TREMPES SAMSUNG (cat 25)
            // ══════════════════════════════════════════════
            ['name' => 'Verre Trempe Samsung S24 Ultra', 'description' => 'Protection ecran verre trempe ultra fin 0.2mm Galaxy S24 Ultra', 'price' => 8.99, 'stock' => 90, 'brand' => 'Spigen', 'image' => $i['verre'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 25],
            ['name' => 'Verre Trempe Samsung A55 ESR',   'description' => 'Pack 2 verres trempes ESR pour Samsung Galaxy A55 5G',           'price' => 7.99, 'stock' => 80, 'brand' => 'ESR',    'image' => $i['verre'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 25],

            // ══════════════════════════════════════════════
            // VERRES TREMPES XIAOMI (cat 26)
            // ══════════════════════════════════════════════
            ['name' => 'Verre Trempe Xiaomi 14 Ultra',      'description' => 'Protection ecran verre trempe 9H pour Xiaomi 14 Ultra',             'price' => 8.99, 'stock' => 70, 'brand' => 'Spigen', 'image' => $i['verre'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 26],
            ['name' => 'Verre Trempe Xiaomi Redmi Note 13', 'description' => 'Pack 3 verres trempes pour Xiaomi Redmi Note 13 Pro anti-rayures', 'price' => 6.99, 'stock' => 85, 'brand' => 'ESR',    'image' => $i['verre'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 26],

            // ══════════════════════════════════════════════
            // PROTECTION CAMERA (cat 27)
            // ══════════════════════════════════════════════
            ['name' => 'Protection Camera iPhone 15 Pro', 'description' => 'Film protection objectif camera arriere iPhone 15 Pro',            'price' => 12.99, 'stock' => 70, 'brand' => 'Belkin', 'image' => $i['verre'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 27],
            ['name' => 'Protection Camera Samsung S24',   'description' => 'Verre trempe protection camera Samsung Galaxy S24 Ultra pack 2',   'price' => 9.99,  'stock' => 65, 'brand' => 'ESR',    'image' => $i['verre'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 27],
            ['name' => 'Protection Camera iPhone 14 Pro', 'description' => 'Verre trempe camera arriere iPhone 14 Pro pack 2 ultra clair',     'price' => 9.99,  'stock' => 60, 'brand' => 'ESR',    'image' => $i['verre'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 27],

            // ══════════════════════════════════════════════
            // ETUIS ET POCHETTES (cat 28)
            // ══════════════════════════════════════════════
            ['name' => 'Etui Neoprene Universel Baseus', 'description' => 'Pochette neoprene universelle pour smartphone jusqu a 6.7 pouces', 'price' => 12.99, 'stock' => 40, 'brand' => 'Baseus', 'image' => $i['pochette'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 28],
            ['name' => 'Pochette Cuir iPhone 15 Moshi',  'description' => 'Pochette cuir Moshi Overture pour iPhone 15 Pro avec bandouliere', 'price' => 39.99, 'stock' => 18, 'brand' => 'Moshi',  'image' => $i['pochette'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 28],

            // ══════════════════════════════════════════════
            // BATTERIES EXTERNES (cat 29)
            // ══════════════════════════════════════════════
            ['name' => 'Batterie Externe 20000mAh Anker',      'description' => 'Power bank 20000mAh charge rapide 22.5W 2 ports USB-C',                 'price' => 49.99,  'stock' => 30, 'brand' => 'Anker',  'image' => $i['batterie'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 29],
            ['name' => 'Batterie Externe 10000mAh Xiaomi',     'description' => 'Power bank Xiaomi 10000mAh charge rapide 30W USB-C leger',              'price' => 29.99,  'stock' => 45, 'brand' => 'Xiaomi', 'image' => $i['batterie'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 29],
            ['name' => 'Batterie Externe 50000mAh Anker',      'description' => 'Mega power bank 50000mAh 65W charge laptop et smartphone',              'price' => 89.99,  'stock' => 15, 'brand' => 'Anker',  'image' => $i['batterie'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 29],
            ['name' => 'Batterie Externe Solaire Baseus',      'description' => 'Power bank solaire 10000mAh avec panneau solaire integre et LED',       'price' => 39.99,  'stock' => 20, 'brand' => 'Baseus', 'image' => $i['batterie'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 29],
            ['name' => 'Batterie Externe 15000mAh Anker',      'description' => 'Power bank Anker 15000mAh 18W charge rapide compact USB-C',             'price' => 39.99,  'stock' => 28, 'brand' => 'Anker',  'image' => $i['batterie'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 29],
            ['name' => 'Batterie Externe 5000mAh Slim Baseus', 'description' => 'Power bank ultra slim 5000mAh Baseus leger comme une carte de credit',  'price' => 24.99,  'stock' => 40, 'brand' => 'Baseus', 'image' => $i['batterie'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 29],
            ['name' => 'Batterie Externe 26800mAh Anker Prime','description' => 'Power bank Anker Prime 26800mAh 65W charge laptop smartphone tablette', 'price' => 119.99, 'stock' => 12, 'brand' => 'Anker',  'image' => $i['batterie'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 29],

            // ══════════════════════════════════════════════
            // BATTERIES MAGSAFE (cat 30)
            // ══════════════════════════════════════════════
            ['name' => 'Batterie MagSafe 5000mAh Apple',  'description' => 'Batterie externe MagSafe officielle Apple 5000mAh pour iPhone',   'price' => 109.00, 'stock' => 20, 'brand' => 'Apple', 'image' => $i['batterie'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 30],
            ['name' => 'Batterie MagSafe 10000mAh Anker', 'description' => 'Power bank MagSafe Anker 621 10000mAh compatible iPhone 12 et +', 'price' => 59.99,  'stock' => 22, 'brand' => 'Anker', 'image' => $i['batterie'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 30],

            // ══════════════════════════════════════════════
            // SUPPORTS BUREAU (cat 31)
            // ══════════════════════════════════════════════
            ['name' => 'Support Bureau Reglable Baseus', 'description' => 'Support bureau aluminium reglable 360 degres pour smartphone', 'price' => 19.99, 'stock' => 35, 'brand' => 'Baseus', 'image' => $i['support'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 31],
            ['name' => 'Support MagSafe Bureau ESR',     'description' => 'Support bureau MagSafe charge et affichage iPhone 12 et +',    'price' => 34.99, 'stock' => 28, 'brand' => 'ESR',    'image' => $i['support'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 31],

            // ══════════════════════════════════════════════
            // SUPPORTS VOITURE (cat 32)
            // ══════════════════════════════════════════════
            ['name' => 'Support Voiture MagSafe Anker',      'description' => 'Support voiture MagSafe charge 15W fixation grille aeration',     'price' => 39.99, 'stock' => 30, 'brand' => 'Anker',  'image' => $i['support'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 32],
            ['name' => 'Support Voiture Tableau Bord Baseus','description' => 'Support voiture tableau de bord ventouse puissante rotation 360', 'price' => 14.99, 'stock' => 45, 'brand' => 'Baseus', 'image' => $i['support'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 32],

            // ══════════════════════════════════════════════
            // ADAPTATEURS (cat 33)
            // ══════════════════════════════════════════════
            ['name' => 'Adaptateur USB-C vers Lightning Apple','description' => 'Adaptateur Apple USB-C vers Lightning pour iPhone et EarPods',       'price' => 10.00, 'stock' => 80,  'brand' => 'Apple',  'image' => $i['adaptateur'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 33],
            ['name' => 'Adaptateur USB-C vers Jack 3.5mm',    'description' => 'Adaptateur USB-C vers jack 3.5mm pour ecouteurs filaires',            'price' => 9.99,  'stock' => 90,  'brand' => 'Belkin', 'image' => $i['adaptateur'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 33],
            ['name' => 'Adaptateur USB-C vers HDMI 4K Anker', 'description' => 'Adaptateur USB-C vers HDMI 4K 60Hz pour connexion TV et moniteur',   'price' => 19.99, 'stock' => 40,  'brand' => 'Anker',  'image' => $i['adaptateur'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 33],
            ['name' => 'Adaptateur Lightning vers Jack Apple', 'description' => 'Adaptateur Apple Lightning vers jack 3.5mm pour ecouteurs iPhone',   'price' => 10.00, 'stock' => 100, 'brand' => 'Apple',  'image' => $i['adaptateur'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 33],

            // ══════════════════════════════════════════════
            // STYLETS TACTILES (cat 34)
            // ══════════════════════════════════════════════
            ['name' => 'Stylet Tactile Universel Baseus', 'description' => 'Stylet tactile capacitif universel pointe fine 1.5mm smartphone', 'price' => 14.99, 'stock' => 50, 'brand' => 'Baseus', 'image' => $i['stylet'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 34],
            ['name' => 'Apple Pencil 2e generation',      'description' => 'Apple Pencil 2e gen avec fixation magnetique et double tape',     'price' => 149.00,'stock' => 15, 'brand' => 'Apple',  'image' => $i['stylet'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 34],

            // ══════════════════════════════════════════════
            // HAUT-PARLEURS BLUETOOTH (cat 35)
            // ══════════════════════════════════════════════
            ['name' => 'Enceinte Bluetooth JBL Flip 6',      'description' => 'Enceinte portable JBL Flip 6 waterproof IP67 son 360 degres', 'price' => 129.99, 'stock' => 20, 'brand' => 'JBL',  'image' => $i['enceinte'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 35],
            ['name' => 'Enceinte Bluetooth Anker Soundcore', 'description' => 'Enceinte Anker Soundcore 3 waterproof IPX7 24h autonomie',     'price' => 49.99,  'stock' => 25, 'brand' => 'Anker','image' => $i['enceinte'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 35],
            ['name' => 'Enceinte Bluetooth JBL Charge 5',   'description' => 'Enceinte JBL Charge 5 waterproof IP67 avec powerbank integre', 'price' => 179.99, 'stock' => 14, 'brand' => 'JBL',  'image' => $i['enceinte'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 35],

            // ══════════════════════════════════════════════
            // MONTRES CONNECTEES (cat 36)
            // ══════════════════════════════════════════════
            ['name' => 'Apple Watch Series 9 41mm GPS', 'description' => 'Apple Watch Series 9 avec puce S9 et double tap nouveaute',      'price' => 449.00, 'stock' => 12, 'brand' => 'Apple',   'image' => $i['apple_watch'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 36],
            ['name' => 'Apple Watch Ultra 2 49mm GPS',  'description' => 'Apple Watch Ultra 2 titanium GPS Cellular pour sport extreme',   'price' => 899.00, 'stock' => 6,  'brand' => 'Apple',   'image' => $i['apple_watch'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 36],
            ['name' => 'Samsung Galaxy Watch 6 44mm',   'description' => 'Galaxy Watch 6 avec analyse sommeil avancee et GPS integre',    'price' => 299.00, 'stock' => 15, 'brand' => 'Samsung', 'image' => $i['bracelet'],    'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 36],
            ['name' => 'Xiaomi Smart Band 8 Pro',       'description' => 'Bracelet connecte Xiaomi Band 8 Pro GPS integre 150 modes sport','price' => 69.99,  'stock' => 30, 'brand' => 'Xiaomi',  'image' => $i['bracelet'],    'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 36],
            ['name' => 'Garmin Forerunner 265 GPS',     'description' => 'Montre sport Garmin Forerunner 265 GPS AMOLED running avance',   'price' => 449.99, 'stock' => 10, 'brand' => 'Garmin',  'image' => $i['bracelet'],    'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 36],

            // ══════════════════════════════════════════════
            // BRACELETS CONNECTES (cat 37)
            // ══════════════════════════════════════════════
            ['name' => 'Fitbit Charge 6',     'description' => 'Bracelet sport Fitbit Charge 6 GPS ECG suivi sante avance',          'price' => 159.95, 'stock' => 18, 'brand' => 'Fitbit', 'image' => $i['bracelet'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 37],
            ['name' => 'Xiaomi Smart Band 8', 'description' => 'Bracelet connecte Xiaomi Band 8 ecran AMOLED 16 jours autonomie',    'price' => 39.99,  'stock' => 40, 'brand' => 'Xiaomi', 'image' => $i['bracelet'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 37],

            // ══════════════════════════════════════════════
            // CHARGEURS SOLAIRES OUTDOOR (cat 38)
            // ══════════════════════════════════════════════
            ['name' => 'Chargeur Solaire 40W Camping Anker', 'description' => 'Panneau solaire pliable 40W 2 ports USB-C pour camping et trek', 'price' => 129.99, 'stock' => 12, 'brand' => 'Anker',  'image' => $i['solaire'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 38],
            ['name' => 'Chargeur Solaire 15W Baseus Voyage', 'description' => 'Panneau solaire pliable 15W leger ideal pour sac a dos randonnee','price' => 49.99,  'stock' => 18, 'brand' => 'Baseus', 'image' => $i['solaire'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 38],

            // ══════════════════════════════════════════════
            // ACCESSOIRES GAMING MOBILE (cat 39)
            // ══════════════════════════════════════════════
            ['name' => 'Manette Backbone One',          'description' => 'Manette Backbone One iPhone USB-C pour gaming mobile Cloud',        'price' => 119.99, 'stock' => 15, 'brand' => 'Backbone',    'image' => $i['gaming'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 39],
            ['name' => 'Refroidisseur Black Shark',      'description' => 'Refroidisseur magnetique Black Shark FunCooler 3 Pro pour gaming',  'price' => 49.99,  'stock' => 20, 'brand' => 'Black Shark', 'image' => $i['gaming'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 39],
            ['name' => 'Triggers Gaming L1R1 Baseus',   'description' => 'Triggers L1R1 Baseus plug and play pour jeux FPS mobile',          'price' => 14.99,  'stock' => 50, 'brand' => 'Baseus',      'image' => $i['gaming'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 39],
            ['name' => 'Selfie Stick Trepied Baseus',   'description' => 'Selfie stick trepied extensible avec declencheur Bluetooth',        'price' => 24.99,  'stock' => 35, 'brand' => 'Baseus',      'image' => $i['gaming'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 39],
            ['name' => 'Stabilisateur Gimbal DJI OM 6', 'description' => 'Stabilisateur gimbal DJI OM 6 3 axes pour video smartphone',       'price' => 159.00, 'stock' => 10, 'brand' => 'DJI',         'image' => $i['gimbal'], 'isActive' => true, 'createdAt' => new \DateTimeImmutable(), 'cat' => 39],
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
            $product->setCreatedAt($data['createdAt']);
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