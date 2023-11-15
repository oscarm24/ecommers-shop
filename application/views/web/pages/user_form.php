

<div class="main">
    <div class="content">
        <div class="login_panel">
            <h3>Iniciar Sesión</h3>
            <p>Ingresa tus credenciales</p>
            <style type="text/css">
                #result{color:red;padding: 5px}
                #result p{color:red}
            </style>
            <div id="result">
                <p><?php echo $this->session->flashdata('messagelogin'); ?></p>
            </div>
            
            <form action="<?php echo base_url('customer/shipping/login');?>" method="post">
                <input name="customer_email" placeholder="Correo electrónico" type="text"/>
                <input name="customer_password" placeholder="Contraseña" type="password"/>
               
                <div class="buttons"><div><button class="grey">Iniciar sesión</button></div></div>
            </form>
        </div>
        <div class="register_account">
            <h3>Nueva cuenta</h3>
            <style type="text/css">
                #result{color:red;padding: 5px}
                #result p{color:red}
            </style>
            <div id="result">
                <p><?php echo $this->session->flashdata('message'); ?></p>
            </div>
            <form method="post" action="<?php echo base_url('customer/shipping/register');?>">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <div>
                                    <input type="text" name="customer_name" placeholder="Nombre">
                                </div>

                                <div>
                                    <input type="text" name="customer_password" placeholder="Contraseña">

                                </div>

                                <div>
                                    <input type="text" name="customer_city" placeholder="Ciudad">
                                </div>
                                <div>
                                    <input type="text" name="customer_phone" placeholder="Teléfono">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input type="text" name="customer_email" placeholder="Correo">
                                </div>
                                        

                                <div>
                                    <input type="text" name="customer_address" placeholder="Dirección">
                                </div>
                                
                                <div>
                                    <select id="country" name="customer_country" class="frm-field required">
                                        <option value="null">Seleccionar país</option>         
                                        <option value="Afghanistan">Costa Rica</option>
                                        <option value="Bangladesh">Guatemala</option>
                                        <option value="Pakistan">El Salvador</option>
                                        <option value="India">Panamá</option>

                                    </select>
                                </div>		

                                <div>
                                    <input type="text" name="customer_zipcode" placeholder="Código postal">
                                </div>
                            </td>
                        </tr> 
                    </tbody></table> 
                <div class="search"><div><button class="grey">Crear cuenta</button></div></div>
                <!-- <p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a>.</p> -->
                <div class="clear"></div>
            </form>
        </div>  	
        <div class="clear"></div>
    </div>
</div>