/* global document */
/* exported Validation */
/* exported EnableDisableCheckBox4 */
/* exported EnableDisableCheckBox123 */
/* exported EnableDisableCheckBox5 */

function Validation()
{	
    var Age1 = document.getElementById("age1823");
    var Password1 = document.getElementById("passCode").value; 
	var Password2 = document.getElementById("passCode1").value;
    var Gender = document.getElementsByName("Sexe");
    var City = document.getElementById("Wilaya");
    var AcSp = document.getElementsByName("AS");
    var AS = document.getElementsByName("AE");
    var CitySelected = City.options[City.selectedIndex];
    
                            
	if( (isNaN(Age1.value))||(Age1.value<18)||(Age1.value>23) )         
	{
		alert("L'age doit etre un nombre et ce nomber doit etre entre 18 et 23 ans.") ; 
		return false ; 
	}
    
    if(Gender[0].checked)
	{
		var message = confirm("Vous avez choisi " + Gender[0].value + "?");
        if(message == false)
         {
            return false;
          }
	}
	else 
	{
		var message1 = confirm("Vous avez choisi " + Gender[1].value + "?"); 
        if(message1 == false)
         {
            return false;
          }
	}

    if(CitySelected.value == "Aucune")
        {
            var CityConfirmation = confirm("Vous n'avez pas trouvé votre ville dans la liste ?");
            if(CityConfirmation == false)
            {
                return false;
            }
        }
    else
        {
            var CityConfirmation1 = confirm("Vous avez choisi "+CitySelected.value+" Comme wilaya ?");
            if(CityConfirmation1 == false)
            {   
                return false;
            }
        }
    
    for( var i=0 ; i<5 ; i++ )
	{
		if (AcSp[i].checked)
		{
            if(AcSp[i].value == "Aucun")
                {
                    var ConfAcSp1 = confirm("Vous n'avez choisi aucun sport ?");
                    if(ConfAcSp1 == false)
                    {
                        return false;
                    }
                }
            else{
                if(AcSp[i].value == "Autre")
                {
                    var ConfAcSp2 = confirm("Vous avez une autre activité sportive ?");
                    if(ConfAcSp2 == false)
                    {
                        return false;
                    }
                }
                else
                {
                    var ConfAcSp = confirm("Vous avez choisi "+ AcSp[i].value + " Comme actéviter sportive.");
                    if(ConfAcSp == false)
                    {
                        return false;
                    }   
                }}
		}
	}
	
	if(AS[0].checked)
	{
		var confAS = confirm("Vous avez choisi "+AS[0].value +" Comme année d'étude.");
        if (confAS == false)
            {
                return false; 
            }
	}
	else 
	{
		var confAS1 = confirm("Vous avez choisi "+AS[1].value +" Comme année d'étude.");
        if (confAS1 == false)
            {
                return false; 
            }
	}
     
	if ((Password1.length<8)||(Password2.length<8))
	{
		alert("Le mot de pass doit etre composés de 8 caractéres au moins.");
		return false ; 
	}
	
	if(Password1 != Password2)
	{
		alert("Le mot de passe ne correspond pas: Veuillez réessayer ...") ; 
		return false ; 
	}
	
	return true ; 
}

function EnableDisableCheckBox5 (ChBx5)
{
    var ChBox = document.getElementById("ChBx1");
    var ChBox1 = document.getElementById("ChBx2");
    var ChBox2= document.getElementById("ChBx3");
    var ChBox3 = document.getElementById("ChBx4");
    
    if(ChBx5.checked)
        {
            ChBox.checked = false;
            ChBox1.checked = false;
            ChBox2.checked = false;
            ChBox3.checked = false;
            
            ChBox.disabled = true;
            ChBox1.disabled = true;
            ChBox2.disabled = true;
            ChBox3.disabled = true;
        }
    if(!ChBx5.checked)
        {
            ChBox.checked = false;
            ChBox1.checked = false;
            ChBox2.checked = false;
            ChBox3.checked = false;
            
            ChBox.disabled = false;
            ChBox1.disabled = false;
            ChBox2.disabled = false;
            ChBox3.disabled = false;
        }
    
}

function EnableDisableCheckBox4 (ChBx4)
{
    var ChBox3 = document.getElementById("ChBx5");
    
    if(ChBx4.checked)
        {
            ChBox3.checked = false;
        
            ChBox3.disabled = true;
        }
    if(!ChBx4.checked)
        {
            ChBox3.checked = false;
            
            ChBox3.disabled = false;
        }
    
}

function EnableDisableCheckBox123 (ChBx)
{
    var ChBox5 = document.getElementById("ChBx5");
    
    if(ChBx.checked)
        {
            ChBox5.checked = false;
            
            ChBox5.disabled = true;
        }
    if(!ChBx.checked)
        {
            ChBox5.checked = false;
            
            ChBox5.disabled = false;
        }
}