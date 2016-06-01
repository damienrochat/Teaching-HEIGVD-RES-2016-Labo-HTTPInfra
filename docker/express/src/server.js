
var express = require('express');
var moment = require('moment');
var http = require('http');
var Faker = require('Faker');

var app = express();

app.get('/:number', function(req, res) {

    var response = {
        'version': 1.0,
        'date': moment(Date.now()).format("YYYY-MM-DDThh:mm:ss.SSS"),
        'emails': []
    };

    for (var i = 0; i < req.params.number; ++i) {
        response.emails.push(Faker.Internet.email());
    }

    console.log('Sending', response);
    res.json(response);
});

app.listen(3000);

console.log('Server is up');
