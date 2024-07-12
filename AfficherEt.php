<html>
<head>
<title>Etudiants Inscrits</title>
</head>

<body>
<center>
	<?php
		require('Connxione.php') ; 
		$SQLAffi ="SELECT * FROM etudiant " ; 
		
		$Result1 =mysqli_query ($Con,$SQLAffi) ; 
		
		if($Result1)
		{
			echo "<H1>La liste des etudiants inscrits dans la formation.</H1>" ;
			$NumRows = mysqli_num_rows($Result1) ; 
			
			if($NumRows > 0 )
			{
				echo "<TABLE border = '1' >\n " ;
				echo "<BR><BR><CAPTION align= bottom>Nombre d'inscrits : ".$NumRows."</CAPTION>" ; 
				echo "<TR>\n" ; 
				echo "<TD><STRONG>Nom et Prenom</STRONG></TD>\n" ;
				echo "<TD><STRONG>Adresse</STRONG></TD>\n" ;
				echo "<TD><STRONG>Année d'étude</STRONG></TD>\n" ;
				echo "</TR>\n" ; 
				
				while($Etud = mysqli_fetch_array($Result1))
				{
					echo "<TR>\n" ; 
					echo "<TD>".$Etud["Nom_Et"]." ".$Etud["Pre_Et"]."</TD>\n" ;
					echo "<TD>".$Etud["Adr_Et"]."</TD>\n" ;
					echo "<TD>".$Etud["AnE_Et"]."</TD>\n" ;
					echo "</TR>\n" ;
				}
				echo "</TABLE>" ; 
			}
			else
			{
				echo"Aucun etudiant est inscrit." ; 
			}
			
			$Con -> close(); 
		}
		else 
		{
			echo "le message d'erreur : " .mysql_error($Con) ; 
			exit() ; 
		}
	?>
	
	<BR><BR><BR><BR><a Href="BackOffice.php">Back Office</a> 
</center>
</body>
</html>