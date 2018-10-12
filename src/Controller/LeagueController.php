<?php

namespace App\Controller;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use App\Entity\League;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

// compeople.test
class LeagueController extends AbstractController
{
    /**
     * @Route("/league/{leagueId}/teams", name="league.teams")
     */
    public function getTeams($leagueId)
    {
        $league = $this->getDoctrine()
            ->getRepository(League::class)
            ->find($leagueId);

        if ( ! $league ) {
            return $this->json([
                'error' =>  'Entity not found'
            ], 404);
        }

        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());

        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($league, 'json');
die($jsonContent);
        // return $this->json($jsonContent);
    }
}
