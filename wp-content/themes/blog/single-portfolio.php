<?php get_header() ?>

<main class="container">
<aside>
<?php 

$args = array(
     'post_type' => 'portfolio',
     'post_per_page' => '5',
     'orderby' => 'title'
);

$portfolioItens = new WP_Query($args);

while( $portfolioItens->have_posts()) :
       $portfolioItens->the_posts();

?>
<div class="portfolio-item">
  <h3><?php the_title(); ?></h3>
  <?php the_content(); ?>
  <a href="<?php the_permalink() ?>">
  <?php
if(has_posts_thumbnail()){
  the_post_thumbnail('imagem_horizontal');

}
?>
</a>
<p><a href="<?php the_permalink() ?>">Saiba mais</a>
</p>
</div>
<?php endwhile; ?>

</aside>

    
   <section>
    <div class="container">
        <h2> <?php the_title()  ?> </h2>
        <?php the_content() ?>
    
        
    </div>
   </section>
   
    
</main>
<?php get_footer(); ?>