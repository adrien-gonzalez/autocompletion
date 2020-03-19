<html>
<head>
	<meta charset="utf-8">
	<link href="../style.css" rel="stylesheet">
	<script type="text/javascript" src="../../js/jquery-3.4.1.min.js"></script>
		<!-- MON SCRIPT -->
		<script type="text/javascript" src="../../js/script.js"></script>
	<title>resultat de recherche</title>
</head>
<body id="pokemon">
	<!--////////////////////////////////////////////////HEADER/////////////////////////////////////////////////////-->
	   	<?php include("header.php");?>
<!--////////////////////////////////////////////////////MAIN/////////////////////////////////////////////::-->
<main>
	 <h1>Resultat de Recherche</h1>
	   	     <?php
	   	     //////////////////////////////////////:BDD EN PDO/////////////////////////////////////////////////////:
	   	     $bdd = new PDO('mysql:host=localhost;dbname=autocompletion', 'root', '');
	   	     //////////////////////////////REQUETTE////////////////////////////////////////////////////////
	   	     $articlesPok = $bdd->query("SELECT * FROM pokemon WHERE id = \"$_GET[id]\" ");
	   	     ////////////////////////:recuperation de id de url et securation ///////////////////////////////////////////:
	   	     $idget =htmlspecialchars($_GET['id']) ;	   	     
	   	     //////////////////////////////////tableau du pokemon //////////////////////////////////////:
	   	       $resultElement = $articlesPok->fetch();   	        
	   	   ?>
	   	     <ul>
	   	     	 <?php   	   
	   	     	 ///////////////////////affichage des element du tableau du pokemon////////////////////////  	
	   	     	  ?><li>Nom :<?= $resultElement[1] ?></li>
	   	     	     	<li>type 1 :<?= $resultElement[2] ?></li>
	   	     	     	<li>Type 2 :<?= $resultElement[3] ?></li>
	   	     	     	<li>HP :<?= $resultElement[4] ?></li>
	   	     	     	<li>Attaque :<?= $resultElement[5] ?></li>
	   	     	     	<li>Defense :<?= $resultElement[6] ?></li>
	   	     	     	<li> Sp attaque :<?= $resultElement[7] ?></li><br>
	   	     	     	<li>Sp_Defense :<?= $resultElement[8] ?></li>
	   	     	     	<li>Vitesse :<?= $resultElement[9] ?></li>
	   	     	    <?php 
	   	     	    ;   
	   	     	 ?>
	   	     </ul> 
</main>	
</body>
</html>