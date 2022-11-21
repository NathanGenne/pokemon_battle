<?php
   class Pokemon {

      /** Nom du pokemon
       * @var string
       */
      protected $name;

      /** Vie du personnage
       * @var int
       */
      protected $health;

      /** Rage du personnage
       * @var int
       */
      protected $rage;


      /* ------------------------------ */
      /*         Magic Méthode          */
      /* ------------------------------ */

      /** Construct du personnage
       * @param string $name
       * @param int $health
       * @param int $rage
       */
      public function __construct(string $name, int $health, int $rage )
      {
         $this->name   = $name;
         $this->health = $health;
         $this->rage   = $rage;
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

      /** Set la vie du personnage
       * @param int $health
       * @return self
       */
      public function setHealth( int $health ): self
      {
         $this->health = $health;
         return $this;
      }

      /** Set la rage du personnage
       * @param int $rage
       * @return self
       */
      public function setRage( int $rage ): self
      {
         $this->rage = $rage;
         return $this;
      }

      /* ------------------------------ */
      /*          Méthodes Get          */
      /* ------------------------------ */

      /** Get le nom du personnage
       * @return string
       */
      public function getName(): string
      {
         return $this->name;
      }

      /** Get la vie du personnage
       * @return int
       */
      public function getHealth(): int
      {
         return $this->health;
      }

      /** Get la rage du personnage
       * @return int
       */
      public function getRage(): int
      {
         return $this->rage;
      }
   }


?>