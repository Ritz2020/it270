<?php 
get_header(); 
/* Template Name: About Page */
?>
<div id="hero">
<img src="<?php echo get_template_directory_uri(); ?>/images/yellowstone-inner.jpg" alt="Yellowstone">
</div>

<div id="wrapper">
<main>
<!-- the index.php is assigned to the blog page!!! -->
<!-- our question of the day is If we have any posts or pages, show them!!!-->
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
</main>

<aside id="secondary" class="widget-area">
    <?php dynamic_sidebar('sidebar-about'); ?>
</aside>
</div>
<!-- close wrapper -->

<?php
get_footer();
?>