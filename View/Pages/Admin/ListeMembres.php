<?php
    session_start();
    require_once('../ISession.php');
    extract($_SESSION);
    if (ISession::isLogged() == false)
    {
        ISession::redirectTo("../login.php");
    }
    if($member['m_type']!="Admin")
    {
        ISession::redirectTo("../".$member['m_type']."/profil.php");
    }
?>

<html>
    <head>
    </head>
    <body>
        <?php
            require_once('../../../Model/DAO/IConnexion.php');
            $cn =  IConnexion::connexion();
            $data = $cn->query("SELECT p_nom FROM members; ");
            echo "ik";
            while ($data)
            {
                            echo "ik";

                echo $data['p_nom'];
                $data = $query->fetch();
            }
            IConnexion::deconnexion();


        ?>
    </body>
</html>