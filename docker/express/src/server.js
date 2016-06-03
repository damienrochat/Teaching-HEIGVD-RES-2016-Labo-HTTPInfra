
var express = require('express');
var http = require('http');
var faker = require('Faker');
var os = require('os');

var app = express();

var interfaces = os.networkInterfaces();
var addresses = [];
for (var k in interfaces) {
    for (var k2 in interfaces[k]) {
        var address = interfaces[k][k2];
        if (address.family === 'IPv4' && !address.internal) {
            addresses.push(address.address);
        }
    }
}

app.get('/person.json', function(req, res) {

    var response = {
        'image': faker.Image.cats(),
        'name': faker.Name.findName(),
        'description': faker.Lorem.paragraph(),
        'addresses': addresses
    };

    console.log('Sending', response);
    res.json(response);
});

app.listen(3000);

console.log('Server is up');
