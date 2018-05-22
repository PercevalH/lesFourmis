var gold = 0;
var brownies = 0;

function init() {
	$.get("getRessources.php", function(data){
			var ressources = JSON.parse(data);				
			gold = ressources.Gold;
            brownies = ressources.Brownies;            
			});	
	}


$(function() {
	init();
    setInterval(function(){
        gold+=1;
		brownies+=0.2;
        $("body").html("Gold : " + gold + " Brownies : " + brownies);
    },1000);
});