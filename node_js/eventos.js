var eventos = require('events'); 

var EmisorEventos = eventos.EventEmitter; 
var ee = new EmisorEventos(); 
/*ee.on('datos', function(fecha,saludo){ 
   console.log(fecha+" "+saludo); 
}); */

ee.on('datos', (fecha,saludo) => { 
   console.log(fecha+"-"+saludo); 
});

setInterval(function(){ 
   ee.emit('datos', Date.now(), "Hola"); 
}, 500); 