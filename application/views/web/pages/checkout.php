

<!-- <div class="main">
    <div class="content" style="text-align: center">
        <div class="register_account" style="text-align:center;display:inline-block;float: none">
            <h3>Opciones de Pago</h3>
            <style type="text/css">
                #result{color:red;padding: 5px}
                #result p{color:red}
            </style>
            <div id="result">
                <p><?php echo $this->session->flashdata('message'); ?></p>
            </div>
            <form method="post" action="<?php echo base_url('save/order');?>" style="text-align: left">
                <span><input type="radio" name="payment" value="cashon"/>Pago contra entrega</span><br/>
                <span><input type="radio" name="payment" value="ssl"/>Tarjeta de crédito o débito</span><br/>
                <span><input type="radio" name="payment" value="paypal"/>Paypal</span><br/><br/>
                <div class="search"><div><button class="grey">Enviar</button></div></div>
            </form>
           
        </div>  	
        <div class="clear"></div>
    </div>
</div> -->

<div class="main">
    <div class="content" style="text-align: center">
        <div class="register_account" style="text-align:center;display:inline-block;float: none">
            <h3>Opciones de Pago</h3>
            <style type="text/css">
                #result{color:red;padding: 5px}
                #result p{color:red}
            </style>
            <div id="result">
                <p><?php echo $this->session->flashdata('message'); ?></p>
            </div>
            <form method="post" action="<?php echo base_url('save/order');?>" style="text-align: left">
                <span><input type="radio" name="payment" value="cashon"/>Pago contra entrega</span><br/>
                <span><input type="radio" name="payment" value="ssl"/>Tarjeta de crédito o débito</span><br/>
                <span><input type="radio" name="payment" value="paypal"/>Paypal</span><br/><br/>

                <!-- Aquí es donde se incluiría la integración con Stripe -->
                <?php
                // Código para manejar el pago con tarjeta de crédito o débito usando Stripe
                require_once 'ruta/a/tu/vendor/autoload.php'; // Ruta al archivo autoload.php de Stripe
                \Stripe\Stripe::setApiKey('TU_CLAVE_SECRETA_DE_STRIPE');

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $selectedPaymentMethod = $_POST['payment'];
                    if ($selectedPaymentMethod === 'ssl') {
                        try {
                            $charge = \Stripe\Charge::create([
                                'amount' => 1000, // El monto en centavos
                                'currency' => 'usd', // La moneda (puedes cambiarla)
                                'source' => $_POST['stripeToken'], // Token de la tarjeta obtenido con Stripe.js
                                'description' => 'Pago con tarjeta' // Descripción opcional
                            ]);
                            $paymentMessage = "Pago exitoso. ID de la transacción: " . $charge->id;
                        } catch (\Stripe\Exception\CardException $e) {
                            $paymentMessage = $e->getError()->message;
                        } catch (\Stripe\Exception\InvalidRequestException $e) {
                            $paymentMessage = $e->getError()->message;
                        }
                        echo '<div id="result"><p>' . $paymentMessage . '</p></div>';
                    } else {
                        // Lógica para otros métodos de pago
                        // ...
                    }
                }
                ?>
                <!-- Fin de la integración con Stripe -->

                <div class="search"><div><button class="grey">Enviar</button></div></div>
            </form>
           
        </div>  	
        <div class="clear"></div>
    </div>
</div>
