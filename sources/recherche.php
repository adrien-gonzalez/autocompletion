
<?php
session_start()
?>

<!DOCTYPE html>
<html>
<head>
	<link href="sources/style.css" rel="../css/stylesheet">
	<meta charset="utf-8">
	<link href="style.css" rel="stylesheet">
	<title>resultat de recherche</title>
</head>
<body>
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


	   	       if(isset($_GET['search']) && !empty($_GET['search'])) 
	   	       {
	   	       	$search = htmlspecialchars($_GET['search']);
	
	   	       	$articlesPok = $bdd->query('SELECT * FROM pokemon WHERE nom_pok like "%'.$search.'%" or type1_pok like "%'.$search.'%" or type2_pok like "%'.$search.'%" ORDER BY id DESC ');
	   	       	var_dump($articlesPok);
	   	       	echo "string";
	   	       }

	   	     ?>

	   	     <ul>
	   	     	 <?php
	   	     	     while ($a = $articlesPok->fetch()) 

	   	     	     { ?>
	   	     	     	<li>Nom :<?= $a['nom_pok'] ?></li>
	   	     	     	<li>type 1 :<?= $a['type1_pok'] ?></li>
	   	     	     	<li>Type 2 :<?= $a['type2_pok'] ?></li>
	   	     	     	<li>HP :<?= $a['HP'] ?></li>
	   	     	     	<li>Attaque :<?= $a['Attaque'] ?></li>
	   	     	     	<li>Defense :<?= $a['Defense'] ?></li>
	   	     	     	<li>Sp_Attaque :<?= $a['Sp_Attaque'] ?></li>
	   	     	     	<li>Sp_Defense :<?= $a['Sp_Defense'] ?></li>
	   	     	     	<li>Vitesse :<?= $a['Vitesse'] ?></li>
	   	     	     	
	   	     	    <?php }
	   	     	 ?>
	   	     </ul>


	   </main>

</body>
</html>