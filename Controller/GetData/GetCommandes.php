<?php
    require_once("../../Model/DAO/CommandeDAO.php");
    require_once("../../Model/BO/Commande.php");
    require_once("../../Model/DAO/ProduitDAO.php");
    require_once("../../Model/BO/Produit.php");
    require_once("../../Model/DAO/MembreDAO.php");
    require_once("../../Model/BO/Membre.php");
    extract($_SESSION);

    $CMD_DAO = new CommandeDAO();
    $commandes = $CMD_DAO->getListCommandes($membre['m_id']);
    $commandesClient = $CMD_DAO->getListCommandesClient($membre['m_id']);

    $P_DAO = new ProduitDAO();

    $M_DAO = new MembreDAO();
?>

