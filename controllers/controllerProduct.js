let connectionServices = async (id) => {
    try {
        // for 25 each
            // Function to Connect to endpoint Magento (GET)

            // first oauth connection with client credentials
            // API magento core ({localhost}/api/rest/products/{id})
            // productDetails = URL /product/{id}   
        //end for
    } catch(e) {
        console.log(e);
    }
    return productDetails;
};

module.exports = {
    async threadOne(id) {
        return await connectionServices(id);
    },

    async threadTwo() {
        return await connectionServices(id);
    },

    async threadThree() {
        return await connectionServices(id);
    },

    async threadFour() {
        return await connectionServices(id);
    }
};