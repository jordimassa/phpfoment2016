fs = require('fs');
console.log("hola");
fs.readFile("intro.pdf", function(error, archivo){
   console.log("archivo");
})
console.log("ya!"); 