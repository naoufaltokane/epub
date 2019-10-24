<?php
	
    require_once("../../Model/DAO/ProduitDAO.php");
    require_once("../../Model/BO/Produit.php");
    extract($_SESSION);

    $P_DAO = new ProduitDAO();
    $AllProduits = $P_DAO->getAllProduits();
    $NombreP = $P_DAO->getNombreProduits();

?>