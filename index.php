<?php

get_header();
    if(have_posts( )) : 
        while (have_posts( )) :
            the_post();
            get_template_part('template-parts/post/content' );
        endwhile;
        echo paginate_links(
            [
                'prev_text' => esc_html__('Sebelumnya', 'firstwp'),
                'next_text' => esc_html__('Selanjutnya', 'firstwp')
            ]
        );
    endif;
get_footer();

