function ValidationFU ()
{
	if(FormAu.NomU.value.length==0)
	{
		alert("Peseudo exig�.") ; 
		return false ; 
	}
	
	if(FormAu.MDPU.value.length==0)
	{
		alert("Mot de passe exig�.") ; 
		return false ; 
	}
	
	return true;
	
}