<?php get_header(); ?>
<!-- the index.php is assigned to the blog page!!! -->
<!-- blog container for all of our posts -->
<!-- our question of the day is If we have any posts or pages, show them!!!-->
<div id="wrapper">

<!-- add wrong page image -->
<main>
<h2>This is somewhat embarrassing, isn't it?</h2>
<p>It looks like nothing was found in this location! Maybe try a different search?</p>
<?php get_search_form(); ?>
<h3>Or, please feel free to browse our pages</h3>
<?php wp_list_pages(); ?>

</main>
<aside>
<p>This is my 404 page!</p>
</aside>

</div>
<!-- close wrapper -->

<?php
get_footer();
?>