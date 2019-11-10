'use strict';

const express = require('express');
const app = new express();
const bodyParser = require('body-parser');
 
app.use(bodyParser.json());
 
require('./controllers/controllerServices')(app);
 
app.listen(3600, () => {
    console.log("Running");
});