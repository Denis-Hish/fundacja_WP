<?php
/*
Template Name: Template "Contact page"
*/
?>

<?php get_header(); ?>

 <!-- HERO SECTION  -->
 <div class="site-hero-2">
      <div class="page-title">
         <div class="big-title montserrat-text uppercase border-bottom">FUNDACJA <br> NADZIEJA RODZINIE
         </div>
      </div>
   </div>

   <div class="row0">
      <div class="section-title" data-aos="fade-up">
         <span>SKONTAKTUJ SIĘ Z NAMI</span>
      </div>
   </div>

   <div class="container">
      <div class="contact-container-con">
         <div class="contact-container-map">

            <div class="google-map" data-aos="fade-up">
               <!-- <iframe class="google-map-map"
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2531.346418144062!2d20.74300297690426!3d50.61338937561799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4717ec518cb3951b%3A0x9e2e02feacd5e73b!2sFundacja%20Nadzieja%20Rodzinie!5e0!3m2!1spl!2spl!4v1680000273460!5m2!1spl!2spl"
                  width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe> -->

                  <iframe class="google-map-map"
                  src="<?php the_field('acf_link_do_mapy'); ?>"
                  width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>

            <div class="contact-adress">

               <div data-aos="fade-up">
                  <a href="<?php the_field('acf_zapr_link_do_mapy'); ?>" target="_blank" rel="noopener noreferrer">
                     <div class="contact-icon-wrapper">
                        <div class="contact-icon-con">
                           <ion-icon name="location-outline"></ion-icon>
                        </div>
                        <div>
                           <div class="contact-title">ZAPRASZAMY DO NAS</div>
                           <div class="contact-subtitle"><nobr><?php the_field('acf_zapr_kod_miejscowosc'); ?>,</nobr> <nobr><?php the_field('acf_zapr_ulica'); ?></nobr></div>
                        </div>
                     </div>
                  </a>
               </div>

               <div data-aos="fade-up">
                  <a href="<?php the_field('acf_koresp_link_do_mapy'); ?>" target="_blank" rel="noopener noreferrer">
                     <div class="contact-icon-wrapper">
                        <div class="contact-icon-con">
                           <ion-icon name="mail-open-outline"></ion-icon>
                        </div>
                        <div>
                           <div class="contact-title">ADRES DO KORESPONDENCJI</div>
                              <div class="contact-subtitle"><nobr><?php the_field('acf_koresp_kod_miejscowosc'); ?>,</nobr>
                           <nobr><?php the_field('acf_koresp_ulica'); ?></nobr></div>
                        </div>
                     </div>
                  </a>
               </div>

               <div data-aos="fade-up">
                  <a href="mailto:<?php the_field('acf_e-mail'); ?>">
                     <div class="contact-icon-wrapper">
                        <div class="contact-icon-con">
                           <ion-icon name="at-outline"></ion-icon>
                        </div>
                        <div>
                           <div class="contact-title">NAPISZ DO NAS:</div>
                           <div class="contact-subtitle"><?php the_field('acf_e-mail'); ?></div>
                        </div>
                     </div>
                  </a>
               </div>

               <div data-aos="fade-up">
                  <a href="tel:<?php the_field('acf_telefon_nonform'); ?>">
                     <div class="contact-icon-wrapper" style="margin-bottom: 0;">
                        <div class="contact-icon-con">
                           <ion-icon name="call-outline"></ion-icon>
                        </div>
                        <div>
                           <div class="contact-title">ZADZWOŃ:</div>
                           <div class="contact-subtitle"><?php the_field('acf_telefon_form'); ?></div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </div>

      <div class="contact-container-nrk" data-aos="fade" data-aos-delay="100">

         <div class="nrk-nip">
            <div class="nrk-icon contact-icon-con">
               <ion-icon name="newspaper-outline"></ion-icon>
            </div>
            <div class="nrk-text">
               <div class="contact-title">NIP</div>
               <div class="cintact-subtitle"><?php the_field('acf_nip'); ?></div>
            </div>
         </div>

         <div class="nrk-line"></div>

         <div class="nrk-nip">
            <div class="nrk-icon contact-icon-con">
               <ion-icon name="apps-outline"></ion-icon>
            </div>
            <div class="nrk-text">
               <div class="contact-title">REGON</div>
               <div class="cintact-subtitle"><?php the_field('acf_regon'); ?></div>
            </div>
         </div>

         <div class="nrk-line"></div>

         <div class="nrk-nip">
            <div class="nrk-icon contact-icon-con">
               <ion-icon name="book-outline"></ion-icon>
            </div>
            <div class="nrk-text">
               <div class="contact-title">KRS</div>
               <div class="cintact-subtitle"><?php the_field('acf_krs'); ?></div>
            </div>
         </div>
      </div>

      <div class="contact-comntainer-iod" data-aos="fade-up">
         <div class="contact-icon">
            <ion-icon name="shield-outline"></ion-icon>
         </div>
         <div>
            <div class="contact-title">IOD</div>
            <div class="cintact-subtitle">
               Inspektor Ochrony Danych – Leon Zięba, kontakt: <a href="mailto:email: iod@snr.org.pl">email:
                  iod@snr.org.pl</a>
               lub pisemnie na adres: Fundacja „Nadzieja Rodzinie"
               <a href="https://goo.gl/maps/dmnkFUWSHWw5XEvr9" target="_blank"><nobr>ul. Mielczarskiego 45,</nobr> <nobr>25-709
                  Kielce</nobr></a><br>
               z dopiskiem „Inspektor Ochrony Danych”.
            </div>
         </div>
      </div>
   </div>

<?php get_footer(); ?>