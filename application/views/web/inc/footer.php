  
</div>
<div class="footer">
    <div class="wrapper">	
        <div class="section group">
            <div class="col_1_of_4 span_1_of_4">
                <h4>Información</h4>
                <ul>
                    <li><a href="#">Acerca de</a></li>
                    <li><a href="#">Servicio al cliente</a></li>
                    <li><a href="#"><span>Búsqueda advanzada</span></a></li>
                    <li><a href="#"><span>Contáctanos</span></a></li>
                </ul>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h4>Porque nosotros</h4>
                <ul>
                    <li><a href="about.html">Acerca de</a></li>
                    <li><a href="faq.html">Servicio al cliente</a></li>
                    <li><a href="#">Politicas de privacidad</a></li>
                    <li><a href="preview.html"><span>Terminos y condiciones</span></a></li>
                </ul>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h4>Mi cuenta</h4>
                <ul>
                    <li><a href="contact.html">Iniciar sesion</a></li>
                    <li><a href="index.html">Ver carrito</a></li>
                    <li><a href="#">Mi lista de deseos</a></li>
                    <li><a href="faq.html">Ayuda</a></li>
                </ul>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h4>Contáctanos</h4>
                <ul>
                    <li><span><?php echo get_option('site_contact_num1');?></span></li>
                    <li><span><?php echo get_option('site_contact_num2');?></span></li>
                </ul>
                <div class="social-icons">
                    <h4>Social media</h4>
                    <ul>
                        <li class="facebook"><a href="<?php echo get_option('site_facebook_link');?>" target="_blank"> </a></li>
                        <li class="twitter"><a href="<?php echo get_option('site_twitter_link');?>" target="_blank"> </a></li>
                        <li class="googleplus"><a href="<?php echo get_option('site_google_plus_link');?>" target="_blank"> </a></li>
                        <li class="contact"><a href="<?php echo get_option('site_email_link');?>" target="_blank"> </a></li>
                        <div class="clear"></div>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copy_right">
            <p><b>&copy; Derechos Reservados 2023</b></p>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear' 
         };
         */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
<link href="<?php echo base_url()?>assets/web/css/flexslider.css" rel='stylesheet' type='text/css' />
<script defer src="<?php echo base_url()?>assets/web/js/jquery.flexslider.js"></script>
<script type="text/javascript">
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });
</script>
</body>
</html>
