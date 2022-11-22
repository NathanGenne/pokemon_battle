<?php
   class Moves{

      /** Index du pokemon
       * @var int
       */ 
      protected $move_id;

      /** Nom de l'attaque
       * @var string
       */
      protected $move_name;

      /** attaque du pokemon
       * @var int
       */
      protected $power;


      /** precision du pokemon  
       *  @var int
      */
      protected $accuracy;

      /** change du pokemon
       * @var int 
       */
      protected $chance;


      /** type d'attaque du pokemon
       * @var string
       */
      protected $move_type;

      /** effet de status du pokemon
       * @var int 
       */
      protected $ailment;

      /** Probabilité coup critique du pokemon
       * @var int
       */
      protected $crit_rate;

        /** quantité de changement
       * @var int
       */
      protected $change;


        /** Stat affectée du pokemon
       * @var int
       */
      protected $stat;


        /** Cible du pokemon
       * @var int
       */
      protected $target;


      /** Construct du personnage
       * @param int $move_id
       * @param string $move_name
       * @param int $power
       * @param int $accuracy
       * @param int $chance
       * @param int $move_type
       * @param int $ailment
       * @param int $crit_rate
       * @param int $change
       * @param int @stat
       * @param int @target
       */


      public function __construct(int $move_id, string $move_name, int $power, int $accuracy, int $chance, string $move_type, int $ailment, int $crit_rate, int $change, int $stat, int $target )
      {
         $this->id   = $move_id;
         $this->name = $move_name;
         $this->power   = $power;
         $this->accuracy   = $accuracy;
         $this->chance = $chance;
         $this->type   = $move_type;
         $this->ailment = $ailment;
         $this->crit_rate = $crit_rate;
         $this->change = $change;
         $this->stat = $stat;
         $this->target = $target;

      }


/** Set le l'id
       * @param int $move_id
       * @return self
       */
      public function setMoveId( string $move_id ): self
      {
         $this->id = $move_id;
         return $this;
      }

      /** Set name
       * @param string $move_name
       * @return self
       */
      public function setMoveName( string $move_name ): self
      {
         $this->name = $move_name;
         return $this;
      }

      /** Set power
       * @param int $power
       * @return self
       */
      public function setPower( int $power ): self
      {
         $this->power = $power;
         return $this;
      }

      /** Set l'attaque speciale du pokemon
       * @param int $accuracy
       * @return self
       */
      public function setAccuracy( int $accuracy ): self
      {
         $this->aaccuracy = $accuracy;
         return $this;
      }


      /** Set chance
       * @param int $chance
       * @return self
       */
      public function setChance( int $chance ): self
      {
         $this->chnace = $chance;
         return $this;
      }


      /** Set type
       * @param string $move_type
       * @return self
       */
      public function setMoveType( int $move_type ): self
      {
         $this->type = $move_type;
         return $this;
      }

      /** Set ailment
       * @param int $ailment
       * @return self
       */
      public function setAilment( int $ailment ): self
      {
         $this->ailment = $ailment;
         return $this;
      }

      /** Set du type du pokemon
       * @param string $crit_rate
       * @return self
       */
      public function setCritRate( string $crit_rate ): self
      {
         $this->crit_rate = $crit_rate;
         return $this;
      }

/** Set du change
       * @param int $change
       * @return self
       */
      public function setChange( int $change ): self
      {
         $this->change = $change;
         return $this;
      }

/** Set du stat
       * @param int $stat
       * @return self
       */
      public function setStat( int $stat ): self
      {
         $this->stat = $stat;
         return $this;
      }

/** Set du target
       * @param int $target
       * @return self
       */
      public function setTaget( int $target ): self
      {
         $this->target = $target;
         return $this;
      }




      /* ------------------------------ */
      /*          Méthodes Get          */
      /* ------------------------------ */

      /** Get id
       * @return int
       */
      public function getMoveId(): int
      {
         return $this->id;
      }

      /** Get la vie du pokemon
       * @return string
       */
      public function getMoveName(): string
      {
         return $this->name;
      }

      /** Get power
       * @return int
       */
      public function getPower(): int
      {
         return $this->power;
      }


      /** Get accuracy
       * @return int
       */
      public function getAccuracy(): int
      {
         return $this->accuracy;
      }

      /** Get chance
       * @return int
       */
      public function getChance(): int
      {
         return $this->chance;
      }

      /** Get type
       * @return string
       */
      public function getMoveType(): string
      {
         return $this->type;
      }

      /** Get ailment
       * @return int
       */
      public function getAilment(): int
      {
         return $this->ailment;
      }

      /** Get crit_rate
       * @return int
       */
      public function getCritRate(): int
      {
         return $this->crit_rate;
      }

 /** Get change
       * @return int
       */
      public function getChange(): int
      {
         return $this->change;
      }


/** Get stat
       * @return int
       */
      public function getStat(): int
      {
         return $this->stat;
      }      


/** Get target
       * @return int
       */
      public function getTarget(): int
      {
         return $this->target;
      }       


   }


?>