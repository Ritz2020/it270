<?php get_header(); ?>
<!-- the index.php is assigned to the blog page!!! -->
<!-- blog container for all of our posts -->
<!-- our question of the day is If we have any posts or pages, show them!!!-->
<div id="wrapper">
<main>

<?php if (have_posts() ) : ?>
<!--we need to show the posts by using a while loop in the world of PHP!!!  -->
<?php while(have_posts()) : the_post();?>
<article class="post">
<h2 class="title">
<a href="<?php the_permalink(); ?>">
 <?php the_title(); ?>
</a>
</h2>

<div class="meta">
<span><b> Posted By:</b><?php the_author(); ?> </span>
<span><b> Posted On:</b><?php the_time('F j, Y g:i a'); ?> </span>
</div>
<!-- close meta -->

<div class="thumbnail">
    <?php if(has_post_thumbnail()): ?>
    <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail(); ?>
    </a>
    <?php endif ?>
</div>
<!-- end thumbnail -->

<?php the_excerpt() ; ?>
<span class="block">
    <a href="<?php the_permalink(); ?>"> Read More about <?php the_title(); ?> </a>
</span>


</article>
<?php endwhile ; ?>

<?php else : ?>
<h2>
<?php echo  wpautop('Sorry, no posts were found!'); ?>
</h2>
<?php endif; ?>
</main>
<!-- <aside>

</aside> -->

</div>
<!-- close wrapper -->

<?php
get_footer();
?>