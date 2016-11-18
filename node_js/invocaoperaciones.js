var operaciones = require('./operaciones');
var valora=0;
var valorb=0;
var stdio = require('stdio');
var async = require('async');
var http = require('http');
console.log("El resultado de la suma es: "+ operaciones.suma(2,3)); 
console.log("El resultado de la multimplicacions es: "+ operaciones.multiplicar(2,3)); 
/*process.argv.forEach(function (val, index, array) {
  if (index==2) {
  	valora=parseInt(val);
  } 
  if (index==3) { 
  	valorb=parseInt(val);
  }
});
console.log(valora);
console.log(valorb);
console.log(process.argv[2]);*/
console.log("El resultado de la multiplicacion es: "+ operaciones.multiplicar(process.argv[2],process.argv[3])); 
parametros=process.argv.length-2;
console.log("Parmetros pasados: "+ parametros); 

stdio.question('Primer parametro', function (err, valora) {
	stdio.question('Segundo parametro:', function (err, valorb) {
		console.log("El resultado de la suma por teclado es: " + operaciones.suma(parseInt(valora),parseInt(valorb)));
	});
});
/*var createUser= function(id, callback) {
	callback(null, 
	{
		id: 'user' + id
	});
}

async.time(5, function(n, next) {
	createUser(n, function(err,user) {
		next(err,user);
		console.log(user.id);
	})
})*/
