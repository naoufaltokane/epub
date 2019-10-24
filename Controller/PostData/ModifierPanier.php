<?php
    session_start();
    require_once("../../Model/DAO/PanierDAO.php");
    require_once("../../Model/DAO/CommandeDAO.php");
    require_once('../../View/ISession.php');

    extract($_POST);
    extract($_SESSION);
    $PAN_DAO = new PanierDAO();
    $CMD_DAO = new CommandeDAO();

    if (isset($Commander))
    {
        $CMD_DAO->addCommande($idProduit,$idFournisseur,$membre['m_id'],$quantite,date("Y-m-d"));
        $PAN_DAO->deletePanier($panid);
        ISession::redirectTo("../../View/Client/MonPanier");
    } 

    if (isset($SupprimerPanier))
    {
        $PAN_DAO->deletePanier($panid);
        ISession::redirectTo("../../View/Client/MonPanier");

    }

    
?>