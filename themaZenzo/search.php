<?php
// header

get_header();
?>
<div class="container">
  <main>
    <div>
<h2>De zoekresutaten voor <em class="zoek-term-in-kop"><?php echo get_search_query(); ?><em></h2>
<?php
// de wordpress loop
if (have_posts()) :
  while (have_posts() ) : the_post()
  ?>

  <article class="bericht">


  <a href="<?php the_permalink() ?>"><h3><?php the_title ?></h3></a>
  <h2><?php the_title(); ?></h2>
  <?php the_content() ?>

</article>
<!-- einde container -->
<?php endwhile;
else :
  echo "<p>Er zijn geen berichten gevonden voor de zoekterm</p> <em class='zoek-term-in-kop'>". get_search_query(). "<em>";
endif;


?>
</div>
<aside>
  <?php dynamic_sidebar('widget_aside' ); ?>
</aside>
</main>
</div>
<?php

// de wordpress loop stopt
get_footer();
 ?>
