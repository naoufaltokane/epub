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
	<head>
	<body id="body">
		<form id="SignIn" method="POST" action="../../Controller/PostData/Psignin.php">
			<table>
				<tr>
					<td>Nom</td>
					<td><input type="text" id="nom" name="nom" maxlength="15" minlength="3" required/></td>
				</tr>
				<tr>
					<td>Prenom</td>
					<td><input type="text" id="prenom" name="prenom" maxlength="15" minlength="3" required/></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" id="email" name="email" maxlength="40" minlength="4" required/></td>
				</tr>
				<tr>
					<td>Téléphone</td>
					<td><input type="tel" id="telephone" name="telephone" maxlength="20" minlength="7" required/></td>
				</tr>
				<tr>
					<td>Login</td>
					<td><input type="text" id="login" name="login" maxlength="30" minlength="6" required/></td>
				</tr>
				<tr>
					<td>Mot de passe</td>
					<td><input type="password" id="password" name="password" maxlength="20" minlength="8"  required/></td>
				</tr>
				<tr>
					<td>Rettapez le Mot de passe</td>
					<td><input type="password" id="password_confirm" name="password_confirm" maxlength="20" minlength="8" required/></td>
				</tr>
					<td>Date de naissance</td>
					<td><input type="date" id="naissance" name="naissance"  required /></td>
				</tr>
				<tr>
					<td>Type du membre</td>
					<td>
						<input type="radio" id="membertype" name="membertype" value="Admin" required="TypeMembre"/>Admin
						<input type="radio" id="membertype" name="membertype" value="Fournisseur" required="TypeMembre"/>Fournisseur
						<input type="radio" id="membertype" name="membertype" value="Client" required="TypeMembre" />Client
		            </td>
				</tr>
				<tr>
					<td>
						<input type="submit" value="S'inscrire !!"/>
		                <input type="reset" value="Annuler"/>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>  