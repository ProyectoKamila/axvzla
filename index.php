<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0" />
        <meta name="description" content="artistas por venezuela" />
        <meta name="keywords" content="artistas por venezuela, artistas venezolanos" />
        <meta property="og:title" content="Artistas por Venezuela" />
        <meta property="og:description" content='' />
        <meta property="og:image" content="<?php bloginfo('template_url'); ?>/images/isologo.jpg" />
        <title><?php wp_title(''); ?></title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css" />
        <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.jpg" />
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    </head>
    <body>

        <div id="wrapper">	
            <div id="emptyPage">
                <div class="content">
                    <h1><span> </span> <span></span></h1>
                </div>
                <div class="tempLoader"></div>
            </div>

            <div id="loadingPage" >
                <div class="inner">
                    <div class="content">
                        <strong><span></span> <span></span></strong>
                    </div>
                </div>
            </div>


            <div id="faceGrid" class="faceGrid">
                <?php $rand = query_posts(array('post_type' => 'post', 'posts_per_page' => 30, 'orderby' => 'rand'));
                ?>

                <div id="shortProjectInfo" class="face textPromo " style="background: url(<?php bloginfo('template_url'); ?>/images/isologo.jpg)  center no-repeat; background-size: cover;"  >
                    <span class="red">
                        <span class="desc">
                            <p></p>
                            <!-- <a href="#"><span class="ico"></span><span class="shadow"></span>Čtěte&nbsp;více</a> -->
                        </span>
                    </span>
                </div>
                <?php while (have_posts()) {
                    the_post(); ?>
                    <?php $feat_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                    <div class="face imgAlign0" data-img-url="<?php echo $feat_image; ?>">
                        <span class="shadow">

                            <span class="desc">
                                <strong><?php the_title(); ?><br> </strong>
                                <?php if (get_field('descripcion_corta')) { ?>
                                    <span> <?php the_field('descripcion_corta'); ?></span>
                                <?php } ?>
                                <br/>
                                <br/>
                                <?php if (get_field('twitter')) { ?>
                                    <a href="<?php the_field('twitter'); ?>">
                                        <span class="fa fa-twitter fa-lg"></span>
                                    </a>
                                <?php } ?>
                                <?php if (get_field('instagram')) { ?>
                                    <a href="<?php the_field('instagram'); ?>">
                                        <span class="fa fa-instagram fa-lg"></span>
                                    </a>
                                <?php } ?>
                                <?php if (get_field('facebook')) { ?>
                                    <a href="<?php the_field('facebook'); ?>">
                                        <span class="fa fa-facebook fa-lg"></span>
                                    </a>
                                <?php } ?>
                            </span>
                        </span>
                    </div>
                <?php } ?>	
                <div class="face imgAlign0 suscribe" data-img-url="" style="background: url(<?php bloginfo('template_url'); ?>/images/isologo.jpg)  center no-repeat; background-size: cover;" >
                    <span class="shadow" style="opacity: 1 !important;">
                        <h1 class="title-suscribe">Suscribete a Artistas por Venezuela</h1>
                        <a id="detona" class="btn btn-default btn-circle">
                            <span class="fa fa-heart fa-2x"></span>
                        </a>
                        <h1 class="title-suscribe">Siguenos en las redes Sociales</h1>
                        <br/>
                        
                            <span class="desc">
                        <span class="fa fa-twitter fa-lg icon1"></span>
                        <span class="fa fa-instagram fa-lg icon"></span>
                        <span class="fa fa-facebook fa-lg icon"></span>
                        </span>
                    </span>
                </div>

                <div class="clear"></div>		
            </div>	<!-- /#faceGrid -->
            <div id="sus" class="suscription">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12">
                            <div class="form">
                                <span class="fa fa-times fa-2x" id="exit_form"> </span>
                                <p class="des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                <br/>
                                <form action="" method="post">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="sizing-addon2"><span class="fa fa-user"></span></span>
                                        <input type="text" class="form-control" placeholder="Nombre y Apellido" aria-describedby="sizing-addon2"  required="">
                                    </div>
                                    <br/>
                                    <div class="clearfix"></div>
                                    
                                    <div class="input-group">
                                        <span class="input-group-addon" id="sizing-addon2"><span class="fa fa-envelope-o "></span></span>
                                        <input type="text" class="form-control" placeholder="Correo Electronico" aria-describedby="sizing-addon2" required="">
                                    </div>
                                    <br/>
                                    <input type="submit" class="btn btn-submit btn-default">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script type="text/javascript">
            var basePath = '';
        </script>


        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/compiled.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/interview.js"></script>

    </body>

</html>
