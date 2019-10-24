<?php
	
    require_once("../../Model/DAO/CommandeDAO.php");
    require_once("../../Model/BO/Commande.php");
    require_once("../../Model/DAO/ProduitDAO.php");
    require_once("../../Model/BO/Produit.php");
    require_once("../../Model/DAO/MembreDAO.php");
    require_once("../../Model/BO/Membre.php");
    extract($_SESSION);

    $CMD_DAO = new CommandeDAO();
    $M_DAO = new MembreDAO();
    $P_DAO = new ProduitDAO();
    
    $AllCommandes = $CMD_DAO->getAllCommandes();
    $NombreCMD = $CMD_DAO->getNombreCommandes();

?>
