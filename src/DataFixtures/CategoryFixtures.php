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
    ['name' => 'Téléphones neufs',    'description' => 'Smartphones neufs Apple, Samsung, Xiaomi et Huawei.'],
    // 1
    ['name' => 'Câbles',              'description' => 'Câbles USB-C, Lightning et magnétiques.'],
    // 2
    ['name' => 'Chargeurs',           'description' => 'Chargeurs secteur, GaN et sans fil.'],
    // 3
    ['name' => 'Coques & Protection', 'description' => 'Coques et étuis pour smartphones.'],
    // 4
    ['name' => 'Batteries externes',  'description' => 'Power banks et batteries portables.'],
    // 5
    ['name' => 'Verres Trempés',      'description' => 'Verres trempés protection écran toutes marques.'],
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