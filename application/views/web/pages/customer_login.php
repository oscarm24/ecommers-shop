

<div class="main">
    <div class="content" style="text-align: center">
         <div class="login_panel" style="width:400px;text-align:center;display:inline-block;float: none">
            <h3>Clientes existentes</h3>
            <p>Para iniciar sesión completa el siguiente formulario.</p>
            <style type="text/css">
                #result{color:red;padding: 5px}
                #result p{color:red}
            </style>
            <div id="result">
                <p><?php echo $this->session->flashdata('message'); ?></p>
            </div>
            
            <form action="<?php echo base_url('customer/logincheck');?>" method="post">
                <input name="customer_email" placeholder="Ingresa tu correo electrónico" type="text"/>
                <input name="customer_password" placeholder="Ingresa tu cotraseña" type="password"/>
                <p class="note">Si olvidaste tu contraseña ingresa tu correo electrónico y haz click <a href="#"> here</a></p>
                <div class="buttons"><div><button class="grey">Iniciar sesión</button></div></div>
            </form>
        </div>	
        <div class="clear"></div>
    </div>
</div>