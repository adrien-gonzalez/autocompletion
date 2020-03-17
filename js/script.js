// RECUPERER LE GET SEARCH POUR RENVOYER LE RESULTAT SUR LA PAGE RECHERCHE

function $_GET(param) {
	var vars = {};
	window.location.href.replace( location.hash, '' ).replace( 
		/[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
		function( m, key, value ) { // callback
			vars[key] = value !== undefined ? value : '';
		}
	);

	if ( param ) {
		return vars[param] ? vars[param] : null;	
	}
	return vars;
}


var url_current_page = window.location.pathname;
if(url_current_page == "/autocompletion/sources/recherche.php/")
{	
	
		search=$_GET('search');
		url = "../../fonctions/research.php";		
		ajax();

}

function refuserToucheEntree(event)
{
	    // Compatibilité IE / Firefox
	    if(!event && window.event) {
	        event = window.event;
	    }
	    // IE
	    if(event.keyCode == 13) {
	        event.returnValue = false;
	        event.cancelBubble = true;
	    }
	    // DOM
	    if(event.which == 13) {
	        event.preventDefault();
	        event.stopPropagation();
	    }	
}



function ajax()
{


   $.ajax({

			type:"GET",
			url: url,
			data : {search: encodeURIComponent(search)},
		
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
			          	
					         	for(j=0;j <Object.keys(result).length; j++ )
					         	{
					         		var champ = Object.keys(result)[j];
					         		$("#"+i).append('<td>'+ result[champ]+'</td>');
					         	}
			         		}

			         		if(url_current_page != "/autocompletion/sources/recherche.php/")
			         		{
			         			document.location.href = "sources/recherche.php/?search="+search;
			         		}
			         		else if(url == "fonctions/research.php" && url_current_page == "/autocompletion/sources/recherche.php/")
			         		{
			         			document.location.href = "../recherche.php/?search="+search;
			         		}

					}
					else
					{	
						$("#erreur").fadeOut();
						$("#erreur").fadeIn().text('Aucun résultat');
						$("#erreur").css({"text-align" : "center", "color": "white", "font-size":"30px","margin-top": "2%", "font-weight":"bold", "text-shadow": "black 0.1em 0.1em 0.2em"});
					}
				}
			});
  }



$(document).ready(function(){
	$("#recherche").click(function(){
  	

		search = $("#search").val();
		url = "fonctions/research.php";
		
		if(search != "")
		{
	  		ajax();		
	  	}
		});

	$("#recherche_barre").click(function(){
  	
		search = $("#search_barre").val();
		url = "fonctions/research.php";
		
		if(search != "")
		{
	  		ajax();
	  	}
		});
});
   




