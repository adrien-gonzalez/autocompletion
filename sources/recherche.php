
<?php
session_start()
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>resultat de recherche</title>
</head>
<body>
	<!--////////////////////////////////////////////////HEADER/////////////////////////////////////////////////////-->
	   <header>
	   	
	   </header>
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
	
	   	       	$articles = $bdd->query('SELECT * FROM articlesPok WHERE ? like"%'.$search.'%" ORDER BY id DESC ');
	   	       	var_dump($articles);
	   	       	echo "string";
	   	       }

	   	     ?>

	   	     <ul>
	   	     	 <?php
	   	     	     while ($a = $articles->fetch()) 

	   	     	     { ?>
	   	     	     	<li><?= $a['titre'] ?></li>
	   	     	    <?php }
	   	     	 ?>
	   	     </ul>


	   </main>

</body>
</html>