<?php
	class Panier
	{
		private $panier_id;
		private $p_id;
		private $cl_id;
		private $panier_date;

		public function __construct(array $data)
		{
			$this->panier_id = $data['panier_id'];
			$this->p_id = $data['p_id'];
			$this->cl_id = $data['cl_id'];
			$this->panier_date= $data['panier_date'];
		}

		public function getPanier_id(){
		return $this->panier_id;
		}

		public function setPanier_id($panier_id){
			$this->panier_id = $panier_id;
		}

		public function getP_id(){
			return $this->p_id;
		}

		public function setP_id($p_id){
			$this->p_id = $p_id;
		}

		public function getCl_id(){
			return $this->cl_id;
		}

		public function setCl_id($cl_id){
			$this->cl_id = $cl_id;
		}

		public function getPanier_date(){
		return $this->panier_date;
		}

		public function setPanier_date($panier_date){
			$this->panier_date = $panier_date;
		}

	}
?>