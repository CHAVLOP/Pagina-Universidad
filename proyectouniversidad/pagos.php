<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://www.paypal.com/sdk/js?client-id=AVdusTwfrtYgLe4cWM1RUSdMDV1wHnnCpclSnsa6WmyNcO_mzRm_Eec4nNX-PTPvGIRguTHmA8WtIbficurrency=MXN"></script>
</head>
<body>
    <div id="paypal-button-container"></div>

    <script>
        paypal.button({
            style:{
                color: 'blue',
                shape: 'pill',
                label: 'pay'
            },
            createOrder: function(data, actions){
                return actions.order.create({
                    purchase_units:[{
                        amount: {
                            value: 100
                        }
                    }]
                });
            },
            onCancel: function(data){

            }
        }).render('#paypal-button-container');
    </script>

    
</body>
</html>