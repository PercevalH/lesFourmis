class Fourmis{
	
let _role;
let _pdv;
let _force;
let _defense;
let _img;
let _tempsCreation;
let _cout;
let _niveauReine;

	function ouvriere(){
		this._role = "ouvriere";
		this._pdv = 10;
		this._force = 2;
		this._defense = 5;
		this._img = "#";
		this._tempsCreation = 10;
		this._cout = 1;
		this._niveauReine = 1;
	}
	
	function construct(role, pdv, force, defense, img, tempsCreation, cout, niveauReine){
		this._role = role;
		this._pdv = pdv;
		this._force = force;
		this._defense = defense;
		this._img = img;
		this._tempsCreation = tempsCreation;
		this._cout = cout;
		this._niveauReine = niveauReine;
	}
}