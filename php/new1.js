function pokemon("name","pv","pvMAX","force","resistance","attaques")
{
	
	this.name=name;
	this.pv=pv;
	this.pvMAX=pvMAX;
	this.force=force;
	this.resistance=resistance;
	this.attaques=attaques;
		
}


pokemon.prototype.attaquer=function(choix,autrePokemon)
{
	var attack=this.attaques[choix];
	attack.lancement(this,autrePokemon);
	
	
}

pokemon.prototype.modifier(NouveauPV)
{
	
	if(NouveauPV>PvMAX)
	{
		NouveauPV=PvMax;

	}
	
	else if(NouveauPV<0)
	{
		NouveauPV=0;	
	}
	
	NouveauPV=this.pv
	
	
	
}

pokemon.prototype.afficher=function()
{
	
	var attackStr='';
	
	
	
	
	
	
}