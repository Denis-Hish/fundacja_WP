<?php
/*
Template Name: Template "About page"
*/
?>

<?php get_header(); ?>

 <!-- HERO SECTION  -->
 <div class="site-hero-2">
      <div class="page-title">
         <div class="big-title montserrat-text uppercase border-bottom">Fundacja <br> Nadzieja Rodzinie
         </div>
      </div>
   </div>

   <section>
      <div class="container">
         <div class="row flex-center" data-aos="fade-up">
            <div class="col-md-8">
               <div class="section-title" style="text-align:left;float:left;width:100%;margin-bottom:0">
                  <span>O nas</span>
               </div>

               <div class="section-title-li">
                  <p>Fundacja „Nadzieja Rodzinie” została utworzona w 2009 roku. Skupiamy się na wdrażaniu i wspieraniu
                     nowatorskich rozwiązań dotyczących różnych dziedzin życia społecznego. Naszą misją jest niesienie
                     wielowymiarowej pomocy w zakresie:</p>
                  <ul>
                     <li>Ochrony życia rodzinnego</li>
                     <li>Profilaktyki społecznej</li>
                     <li>Wspierania osób bezrobotnych ze szczególnym uwzględnieniem młodzieży zagrożonej wykluczeniem
                        społecznym</li>
                     <li>Poprawy funkcjonowania osób niepełnosprawnych poprzez zatrudnienie, rehabilitację, aktywizację
                        społeczną i kulturalną, pomoc w życiu codziennym i wiele innych</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="no-mb">
      <div class="container">
         <div class="row">
            <div class="col-md-6 mb-100" data-aos="fade-up">
               <div class="section-title" style="text-align:left;float:left;width:100%;margin-bottom:0">
                  <span>Fundator</span>
               </div>

               <p><a href="https://nadziejarodzinie.org.pl/" target="_blank" rel="noopener noreferrer">Stowarzyszenie
                     Nadzieja Rodzinie</a> utworzyło Fundację Nadzieja Rodzinie, aby zwiększyć efektywność
                  niesionej pomocy oraz poszerzyć możliwości realizacji celów statutowych</p>
            </div>
            <div class="col-md-6 mb-100" data-aos="fade-up">
               <div class="section-title" style="text-align:left;float:left;width:100%;margin-bottom:0">
                  <span>Nasze zasady</span>
               </div>

               <div class="section-title-ol">
                  <ol>
                     <li>Skuteczność i rzetelność, wynikająca z profesjonalizmu i poczucia misji</li>
                     <li>Troska o wspólne dobro, poszanowanie człowieka i jego praw</li>
                     <li>Przejrzystość i jawność działań dla wszystkich zainteresowanych</li>
                  </ol>
               </div>

            </div>
         </div>
      </div>
   </section>

   <section class="no-mb">
      <div class="container">
         <div class="row">
            <div class="col-md-6 mb-100" data-aos="fade-up">
               <div class="section-title" style="text-align:left;float:left;width:100%;margin-bottom:0">
                  <span>Rada Fundacji</span>
               </div>

               <div class="section-title-li">
                  <!-- <ul>
                     <li>Andrzej Drapała – Przewodniczący Rady Fundacji</li>
                     <li>Mirosław Barcicki</li>
                     <li>Adam Massalski</li>
                     <li>Wojciech Góźdź</li>
                     <li>Edyta Laurman-Jarząbek</li>
                  </ul> -->
                  <?php the_field('rada_fundacji'); ?>
               </div>
            </div>
            <div class="col-md-6 mb-100" data-aos="fade-up">
               <div class="section-title" style="text-align:left;float:left;width:100%;margin-bottom:0">
                  <span>Zarząd Fundacji</span>
               </div>
               <div class="section-title-li">
                  <!-- <ul>
                     <li>Renata Wicha - Prezes Zarządu</li>
                     <li>Andrzej Drapała - Prokurent</li>
                  </ul> -->
                  <?php the_field('zarząd_fundacji'); ?>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section>
      <div class="container">
         <div class="row flex-center" data-aos="fade-up">
            <div class="col-md-8">
               <div class="section-title" style="text-align:left;float:left;width:100%;margin-bottom:0">
                  <span>Dokumenty</span>
               </div>
               <p>Fundacja „Nadzieja Rodzinie” działa na podstawie przepisów:</p>
               <div class="section-title-li">
                  <ul>
                     <li><a href="<?php echo get_bloginfo('template_directory'); ?>/assets/resource/D20202167L.pdf" target="_blank" rel="noopener noreferrer">Ustawy z
                           dnia 18 listopada 2020 roku o fundacjach (Dz. U. z 2020 r. poz. 2167 z późn. zm.)</a></li>
                     <li><a href="https://isap.sejm.gov.pl/isap.nsf/DocDetails.xsp?id=wdu20030960873" target="_blank"
                           rel="noopener noreferrer"> Ustawy z dnia 24 kwietnia 2003 roku o działalności pożytku
                           publicznego i o wolontariacie (Dz.
                           U. z 2003 r. Nr 96, poz. 873 z późn. zm.)</a></li>
                     <li>Statutu oraz innych aktów wewnętrznych</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="no-mb">
      <div class="container">
         <div class="row flex-center mb-100" data-aos="fade-up">
            <div class="col-md-10">
               <div class="section-title" style="text-align:left;float:left;width:100%;margin-bottom:0">
                  <span>Zachęcamy do zapoznania się z treścią dokumentów:</span>
               </div>

               <div class="section-title-li">
                  <ul>
                     <li><a href="<?php echo get_bloginfo('template_directory'); ?>/assets/resource/Statut2022.pdf" target="_blank" rel="noopener noreferrer">Statut
                           Fundacji Nadzieja Rodzinie</a>
                     </li>
                     <li><a href="<?php echo get_bloginfo('template_directory'); ?>/assets/resource/Sprawozdanie2020.pdf" target="_blank"
                           rel="noopener noreferrer">Sprawozdanie merytoryczne i finansowe z działalności Fundacji
                           Nadzieja Rodzinie</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>

<?php get_footer(); ?>