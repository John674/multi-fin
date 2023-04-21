<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#fff">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/assets/img/favicons/favicon.ico"
          type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180"
          href="<?php echo get_template_directory_uri() ?>/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
          href="<?php echo get_template_directory_uri() ?>/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
          href="<?php echo get_template_directory_uri() ?>/assets/img/favicons/favicon-16x16.png">

    <?php wp_head(); ?>
</head>
<body class="page-home">
<div id="preloader"
     style="position: absolute; top: 0; left: 0; display: flex; align-items: center; justify-content: center; width: 100%; height: 100%; background-color: #000000; z-index: 10;">
    <video src="<?php echo get_template_directory_uri() ?>/assets/video/loader.webm" poster="" autoplay playsinline loop
           muted preload="auto"></video>
</div>

<section id="splashScreen" class="section section-grid section-fullscreen section-splash bg-pattern-mustard" hidden>
    <div class="content content-v-center content-h-center">
        <div class="container">
            <div class="description">
                <svg class="logo">
                    <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/sprites/sprite.svg#logo"></use>
                </svg>

                <h1 class="section-title" data-aos="fade" data-aos-delay="100">premium cannabis</h1>

                <div class="bottom-panel">
                    <button id="ageBtnYes" class="btn btn-type-04" type="button">I’m north of 21</button>
                    <a id="ageBtnNo" class="btn btn-type-04" href="https://www.google.com">I’m south of 21</a>
                </div>
            </div>
        </div>
    </div>
</section>

<main id="page-container" hidden>
    <section class="section section-grid section-fullscreen section-404 bg-pattern-dark-gold">
        <div class="content content-v-center content-h-center text-center text-white">
            <div class="container">
                <div class="description">
                    <?php renderACFImg(get_field('logo_404', 'option'), ['class' => 'logo']); ?>
                    <h1 class="section-title" data-aos="fade" data-aos-delay="100"><?php the_field('title_404', 'option'); ?></h1>

                    <div class="description-text">
                        <?php the_field('desc_404', 'option'); ?>
                    </div>

                    <div class="bottom-panel">
                        <?php $back = get_field('back_404', 'option'); ?>
                        <a id="ageBtnNo" class="btn btn-type-02"
                           href="<?php echo esc_url($back['url']) ?>"><?php echo esc_html(strip_tags($back['title'])) ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php wp_footer(); ?>

</body>
</html>
