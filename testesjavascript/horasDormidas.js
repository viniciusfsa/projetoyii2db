var sleepCheck = function (numHours) 
{
if (numHours >= 8 )
{
return ("Você está dormindo o bastante! Talvez até demais!");
}
else{
return ("Vá para a cama!")}
};

horas = Math.floor(Math.random()*15+1);
console.log("Você dormiu "+ horas +" horas." + sleepCheck(horas));
