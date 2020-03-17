$(document).ready(function(){

	$("#recherche").click(function(){

		mot_cle = $("#mot_cle").val();

		$.ajax({

		type:"GET",
		url:"fonctions/research.php",
		data : {mot_cle: encodeURIComponent(mot_cle)},
	
		
			success:function(data)
			{
				if(data != "")
				{	
					var nbr=0;
		            for(i=0; i<Object.keys(data).length;i++)
		            {
			           	if(data[i] =="{")
			           	{
			           		nbr++;
			        	}
		            }
		              $("#result-search").remove();
		              $("#pokemon").append('<table id="result-search"></table>');

		             for(i=0; i < nbr; i++)
	          		{
	          			$("#result-search").append('<tr id='+i+'></tr>');
	          			var result = JSON.parse(data)[i]; 
	          	
			         	for(j=0;j <Object.keys(result).length; j++  )
			         	{
			         		var champ = Object.keys(result)[j];
			         		$("#"+i).append('<td>'+ result[champ]+'</td>');
			         	}
	         		}
				}
				else
				{
					$("#result-search").remove();
					$("#pokemon").append('<div>Aucun résultat</div>');
				}
			}
		});
	});
});
   