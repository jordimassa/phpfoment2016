var http = require('http');

var visitas=0;

var server = http.createServer(function (peticion, respuesta){
   	console.log(peticion["url"]);
   	//lo hacemos asi por que si metemos la respuesta dentro del if cuando hace la petición del favicon 
   	//queda colgada en estado pendiente
   	if (peticion["url"]!='/favicon.ico') {
   		visitas++;
   	}
   	respuesta.end("Hola DesarrolloWeb.com "+visitas+" "+peticion.connection.remoteAddress);
}); 

server.listen(3000, function(){
   console.log("tu servidor está listo en " + this.address().port);
}); 