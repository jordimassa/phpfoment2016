var fs = require("fs");
var zlib = require('zlib');

// Create a readable stream
var readerStream = fs.createReadStream('output.txt');

// Create a writable stream
var writerStream = fs.createWriteStream('copy.txt');

// Pipe the read and write operations
// read input.txt and write data to output.txt
readerStream.pipe(writerStream);

// Compress the file input.txt to input.txt.gz
fs.createReadStream('output.txt')
   .pipe(zlib.createGzip())
   .pipe(fs.createWriteStream('output.txt.gz'));
  
console.log("File Compressed.");

console.log("Program Ended");