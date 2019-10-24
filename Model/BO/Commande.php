<?php
	class Commande
	{
		private $cmd_id;
		private $p_id;
		private $f_id;
		private $cl_id;
		private $cmd_qte;
		private $cmd_date;
		private $cmd_etat;

		public function __construct(array $data)
		{
			$this->cmd_id = $data['cmd_id'];
			$this->p_id = $data['p_id'];
			$this->f_id = $data['f_id'];
			$this->cl_id = $data['cl_id'];
			$this->cmd_qte = $data['cmd_qte'];
			$this->cmd_date = $data['cmd_date'];
			$this->cmd_etat = $data['cmd_etat'];
		}

		public function getCmd_id(){
		return $this->cmd_id;
		}

		public function setCmd_id($cmd_id){
			$this->cmd_id = $cmd_id;
		}

		public function getP_id(){
			return $this->p_id;
		}

		public function setP_id($p_id){
			$this->p_id = $p_id;
		}

		public function getF_id(){
			return $this->f_id;
		}

		public function setF_id($f_id){
			$this->f_id = $f_id;
		}

		public function getCl_id(){
			return $this->cl_id;
		}

		public function setCl_id($cl_id){
			$this->cl_id = $cl_id;
		}

		public function getCmd_qte(){
			return $this->cmd_qte;
		}

		public function setCmd_qte($cmd_qte){
			$this->cmd_qte = $cmd_qte;
		}

		public function getCmd_date(){
			return $this->cmd_date;
		}

		public function setCmd_date($cmd_date){
			$this->cmd_date = $cmd_date;
		}

		public function getCmd_etat(){
			return $this->cmd_etat;
		}

		public function setCmd_etat($cmd_etat){
			$this->cmd_etat = $cmd_etat;
		}
	}
?>