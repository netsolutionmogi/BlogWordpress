<?php get_header();?>

    <div class="container">
        <div class="row">
          <div class="col-md-8 slider-noticia">
          
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
        
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <?php 
          $posts_slides = new WP_Query(array(
		    //'posts_type' => 'post',
            'category_name' => 'destaques',
            'posts_per_page' => 3
          ));
          $i = 1;
          while($posts_slides->have_posts()) : $posts_slides->the_post();
          ?>
            <div class="item <?php if($i == 1) echo 'active'; ?>">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail-slide', array('class' => 'img-responsive')); ?>
              <div class="carousel-caption visible-lg">
               <h3><?php the_title(); ?></h3>
               <button type="button" class="btn btn-primary"><?php echo rwmb_meta('subtitulo'); ?></button>
              <p><?php echo rwmb_meta('resumo'); ?></p>
              </div>
            </div>
           <?php $i++; endwhile; wp_reset_postdata(); ?>  
           
            
           
           
          </div>
        
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
          
          
          </div>
          
          <div class="col-md-4 itens-destaques">
          
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#maisvistos" aria-controls="maisvistos" role="tab" data-toggle="tab">Mais Vistos</a></li>
            <li role="presentation"><a href="#maiscomentados" aria-controls="maiscomentados" role="tab" data-toggle="tab">Mais Comentados</a></li>
           
          </ul>
        
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="maisvistos">
            <!-- maisvistos -->
            <?php if (function_exists('get_most_viewed')): ?>
            <?php get_most_viewed('post',5); ?> 
          <?php endif; ?>
                        
            <!-- Fim maisvistos -->
            
            </div>
            <div role="tabpanel" class="tab-pane" id="maiscomentados">
            
            <!-- maiscomentados -->
            <ul class="list-group">
              
            <?php $result = $wpdb->get_results("SELECT comment_count,ID,post_title FROM $wpdb->posts ORDER BY comment_count DESC LIMIT 0 , 5 ");
            foreach($result as $post){
              setup_postdata($post);
              $postid = $post->ID;
              $title = $post->post_title;
              $commentcount = $post->comment_count;
              if($commentcount != 0){?>
    
              <li class="list-group-item"> 
                <span class="badge"><?php echo $commentcount;?></span>
                <a href="<?php the_permalink(); ?>"><?php echo $title; ?></a>
              </li>
              <?php }?>
              <?php }?>
    
            </ul>

            <!-- maiscomentados -->
            </div>
           
          </div>
          <a href=""><img src="http://via.placeholder.com/370x130" class="img-responsive img-thumbnail" alt="..."></a>
          
          
          </div>
        </div>  
   </div> 
        <!-- Modal Cadastro Login -->
        
    <div class="width-full-box">
    
      <div class="container">
        <div class="row">
        <div class="title-box">
        <div class="col-md-9"><h4>Destaque de Notícias:</h4></div>
        <div class="col-md-3 luta visible-lg"><h4>Lutas</h4></div>
        </div>
        
        </div>
        <div class="row">
         <!-- futebol-->
          <?php 
          $posts_slides = new WP_Query(array(
		    //'posts_type' => 'post',
            'category_name' => 'destaques',
            'posts_per_page' => 3
          ));
         
          while($posts_slides->have_posts()) : $posts_slides->the_post();
          ?>
         <div class="col-md-3 iten-futebol"> 
         <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('img-futebol', array('class' => 'img-responsive img-thumbnail')); ?>
          <span><?php echo rwmb_meta('subtitulo'); ?></span>
          <h1> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></h1>
         </div>
         <?php  endwhile; wp_reset_postdata(); ?>  
         <!-- Fim futebol-->
         
         <?php 
			$posts_slides = new WP_Query(array(
			'category_name' => 'destaques',
			'posts_per_page' => 1
			));
			
			while($posts_slides->have_posts()) : $posts_slides->the_post();
		  ?> 
      <!-- Luta-->
         <div class="col-md-3 iten-futebol luta pull-right"> 
         <div class="title-box visible-xs"><h4>Lutas</h4></div>
           <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('img-futebol', array('class' => 'img-responsive img-thumbnail')); ?>
          <span><?php echo rwmb_meta('subtitulo'); ?></span>
          <h1> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></h1>
         </div>
        </div>
        <?php  endwhile; wp_reset_postdata(); ?>  
        <!-- Fim Luta-->
         
     
       </div>
    </div>    
        
    <div class="container">
     <div class="row">
     <div class="title-box">
        <div class="col-md-7"><h4>Notícias:</h4></div>
        <div class="col-md-5 visible-lg"><h4> Video da Semana</h4></div>
        </div>
     
     </div>
      <div class="row">
      <div class="col-md-7" id="posts-games">
      
      <!-- Games-->
      <?php 
        $posts_slides = new WP_Query(array(
        'category_name' => 'destaques',
        'posts_per_page' => 3
        ));
        
        while($posts_slides->have_posts()) : $posts_slides->the_post();
      ?>  
        <div class="media">
          <div class="media-left">
            <a href="#">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('img-games', array('class' => 'media-object img-responsive img-thumbnail')); ?></a>
          </a>
          </div>
          <div class="media-body">
            <h1 class="media-heading"><a href=""><?php the_title(); ?></a></h1>
            <button type="button" class="btn btn-primary btn-xs"><?php echo rwmb_meta('subtitulo'); ?></button>
            <p class="visible-lg"><?php echo rwmb_meta('resumo'); ?></p>
          </div>
        </div>
         <?php  endwhile; wp_reset_postdata(); ?>  
        <!-- Fim Games-->
        
      
      </div>
       <!-- Video-->
       <?php 
        $posts_slides = new WP_Query(array(
        'category_name' => 'videos',
        'posts_per_page' => 1
        ));
        
        while($posts_slides->have_posts()) : $posts_slides->the_post();
      ?> 
        <div class="col-md-5" id="video-home">
         <div class="title-box visible-xs"><h4>Video da Semana</h4></div>
        <div class="embed-responsive embed-responsive-16by9">
        <?php echo rwmb_meta('oembed','type=oembed'); ?>
      </div>
      
        </div>
        <h1><?php the_title(); ?></h1>   
      <button type="button" class="btn btn-primary btn-xs"><?php echo rwmb_meta('subtitulo'); ?></button>
      <p><?php echo rwmb_meta('resumo'); ?></p>
          <?php endwhile; wp_reset_postdata(); ?> 
        <!-- Fim Videos-->
      </div>
    
    </div>    
   <?php get_footer();?> 
    