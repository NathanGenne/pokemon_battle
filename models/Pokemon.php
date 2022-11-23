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

      /** Dégats subis par le pokemon
       * @var int
       */
      protected $damageSuffered;


   /**  */   

      /* ------------------------------ */
      /*         Magic Méthode          */
      /* ------------------------------ */

      /** Construct du pokemon
       * @param object $pokemon
       */
      public function __construct(object $pokemon)
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
         $this->rage = $pokemon->rage;
         $this->moves = $pokemon->moves;


      }


      /* ------------------------------ */
      /*          Méthodes Set          */
      /* ------------------------------ */

      /** Set le nom du pokemon
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

      /** Set l'attaque du pokemon
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

      /** Set la rage du pokemon
       * @param int $rage
       * @return self
       */
      public function setRage( int $rage ): self
      {
         $this->rage = $rage;
         return $this;
      }

      /** Set les dégats subis
       * @param int $damageSuffered
       * @return self
       */
      public function setDamageSuffered( int $damageSuffered ): self
      {
         $this->damageSuffered = $damageSuffered;
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

      /** Get taux de rage du pokemon
       * @return int
       */
      public function getRage(): int
      {
         return $this->rage;
      }

      /** Get le nom d'une attaque selon l'id de l'attaque
       * @return string
       */
      public function getMove_Name($i): string
      {
         return $this->moves[$i]->name;
      }

      /** Get les dégats d'une attaque selon l'id de l'attaque
       * @return int
       */
      public function getMove_Power($i): int
      {
         return $this->moves[$i]->power;
      }

      /** Get la précision d'une attaque selon l'id de l'attaque
       * @return int
       */
      public function getMove_Accuracy($i): int
      {
         return $this->moves[$i]->power;
      }

      /** Get le taux de critique d'une attaque selon l'id de l'attaque
       * @return int
       */
      public function getMove_Crit_rate($i): int
      {
         return $this->moves[$i]->crit_rate;
      }

      /** Get le type de dégat d'une attaque selon l'id de l'attaque
       * @return string
       */
      public function getMove_Damage_class($i): string
      {
         return $this->moves[$i]->damage_class;
      }

      /** Get le type d'une attaque selon l'id de l'attaque
       * @return string
       */
      public function getMove_Type($i): string
      {
         return $this->moves[$i]->type;
      }

      /** Get les dégats subis
       * @return int
       */
      public function getDamageSuffered(): int
      {
         return $this->damageSuffered;
      }


      /* ------------------------------ */
      /*   Fonctions supplémentaires    */
      /* ------------------------------ */

      /** Attaque le pokémon ennemi sélectionné avec l'attaque sélectionnée
       * @param int $attack_id
       * @param int $opponent_id
       * @return int
       */
      public function attack_power($attack_id, $opponent_id): int
      {
         $attack_damages = $this->moves[$attack_id]->power/2;
         $attack_damage_class = $this->getMove_Damage_class($attack_id);
         $attack_type = $this->getMove_Type($attack_id);
         $crit_rate = $this->moves[$attack_id]->crit_rate;

         // Si le type de l'attaque correspond au type du pokémon, alors les dégats sont légèrement augmentés
         if ($attack_type == $this->getType()) {
            $attack_damages = $attack_damages * 1.15;
         }

         // Si le taux de critique de l'attaques est non null, alors on calcul si le coup sera critique, auquel cas on double les dégats infligés
         if ($crit_rate != 0) {
            $chance = rand(0,100);
            if ($crit_rate < $chance) {
               $attack_damages = $attack_damages * 2;
            }
         }

         // La statistique d'attaque du pokémon contribut à 1/4 aux dégats infligés
         // On vérifie la statistique de dégats adaptée à la classe de dégats de l'attaque
         if ($attack_damage_class == 'physical') {
            $total_damages = $this->getAttack()/4 + $attack_damages;
         }
         if ($attack_damage_class == 'special') {
            $total_damages = $this->getAttackSpe()/4 + $attack_damages;
         }

         return $total_damages;
      }

      /** Calcul les dégats subis par le Pokémon en jeu
       * @param string $damage_class
       * @param int $damage
       * @param int $opponent_id
       * @return self
       */
      public function attacked(int $damage, string $damage_class, int $opponent_id): self
      {
         // Possible prise en compte des résistances et faiblesses

         // Récupère la catégorie d'attaque de l'adversaire qui défini quelle défense sera affectée
         if ($damage_class == 'physical') {
            switch ($opponent_id) {
               case 3 :
                  break;
               case 6 :
                  break;
               case 9 :
                  break;
               case 243 :
                  break;
               case 244 :
                  break;
               case 245 :
                  break;
               case 130 :
                  break;
               case 150 :
                  break;
               case 295 :
                  break;
               case 448 :
                  break;
            }
         }
         if ($damage_class == 'special') {
            switch ($opponent_id) {
               case 3 :
                  break;
               case 6 :
                  break;
               case 9 :
                  break;
               case 243 :
                  break;
               case 244 :
                  break;
               case 245 :
                  break;
               case 130 :
                  break;
               case 150 :
                  break;
               case 295 :
                  break;
               case 448 :
                  break;
            }
         }

         $this->setDamageSuffered($damage - $this->getDefense()/4);

         if ($this->getDamageSuffered() < 0) {
            $this->setDamageSuffered(0);
         }
         // Possible vérification que le type de l'attaque reçue est résisté par le type du pokemon

         $this->setHealth($this->getHealth() - $this->getDamageSuffered());
         $this->setRage($this->getRage() + 1);
         
         if($this->getHealth() < 0) {
            $this->setHealth(0);
            $this->setRage(0);
         }

         return $this;
      }

      /** Vérifie si le pokémon est KO
       * @return int
       */
      public function is_KO(): int
      {
         $is_KO = 0;
         // Si le pokémon vérifié n'a plus de vie, alors il est considéré comme KO
         if($this->getHealth() == 0) {
            $is_KO = 1;
         }

         return $is_KO;
      }

      /** Calcul les dégats subis par le Pokémon en jeu si il est affecté par des effets de status
       * @param string $status_effect
       * @return self
       */
      public function status_attacked(int $status_effect): self
      {
         // Si le pokémon est brûlé :
         if ($status_effect == 'burn') {
            $this->setHealth($this->getHealth() - 20);
         }

         // Si le pokémon est empoisonné :
         if ($status_effect == 'poison') {
            $this->setHealth($this->getHealth() - $this->getHealth()/8);
         }

         return $this;
      }
   }


?>