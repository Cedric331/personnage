<?php 

namespace App\Entity;

class Personnage{

   public $pseudo;
   public $image;
   public $age;
   public $sexe;
   public $carac = [];

   public static $personnages = [];

   public function __construct($pseudo, $image, $age, $sexe, $carac){
      $this->pseudo = $pseudo;
      $this->image = $image;
      $this->age =$age;
      $this->sexe =$sexe;
      $this->carac = $carac;

      self::$personnages[] = $this;
   }

   public static function createPersonnage(){
      $player1 = new Personnage("Aragorn", "images/personnages/Marc.png", 80, true, [
         'force' => 4,
         'agilite' => 3,
         'int' => 3
      ]);

      $player2 = new Personnage("Legolas", "images/personnages/Milo.png",826, true, [
         'force' => 2,
         'agilite' => 5,
         'int' => 3
      ]);

      $player3 = new Personnage("Tya", "images/personnages/Tya.png",31, false, [
         'force' => 2,
         'agilite' => 4,
         'int' => 4
      ]);
   }

   public static function getPersonnageNom($pseudo){
      foreach (self::$personnages as $perso) {
        if (strtolower($perso->pseudo) == $pseudo) {
           return $perso;
        }

      }
   }
}