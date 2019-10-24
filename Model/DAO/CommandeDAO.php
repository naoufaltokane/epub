<?php

    require_once('IConnexion.php');
    require_once('../../Model/BO/Commande.php');

    class CommandeDAO
    {
        public function __construct()
        {
        }

        public function AddCommande($pid,$fid,$clid,$qte,$date)
        {
            $cn =  IConnexion::connexion();     
            $query = $cn->prepare('INSERT INTO commandes ( p_id, f_id, cl_id, cmd_qte, cmd_date) VALUES (?, ?, ?, ?, ?)');
            $query->bindParam(1,$pid);
            $query->bindParam(2,$fid);
            $query->bindParam(3,$clid);
            $query->bindParam(4,$qte);
            $query->bindParam(5,$date);
            $query->execute();
            IConnexion::deconnexion();
        }
        
        public function deleteCommande($id_cmd)
        {
            $cn =  IConnexion::connexion();
            $query =$cn->prepare('DELETE FROM Commandes WHERE cmd_id=?; ');
            $query->bindParam(1,$id_cmd);
            $query->execute();
            IConnexion::deconnexion();
        }
        
        public function updateCommande($id_cmd,$etat)
        {
            $cn =  IConnexion::connexion();
            $query = $cn->prepare('UPDATE Commandes SET cmd_etat=? WHERE cmd_id=? ; ');
            $query->bindParam(1,$etat);
            $query->bindParam(2,$id_cmd);
            $query->execute();
            IConnexion::deconnexion();
        }

        public function updateCommandeQuantite($id_cmd,$qte)
        {
            $cn =  IConnexion::connexion();
            $query = $cn->prepare('UPDATE Commandes SET cmd_qte=? WHERE cmd_id=? ; ');
            $query->bindParam(1,$qte);
            $query->bindParam(2,$id_cmd);
            $query->execute();
            IConnexion::deconnexion();
        }

        
        public function getListCommandes($fid)
        {
            $commandes = array();
            $cn =  IConnexion::connexion();
            $query = $cn->prepare("SELECT * FROM Commandes WHERE f_id=? ORDER BY cmd_id DESC; ");
            $query->bindParam(1,$fid);
            $query->execute();

            while ($data = $query->fetch(PDO::FETCH_ASSOC))
            {
                $commande = new Commande($data);
                $commandes[] = $commande;
            }

            return $commandes;
        }
        
        public function getListCommandesClient($clid)
        {
            $commandes = array();
            $cn =  IConnexion::connexion();
            $query = $cn->prepare("SELECT * FROM Commandes WHERE cl_id=? ORDER BY cmd_date DESC; ");
            $query->bindParam(1,$clid);
            $query->execute();

            while ($data = $query->fetch(PDO::FETCH_ASSOC))
            {
                $commande = new Commande($data);
                $commandes[] = $commande;
            }

            return $commandes;
        }

        public function getAllCommandes()
        {
            $commandes = array();
            $cn =  IConnexion::connexion();
            $query = $cn->prepare("SELECT * FROM Commandes ORDER BY cmd_date DESC; ");
            $query->execute();

            while ($data = $query->fetch(PDO::FETCH_ASSOC))
            {
                $commande = new Commande($data);
                $commandes[] = $commande;
            }

            return $commandes;
        }

        public function getNombreCommandes()
        {
            $cn =  IConnexion::connexion();
            $query = $cn->prepare("SELECT COUNT(*) FROM commandes; ");
            $query->execute();
            $data = $query->fetch(PDO::FETCH_ASSOC);
            $nb = $data['COUNT(*)'];
            IConnexion::deconnexion();
            return $nb;
        }
    }
?>