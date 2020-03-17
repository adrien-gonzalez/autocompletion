<html>
	<head>
		<title>Accueil</title>
		<meta charset="UTF-8">
		<link href="sources/style.css" rel="stylesheet">
		<!-- JQUERY -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
		<!-- MON SCRIPT -->
		<script type="text/javascript" src="js/script.js"></script>
	</head>
<body class="accueil">
	<?php include("sources/header.php");?>

<div class="form_research">
	<form class="research" method="get">
		<input placeholder="Tapez votre recherche" type="text" name="search" id="search" onkeypress="refuserToucheEntree(event);">
		<input type="button" name="recherche" id="recherche" value="Rechercher">
	</form>
</div>
<div id="erreur"></div>
	

</body>
</html>