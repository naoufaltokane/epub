<?php
	class Membre
	{
		private $m_id;
		private $m_login;
		private $m_password;
		private $m_type;
		private $m_nom;
		private $m_prenom;
		private $m_naissance;
		private $m_email;
		private $m_telephone;

		public function __construct(array $data)
		{
			$this->m_id = $data['m_id'];
			$this->m_login = $data['m_login'];
			$this->m_password = $data['m_password'];
			$this->m_type = $data['m_type'];
			$this->m_nom = $data['m_nom'];
			$this->m_prenom = $data['m_prenom'];
			$this->m_naissance = $data['m_naissance'];
			$this->m_email = $data['m_email'];
			$this->m_telephone = $data['m_telephone'];
		}

		public function getM_id(){
			return $this->m_id;
		}

		public function setM_id($m_id){
			$this->m_id = $m_id;
		}

		public function getM_login(){
			return $this->m_login;
		}

		public function setM_login($m_login){
			$this->m_login = $m_login;
		}

		public function getM_password(){
			return $this->m_password;
		}

		public function setM_password($m_password){
			$this->m_password = $m_password;
		}

		public function getM_type(){
			return $this->m_type;
		}

		public function setM_type($m_type){
			$this->m_type = $m_type;
		}

		public function getM_nom(){
			return $this->m_nom;
		}

		public function setM_nom($m_nom){
			$this->m_nom = $m_nom;
		}

		public function getM_prenom(){
			return $this->m_prenom;
		}

		public function setM_prenom($m_prenom){
			$this->m_prenom = $m_prenom;
		}

		public function getM_naissance(){
			return $this->m_naissance;
		}

		public function setM_naissance($m_naissance){
			$this->m_naissance = $m_naissance;
		}

		public function getM_email(){
			return $this->m_email;
		}

		public function setM_email($m_email){
			$this->m_email = $m_email;
		}

		public function getM_telephone(){
			return $this->m_telephone;
		}

		public function setM_telephone($m_telephone){
			$this->m_telephone = $m_telephone;
		}

	}
?>