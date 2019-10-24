<?php
    require_once('IConnexion.php');
    require_once('../../../Model/BO/Administrateur.php');

	class AdministrateurDAO
	{
		public function __construct()
	    {
	    }

	    public function Authentifier($usname,$pass)
		{
			$cn =  IConnexion::connexion();
			$query = $cn->prepare('SELECT * FROM administrateurs WHERE a_username = :usname AND a_password = :pass;');
				$query->bindValue(':usname', $usname, PDO::PARAM_STR);
			$query->bindValue(':pass', $pass, PDO::PARAM_STR);
			$query->execute();
			$data = $query->fetch();
			IConnexion::deconnexion();
			return $data;
		}

		public function existeUsername($usname)
	    {
			$cn =  IConnexion::connexion();
			$query = $cn->prepare('SELECT a_id,a_username FROM administrateurs WHERE a_username = :usname; ');
			$query->bindValue(':usname', $usname, PDO::PARAM_STR);
			$query->execute();
			$data = $query->fetch();
			IConnexion::deconnexion();
			return $data;
	    }

	     public function updateAdministrateur($aid,$usname,$pass,$nm,$pnm,$eml,$tel,$img)
	    {
			$cn =  IConnexion::connexion();
			$query = $cn->prepare('UPDATE administrateurs SET a_username=?, a_password=?, a_nom=?, a_prenom=?, a_email=?, a_telephone=? a_image=? WHERE a_id=?; ');
			$query->bindParam(1,$usname);
			$query->bindParam(2,$pass);
			$query->bindParam(3,$nm);
			$query->bindParam(4,$pnm);
			$query->bindParam(5,$eml);
			$query->bindParam(6,$tel);
			$query->bindParam(7,$img);
			$query->bindParam(8,$aid);
			$query->execute();
			IConnexion::deconnexion();
		}
	}
	?>