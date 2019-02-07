<?php get_template('header');?>

		<div class="row list-item">

		  	<div class="col-xs-12">
		    	<h3 id="welcome-heading">Pencarian <?=post_search_keyword();?>: </h3>
		  	</div>

			<?php if(have_post($type='produk')): ?>
				<?php foreach(post() as $post): ?>          
				<div class="col-sm-4 col-lg-4 col-md-4">
				    <div class="thumbnail">
				        <img class="img-responsive" src="<?=resize_img(post_meta('image',$post),430,350,1);?>" alt="">
				        <div class="caption">
				            <h4><a href="<?=permalink($post);?>"><?=post_title($post);?></a></h4>
				            <p><?=post_content($post,200);?></p>

				            <div class="btn-group btn-group-justified" >
				              <div class="btn-group" role="group">
				                <h4 class="pull-left"><?=post_meta('price',$post);?></h4>
				              </div>
				              <div class="btn-group" role="group">
				                <a href="" type="button" class="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-shopping-cart"></i> Beli!</a>
				              </div>
				            </div>
				        </div>
				    </div>
				</div>
				<?php endforeach;?>
			<?php endif;?>              

			<div class="col-xs-12">
				<?=post_pagination($type);?>
			</div>

		</div>

<?php get_template('footer');?>