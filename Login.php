<html>
<head>
<title>Login</title>
</head>
<body>
<?PHP
	
	require('Connxione.php') ; 
	
	$NameAdmin = $_POST['NomU'] ;
	$PasswordAdmin = $_POST['MDPU'] ;
	
		if( isset($NameAdmin) and isset($PasswordAdmin) )
		{
			$SQLR = "SELECT * FROM administrateur WHERE Psd_Ad LIKE '$NameAdmin' and  MoP_Ad  LIKE '$PasswordAdmin' ";
			$Result = mysqli_query ($Con , $SQLR) or die (mysql_error()) ; 
				
				if(mysqli_num_rows($Result) == 0)
				{
					echo ("<script>alert('Pseudo ou le mot de passe est incorrecte. ')</script> ") ;
					header('location:Authentification.html') ; 
				}
				else 
				{
					session_start() ; 
					$_SESSION['is_login'] = true ; 
					$_SESSION['Psd_Ad'] = $NameAdmin ;  
					header('location:BackOffice.php') ;	
						
				}
			
			$Con->close() ; 
		}
		else 
		{
			header('location:Authentification.html') ; 
			exit() ; 
		}

?>
</body>
</html>