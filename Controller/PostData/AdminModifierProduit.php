<?php
    session_start();
    require_once("../../Model/DAO/ProduitDAO.php");
    require_once('../../View/ISession.php');

    extract($_POST);
    $P_DAO = new ProduitDAO();

    if (isset($Modifier))
    {
    	$P_DAO->AdminUpdateProduit($NomProduit, $Description, $Prix, $FournisseurId, $IdProduit);
    }
    if (isset($Supprimer))
    {
    	$P_DAO->deleteProduit($IdProduit);
    }
    ISession::redirectTo("../../View/Gestion/Produits");
    
?>