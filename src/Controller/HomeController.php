<?php
// src/Controller/HomeController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CommandeRepository;

class HomeController extends AbstractController
{

    /**
     * @Route("/")
     */
    public function homepage(): Response
    {
        return $this->render('roubafika/home.html.twig');
    }
    public function index(): Response
    {
        return $this->render('roubafika/email.html.twig');
    }
    public function adminDashboard(CommandeRepository $commandeRepository): Response
    {

        $commandeCount = $commandeRepository->countAll();
        return $this->render('roubafika/adminHome.html.twig', [
           
            'commande_count' => $commandeCount
        ]);
    }
    public function LivreurDashboard(): Response
    {
        return $this->render('roubafika/livreurHome.html.twig');
    }

    public function userHome(): Response
    {
        return $this->render('profile/myAccount.html.twig');
    }



}