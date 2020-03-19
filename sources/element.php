<html>
<head>
	<meta charset="utf-8">
	<link href="../style.css" rel="stylesheet">
	<script type="text/javascript" src="../../js/jquery-3.4.1.min.js"></script>
		<!-- MON SCRIPT -->
		<script type="text/javascript" src="../../js/script.js"></script>
	<title>resultat de recherche</title>
</head>
<body id="pokemon" class="oc-body-element">
	<!--////////////////////////////////////////////////HEADER/////////////////////////////////////////////////////-->
	   	<?php include("header.php");

	   	if(!isset($_GET['id']))
	   	{
	   		header('Location: ../../index.php');
	   	}

	   	 //////////////////////////////////////:BDD EN PDO/////////////////////////////////////////////////////:
	   	     $bdd = new PDO('mysql:host=localhost;dbname=autocompletion', 'root', '');    
	   	     ////////////////////////:recuperation de id de url et securation ///////////////////////////////////////////:
	   	    
	   	     $idget =htmlspecialchars($_GET['id']) ;
	   	       	        
	   	  //////////////////////////////REQUETTE////////////////////////////////////////////////////////
	   	     $articlesPok = $bdd->query("SELECT * FROM pokemon WHERE id = \"$_GET[id]\" ");	   	     
	   	     //////////////////////////////////tableau du pokemon //////////////////////////////////////:
	   	       $resultElement = $articlesPok->fetch();
	   	?>
<!--////////////////////////////////////////////////////MAIN/////////////////////////////////////////////::-->
<main >
	 
	   	     <?php
	   	     //////////////////////////////////////:BDD EN PDO/////////////////////////////////////////////////////:
	   	     $bdd = new PDO('mysql:host=localhost;dbname=autocompletion', 'root', '');    
	   	     ////////////////////////:recuperation de id de url et securation ///////////////////////////////////////////:
	   	     $idget =htmlspecialchars($_GET['id']) ;
	   	       	        
	   	   ?>
	   	     <section class="oc-section-element">
	   	        <h1><?php echo $resultElement[1] ?></h1>
	   	     	 <?php   	
	   	     	 ///////////////////////affichage des element du tableau du pokemon////////////////////////  	
	   	     	   ?>
	   	     	     	<li>type 1 <?= $resultElement[2] ?></li>
	   	     	     	<li>Type 2 <?= $resultElement[3] ?></li>
	   	     	     	<li>HP <?= $resultElement[4] ?></li>
	   	     	     	<li>Attaque <?= $resultElement[5] ?></li>
	   	     	     	<li>Defense <?= $resultElement[6] ?></li>
	   	     	     	<li> Sp attaque <?= $resultElement[7] ?></li>
	   	     	     	<li>Sp_Defense <?= $resultElement[8] ?></li>
	   	     	     	<li>Vitesse <?= $resultElement[9] ?></li>
	   	     </section> 
</main>	
</body>
</html>