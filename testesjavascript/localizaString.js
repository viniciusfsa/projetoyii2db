/*jshint multistr:true */

text = "Bla Eric bla bla Eric bla bla bla Eric";

var myName = "Eric";
var hits = [];
varContHits = 0;

for(i=0;i<text.length;i++){	
	novoTexto=text.substr(i, text.length);	
	pos=novoTexto.search(myName);
	//console.log("i eh "+i);
	//console.log("pos eh "+i);
	if(pos>0){
	hits[varContHits] = pos + i;
	varContHits++;
	i = i+pos+myName.length;
	}
	
}





if (hits.length === 0) {
	console.log("Seu nome nao foi encontrado!");
} else {
	console.log(hits);
}


