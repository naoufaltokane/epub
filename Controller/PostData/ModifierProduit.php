<?php
    session_start();
    require_once("../../Model/DAO/ProduitDAO.php");
    require_once('../../View/ISession.php');

    extract($_POST);
    extract($_SESSION);
    $P_DAO = new ProduitDAO();

    if (isset($Modifier))
    {
    	$P_DAO->updateProduit($NomProduit, $Description, $Prix, $Region, $Statut, $idProduit);
    }
    if (isset($Supprimer))
    {
    	$P_DAO->deleteProduit($idProduit);
    }
    ISession::redirectTo("../../View/".$membre['m_type']."/MesProduits.php");
    
?>