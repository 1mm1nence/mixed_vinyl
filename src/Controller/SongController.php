<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SongController extends AbstractController
{
    #[Route('/api/songs/{id<\d+>}', methods: ['GET'])]
    public function getSong(int $id, LoggerInterface $logger): JsonResponse
    {
        // TODO query the db
        $song = [
            'id' => $id,
            'name' => 'Waterfals',
            'url' => 'https://symfonycasts.s3.amazonaws.com/sample.mp3',
        ];

        $logger->info('Returning API Response for song with id: {id}', [
            'id' => $id,
        ]);

        return $this->json($song);
        // return new JsonResponse($song);
    }
}
