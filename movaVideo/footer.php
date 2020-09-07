<div class="container footer">
     <div class="row">
      <!--Sobre Nos-->
      <div class="col-md-4 sobre-rodape">
        <div class="title-box" style="background:#fff;">
        <h4>Sobre Nós</h4>
            <?php 
              if (is_active_sidebar('sobre-nos-rodape') ) {
                  dynamic_sidebar('sobre-nos-rodape');
              }
             ?>
         </div>
       </div>
       
       
       
      <div class="col-md-4">
     <div class="title-box">
        <h4>Galeria de Fotos</h4>
        </div>
        
        <?php 
        $posts_slides = new WP_Query(array(
        'category_name' => 'destaques',
        'posts_per_page' => 1
        ));
        
        while($posts_slides->have_posts()) : $posts_slides->the_post();
      ?>  
         <?php the_post_thumbnail('img-galeria', array('class' => 'img-responsive img-thumbnail')); ?>
          <?php  endwhile; wp_reset_postdata(); ?>  
     </div>
   <!--Links úteis-->
     <div class="col-md-4">
      <div class="title-box">
        <h4>Links úteis</h4>
        </div>
        <?php
		   wp_nav_menu(array(
			'theme_location' => 'links-uteis',
			'container' => '',
			'menu_class'=> 'list-unstyled'
		   ));
         ?> 
        
        </div>
     </div>
     <!--Fim Links úteis-->

     </div>

    <div class="footer-copy">
      <div class="container">
        <div class="row">
          <div class="col-md-12"><p class="text-center">Todos Direitos Reservados. | Desenvolvido Netsolutionmogi</p></div>
        </div>
      </div>
</div>


    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Minha Conta</h4>
          </div>
          <div class="modal-body">
            
             <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#logar" aria-controls="logar" role="tab" data-toggle="tab">Logar</a></li>
            <li role="presentation"><a href="#cadastro" aria-controls="cadastro" role="tab" data-toggle="tab">Regras do Portal</a></li>
            
          </ul>
        
          <!-- Tab panes -->
          <div class="tab-content minha-conta">
            <div role="tabpanel" class="tab-pane active" id="home">
            
            <!--<form>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite aqui">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite aqui">
              </div>
              <button type="button" class="btn btn-primary">Logar</button>
            </form>-->
            <?php 
              if (is_active_sidebar('sidebar-login') ) {
                  dynamic_sidebar('sidebar-login');
              }
             ?>
            
            </div>
            <div role="tabpanel" class="tab-pane" id="cadastro">
            <?php 
              if (is_active_sidebar('sidebar-regras') ) {
                  dynamic_sidebar('sidebar-regras');
              }
             ?>
            </div>
            
          </div>

            
          </div>
         
          
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_url')?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url')?>/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url')?>/js/galeria.js"></script>
    <?php wp_footer();?>
  </body>
</html>