<?php
// header

get_header();
?>
<div class="container">
  <main>
    <div>

<?php
// de wordpress loop
if (have_posts()) :
  while (have_posts() ) : the_post()
  ?>

  <article class="bericht">
  <h2><?php the_title ?></h2>
  <h2><?php the_title(); ?></h2>
  <?php the_content() ?>

</article>
<!-- einde container -->
<?php endwhile;
else :
  echo "<p>Er zijn geen berichten gevonden.</p>";
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
