<div class="main">
    <div class="content">
        <div class="support">
            <div class="support_desc">
                <h3><?php echo get_option('contact_title');?></h3>
                <p><?php echo get_option('contact_subtitle');?></p>
                <p><?php echo get_option('contact_description');?></p>
            </div>
            <img src="<?php echo base_url()?>assets/web/images/contact.png" alt="" />
            <div class="clear"></div>
        </div>
        <div class="section group">
            <div class="col span_2_of_3">
                <div class="contact-form">
                    <h2>Contáctanos</h2>
                    <form>
                        <div>
                            <span><label>NOMBRE</label></span>
                            <span><input type="text" value=""></span>
                        </div>
                        <div>
                            <span><label>E-MAIL</label></span>
                            <span><input type="text" value=""></span>
                        </div>
                        <div>
                            <span><label>No. de Teléfono</label></span>
                            <span><input type="text" value=""></span>
                        </div>
                        <div>
                            <span><label>Mensaje</label></span>
                            <span><textarea> </textarea></span>
                        </div>
                        <div>
                            <span><input type="submit" value="ENVIAR"></span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col span_1_of_3">
                <div class="company_address">
                    <h2>Information la tienda SportFitWear :</h2>
                    <p><?php echo get_option('company_location');?></p>
                    <p>Teléfono:<?php echo get_option('company_number');?></p>
                    <p>Email:<a href="mailto:<?php echo get_option('company_email');?>"> <span><?php echo get_option('company_email');?></span></a></p>
                    <p>Social Media: <a href="<?php echo get_option('company_facebook');?>"><span>Facebook</span></a>,
                            <a href="<?php echo get_option('company_email');?>"><span>Twitter</span></a></p>
                </div>
            </div>
        </div>    	
    </div>
</div>
