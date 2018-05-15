let _role;
let _pdv;
let _force;
let _defense;
let _img;
let _tempsCreation;
let _cout;
let _niveauReine;
let listFourmis = [];

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
$(function(){
	
	setInterval(function(){ 
		let fourmis = new Fourmis("ouvriere", 100, 2, 5, "#", 10, 1, 1);
		listFourmis.push(fourmis);
		$("#nbFourmis").html(listFourmis.length);
		}, 3000);
	
});
