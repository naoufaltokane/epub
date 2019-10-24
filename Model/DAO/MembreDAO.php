<?php

	require_once('IConnexion.php');
	require_once('../../Model/BO/Membre.php');

	class MembreDAO
    {
		public function __construct()
		{
		}

		public function authentifier($log,$pass)
        {
            $cn =  IConnexion::connexion();
            $query = $cn->prepare('SELECT m_id, m_login, m_password, m_type, m_nom, m_prenom, m_naissance, m_email, m_telephone FROM membres WHERE m_login = :log AND m_password = :pass;');
			$query->bindValue(':log', $log, PDO::PARAM_STR);
            $query->bindValue(':pass', $pass, PDO::PARAM_STR);
            $query->execute();
            $data = $query->fetch();
            IConnexion::deconnexion();
            return $data;
		}

        public function existeLogin($log)
        {
            $cn =  IConnexion::connexion();
            $query = $cn->prepare('SELECT m_id,m_login,m_type FROM membres WHERE m_login = :log; ');
            $query->bindValue(':log', $log, PDO::PARAM_STR);
            $query->execute();
            $data = $query->fetch();
            IConnexion::deconnexion();
            return $data;
        }

        public function AddMembre($log,$pass,$mt,$nm,$pnm,$eml,$tel,$naiss)
        {
            $cn =  IConnexion::connexion(); 	
			$query = $cn->prepare('INSERT INTO membres(m_login, m_password, m_type, m_nom, m_prenom, m_naissance, m_email, m_telephone) VALUES (?,?,?,?,?,?,?,?)');
			$query->bindParam(1,$log);
            $query->bindParam(2,$pass);
            $query->bindParam(3,$mt);
            $query->bindParam(4,$nm);
            $query->bindParam(5,$pnm);
            $query->bindParam(6,$naiss);
            $query->bindParam(7,$eml);
            $query->bindParam(8,$tel);
            $query->execute();
            IConnexion::deconnexion();
        }

        public function deleteMembre($id_member)
        {
            $cn =  IConnexion::connexion();
            $query =$cn->prepare('DELETE FROM membres WHERE m_id=?; ');
            $query->bindParam(1,$id_member);                                                             
            $query->execute();
            IConnexion::deconnexion();
        }
        
        public function updateMembre($mid,$log,$pass,$mt,$nm,$pnm,$eml,$tel,$naiss)
        {
            $cn =  IConnexion::connexion();
            $query = $cn->prepare('UPDATE membres SET m_login=?, m_password=?, m_type=?, m_nom=?, m_prenom=?, m_naissance=?, m_email=?, m_telephone=? WHERE m_id=?; ');
            $query->bindParam(1,$log);
            $query->bindParam(2,$pass);
            $query->bindParam(3,$mt);
            $query->bindParam(4,$nm);
            $query->bindParam(5,$pnm);
            $query->bindParam(6,$naiss);
            $query->bindParam(7,$eml);
            $query->bindParam(8,$tel);
            $query->bindParam(9,$mid);
            $query->execute();
            IConnexion::deconnexion();
        }

        public function AdminUpdateMembre($nm, $pnm, $log, $pass, $mt, $tel, $mid)
        {
            $cn =  IConnexion::connexion();
            $query = $cn->prepare('UPDATE membres SET m_login=?, m_password=?, m_type=?, m_nom=?, m_prenom=?,  m_telephone=? WHERE m_id=?; ');
            $query->bindParam(1,$log);
            $query->bindParam(2,$pass);
            $query->bindParam(3,$mt);
            $query->bindParam(4,$nm);
            $query->bindParam(5,$pnm);
            $query->bindParam(6,$tel);
            $query->bindParam(7,$mid);
            $query->execute();
            IConnexion::deconnexion();
        }

        public function getListMembres()
        {
            $membres = array();
            $cn =  IConnexion::connexion();
            $query = $cn->prepare("SELECT * FROM Membres ORDER BY m_type DESC ; ");
            $query->execute();

            while ($data = $query->fetch(PDO::FETCH_ASSOC))
            {
                $membre = new Membre($data);
                $membres[] = $membre;
            }
            IConnexion::deconnexion();

            return $membres;
        }



        public function getMembre($id_member)
        {
            $cn =  IConnexion::connexion();
            $query = $cn->prepare("SELECT * FROM membres WHERE m_id=?; ");
            $query->bindParam(1,$id_member);
            $query->execute();
            $data = $query->fetch(PDO::FETCH_ASSOC);
            $membre = new Membre($data);
            IConnexion::deconnexion();
            return $membre;
        }

        public function getNombreMembres()
        {
            $cn =  IConnexion::connexion();
            $query = $cn->prepare("SELECT COUNT(*) FROM membres; ");
            $query->execute();
            $data = $query->fetch(PDO::FETCH_ASSOC);
            $nb = $data['COUNT(*)'];
            IConnexion::deconnexion();
            return $nb;
        }
    }
?>