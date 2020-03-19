<?php

include("config.php");

$search=$_GET['search'];


$research="SELECT id, nom_pok FROM pokemon WHERE nom_pok LIKE '%".$search."%' or type1_pok LIKE '%".$search."%' or  type2_pok LIKE '%".$search."%' ORDER BY id ASC";
$resultat_research=mysqli_query($base, $research);
$element=mysqli_num_rows($resultat_research);


if($element > 0)
{
	while($data = mysqli_fetch_assoc( $resultat_research)) {	
	    	$json[] = $data;
		}
	 echo json_encode($json);
 }
?>