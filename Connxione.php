<?PHP
	
	$Servername = "localhost" ; 
	$Username = "root" ; 
	$Password = "" ; 
	$DBaseName = "base_univ" ;
	
	$Con = mysqli_connect($Servername, $Username, $Password, $DBaseName) ; 
	
	if(mysqli_connect_errno())
	{
		die ("la connexion a échoué: " . mysqli_connect_error()) ; 
	}
?>