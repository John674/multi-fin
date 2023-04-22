<?php
$about = get_field('about');
$services = get_field('services');
$contact = get_field('contact');
?>
<section id="about" class="wrapper bg-dark angled lower-start">
    <div class="container pt-7 pt-md-11 pb-8">
        <div class="row gx-0 gy-10 align-items-center">
            <div class="col-lg-7" data-cues="slideInDown" data-group="page-title" data-delay="600">
                <?php $sloganParts = explode("<br />", $about['slogan']);
                $firstPart = $sloganParts[0];
                unset($sloganParts[0]) ?>
                <h1 class="display-1 text-white mb-4"><?php echo $firstPart ?><br>
                    <?php if (!empty($sloganParts)): ?>
                        <span class="typer text-primary text-nowrap"
                              data-delay="100"
                              data-loop="false"
                              data-words="<?php echo implode(' ', $sloganParts) ?>"></span><span
                            class="cursor text-primary" data-owner="typer"></span>
                    <?php endif; ?>
                </h1>
                <p class="lead fs-24 lh-sm text-white mb-7 pe-md-18 pe-lg-0 pe-xxl-15"><?php echo $about['about_us'] ?></p>
            </div>
            <!-- /column -->
            <div class="col-lg-5" data-cue="slideInDown">
                <figure><img class="w-auto"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/illustrations/i10.png"
                             srcset="<?php echo get_template_directory_uri() ?>/assets/img/illustrations/i10@2x.png 2x"
                             alt=""/></figure>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->

<section id="services" class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row text-center">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <h2 class="fs-16 text-uppercase text-primary mb-3"><?php echo $services['title'] ?></h2>
                <h3 class="display-3 mb-10 px-xxl-10"><?php echo $services['sub_title'] ?></h3>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-11 px-xxl-5 text-center d-flex align-items-between">
            <div class="col-lg-4">
                <div class="px-md-15 px-lg-3">
                    <figure class="mb-6"><img class="img-fluid"
                                              src="<?php echo get_template_directory_uri() ?>/assets/img/illustrations/i11.png"
                                              srcset="<?php echo get_template_directory_uri() ?>/assets/img/illustrations/i11@2x.png 2x"
                                              alt=""/></figure>
                    <h3 class="text-nowrap"><?php echo $services['web_design']['title'] ?></h3>
                    <p class="mb-2"><?php echo $services['web_design']['desc'] ?></p>

                </div>
                <!--/.px -->
            </div>
            <!--/column -->
            <div class="col-lg-4">
                <div class="px-md-15 px-lg-3">
                    <figure class="mb-6"><img class="img-fluid"
                                              src="<?php echo get_template_directory_uri() ?>/assets/img/illustrations/i9.png"
                                              srcset="<?php echo get_template_directory_uri() ?>/assets/img/illustrations/i9@2x.png 2x"
                                              alt=""/></figure>
                    <h3 class="text-nowrap"><?php echo $services['mobile_app']['title'] ?></h3>
                    <p class="mb-2"><?php echo $services['mobile_app']['desc'] ?></p>

                </div>
                <!--/.px -->
            </div>
            <!--/column -->
            <div class="col-lg-4">
                <div class="px-md-15 px-lg-3">
                    <figure class="mb-6"><img class="img-fluid"
                                              src="<?php echo get_template_directory_uri() ?>/assets/img/illustrations/i12.png"
                                              srcset="<?php echo get_template_directory_uri() ?>/assets/img/illustrations/i12@2x.png 2x"
                                              alt=""/></figure>
                    <h3 class="text-nowrap"><?php echo $services['software']['title'] ?></h3>
                    <p class="mb-2"><?php echo $services['software']['desc'] ?></p>

                </div>
                <!--/.px -->
            </div>
            <!--/column -->
        </div>
        <div class="row gx-lg-8 gx-xl-12 gy-11 px-xxl-5 text-center d-flex align-items-between">
            <!--/column -->
            <div class="offset-lg-2 col-lg-4">
                <div class="px-md-15 px-lg-3">
                    <figure class="mb-6"><img class="img-fluid"
                                              src="<?php echo get_template_directory_uri() ?>/assets/img/illustrations/i23.png"
                                              srcset="<?php echo get_template_directory_uri() ?>/assets/img/illustrations/i23@2x.png 2x"
                                              alt=""/></figure>
                    <h3 class="text-nowrap"><?php echo $services['cloud']['title'] ?></h3>
                    <p class="mb-2"><?php echo $services['cloud']['desc'] ?></p>

                </div>
                <!--/.px -->
            </div>
            <!--/column -->
            <div class="col-lg-4">
                <div class="px-md-15 px-lg-3">
                    <figure class="mb-6"><img class="img-fluid"
                                              src="<?php echo get_template_directory_uri() ?>/assets/img/illustrations/i14.png"
                                              srcset="<?php echo get_template_directory_uri() ?>/assets/img/illustrations/i14@2x.png 2x"
                                              alt=""/></figure>
                    <h3 class="text-nowrap"><?php echo $services['it_support']['title'] ?></h3>
                    <p class="mb-2"><?php echo $services['it_support']['desc'] ?></p>

                </div>
                <!--/.px -->
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->

<section id="address" class="wrapper bg-dark">
    <div class="container py-10 py-md-16">
        <div class="card">
            <div class="row">
                <div class="col-lg-6 align-self-stretch">
                    <div class="map map-full rounded-top rounded-lg-start">
                        <iframe style="width: 100%; height: 100%; border: 0;"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2905.4099369467963!2d76.93204117498163!3d43.26378697753169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38836ea6b06a9d6d%3A0xb9cc96ecbd614786!2sNauryzbai%20Batyr%20St%2017%2C%20Almaty%20050000%2C%20Kazakhstan!5e0!3m2!1sen!2skg!4v1682086994845!5m2!1sen!2skg"
                                allowfullscreen="allowfullscreen"></iframe>
                    </div>
                    <!-- /.map -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <div class="p-10 p-md-11 p-lg-14">
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-primary fs-28 me-4 mt-n1"><i class="uil uil-location-pin-alt"></i>
                                </div>
                            </div>
                            <div class="align-self-start justify-content-start">
                                <h5 class="mb-1"><?php echo __('Address', 'multi_fin') ?></h5>
                                <address><?php the_field('address'); ?></address>
                            </div>
                        </div>
                    </div>
                    <!--/div -->
                </div>
                <!--/column -->
            </div>
        </div>

        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<!-- /section -->
<section id="contact" class="wrapper bg-light">
    <div class="container">
        <div class="row gx-lg-8 gx-xl-0 gy-10 align-items-center">
            <div class="col-lg-6 col-xl-5 position-relative d-none d-lg-block">
                <div class="shape rounded-circle bg-soft-primary rellax w-21 h-21" data-rellax-speed="1"
                     style="top: 8rem; left: 2rem"></div>
                <figure class="ps-xxl-10"><img
                        src="<?php echo get_template_directory_uri() ?>/assets/img/illustrations/i17.png"
                        srcset="<?php echo get_template_directory_uri() ?>/assets/img/illustrations/i17@2x.png 2x"
                        alt=""></figure>

            </div>
            <!--/column -->
            <div class="col-lg-6 col-xl-5 offset-xl-1 mb-4">
                <h2 class="display-4 mb-3"><?php  echo $contact['title']?></h2>
                <p class="lead mb-8 pe-xl-10"><?php  echo $contact['text']?></p>
                <style>
                    .screen-reader-response{
                        visibility: hidden;
                        height: 1px;
                    }
                </style>
              <?php
              $formId = $contact['contact_form_id'];
              echo do_shortcode("[contact-form-7 id='{$formId}' title='Contact form 1']")?>
                <!-- /form -->
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->