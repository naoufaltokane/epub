<?php
    session_start();
    require_once("../../Model/DAO/MembreDAO.php");
    require_once('../../View/ISession.php');

    extract($_POST);
    $M_DAO = new MembreDAO();

    if (isset($Modifier))
    {
    	$M_DAO->AdminUpdateMembre($Nom, $Prenom, $Login, $Password, $Type, $Telephone, $IdMembre);
    }
    if (isset($Supprimer))
    {
    	$M_DAO->deleteMembre($IdMembre);
    }
    ISession::redirectTo("../../View/Gestion/Membres");
    
?>