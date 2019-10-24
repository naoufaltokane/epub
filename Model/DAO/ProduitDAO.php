<?php

	require_once('IConnexion.php');
	require_once('../../Model/BO/Produit.php');

	class ProduitDAO
    {
		public function __construct()
		{
		}

        public function existeNom($nom)
        {
            $cn =  IConnexion::connexion();
            $query = $cn->prepare('SELECT p_id,p_nom FROM produits WHERE p_nom = :nm; ');
            $query->bindValue(':nm', $nom, PDO::PARAM_STR);
            $query->execute();
            $data = $query->fetch();
            IConnexion::deconnexion();
            return $data;
        }

        public function AddProduit($nm, $desc, $date, $prix, $loc, $img,  $fid)
        {
            $cn =  IConnexion::connexion(); 	
			$query = $cn->prepare("INSERT INTO produits(p_nom, p_description, p_date, p_prix, p_location, p_image, p_statut, f_id) VALUES (?,?,?,?,?,?,'disponible',?);");
			$query->bindParam(1,$nm);
            $query->bindParam(2,$desc);
            $query->bindParam(3,$date);
            $query->bindParam(4,$prix);
            $query->bindParam(5,$loc);
            $query->bindParam(6,$img);
            $query->bindParam(7,$fid);
            $query->execute();
            IConnexion::deconnexion();
        }

        public function deleteProduit($id_Produit)
        {
            $cn =  IConnexion::connexion();
            $query =$cn->prepare('DELETE FROM produits WHERE p_id=?; ');
            $query->bindParam(1,$id_Produit);
            $query->execute();
            IConnexion::deconnexion();
        }
        
        public function updateProduit($nm, $desc, $prix, $loc, $stat, $pid)
        {
            $cn =  IConnexion::connexion();
            $query = $cn->prepare('UPDATE produits SET p_nom=?, p_description=?, p_prix=?, p_location=? , p_statut=? WHERE p_id=? ; ');
            $query->bindParam(1,$nm);
            $query->bindParam(2,$desc);
            $query->bindParam(3,$prix);
            $query->bindParam(4,$loc);
            $query->bindParam(5,$stat);
            $query->bindParam(6,$pid);
            $query->execute();
            IConnexion::deconnexion();
        }

        public function AdminUpdateProduit($nm, $desc, $prix, $fid, $pid)
        {
            $cn =  IConnexion::connexion();
            $query = $cn->prepare('UPDATE produits SET p_nom=?, p_description=?, p_prix=?, f_id=? WHERE p_id=? ; ');
            $query->bindParam(1,$nm);
            $query->bindParam(2,$desc);
            $query->bindParam(3,$prix);
            $query->bindParam(4,$fid);
            $query->bindParam(5,$pid);
            $query->execute();
            IConnexion::deconnexion();
        }

        public function getListProduits($fid)
        {
            $produits = array();
            $cn =  IConnexion::connexion();
            $query = $cn->prepare("SELECT * FROM Produits WHERE f_id=? ORDER BY p_date DESC; ");
            $query->bindParam(1,$fid);
            $query->execute();

            while ($data = $query->fetch(PDO::FETCH_ASSOC))
            {
                $produit = new Produit($data);
                $produits[] = $produit;
            }
            IConnexion::deconnexion();

            return $produits;
        }

        public function getAllProduits()
        {
            $produits = array();
            $cn =  IConnexion::connexion();
            $query = $cn->prepare("SELECT * FROM Produits ORDER BY p_date ; ");
            $query->execute();

            while ($data = $query->fetch(PDO::FETCH_ASSOC))
            {
                $produit = new Produit($data);
                $produits[] = $produit;
            }
            IConnexion::deconnexion();

            return $produits;
        }

        public function getProduit($id_produit)
        {
            $cn =  IConnexion::connexion();
            $query = $cn->prepare("SELECT * FROM Produits WHERE p_id=?; ");
            $query->bindParam(1,$id_produit);
            $query->execute();
            $data = $query->fetch(PDO::FETCH_ASSOC);
            $produit = new Produit($data);
            IConnexion::deconnexion();
            return $produit;
        }

        public function getNombreProduits()
        {
            $cn =  IConnexion::connexion();
            $query = $cn->prepare("SELECT COUNT(*) FROM produits; ");
            $query->execute();
            $data = $query->fetch(PDO::FETCH_ASSOC);
            $nb = $data['COUNT(*)'];
            IConnexion::deconnexion();
            return $nb;
        }
    }
?>