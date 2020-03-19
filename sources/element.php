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
	   	     //////////////////////////////////////:BDD/////////////////////////////////////////////////////:
	   	   //  $bdd = new PDO('mysql:host=127.0.0.1;dbname=autocompletion;charset=utf8','root',' ');
	   	     $bdd = new PDO('mysql:host=localhost;dbname=autocompletion', 'root', '');


	   	     $articlesPok = $bdd->query('SELECT * FROM pokemon ORDER BY id DESC ');
	   	     	 $idget = $_GET['id'];

	   	       if(isset($_GET['search']) && !empty($_GET['search'])) 
	   	       {
	   	       	$search = htmlspecialchars($_GET['search']);
	
	   	       	$articlesPok = $bdd->query('SELECT * FROM pokemon WHERE id = $idget ');

	   	       	//$articlesPok = $bdd->query('SELECT * FROM pokemon WHERE nom_pok like"%'.$search.'%" ORDER BY id DESC ');
	   	       }

	   	       $resultElement = $articlesPok->fetch();
	   	      
	   	         ;
	   	   ?>

	   	     <ul>
	   	     	 <?php
	   	     

	   	     	
	   	     	  ?><li>Nom :<?= $resultElement[0] ?></li>
	   	     	     	<li>type 1 :<?= $resultElement[1] ?></li>
	   	     	     	<li>Type 2 :<?= $resultElement[2] ?></li>
	   	     	     	<li>HP :<?= $resultElement[3] ?></li>
	   	     	     	<li>Attaque :<?= $resultElement[4] ?></li>
	   	     	     	<li>Defense :<?= $resultElement[5] ?></li>
	   	     	     	<li>Sp_Attaque :<?= $resultElement[6] ?></li>
	   	     	     	<li>Sp_Defense :<?= $resultElement[7] ?></li><br>
	   	     	     	
	   	     	    <?php 
	   	     	    ;   
	   	     	 ?>
	   	     </ul> -->
</main>
	
</body>
</html>