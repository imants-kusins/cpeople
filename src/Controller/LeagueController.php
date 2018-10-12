<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

// compeople.test
class LeagueController extends AbstractController
{
    /**
     * @Route("/league/{league_id}/teams", name="league.teams")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/LeagueController.php',
        ]);
    }
}
