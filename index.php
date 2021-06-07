<?php get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <header class="entry-header">
                    <h1>Read this Bebe</h1>
                    <div class="entry-content">
                        <p>Welcome to my index.php page.</p>
                        <p>Here comes my fancy portfolio WP theme. Stay tuned and watch me progressing.</p>
                    </div>


                </header>
            </article>
        </main>
    </div>

<?php get_sidebar(); ?>
    
<?php get_footer(); ?>
