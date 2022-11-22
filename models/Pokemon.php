<?php
   class Pokemon extends Moves{

      /** Nom du pokemon
       * @var string
       */
      protected $name;

      /** id du pokemon
       * @var int
       */
      protected $id;


      /** Vie du pokemon
       * @var int
       */
      protected $health;

      /** attaque du pokemon
       * @var int
       */
      protected $attack;


      /** attaque speciale du pokemon  
       *  @var int
      */
      protected $attack_spe;

      /** Defense du pokemon
       * @var int 
       */
      protected $defense;


      /** Defense spéciale du pokemon
       * @var int 
       */
      protected $defense_spe;

      /** Vitesse du pokemon
       * @var int 
       */
      protected $speed;

      /** Type du pokemon
       * @var string
       */
      protected $type;


   /**  */   

      /* ------------------------------ */
      /*         Magic Méthode          */
      /* ------------------------------ */

      /** Construct du pokemon
       * @param object $pokemon
       */
      public function __construct(object $pokemon )
      {

         $this->id = $pokemon->id;
         $this->name   = $pokemon->name;
         $this->health = $pokemon->PV;
         $this->attack   = $pokemon->attack;
         $this->attack_spe   = $pokemon->attack_spe;
         $this->defense = $pokemon->defense;
         $this->defense_spe   = $pokemon->defense_spe;
         $this->speed = $pokemon->speed;
         $this->type = $pokemon->type;
         $this->moves = $pokemon->moves;


      }


      /* ------------------------------ */
      /*          Méthodes Set          */
      /* ------------------------------ */

      /** Set le nom du personnage
       * @param string $name
       * @return self
       */
      public function setName( string $name ): self
      {
         $this->name = $name;
         return $this;
      }

      /** Set la vie du pokemon
       * @param int $health
       * @return self
       */
      public function setHealth( int $health ): self
      {
         $this->health = $health;
         return $this;
      }

      /** Set l'attaque du personnage
       * @param int $attack
       * @return self
       */
      public function setAttack( int $attack ): self
      {
         $this->attack = $attack;
         return $this;
      }

      /** Set l'attaque speciale du pokemon
       * @param int $attack_spe
       * @return self
       */
      public function setAttackSpe( int $attack_spe ): self
      {
         $this->attack_spe = $attack_spe;
         return $this;
      }


      /** Set la defense du pokemon
       * @param int $defense
       * @return self
       */
      public function setDefense( int $defense ): self
      {
         $this->defense = $defense;
         return $this;
      }


      /** Set la defense speciale du pokemon
       * @param int $defense_spe
       * @return self
       */
      public function setDefenseSpe( int $defense_spe ): self
      {
         $this->defense_spe = $defense_spe;
         return $this;
      }

      /** Set la vitesse du pokemon
       * @param int $speed
       * @return self
       */
      public function setSpeed( int $speed ): self
      {
         $this->speed = $speed;
         return $this;
      }

      /** Set du type du pokemon
       * @param string $type
       * @return self
       */
      public function setType( int $type ): self
      {
         $this->type = $type;
         return $this;
      }




      /* ------------------------------ */
      /*          Méthodes Get          */
      /* ------------------------------ */

      /** Get l'index du pokemon
       * @return int
       */
      public function getId(): int
      {
         return $this->id;
      }


      /** Get le nom du pokemon
       * @return string
       */
      public function getName(): string
      {
         return $this->name;
      }

      /** Get la vie du pokemon
       * @return int
       */
      public function getHealth(): int
      {
         return $this->health;
      }

      /** Get l'attaque du pokemon
       * @return int
       */
      public function getAttack(): int
      {
         return $this->attack;
      }


      /** Get l'attaque spéciale du pokemon
       * @return int
       */
      public function getAttackSpe(): int
      {
         return $this->attack_spe;
      }

      /** Get defense du pokemon
       * @return int
       */
      public function getDefense(): int
      {
         return $this->defense;
      }

      /** Get defense speciale du pokemon
       * @return int
       */
      public function getDefenseSpe(): int
      {
         return $this->defense_spe;
      }

      /** Get vitesse du pokemon
       * @return int
       */
      public function getSpeed(): int
      {
         return $this->speed;
      }

      /** Get type du pokemon
       * @return string
       */
      public function getType(): string
      {
         return $this->type;
      }






   }


?>