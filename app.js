// const {threadOne, threadTwo, threadThree, threadFour} = require('./services')

// async function main() {
//     try {
//         let pagination = 0;
//         // Foreach $collection Magento
//             console.time('Time');
//             const response = await Promise.all([threadOne(pagination), threadTwo(pagination), threadThree(pagination), threadFour(pagination)]);
            
//             // SAVE POST to Elastic Search $response
//             // POST /product/poplate
//             pagination++;
//             console.timeEnd('Time');
//         // End Foreach

        
//         // console.log('Rta: ', response[0]);
//         // console.log('Rta: ', response[1]);
//         // console.log('Rta: ', response[2]);
//         // console.log('Rta: ', response[3]);

//     } catch(e) {
//         console.log(e);
//     }
// }; 

// main();


'use strict';

const express = require('express');
const app = new express();
const bodyParser = require('body-parser');
 
// register JSON parser middlewear
app.use(bodyParser.json());
 
require('./controllers/controllerServices')(app);
 
app.listen(3000, () => {
    console.log("Server is up!");
});