

<div class="main">
    <div class="content" style="text-align: center">
        <div class="register_account" style="text-align:center;display:inline-block;float: none">
            <h3>Detalles del envío</h3>
            <style type="text/css">
                #result{color:red;padding: 5px}
                #result p{color:red}
            </style>
            <div id="result">
                <p><?php echo $this->session->flashdata('message'); ?></p>
            </div>
            <form method="post" action="<?php echo base_url('customer/save/shipping/address');?>">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <div>
                                    <input type="text" name="shipping_name" placeholder="Nombre">
                                </div>


                                <div>
                                    <input type="text" name="shipping_city" placeholder="Ciudad">
                                </div>
                                <div>
                                    <input type="text" name="shipping_phone" placeholder="Teléfono">
                                </div>
                                <div>
                                    <input type="text" name="shipping_zipcode" placeholder="Código postal">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input type="text" name="shipping_email" placeholder="Correo eletrónico">
                                </div>
                                        

                                <div>
                                    <input type="text" name="shipping_address" placeholder="Dirección">
                                </div>
                                
                                <div>
                                <select id="country" name="shipping_country" class="frm-field required">
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

                                
                            </td>
                        </tr> 
                    </tbody></table> 
                <div class="search"><div><button class="grey">Enviar</button></div></div>
                <div class="clear"></div>
            </form>
        </div>  	
        <div class="clear"></div>
    </div>
</div>