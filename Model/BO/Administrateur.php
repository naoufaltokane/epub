<?php
	class Administrateur
	{	
		private $a_id;
		private $a_username;
		private $a_password;
		private $a_nom;
		private $a_prenom;
		private $a_email;
		private $a_telephone;
		private $a_image;
		
		public function __construct(array $data)
		{
			$this->a_id = $data['a_id'];
			$this->a_username = $data['a_username'];
			$this->a_password = $data['a_password'];
			$this->a_nom = $data['a_nom'];
			$this->a_prenom = $data['a_prenom'];
			$this->a_email = $data['a_email'];
			$this->a_telephone = $data['a_telephone'];
		}

		public function getA_id(){
			return $this->a_id;
		}

		public function setA_id($a_id){
			$this->a_id = $a_id;
		}

		public function getA_username(){
			return $this->a_username;
		}

		public function setA_username($a_username){
			$this->a_username = $a_username;
		}

		public function getA_password(){
			return $this->a_password;
		}

		public function setA_password($a_password){
			$this->a_password = $a_password;
		}

		public function getA_nom(){
			return $this->a_nom;
		}

		public function setA_nom($a_nom){
			$this->a_nom = $a_nom;
		}

		public function getA_prenom(){
			return $this->a_prenom;
		}

		public function setA_prenom($a_prenom){
			$this->a_prenom = $a_prenom;
		}

		public function getA_email(){
			return $this->a_email;
		}

		public function setA_email($a_email){
			$this->a_email = $a_email;
		}

		public function getA_telephone(){
			return $this->a_telephone;
		}

		public function setA_telephone($a_telephone){
			$this->a_telephone = $a_telephone;
		}

		public function getA_image(){
			return $this->a_image;
		}

		public function setA_image($a_image){
			$this->a_image = $a_image;
		}
	}
?>