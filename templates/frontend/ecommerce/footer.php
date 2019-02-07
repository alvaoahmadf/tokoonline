    </div>        
    
    <!-- /.container -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4 class="foot"><?=e_('tentang-kami');?></h4>
                    <p><?=e_('deskripsi-tentang-kami');?></p>

                    <ul class="list-inline">
                    <li><a href="<?=e_('link-rss');?>" class="icoRss" title="Rss"><i class="fa fa-2x fa-rss"></i></a></li>
                    <li><a href="<?=e_('link-facebook');?>" class="icoFacebook" title="Facebook"><i class="fa fa-2x fa-facebook"></i></a></li>
                    <li><a href="<?=e_('link-twitter');?>" class="icoTwitter" title="Twitter"><i class="fa fa-2x fa-twitter"></i></a></li>
                    <li><a href="<?=e_('link-google');?>" class="icoGoogle" title="Google +"><i class="fa fa-2x fa-google-plus"></i></a></li>
                    <li><a href="<?=e_('link-linkedin');?>" class="icoLinkedin" title="Linkedin"><i class="fa fa-2x fa-linkedin"></i></a></li>
                    </ul>                    
                </div>

                <div class="col-md-4">
                    <h4 class="foot"><?=e_('pilihan-editor');?></h4>
                    <ul class="media-list foot-list">
                      <?php if(have_post($type='produk',$category='pilihan',$limit='4')): ?>
                        <?php foreach(post() as $post):  ?>
                          <li class="media">
                            <div class="media-left">
                              <a href="#">
                                <img class="media-object" src="<?=resize_img(post_meta('image',$post),80,60,1);?>" alt="...">
                              </a>
                            </div>
                            <div class="media-body">
                              <a href="<?=permalink($post);?>" class="media-heading"><?=post_title($post);?></a>
                              <p><?=post_meta('price',$post);?></p>
                            </div>
                          </li>
                        <?php endforeach;?>
                      <?php endif;?>                          

                    </ul>

                </div>
                <div class="col-md-4">

                </div>
            </div>

        </div>

        <div id="copyright">
            <div class="container">
                <div class="row nopadding">
                    <p class="text-muted"><?=e_('copyright');?></p>
                </div>
            </div>
        </div>
    </footer>

    <div id="myModal" class="modal fade " role="dialog">
      <div class="modal-dialog modal-md">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">    
            <h2 class="text-center" id="head-note-beli"></h2>     
            <p class="text-center" id="note-beli"></p>
          </div>
          <div class="modal-footer text-center">
            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-remove"></i> Tutup</button>
            <a href="<?=base_url('halaman/transaksi/keranjang');?>" class="btn btn-default" ><i class="fa fa-shopping-cart"></i> Lihat Keranjang Belanja!</a>
          </div>
        </div>

      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo get_template_directory(dirname(__FILE__), 'js');?>/jquery.js"></script>
    <script src="<?=get_template_directory(dirname(__FILE__), 'js');?>/moment-with-locales.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo get_template_directory(dirname(__FILE__), 'js');?>/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory(dirname(__FILE__), 'js');?>/custom.js" type="text/javascript"></script>

</body>

</html>
