<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <link href="Style.css" type="text/css" Rel="Stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    
    <title>Backoffice</title>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
    
<body>
    <?php
        session_start();
    ?>
<header id="headerBackOfficeId">
    <div class="container-fluid">
        <div class="row" id="topSection">
            <div class="col-lg-2 col-sm-4" id="LogoPos">
                <A href="index.html"><img class="mx-auto d-block img-fluid" src="Image/Logo7.png" ></A>
            </div>
			
            <div class="col-lg-10 col-sm-8">
                <nav class="navbar navbar-expand-lg navbar-light navbar-trans">
                    <div class="container-fluid">
                        <a class="navbar-brand mb-0 h1" href="#">Informatique</a>
                        <button class="navbar-toggler navbar-toggler-right custom-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item"><a class="nav-link" href="index.html">Accueil</a></li>
                                <li class="nav-item"><a class="nav-link" href="Annee2.html">2<sup>éme</sup>Année</a></li>
                                <li class="nav-item"><a class="nav-link" href="Annee3.html">3<SUP>éme</SUP>Année</a></li>
                                <li class="nav-item"><a class="nav-link" href="Inscription.html">Inscription</a></li>
                                <li class="nav-item"><a class="nav-link disabled" href="Authentification.html">Connéxion</a></li> 
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        
        <div class="container">
            <div class="row" id="middleSectionBO">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <h1 id="BackOfficePageTitle">Back Office</h1>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="formInsc">
			                 <form name="PrivetForm" method="POST" action="AfficherEt.php">
					           <table>
						          <tr>
							         <td><input type="submit" class="btn btn-outline-light" value="Afficher les informations des etudiants inscrits"></td>
						          </tr>
					           </table>
				            </form>
				            <form action="Deconnexion.php">
					           <table>
						          <tr>
							         <td><input type="submit" class="btn btn-outline-light" value="Déconnexion"></td>
						          </tr>
					           </table>
				            </form>
			                 </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>   
        </div>
    </div>
</header>
    	
<center>
    <?PHP
	echo"<h1><b>Soyez les bienvenus  " .$_SESSION['Psd_Ad']. " </b></H1>" ; 
    ?>
		
</center>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>