<?php
    session_start();
    require_once("../../Model/DAO/MembreDAO.php");
    require_once("../../Model/BO/Membre.php");
    require_once('../../View/Pages/ISession.php');
    extract($_POST);

    $M_DAO = new MembreDAO();
    $membre = $M_DAO->Authentifier($login,$password);
    echo $membre['m_type'];

    if($membre)
    {   
        ISession::redirectTo("../../View/".$membre['m_type']);
        $_SESSION['membre']= $membre;

    }
    else
    {
        $_SESSION['error']="Compte saisie est invalid !!";
        session_destroy();
        ISession::redirectTo("../../View/no");
    }
?>