var friends = new Object();

friends.bill = new Object();
friends.steve = new Object();

friends.bill.firstName = "Bill";
friends.bill.lastName = "Gattes";
friends.bill.number = "(75) 888-8888";
friends.bill.address = ['Rua Aa','Bairro B'];



friends.steve.firstName = "Steve";
friends.steve.lastName = "Jobs";
friends.steve.number = "(75) 888-8888";
friends.steve.address = ['Rua Aa','Bairro B'];


var list = function(friends){
    for (var key in friends) {
        console.log(friends[key].firstName+' '+friends[key].lastName);
        
    }
};

var search = function(name){
    for (var key in friends) {    	
        if(friends[key].firstName === name){        	
            //console.log(friends[key]);
            return friends[key];        
        }        
    }   
};

list(friends);
var a = search("Steves");
if(a)
	console.log(a.number);
else
	console.log("friend não encontrado");

/*
 try {
console.log(a.number);
}
catch (e) {
	if (e.name.toString() == "TypeError") 
		console.log("Erro");
} finally {};

*/