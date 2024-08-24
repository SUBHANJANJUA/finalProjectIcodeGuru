<?php //echo get_template_directory_uri();
  //bloginfo('template_directory');
 ?>










<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
<?php endwhile; endif; ?>








