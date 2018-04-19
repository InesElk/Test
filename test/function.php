<html>
	<head>
		<title> Fonction PHP </title>
		
	</head>
	
	<body>
		<?php
			function Bonjour()
			{
				echo "Bonjour à tous";
			}
			 Bonjour();
			 
			 function BonjourUtilisateur($prenom)
			 {
				 echo '</br> Bonjour'.$prenom." !";
			 }
			BonjourUtilisateur(" Inès");
		
			function DireBonjour()
			{
				return "Bonjour";
			}
		
			function DireBonsoir()
			{
				echo "Bonsoir";
			}
			
			$bonjour = DireBonjour();
			$bonsoir = DireBonsoir();
			
			echo $bonjour;
			echo $bonsoir;
		
		?>
	</body>
	
</html>
		