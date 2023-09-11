<?php get_header(); ?>

   <!-- HERO SECTION  -->
   <div class="site-hero-2 site-hero-3 mb-50" data-aos="fade-up">
      <div class="page-title">
         <div class="big-title post-title montserrat-text uppercase border-bottom">
            <?php the_title(); ?>
         </div>
      </div>
   </div>

   <div class="container">
      <div class="row">
         <div class="post-section width-100">
            <div class="post-section-text">
                  <?php the_content(); ?>
            </div>
            <div class="announcements-container-card-date">
               <p><?php echo get_the_date(); ?></p>
            </div>
         </div>
      </div>
   </div>

<?php get_footer(); ?>