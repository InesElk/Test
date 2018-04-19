<html>
	<head>
		<title>BDD</title>
		
		
	</head>
	
	
	<body>
		<?php
			$serveur = "localhost";
			$login = "root";
			$pass = "root";
			
			try{
			$connexion = new PDO("mysql:host=$serveur;dbname=test_exam", $login, $pass);
			$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo 'Connexion a la BDD réussie';
			}
			
			catch (PDOException $e)
			{
				echo 'Echec de la connexion : ' .$e->getMessage();
			}
		?>
	</body>
	
	
</html>