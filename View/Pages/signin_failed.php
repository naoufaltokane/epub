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
		<form name="SignIn" method="POST" action="../../Controller/PostData/Psignin.php">
			<table>
				<tr>
					<td>Login</td>
					<td><input type="text" name="login"  required /></td>
				</tr>
				<tr>
					<td>Type du membre</td>
					<td>
						<select name="membertype" id="membertype">
							<option value="Admin">Admin</option>
							<option value="Fournisseur">Fournisseur</option>
							<option value="Client">Client</option>
		                </select>
		            </td>
				</tr>
				<tr>
					<td>Mot de passe</td>
					<td><input type="password" name="password" required /></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="hidden" name="id"/></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" value="Enregistrer"/>
		                <input type="reset" value="Annuler"/>
					</td>
				</tr>
			</table>
		</form>
		<p>Le login existe deja essayer avec un autre login.</p>
	</body>
</html>  