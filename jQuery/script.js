let _role;
let _pdv;
let _force;
let _defense;
let _img;
let _tempsCreation;
let _cout;
let _niveauReine;
let listFourmis = [];
let nbFourmis=0;
let nbTerre = 0;
let nbPierre = 0;
let nbNourriture = 0;
let multiplicateurTerre = 0.15;
let multiplicateurPierre = 0.15;
let multiplicateurNourriture = 0.15;


let nbTerre = 0;
let nbPierre = 0;
let nbNourriture = 0;
let multiplicateurTerre = 0.15;
let multiplicateurPierre = 0.15;
let multiplicateurNourriture = 0.15;


let Fourmis = function(role, pdv, force, defense, img, tempsCreation, cout, niveauReine) {
    this._role = role;
	this._pdv = pdv;
	this._force = force;
	this._defense = defense;
	this._img = img;
	this._tempsCreation = tempsCreation;
	this._cout = cout;

	this._niveauReine = niveauReine;
}
$.extend(Fourmis.prototype, {
      createFourmisD: function() {

        this._role = "ouvriere";
		this._pdv = 100;
		this._force = 2;
		this._defense = 5;
		this._img = "#";
		this._tempsCreation = 10;
		this._cout = 1;
		this._niveauReine = 1;
      }
      
});
function init()

{
		$.get("./php/fourmis.php",function(data){
			let donnees = JSON.parse(data);				
			let nbFourmis = donnees.NbFourmis;
				
		});
}



	
$(function(){
	
	setInterval(function(){ 
		let fourmis = new Fourmis();
		
		nbTerre+= Math.floor(multiplicateurTerre * nbFourmis);		
		nbPierre+= Math.floor(multiplicateurPierre * nbFourmis);
		nbNourriture+= Math.floor(multiplicateurNourriture * nbFourmis);
		
		$("#nbTerre").html(nbTerre);
		$("#nbFourmis").html(nbFourmis);
		$("#nbPierre").html(nbPierre);
		$("#nbNourriture").html(nbNourriture);
		}, 3000);

	$("#btnThomas").on("click",function(){
		console.log("click");
		
		$.ajax({
                    type: "POST",
                    url: './php/fourmis.php',
                    data: {"nbFourmis": 20},
                    success: function(data)
                    {
                       alert("success! Fourmis:" + data);
                    }

        });
	});
	
});



