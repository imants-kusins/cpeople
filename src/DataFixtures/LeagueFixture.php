<?php

namespace App\DataFixtures;

use App\Entity\League as League;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LeagueFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $leagues = [
            [ 'name'  => 'Premier League'],
            [ 'name'  => 'English Football League Championship'],
        ];

        foreach ($leagues as $league) {
            $entity = new League();
            $entity->setName($league['name']);

            $manager->persist($entity);
        }

        $manager->flush();
    }
}
