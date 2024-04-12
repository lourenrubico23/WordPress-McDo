<?php
/*  Template Name:  Basic template */
?>

<?php get_header()?>
<section class="banner banner--nxtgen" style="background-image: url(<?php echo get_field('banner')?>)"></section>

<?php the_content()?>
<?php get_footer()?>
