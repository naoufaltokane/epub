<?php
	class Produit
	{
		private $p_id;
		private $p_nom;
		private $p_description;
		private $p_date;
		private $p_prix;
		private $p_location;
		private $p_image;
		private $p_statut;
		private $f_id;

		public function __construct(array $data)
		{
			$this->p_id=$data['p_id'];
			$this->p_nom=$data['p_nom'];
			$this->p_description=$data['p_description'];
			$this->p_date=$data['p_date'];
			$this->p_prix=$data['p_prix'];
			$this->p_location=$data['p_location'];
			$this->p_image=$data['p_image'];
			$this->p_statut=$data['p_statut'];
			$this->f_id=$data['f_id'];
		}

		public function getP_id(){
		return $this->p_id;
		}

		public function setP_id($p_id){
			$this->p_id = $p_id;
		}

		public function getP_nom(){
			return $this->p_nom;
		}

		public function setP_nom($p_nom){
			$this->p_nom = $p_nom;
		}

		public function getP_description(){
			return $this->p_description;
		}

		public function setP_description($p_description){
			$this->p_description = $p_description;
		}

		public function getP_date(){
			return $this->p_date;
		}

		public function setP_date($p_date){
			$this->p_date = $p_date;
		}

		public function getP_prix(){
			return $this->p_prix;
		}

		public function setP_prix($p_prix){
			$this->p_prix = $p_prix;
		}

		public function getP_location(){
			return $this->p_location;
		}

		public function setP_location($p_location){
			$this->p_location = $p_location;
		}

		public function getP_image(){
			return $this->p_image;
		}

		public function setP_image($p_image){
			$this->p_image = $p_image;
		}

		public function getP_statut(){
			return $this->p_statut;
		}

		public function setP_statut($p_statut){
			$this->p_statut = $p_statut;
		}

		public function getF_id(){
			return $this->f_id;
		}

		public function setF_id($f_id){
			$this->f_id = $f_id;
		}

	}
?>