 <?php
 	class IConnexion
 	{
 		private static $mysql = null;

 		public static function connexion()
 		{
 			if(self::$mysql == NULL)
 			{
 				self::$mysql = new PDO("mysql:host=localhost;dbname=epubdatabase","root","");
 			}
 			return self::$mysql;
 		}

 		public static function deconnexion()
 		{
 			self::$mysql = null;
 		}
 	}
 ?>
