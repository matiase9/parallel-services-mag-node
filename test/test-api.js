var expect  = require('chai').expect;
var request = require('request');

it('Check Product List', function(done) {
    request('http://localhost:3600' , function(error, response, body) {
        //expect(body).to.equal('Hello World');

        // Open list id from file 
        // use service /product/update and send only 200 ids
        // Check Information in Magento
        // Check Information in ES
        // If the information is the same return
        
        done();
    });
});