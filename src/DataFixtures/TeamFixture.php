<?php

namespace App\DataFixtures;

use App\Entity\Team;
use App\Entity\League;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class TeamFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $teams = [
        //     'premier_league'    =>  
        //     [
        //         [
        //             'name' => 'Arsenal',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'AFC Bournemouth',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Brighton and Hove Albion',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Burnley',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Cardiff City',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Chelsea',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Crystal Palace',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Everton',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Fulham',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Huddersfield Town',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Leicester City',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Liverpool',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Manchester City',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Manchester United',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Newcastle United',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Southampton',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Tottenham Hotspur',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Watford',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'West Ham United',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Wolverhampton Wanderers',
        //             'strip' => ''
        //         ],
        //     ],
        //     'english_football_league_championship'  =>  
        //     [
        //         [
        //             'name' => 'Aston Villa',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Birmingham City',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Blackburn Rovers',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Bolton Wanderers',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Brentford',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Bristol City',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Derby County',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Hull City',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Ipswich Town',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Leeds United',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Middlesbrough',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Millwall',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Norwich City',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Nottingham Forest',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Preston North End',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Queens Park Rangers',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Reading',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Rotherham United',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Sheffield United',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Sheffield Wednesday',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Stoke City',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Swansea City',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'West Bromwich Albion',
        //             'strip' => ''
        //         ],
        //         [
        //             'name' => 'Wigan Athletic',
        //             'strip' => ''
        //         ],
        //     ]
        // ];

        // foreach ($teams as $leagueName => $team) {

        // }

        // $manager->flush();
    }
}
