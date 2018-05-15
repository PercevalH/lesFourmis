class Fourmis{
	var _role;
	var _pdv;
	var _force;
	var _defense;
	var _img;
	var _tempsCreation;
	var _cout;
	var _niveauReine;
	constructor(){
		this._role = "ouvriere";
		this._pdv = 100;
		this._force = 2;
		this._defense = 5;
		this._img = "#";
		this._tempsCreation = 10;
		this._cout = 1;
		this._niveauReine = 1;
	}
	
	constructor(role, pdv, force, defense, img, tempsCreation, cout, niveauReine)
	{
		this._role = role;
		this._pdv = pdv;
		this._force = force;
		this._defense = defense;
		this._img = img;
		this._tempsCreation = tempsCreation;
		this._cout = cout;
		this._niveauReine = niveauReine;
	}
	
	function creerFourmi(role, pdv, force, defense, img, tempsCreation, cout, niveauReine){
		
	}
	
$(function(){
	setInterval(function(){ let fourmisX = new Fourmis(); }, 3000);
});
