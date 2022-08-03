const stripe = require('stripe')('sk_test_4eC39HqLyjWDarjtT1zdp7dc');

const price = await stripe.prices.create({
  unit_amount: 1200,
  currency: 'usd',
  product: 'prod_M9hdc4A9AIz1xF',
  price: 600
},
);

$(document).ready( function () {
    $('#table_id').DataTable({
        'ajax': './data/data.json',
        'columns': [
            {'data': 'unit_amount'},
            {'data': 'currency'},
            {'data': 'product'},
            {'data': 'price'}
        ]
});
} );