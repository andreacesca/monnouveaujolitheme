<?php get_header(); ?>
<div class="main">
    <h1>JE SUIS SEARCH</h1>
    <p>Vous avez cherché " <?php echo esc_html( get_search_query( false ) ); ?> ". Voici les résultats :</p>  <?php get_template_part('loop'); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>