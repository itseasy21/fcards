<?php b4st_footer_before();?>

<footer id="footer" class="mt-5">
 <!-- bg-light -->
  <div class="container">

    <div class="bg1 mt-3">
       <p class="text-center" style=""> 
       	   <span>Copyright © 2018 FootballCardsDirect.com </span>
       	</br>
           <a target="_blank" href="https://www.facebook.com/footballcardworld/" style="padding: 6px"><i  style="font-size:25px" class="fab fa-facebook-square"></i></a>
           <a target="_blank" href="https://twitter.com/FootballCardWld" style="padding: 6px"><i  style="font-size:25px" class="fab fa-twitter-square"></i></a>
           <a target="_blank" href="https://www.instagram.com/footballcardsworld/" style="padding: 6px"><i  style="font-size:25px" class="fab fa-instagram"></i></a>
        </p>
    </div>

    <?php if(is_active_sidebar('footer-widget-area')): ?>
    <div class="row pt-5 pb-4" id="footer" role="navigation">
      <?php dynamic_sidebar('footer-widget-area'); ?>
    </div>
    <?php endif; ?>

  </div>

</footer>

<?php //b4st_footer_after();?>

<?php //b4st_bottomline();?>

<?php //wp_footer(); ?>  
</body>
</html>
