
$.ajax({
url:'index.php'
method:POST

})

.done(function(data){
	
 
 
	
	
	
	
})

function pokemon(name,pv,pvMAX,force,resistance,attaques)
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
	var attack=this.attaques[key];
	attack.lancement(this,autrePokemon);
	
	
		
}

pokemon.prototype.modifier=function(nouveauPV)
{
	if(nouveauPV<0)
	{
		nouveauPV=0;
	}
	
	else if(nouveauPV>pvMAX)
	{
		nouveauPV=pvMAX;
	}
	
	nouveauPV=this.pv;
		
}


pokemon.prototype.afficher=function()
{
	
	var attackSTR='';
	for(key in this.attaques)
	{
		var choice=this.attaques[key];
		attackSTR+=key +choice.name
	}
	
}


function attacks(name,force,type)
{
	this.name=name;
	this.force=force;
	this.type=type;

}	
	

	attacks.prototype.lancement(pokemon1,pokemon2)
	{
		alert(pokemon1+'attack'+ this.name)
		switch(this.type)
		{
			
			
			
			
			
			
			
			
		}
		
		
		
		
	}
	
	
	
}