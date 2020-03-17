<html>
	<head>
		<title>Accueil</title>
		<meta charset="UTF-8">
		<link href="style.css" rel="stylesheet">
		<!-- JQUERY -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
		<!-- MON SCRIPT -->
		<script type="text/javascript" src="script.js"></script>
	</head>
<body class="accueil" id="pokemon">
	<?php include("header.php");?>

<div class="form_research">
	<form class="research" method="get">
		<input placeholder="Tapez votre recherche" type="text" name="search" id="search" onkeypress="refuserToucheEntree(event);">
		<input type="button" name="recherche" id="recherche" value="Rechercher">
	</form>
</div>
	

</body>
</html>