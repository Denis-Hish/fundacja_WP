<?php get_header(); ?>

   <section class="error-404 not-found">
      <div class="page-wrapper">

         <ion-icon name="warning-outline"></ion-icon>

         <div class="page-title">
            <h2>Ups! Nie udało się znaleźć tej strony!</h2>
         </div>
            
         <div class="page-content">
            <p>Wygląda na to, że w tej lokalizacji nic nie znaleziono. <br> Może spróbuj któregoś z linków powyżej lub przejdź do strony głównej?</p>
         </div>

         <button>
            <a href="<?php echo home_url(); ?>">STRONA GŁÓWNA</a>   
         </button>
         
      </div>
   </section>

<?php get_footer(); ?>
