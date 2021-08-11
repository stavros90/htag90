<?php get_header();?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 col-xl-8">
                <div class="content-blog">

                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            
                        <article class="list-article">
                            <div class="post-listing-meta">
                                <span class="date"><?php echo get_the_date(); ?></span>
                                <span class="category"><?php the_category(); ?></span>
                            </div>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p class="excerpt"><?php the_excerpt(); ?></p>
                        </article>

                    <?php endwhile; ?>
    
                    <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>    
                    <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

                    <?php else : ?>
    
                    <?php _e('Sorry, no posts matched your criteria.'); ?>

                    <?php endif; ?>

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