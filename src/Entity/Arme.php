<?php 

namespace App\Entity;

class Arme{

   public $nom;
   public $image;
   public $description;
   public $degat;

   public static $armes = [];

   public function __construct($nom, $image, $description, $degat){
      $this->nom = $nom;
      $this->image = $image;
      $this->description =$description;
      $this->degat =$degat;

      self::$armes[] = $this;
   }

   public static function createArme(){
      $arme1 = new Arme("Arc", "images/armes/arc.png", "Arme à distance", 5);

      $arme2 = new Arme("Epée", "images/armes/epee.png", "Arme au corps à corps avec bouclier", 4);

      $arme3 = new Arme("Hache", "images/armes/hache.png", "Arme au corps à corps avec dévastatrice", 6);

   }

   public static function getArmeNom($nom){
      foreach (self::$armes as $arme) {
   
        if (strtolower(str_replace('é','e', $arme->nom)) == $nom) {;
           return $arme;
        }

      }
   }
}