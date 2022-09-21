<?php
    get_header( );
?>
<div id="primary" class="content-area">
    <main id="id" class="site-main">
        <section class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title">
                    <?php esc_html_e('Oops! That page can&rsquo;t be found', 'firstwp' ); ?>
                </h1>
            </header>
            <div class="page-content">
                <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or try search what you looking for','firstwp' ); ?> </p>
                <?php get_search_form() ?>
            </div>
        </section>
    </main>
</div>
<?php get_footer() ?>