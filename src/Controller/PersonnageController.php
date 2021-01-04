<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Personnage;

class PersonnageController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index(): Response
    {
        return $this->render('personnage/index.html.twig');
    }

        /**
     * @Route("/personnages", name="personnages")
     */
    public function perso(): Response
    {

      Personnage::createPersonnage();

      return $this->render('personnage/personnages.html.twig', [
           'players' => Personnage::$personnages,
        ]);
    }

   /**
     * @Route("/personnages/{pseudo}", name="show_personnages")
     */
    public function showPersonnage($pseudo): Response
    {

      Personnage::createPersonnage();
      $perso = Personnage::getPersonnageNom($pseudo);

      return $this->render('personnage/personnage.html.twig', [
           'player' => $perso,
        ]);
    }
}
