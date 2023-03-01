<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\TranslateDate;

class TranslateDateController extends AbstractController
{
    #[Route('//api/date-formater/arab-to-roman?date={date}', name: 'translate date', methods: "GET")]

    public function ChangeDate(Request $request)
    {
       return $this->json([new TranslateDate('2023-03-12')]);
    }
}

/**
 * Doit récupérer les infos de l'Angular et les renvoie une fois traités
 * Comment on fait ?
 */
