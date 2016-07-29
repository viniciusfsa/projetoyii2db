var slaying = true;
var youHit = Math.floor(Math.random() * 2);
var damageThisRound = Math.floor(Math.random()*5+1);
var totalDamage = 0;

while(slaying){
    if(youHit){        
		damageThisRound = Math.floor(Math.random()*5+1);
		console.log("Sua vez de jogar");
		console.log("Seu dano eh "+damageThisRound);		
        totalDamage += damageThisRound;
		console.log("total de dano agora eh "+totalDamage);
        if(totalDamage>=4){
            console.log("Você matou o dragão");
            slaying = false;
        }
        else{
            youHit = Math.floor(Math.random() * 2);
        }
    }
    else{
		console.log("Você perdeu a vez de jogar");
        console.log("YOU LOSE!!!!");
		slaying = false;
		
    }  
    
}