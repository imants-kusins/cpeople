<?php

namespace App\Tests;

use App\League;
use PHPUnit\Framework\TestCase;
use Doctrine\Common\Persistence\ObjectManager;

class LeagueTest extends TestCase
{
    private $objectManager;

    public function __construct(ObjectManager $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    public function testSomething()
    {
        // $repo = $this->objectManager->getDoctrine()->getRepository(League::class);

// this returns a single item
        // $found = $repo->find(1);

        die('asdsa');
        $this->assertTrue(true);
    }
}
