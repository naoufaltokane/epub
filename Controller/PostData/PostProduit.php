<?php
    session_start();
    require_once("../../Model/DAO/ProduitDAO.php");
    require_once('../../View/ISession.php');

    extract($_POST);
    extract($_SESSION);
    $P_DAO = new ProduitDAO();

    $existe = $P_DAO->existeNom($NomProduit);
    if($existe)
    {
        echo("Prduit existe déja");
        ISession::redirectTo("../../View/".$membre['m_type']."/AjouterProduit.php");
    }
    else
    {
        move_uploaded_file($_FILES['fileimage']['tmp_name'],'../../View/image/'.$_FILES['fileimage']['name']);
        $img="/epub/View/image/".$image;
        $P_DAO->AddProduit($NomProduit,$Description,date("Y-m-d"),$Prix,$Region,$img,$membre['m_id']);
        ISession::redirectTo("../../View/".$membre['m_type']."/MesProduits.php");
    }
?>