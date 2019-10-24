<?php
    require_once('IConnexion.php');
    require_once('../../Model/BO/Panier.php');

    class PanierDAO
    {
        public function __construct()
        {
        }

        public function AddPanier($pid,$clid,$date)
        {
            $cn =  IConnexion::connexion();     
            $query = $cn->prepare('INSERT INTO paniers ( p_id, cl_id, panier_date) VALUES (?, ?, ?)');
            $query->bindParam(1,$pid);
            $query->bindParam(2,$clid);
            $query->bindParam(3,$date);
            $query->execute();
            IConnexion::deconnexion();
        }
        
        public function deletePanier($id_panier)
        {
            $cn =  IConnexion::connexion();
            $query =$cn->prepare('DELETE FROM Paniers WHERE panier_id=?; ');
            $query->bindParam(1,$id_panier);
            $query->execute();
            IConnexion::deconnexion();
        }
        
        public function updatePanier($id_panier,$id_produit)
        {
            $cn =  IConnexion::connexion();
            $query = $cn->prepare('UPDATE Paniers SET p_id=? WHERE panier_id=? ; ');
            $query->bindParam(1,$id_produit);
            $query->bindParam(2,$id_panier);
            $query->execute();
            IConnexion::deconnexion();
        }
        
        public function getListPaniers($client_id)
        {
            $paniers = array();
            $cn =  IConnexion::connexion();
            $query = $cn->prepare("SELECT * FROM Paniers WHERE cl_id=? ORDER BY panier_date DESC; ");
            $query->bindParam(1,$client_id);
            $query->execute();

            while ($data = $query->fetch(PDO::FETCH_ASSOC))
            {
                $panier = new Panier($data);
                $paniers[] = $panier;
            }

            return $paniers;
        }
    }
?>