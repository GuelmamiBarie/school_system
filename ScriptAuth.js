function ValidationFU ()
{
	if(FormAu.NomU.value.length==0)
	{
		alert("Peseudo exigé.") ; 
		return false ; 
	}
	
	if(FormAu.MDPU.value.length==0)
	{
		alert("Mot de passe exigé.") ; 
		return false ; 
	}
	
	return true;
	
}