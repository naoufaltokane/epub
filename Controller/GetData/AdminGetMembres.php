<?php
	
    require_once("../../Model/DAO/MembreDAO.php");
    require_once("../../Model/BO/Membre.php");
    extract($_SESSION);

    $M_DAO = new MembreDAO();
    $AllMembres = $M_DAO->getListMembres();
    $NombreM = $M_DAO->getNombreMembres();
?>