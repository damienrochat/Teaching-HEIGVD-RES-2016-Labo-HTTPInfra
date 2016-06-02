
var express = require('express');
var http = require('http');
var faker = require('Faker');

var app = express();

app.get('/person.json', function(req, res) {

    var response = {
        'image': faker.Image.cats(),
        'name': faker.Name.findName(),
        'description': faker.Lorem.paragraph()
    };

    console.log('Sending', response);
    res.json(response);
});

app.listen(3000);

console.log('Server is up');
