<?php
/*
Template Name: Template "Announcements page"
*/
?>

<?php get_header(); ?>

<!-- HERO SECTION -->
<div class="site-hero-2">
   <div class="page-title">
      <div class="big-title montserrat-text uppercase border-bottom">Fundacja <br> Nadzieja Rodzinie
      </div>
   </div>
</div>

<div class="row0">
   <div class="section-title" data-aos="fade-up">
      <span>Ogłoszenia</span>
   </div>
</div>

<!-- ANNOUNCEMENTS SECTION -->
<div class="announcements">
   <div class="container">
      <div class="announcements-container">

         <div class="grid grid-col-3">
         <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                  <a href="<?php the_permalink(); ?>" data-aos="fade-up">
                     <div class="announcements-container-card" data-aos="fade-up">
                        <div class="announcements-container-card-image">
                           <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="announcements-container-card-text">
                           <h4><?php the_title(); ?></h4>
                        </div>
                     </div>
                  </a>

         <?php endwhile; ?>
         </div>
      </div>
   </div>
</div>

<div class="container">
   <div class="pagination">
      <?php
      echo paginate_links(array(
         'screen_reader_text'    => ' ',
         'mid_size'              => 5,
         'prev_text'             => '<ion-icon name="chevron-back-outline"></ion-icon>',
         'next_text'             => '<ion-icon name="chevron-forward-outline"></ion-icon>',
      ));
   endif;
      ?>
   </div>
</div>

<?php get_footer(); ?>
