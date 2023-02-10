<?php

namespace App\DataFixtures;

use App\Entity\Joueur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use Faker\Factory;

class AppFixtures extends Fixture
{

    private $faker;

    public function __construct()
    {
        $this->faker = Factory::create('fr_FR');
    }

    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $faker = $this->faker;

        $lstActivite = ['active','inactive','vacance','bannie'];

        for ($i = 0 ; $i <= 50 ; $i++)
        {
            $j1 = new Joueur();
            $j1->setNom($faker->name())
            ->setNbVaisseau(mt_rand(0,250000))
            ->setAlliance(mt_rand(0,1))
            ->setActivité($lstActivite[array_rand($lstActivite,1)]);

            $manager->persist($j1);

        }



        $manager->flush();
    }
}
