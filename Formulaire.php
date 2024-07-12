<html>
<head>
<title>Formulaire</title>
</head> 
<body>
<center>
<?php
	require('Connxione.php') ; 
		
		if(isset($_POST['nom']))  
		{	
			$Nom=$_POST['nom'];
            $Pre=$_POST['pre'];
            $Email=$_POST['email'];
            $Age=$_POST['age']; 
			$Sex=$_POST['sexe']; 
			$Wil=$_POST['Wilaya']; 
			$Adr=$_POST['Adresse']; 
			$AcS=$_POST['AS']; 
			$Pho=$_POST['Photos']; 
			$AnE=$_POST['AE']; 
			$MoP=$_POST['Code1']; 
			$MoPMD5 = md5 ($MoP); 
			
			$SQL = "INSERT INTO etudiant (Nom_Et, Pre_Et, Email_Et, Age_Et, Sex_Et, Wil_Et, Adr_Et, AcS_Et, Pho_Et, AnE_Et, MoP_Et) VALUES ('$Nom', '$Pre', '$Email', '$Age', '$Sex', '$Wil', '$Adr', '$AcS', '$Pho', '$AnE', '$MoP')" ; 
            
			$Result = mysqli_query($Con,$SQL) or die(mysqli_error($Con));
			
			if($Result == true)
			{	
				echo "<center>" ; 
				echo("<p><strong> Etudiant " . $Nom ." ". $Pre . " ajouter.</strong></p><br>") ; 
				echo "<a href='Inscription.html'> Retour </a>" ; 
				echo "</center>"  ;
			}
			else
			{
				echo "<center>"  ;
				echo "Erreur d'ajout". $SQL .".<br>" .$Con->Erreur ; 
				echo "</center>"  ;
			}
            $Con->close() ;
		}
		else 
		{
			header('location:Inscription.html') ; 
			exit() ; 
		}
?>
</center>
</body>
</html>