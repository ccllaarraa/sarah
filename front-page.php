<?php
get_header();
?>



<div class="works">


<?php 

$loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 100 ) ); 
while ( $loop->have_posts() ) : $loop->the_post();

?>
<div class="work">
    <div class="works-left">
        <span class="works-left-title">  <?php  the_title(); ?></span>
        <div class="works-left-cat">  <?php   the_field("category_name"); ?></div>
        <div class="works-left-detail">  <?php    the_field("detail"); ?></div>
    </div>

    <div class="works-content">

        <?php
           
                    the_content();
              

        
        ?>

<?php if( have_rows('slides') ): ?>
    <div id="slider" class="flexslider">
         <ul class="slides">
            <?php while( have_rows('slides') ): the_row(); 
            
            $image = get_sub_field('image');
            $imageurl = $image['sizes']['slider'];
            $title = get_sub_field('title');
            
            ?>

            <li>   <img src="<?php echo $imageurl; ?>" alt="<?php echo $title; ?>"> 
            <p class="flex-caption"><?php echo $title; ?></p>
        
        </li>
          
            
            <?php endwhile; ?>
        </ul>
    </div>

    <div id="carousel" class="flexslider">
        <ul class="slides">
            <?php while( have_rows('slides') ): the_row(); 
            
            $image = get_sub_field('image');
            $imageurl = $image['sizes']['slider'];
        
            
            ?>

            <li>  <img src="<?php echo $imageurl; ?>"></li>
        
            
            <?php endwhile; ?>
        </ul>
    </div>
<?php endif; ?>






    </div>
    </div>
    <?php endwhile; ?>
  </div>
 




<?php
get_footer();
?>  
