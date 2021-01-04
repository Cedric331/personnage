<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Arme;

class ArmeController extends AbstractController
{
    /**
     * @Route("/armes", name="armes")
     */
    public function index(): Response
    {
       Arme::createArme();

        return $this->render('arme/index.html.twig', [
           'armes' => Arme::$armes,
        ]);
    }

   /**
     * @Route("/armes/{name}", name="show_arme")
     */
    public function showArme($name): Response
    {
      Arme::createArme();
      $arme = Arme::getArmeNom($name);
      
      return $this->render('arme/arme.html.twig', [
           'arme' => $arme,
        ]);
    }
}
