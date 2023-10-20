

<div class="main">
    <div class="content" style="text-align: center">
        <div class="register_account" style="text-align:center;display:inline-block;float: none">
            <h3>Registrar nueva cuenta</h3>
            <style type="text/css">
                #result{color:red;padding: 5px}
                #result p{color:red}
            </style>
            <div id="result">
                <p><?php echo $this->session->flashdata('message'); ?></p>
            </div>
            <form method="post" action="<?php echo base_url('customer/save');?>">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <div>
                                    <input type="text" name="customer_name" placeholder="Digite su Nombre">
                                </div>

                                <div>
                                    <input type="text" name="customer_password" placeholder="Digite su Contraseña">

                                </div>

                                <div>
                                    <input type="text" name="customer_city" placeholder="Digite su Ciudad">
                                </div>
                                <div>
                                    <input type="text" name="customer_phone" placeholder="Digite su Teléfono">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input type="text" name="customer_email" placeholder="Digite su Correo">
                                </div>
                                        

                                <div>
                                    <input type="text" name="customer_address" placeholder="Digite su Direccion">
                                </div>
                                
                                <div>
                                    <select id="country" name="customer_country" class="frm-field required">
                                        <option value="null">Seleccionar país</option>         
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Belgica</option>
                                        <option value="Aruba">Brasil</option>
                                        <option value="Australia">Bolivia</option>
                                        <option value="Austria">España</option>
                                        <option value="Azerbaijan">El Salvador</option>
                                        <option value="Bahamas">Estados Unidos</option>
                                        <option value="Bahrain">Francia</option>
                                        <option value="Bangladesh">Suecia</option>
                                        <option value="Netherland">Suiza</option>
                                        <option value="USA">Turquia</option>

                                    </select>
                                </div>		

                                <div>
                                    <input type="text" name="customer_zipcode" placeholder="Digite Código Postal">
                                </div>
                            </td>
                        </tr> 
                    </tbody></table> 
                <div class="search"><div><button class="grey">Crear Cuenta</button></div></div>
                <p class="terms">Al hacer click en crear cuenta acepta <a href="#">Terminos &amp; Conditiones</a>.</p>
                <div class="clear"></div>
            </form>
        </div>  	
        <div class="clear"></div>
    </div>
</div>