console.log(global);
global.setInterval(function() {
  console.log('Hola NodeJS con global');
}, 1000);