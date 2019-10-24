<?php
    session_start();
    require_once("../../Model/DAO/CommandeDAO.php");
    require_once('../../View/ISession.php');

    extract($_POST);
    extract($_SESSION);
    $CMD_DAO = new CommandeDAO();

    if (isset($Traiter))
    {
        //ENVOYER MAIL
        //ENVOYER MSG
    	$CMD_DAO->updateCommande($idCommande,'Traitee');
    }

    if (isset($Modifier))
    {
        $CMD_DAO->updateCommandeQuantite($idCommande,$quantite);
    }

    if (isset($Encours))
    {
        //ne rien faire
        $CMD_DAO->updateCommande($idCommande,'En cours');
    }
    if (isset($Supprimer))
    {
        $CMD_DAO->deleteCommande($idCommande);
    }
    ISession::redirectTo("../../View/".$membre['m_type']."/MesCommandes.php");
    
?>