<?php get_header(); ?>

<div class="container page">
  <div class="row">
    
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="col-md-8 conteudo-page">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
    <?php endwhile; else: ?>
    <?php endif; ?>

    <div class="col-md-4 sidebar">
            <?php 
              if (is_active_sidebar('siderbar-contato') ) {
                  dynamic_sidebar('siderbar-contato');
              }
             ?>
           
           </div>

  </div>
</div>

<?php get_footer(); ?>