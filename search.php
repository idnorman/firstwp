<!-- Template for displaying archive pages -->
<?php get_header(); ?>
<div id="primary" class="search-content-area">
    <main id="main" class="site-main">
        <?php if(have_posts( )): 
                while(have_posts( )):
                    the_post();
                    get_template_part('template-parts/page/content', 'search' );
                endwhile;

                echo paginate_links(
                    [
                        'prev_text' => esc_html__('Sebelumnya', 'firstwp'),
                        'next_text' => esc_html__('Selanjutnya', 'firstwp')
                    ]
                );
        else : 
                get_template_part('template-parts/page/content', 'none');
        ?>

        <?php endif ?>
    </main>
</div>
<?php get_footer(); ?>