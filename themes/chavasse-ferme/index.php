<?php
    /* Main Template File */
    get_header();
?>

<div class="container-fluid">
    <h1><?php echo get_the_title()?></h1>
    <div class="main_content">
        <?php
            // start the loop
            if(have_posts()) :
                while(have_posts()) :
                    the_post();
                    the_content();
                endwhile;
            endif;
        ?>
    </div>
</div>


<?php
    get_footer();
?>
