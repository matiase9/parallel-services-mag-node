'use strict';
 
const Router = require('express');
const {Product} = require('../model/productRepository');
 
const getServices = (app) => {
    const router = new Router();
    router
        .post('/update', (req, res) => {
            const {threadOne, threadTwo, threadThree, threadFour} = require('./controllerProduct')
            
            async function main() {
                try {
                    let position = 0;
                    // For list product ID of Magento and exist list[position], list[position+1], list[position+2], list[position+3]
                        let id = list[position]; //pop ID from list
                        let id2 = list[position+25]; //pop ID from list
                        let id3 = list[position+50]; //pop ID from list
                        let id4 = list[position+75]; //pop ID from list

                        const response = await Promise.all([threadOne(id), threadTwo(id2), threadThree(id3), threadFour(id4)]);

                        let uri = apiUrl + '/product/populate';
                        // defined oauth credentials
                        await request.post({
                            url: uri,
                            oauth: oauth,
                            body: response,
                            json: true
                        });
                        position = position + 100;
                    // End For
                } catch(e) {
                    console.log(e);
                }
            }; 
            main();

            res.send(console.log('Update Completed'));
        })
       
        .post('/populate', (req, res) => {
            const products = req.body;
            const productRepo = new Product();
            await productRepo.save(products);
            res.send(result);
        });
 
    app.use('/product', router);
};
 
module.exports = getServices;