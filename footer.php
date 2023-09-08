<section class="services mt-100 no-mb">
      <div class="contact-wrapper">
         <div class="container contact" data-aos="fade" data-aos-delay="100" data-aos-anchor-placement="top-bottom">
            <div class="col2-small">

               <a href="https://goo.gl/maps/AF4rcuHXgF7iRZ2H8" target="_blank" rel="noopener noreferrer">
                  <div class="contact-container">
                     <div class="contact-icon">
                        <ion-icon name="location-outline"></ion-icon>
                     </div>
                     <div>
                        <div class="contact-title">ZAPRASZAMY DO NAS</div>
                        <div class="contact-subtitle"><nobr>26-020 Chmielnik,</nobr> <nobr>ul. Witosa 4</nobr></div>
                     </div>
                  </div>
               </a>

               <a href="https://goo.gl/maps/ahLAfPpSC5AkWjvDA" target="_blank" rel="noopener noreferrer">
                  <div class="contact-container">
                     <div class="contact-icon">
                        <ion-icon name="mail-open-outline"></ion-icon>
                     </div>
                     <div>
                        <div class="contact-title">ADRES DO KORESPONDENCJI</div>
                        <div class="contact-subtitle"><nobr>25-709 Kielce,</nobr>
                        <nobr>ul. Mielczarskiego 45</nobr></div>
                     </div>
                  </div>
               </a>

               <a href="mailto:fundacja@snr.org.pl" target="_blank" rel="noopener noreferrer">
                  <div class="contact-container">
                     <div class="contact-icon">
                        <ion-icon name="at-outline"></ion-icon>
                     </div>
                     <div>
                        <div class="contact-title">NAPISZ DO NAS:</div>
                        <div class="contact-subtitle">fundacja@snr.org.pl</div>
                     </div>
                  </div>
               </a>

               <a href="tel:413358755">
                  <div class="contact-container">
                     <div class="contact-icon">
                        <ion-icon name="call-outline"></ion-icon>
                     </div>
                     <div>
                        <div class="contact-title">ZADZWOŃ:</div>
                        <div class="contact-subtitle">(41) 335-87-55</div>
                     </div>
                  </div>
               </a>

            </div>
         </div>

      </div>
   </section>

   <div class="copyright-bgc">
      <div class="container">
         <div class="copyright">
            © <span class="current-year">2023</span> Fundacja Nadzieja Rodzinie<br>
            <a href="<?php echo get_bloginfo('template_directory'); ?> /assets/resource/Obowiazek_informacyjny.pdf" target="_blank">Obowiązek informacyjny</a>
         </div>
      </div>
   </div>

   <!-- UP BUTTON -->
   <a id="button-up"></a>

   <!-- SCRIPTS -->
   <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/jquery-2.1.4.min.js"></script>
   <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/isotope.pkgd.min.js"></script>
   <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/jquery.flexslider.js"></script>
   <!-- <script type="text/javascript" src="assets/js/smoothScroll.js"></script> -->
   <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/jquery.animsition.min.js"></script>
   <!-- <script type="text/javascript" src="assets/js/wow.min.js"></script> -->
   <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/main.js"></script>

   <script type="text/javascript" charset="utf-8">
      $(window).load(function () {
         // new WOW().init();

         // initialise flexslider
         $('.site-hero').flexslider({
            animation: "fade",
            directionNav: false,
            controlNav: false,
            keyboardNav: true,
            slideToStart: 0,
            animationLoop: true,
            pauseOnHover: false,
            slideshowSpeed: 4000,
         });


         // initialize isotope
         var $container = $('.portfolio_container');
         $container.isotope({
            filter: '*',
         });

         $('.portfolio_filter a').click(function () {
            $('.portfolio_filter .active').removeClass('active');
            $(this).addClass('active');

            var selector = $(this).attr('data-filter');
            $container.isotope({
               filter: selector,
               animationOptions: {
                  duration: 500,
                  animationEngine: "jquery"
               }
            });
            return false;
         });
      });
   </script>

   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
   <script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/button-up.js"></script>

   <?php wp_footer(); ?>

</body>

</html>




