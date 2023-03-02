<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class TranslateDateController extends AbstractController
{
    #[Route('/api/date-formater/arab-to-roman/date/{date}', name: 'translate_date', methods: 'GET')]
    public function index(string $date = ''): JsonResponse
    {
        return $this->json([
            'message' => $date,
            'path' => 'src/Controller/TranslateDateController.php',
        ]);
    }
/** 
*    #[Route('/hello/{name}', name: 'translate_date')]
*    public function index(string $name = ''): JsonResponse
*    {
*        return $this->json([
*            'message' => 'Welcome to your new controller '.$name.'!',
*          'path' => 'src/Controller/TranslateDateController.php',
*       ]);
*    }
*/
}
