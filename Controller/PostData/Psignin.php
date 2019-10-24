<?php
    require_once("../../Model/DAO/MembreDAO.php");
    require_once("../../Model/BO/Membre.php");
    require_once('../../View/ISession.php');
    extract($_POST);
    $M_DAO = new MembreDAO();
    $existe = $M_DAO->existeLogin($login);
    if($existe)
    {
        echo("Compte existe deja");
        ISession::redirectTo("../../View");
    }
    else
    {
        $M_DAO->AddMembre($login,$password,$membertype,$nom,$prenom,$email,$telephone,$naissance);
        ISession::redirectTo("../../View");
    }
?>