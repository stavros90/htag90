<?php get_header();?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 col-xl-8">
                <div class="content">
                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    
                        <h1 class="main-title">
                            <?php the_title(); ?>
                        </h1>
                        <div class="the-content">
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
            <div class="col-12 col-md-4 col-xl-4">
                <div class="sidebar">
                <?php if ( is_active_sidebar( 'home-sidebar' ) ) { ?>
                    
                    <?php dynamic_sidebar('home-sidebar'); ?>
                    
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer();?>