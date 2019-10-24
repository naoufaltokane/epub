<?php
    session_start();
    require_once('../ISession.php');
    extract($_SESSION);
    if (ISession::isLogged() == false)
    {
        ISession::redirectTo("../login.php");
    }
    if($member['m_type']!="Fournisseur")
    {
        ISession::redirectTo("../".$member['m_type']."/profil.php");
    } 
?>
<html>
    <head>
    </head>
    <body>
        <?php echo("VOTRE ID : ".$member['m_id']); ?><br>
        <?php echo("VOTRE LOGIN : ".$member['m_login']); ?><br>
        <?php echo("VOTRE MDP : ".$member['m_password']); ?></h1><br>
        <?php echo("VOTRE NOM : ".$member['m_nom']); ?><br>
        <?php echo("VOTRE PRENOM : ".$member['m_prenom']); ?><br>
        <?php echo("VOTRE EMAIL : ".$member['m_email']); ?><br>
        <?php echo("VOTRE TELEPHONE : ".$member['m_telephone']); ?><br>
        <?php echo("VOTRE DATE NAISSANCE : ".$member['m_naissance']); ?><br>
        <?php echo("VOTRE TYPE : ".$member['m_type']); ?><br>
        <a href="../logout.php">Se deconnecter</a>
        <br>
        <br>
        <a href="">GESTION DE SES COMMANDES</a>
        <br>
        <a href="">DEMANDER D'AJOUTER UN PRODUIT</a>
    </body>
</html>