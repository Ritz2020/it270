<?php get_header(); ?>
<!-- the index.php is assigned to the blog page!!! -->
<!-- blog container for all of our posts -->
<!-- our question of the day is If we have any posts or pages, show them!!!-->
<div id="hero">
<img src="<?php echo get_template_directory_uri(); ?>/images/yellowstone-inner.jpg" alt="Yellowstone">
</div>
<div id="wrapper">
<main>

<?php if (have_posts() ) : ?>
<!--we need to show the posts by using a while loop in the world of PHP!!!  -->
<?php while(have_posts()) : the_post();?>
<article class="post">
<h2 class="title">
 <?php the_title(); ?>
</h2>

<div class="meta">
<span><b> Posted By:</b><?php the_author(); ?> </span>
<span><b> Posted On:</b><?php the_time('F j, Y g:i a'); ?> </span>
</div>
<!-- close meta -->

<div class="not-thumbnail">
    <?php if(has_post_thumbnail()): ?>
    
    <?php the_post_thumbnail(); ?>
    
    <?php endif ?>
</div>
<!-- end thumbnail -->

<?php the_content() ; ?>


</article>
<span class="next-previous">
<?php (previous_post_link()) ? '%link' : ''; ?> &nbsp; &nbsp; <?php (next_post_link()) ? '%link' : ''; ?>
</span>
<?php endwhile ; ?>

<?php else : ?>
<h2>
<?php echo  wpautop('Sorry, no posts were found!'); ?>
</h2>
<?php endif; ?>
<?php comments_template(); ?>
</main>
<!-- <aside>

</aside> -->
<?php get_sidebar(); ?>
</div>
<!-- close wrapper -->

<?php
get_footer();
?>