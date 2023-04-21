<?php

get_header();

while (have_posts()) :

    the_post();
	get_template_part( 'template-parts/home-page' );
endwhile;
get_footer();
