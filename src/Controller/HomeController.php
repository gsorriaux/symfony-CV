<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/experiences", name="experiences")
     */
    public function experiences(): Response
    {
        return $this->render('home/experiences.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/hobbies", name="hobbies")
     */
    public function hobbies(): Response
    {
        return $this->render('home/hobbies.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('home/contact.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}