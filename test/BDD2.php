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
			$connexion = new PDO("mysql:host=$serveur;dbname=test2", $login, $pass);
			$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			$codesql ="CREATE TABLE Visiteurs(
				id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				nom VARCHAR(50), 
				prenom VARCHAR(50),
				email VARCHAR(70))";
			
			$connexion->exec($codesql);
			
			echo "Table créee";
			}
			
			catch (PDOException $e)
			{
				echo 'Echec de la connexion : ' .$e->getMessage();
			}
		?>
	</body>
	
	
</html>