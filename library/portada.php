<?php function slider($categoria){?>
      <section class="slidershow">
                                    <ul id="slider1">
                                        <?php query_posts(array('post_type'=>'portada','categoria'=>$categoria,'posts_per_page'=>3));?>
                                        <?php while(have_posts()){?>
                                        <?php the_post();?>
                                        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
                                        <li style="background: url(<?php echo $url; ?>)top center no-repeat; background-size:cover;">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-1 col-lg-offset-6 sin-padding col-md-1 col-md-offset-4 col-sm-1 col-sm-offset-3 col-xs-2 col-xs-offset-3">
                                                        <div class="paginate">  </div>
                                                    </div>
                                                    <div class="col-lg-4 sin-padding col-md-6 col-sm-7 col-xs-7">
                                                        <div class="info">
                                                            <div class="conteiner-fluid">
                                                                <div class="row">
                                                                    <div class="col-xs-10 col-xs-offset-1 ">
                                                                        <div class="title">
                                                                            <h1><?php the_title();?></h1>
                                                                        </div>
                                                                        <p><?php the_field('texto');?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </section>
        

<?php }?>
