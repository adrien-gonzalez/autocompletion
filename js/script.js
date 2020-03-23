// RECUPERER LE GET SEARCH POUR RENVOYER LE RESULTAT SUR LA PAGE RECHERCHE


function lireID(that)
{
	var id = that.id;
	document.location.href = "../element.php/?id="+id;
}
   


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
	$(".recherhe").append('<button id="accueil">Accueil</button');
		

		search=$_GET('search');
		url = "../../fonctions/research.php";	
	
		ajax();
		
}

if(url_current_page == "/autocompletion/sources/element.php/")
{	

	url = "../../fonctions/research.php";
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
				if((data != "" && search.length > 2)||(autocompletion == 1))
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
				    $("#pokemon").append('<div id="result-search"></div>');
				    $("#result-search").append('<form method="get" id="form"></form>');

				    for(i=0; i < nbr; i++)
			        {

			          	var result = JSON.parse(data)[i]; 
			          	
					    for(j=0;j < Object.keys(result).length; j++ )
					    {
					        var champ = Object.keys(result)[j];
					        var champ2 = Object.keys(result)[j+1];
					        $("#form").append('<div id='+result[champ]+'></div>');
							$("#"+result[champ]).append('<img width="40px" src="../../img/Pokeball.png">')
					        $("#"+result[champ]).append('<input id='+result[champ]+' onclick="lireID(this)" type="button" value='+ result[champ2]+'>');
					        j++;
					    }
			        }

			       
			        if(autocompletion == 0)
			        {
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
			    		$('#results').empty();
			    		var identique=0;			    	
			    		var tab=[];

			    		
				    	for(i=0; i < nbr; i++)
				        {
				        	
				        	var result = JSON.parse(data)[i]; 				 			    		
				    		for(j=0;j < Object.keys(result).length; j++ )
							{
						  		
						        var champ = Object.keys(result)[j];
						        var champ2 = Object.keys(result)[j+1];

						        tab.push(result[champ2]);
						      			       	
						        j++;
						  	}	
						}

						for(p=0; p < tab.length; p++)
						{

						    $('#'+tab[p]).remove();    

						}


						for(p=0; p < tab.length; p++)
						{

							$('#results').append('<div onclick="getId(this)" class="auto" id='+tab[p]+'>'+tab[p]+'</div>');    

						}	       
			    	}

				}
				else
				{	
					$("#result-search").remove();
					$("#erreur").fadeOut();
					$("#erreur").fadeIn().text('Aucun résultat');
					$("#erreur").css({"text-align" : "center", "color": "white", "font-size":"30px","margin-top": "2%", "font-weight":"bold", "text-shadow": "black 0.1em 0.1em 0.2em"});
				}
			}
		});
}



$(document).ready(function(){


	autocompletion=0;
	$("#recherche").click(function(){
  	
		

		search = $("#search").val();
		url = "fonctions/research.php";
		
		if(search.length > 2)
		{
	  		ajax();	
	  	}	
	  	
		});

	$("#recherche_barre").click(function(){
  	
		search = $("#search_barre").val();
		url = "fonctions/research.php";

		var url = window.location.pathname;

		if (url != "/autocompletion/index.php" && url != "/autocompletion/")
		{
			document.location.href = "../recherche.php/?search="+search;
		}
		else
		{
			document.location.href = "sources/recherche.php/?search="+search;
		}

	  	
	});	

	$("#accueil").click(function(){

			var url = window.location.pathname;

			if (url != "/autocompletion/index.php" && url != "/autocompletion/")
			{
				document.location.href = "../../";
			}
			else
			{
				document.location.href = "";
			}
			
	});

	$("#search").click(function(){

		 $("#search_barre").val("");
		 $('#results').empty();
	});


	$( "#search_barre" ).focus(function() {

	var keylogger = document.getElementById('search_barre');
	window.addEventListener('keydown', function(event){
   
    var key = event.key;

    search = $("#search_barre").val();

    var url_current_page = window.location.pathname;

	if (url_current_page != "/autocompletion/index.php" &&  url_current_page != "/autocompletion/")
	{
		url = "../../fonctions/research.php";	
	}
	else
	{
		url = "fonctions/research.php";
	}

	if((search.length > 1)&&(key != "Backspace") && (key != "CapsLock") &&(key != "Enter") && (key != ""))
	{
		autocompletion=1;
    	ajax();
    }
	
		});
	});

	$("main").click(function(){

		$('#results').empty();

	});

	$(".auto").focus(function(){

		console.log("ok");

	});



	
});

	function getId(monId) {  

	id=monId.id;
	$("#search_barre").val(id);     
	$('#results').empty();
	
}




            
           
 
  
	
   




