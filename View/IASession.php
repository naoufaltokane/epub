<?php
	class ISession
		{
			public static function isLogged()
			{
				if( isset($_SESSION['admin']) && isset($_SESSION['admin']['a_password']) && isset($_SESSION['admin']['a_username']) )
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
					self::redirectTo("Admin/Gestion");
				}
				else
				{
					return false;
				}
			}
	}
?>