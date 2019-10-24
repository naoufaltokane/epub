<?php
    session_start();
    require_once("../../../Model/DAO/AdministrateurDAO.php");
    require_once("../../../Model/BO/Administrateur.php");
    require_once('../../../View/Pages/ISession.php');
    extract($_POST);

    $A_DAO = new AdministrateurDAO();
    $admin = $A_DAO->Authentifier($username,$password);
    
    if($admin)
    {   
        ISession::redirectTo("../../../View/Gestion");
        $_SESSION['admin']= $admin;
    }
    else
    {
        $_SESSION['error']="Compte saisie est invalid !!";
        session_destroy();
        ISession::redirectTo("../../View");
    }
?>