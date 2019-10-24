<?php
	session_start();
	require_once 'ISession.php';
	extract($_SESSION);
	if(ISession::isLogged()==true) 
	{
		ISession::redirectTo($member['m_type']."/profil.php");
	}
?>

<html>  
	<body id="body">
		<p>login or password incorrect essayez encore!</p>
		<form name="LogIn" method="POST" action="../../Controller/PostData/Plogin.php">
			<input type="text" placeholder="login" name="login" required/><br>
			<input type="password" placeholder="password" name="password" required/><br>
			<input type=submit value="se connecter">
		</form>
		<a href="signin.php">S'inscrire</a>
	</body>
</html>

