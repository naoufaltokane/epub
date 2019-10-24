<?php
    session_start();
    require_once("../../Model/DAO/CommandeDAO.php");
    require_once("../../Model/DAO/ProduitDAO.php");
    require_once("../../Model/BO/Commande.php");
    require_once("../../Model/BO/Produit.php");
    require_once('../../View/ISession.php');
    extract($_POST);
    extract($_SESSION);

    $CMD_DAO = new CommandeDAO();
    $P_DAO = new ProduitDAO();

    $produit = $P_DAO->getProduit($idProduit);
    $idClient= $membre['m_id'];

    $CMD_DAO->AddCommande($idProduit,$idFournisseur,$idClient,$quantite,date("Y-m-d"));
    ISession::redirectTo("../../View/Client/MesCommandes.php");
?>