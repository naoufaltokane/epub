<?php
	
    require_once("../../Model/DAO/ProduitDAO.php");
    require_once("../../Model/BO/Produit.php");
    extract($_SESSION);

    $P_DAO = new ProduitDAO();
    $produits = $P_DAO->getListProduits($membre['m_id']);
    $AllProduits = $P_DAO->getAllProduits();
?>