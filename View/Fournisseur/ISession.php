<?php
	class ISession
		{
			public static function isLogged()
			{
				if( isset($_SESSION['membre']) && isset($_SESSION['membre']['m_password']) && isset($_SESSION['membre']['m_login']) )
				{
					return true;
				}
			}

			public static function redirectTo($path)
			{
			header("Location:".$path);
			}

			public static function isRolePage()
			{
				if(self::isLogged()==true)
				{
					self::redirectTo($_SESSION["membre"]["m_type"]."/profil.php");
				}
				else
				{
					return false;
				}
			}
	}
?>