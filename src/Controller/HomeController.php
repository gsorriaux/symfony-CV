<?php

namespace App\Controller;

use App\Entity\Education;
use App\Entity\Experience;
use App\Entity\Hobby;
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
        $repo = $this->getDoctrine()->getRepository(Experience::class);

        $experiences = $repo->findAll();

        return $this->render('home/experiences.html.twig', [
            'controller_name' => 'HomeController',
            'experiences' => $experiences
        ]);
    }
    /**
     * @Route("/hobbies", name="hobbies")
     */
    public function hobbies(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Hobby::class);

        $hobbies = $repo->findAll();
        return $this->render('home/hobbies.html.twig', [
            'controller_name' => 'HomeController',
            'hobbies' => $hobbies
        ]);
    }
        /**
     * @Route("/educations", name="educations")
     */
    public function educations(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Education::class);

        $educations = $repo->findAll();
        return $this->render('home/educations.html.twig', [
            'controller_name' => 'HomeController',
            'educations' => $educations
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
