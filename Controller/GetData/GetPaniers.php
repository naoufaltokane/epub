<?php
    require_once("../../Model/DAO/PanierDAO.php");
    require_once("../../Model/BO/Panier.php");
    require_once("../../Model/DAO/ProduitDAO.php");
    require_once("../../Model/BO/Produit.php");
    extract($_SESSION);

    $PAN_DAO = new PanierDAO();
    $P_DAO = new ProduitDAO();

    $idm=$membre['m_id'];

    $pan = $PAN_DAO->getListPaniers($idm);
?>