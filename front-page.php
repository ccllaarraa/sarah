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
        <?php
            $detail = get_field('project_detail');
            if( $detail ): ?>
                <div class="works-left-cat">  <?php echo $detail['category_name']; ?></div>
                <div class="works-left-detail">  <?php echo $detail['detail']; ?></div>
            <?php endif; ?>
    </div>

    <div class="works-content">

    <?php if( have_rows('block') ): ?>
         <?php while ( have_rows('block') ) : the_row(); ?>
           
         <!-- add image and caption -->
         <?php if( get_row_layout() == 'add_an_image' ): ?>
            <?php if( have_rows('one_image') ): ?>
                <?php while( have_rows('one_image') ): the_row(); 

                    // Get sub field values.
                    $image = get_sub_field('the_image');
                    $caption = get_sub_field('the_caption'); 
                ?>

                <div class="image-ctn">
                    <img class="single-image" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                    <span><?php echo $caption; ?> </span>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
        <?php endif; ?>



        <!-- add paragraph -->
        <?php if( get_row_layout() == 'add_a_paragraph' ): 
             $paragraph = get_sub_field('paragraph');
            ?>
           <div class="paragraph">
              <?php echo $paragraph; ?> 
           </div>

        <?php endif; ?>



           <!-- add slider -->
    <?php if( get_row_layout() == 'add_a_slider' ): ?>
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
        <?php endif; ?>


        <!-- add video and caption -->
        <?php if( get_row_layout() == 'add_a_video' ): ?>
            <?php if( have_rows('video') ): ?>
                <?php while( have_rows('video') ): the_row(); 

                    // Get sub field values.
                    $image = get_sub_field('the_video');
                    $caption = get_sub_field('the_video_caption'); 
                ?> 
                
             <div class="video-ctn"> 
                <div class="embed-ctn">
                    <?php echo  $image; ?>
                 </div>
                 <span><?php echo $caption; ?> </span>
            </div>  

            <?php endwhile; ?>
        <?php endif; ?>
    <?php endif; ?>




             <!-- add link -->
            <?php if( get_row_layout() == 'add_a_link' ): 
                 $url = get_sub_field('link');
                 $link = get_sub_field('link_text');
               
                 ?>

        <div class="links"> 
            <div class="link-circle"></div>
             <a class="button" target="_blank" href="<?php echo esc_url( $url ); ?>"> <span class="link-or-url"><?php echo $link; ?></span></a>
             </div> 
            <?php endif; ?>



        






        <?php endwhile; ?>
    <?php endif; ?>






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
