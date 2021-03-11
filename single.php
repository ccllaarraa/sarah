<?php

get_header();
?>
 <div class="background"></div>
<div class="od-body grid single">
        <div class="current-time">currently <span id="time"></span></div>


 <a class="back"> <img onclick="history.back(-1)" id="back-home" src="<?php echo THEME_IMG_PATH; ?>/fleche4Fichier4.png" alt="O">
                 <span>back</span>
        </a> 


     

        <div class="livestream-single">
           <?php the_title('<div class="section-title livestream-title-single"><span>', '</span></div>'); ?>
                <div class="livestream-main">
                        <?php the_field('livestream-video'); ?>
                        <?php the_field('livestream-chat'); ?>
                </div>

                        
                <div class="text-center single-about">
               <span> <?php the_field('livestream-about'); ?></span>
                </div>
        </div>
        <div class="arrow-link"><a href="https://rietveldacademie.nl/en/page/16686/open-day-2021" target="_blank"><span>Find more information on the Rietveld Academie website</span>  </a>    <div class="arrow-link--point"> <img src="<?php echo THEME_IMG_PATH; ?>/fleche5Fichier5.png" alt="arrow" ></div> </div>
 

        <div class="footer-image-ctn">
        <img src="<?php the_field('footer_image'); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="footer-image"/>
        </div>
</div>

<?php

get_footer();
?>