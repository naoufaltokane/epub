<?php
    session_start();
    require_once("../../Model/DAO/PanierDAO.php");
    require_once('../../View/ISession.php');

    extract($_POST);
    extract($_SESSION);
    $PAN_DAO = new PanierDAO();

    $PAN_DAO->AddPanier($idProduit,$membre['m_id'],date("Y-m-d"));
    ISession::redirectTo("../../View/Client/marketing");
?>