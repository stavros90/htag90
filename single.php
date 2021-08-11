<?php get_header();?>

<main>
<script>hljs.highlightAll();</script>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 col-xl-8">
                <div class="content">
                    <article class="single-article">
                        <span class="date"><b>Posted on:</b> <?php echo get_the_date(); ?></span>
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </article>
                </div>
           
                <div class="post-tags my-4">
                    <?php 
                        $post_tags = get_the_tags();
                        if ( ! empty( $post_tags ) ) {
                            echo '<ul class="tag-list">';
                            foreach( $post_tags as $post_tag ) {
                                echo '<li><a href="' . get_tag_link( $post_tag ) . '">' . $post_tag->name . '</a></li>';
                            }
                            echo '</ul>';
                        }  
                    ?>
                </div> 

            </div>
            <div class="col-12 col-md-4 col-xl-4">
                <div class="sidebar">
                    <?php if ( is_active_sidebar( 'article-sidebar' ) ) { ?>
                        
                        <?php dynamic_sidebar('article-sidebar'); ?>
                        
                    <?php } ?>
                </div>
            </div>
        </div>

    </div>
</main>

<?php get_footer();?>