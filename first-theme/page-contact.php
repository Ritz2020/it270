<?php 
get_header(); 
/* Template Name: Contact Page */
?>
<div id="hero">
<img src="<?php echo get_template_directory_uri(); ?>/images/yellowstone-inner.jpg" alt="Yellowstone">
</div>

<div id="wrapper">

<?php if (have_posts() ) : ?>
<!--we need to show the posts by using a while loop in the world of PHP!!!  -->
<?php while(have_posts()) : the_post();?>
<?php the_content() ; ?>


<?php endwhile ; ?>

<?php else : ?>
<h2>
<?php echo  wpautop('Sorry, no posts were found!'); ?>
</h2>
<?php endif; ?>



</div>
<!-- close wrapper -->

<?php
get_footer();
?>