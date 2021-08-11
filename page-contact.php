<?php get_header();?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 col-xl-8">
                <div class="content">

                    <h1 class="main-title"><?php the_title(); ?></h1>
                    <div class="the-content">
                        <form action="https://formcarry.com/s/4Ch65Q3UgTV" class="htag90-form" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
                            <label for="fullName">Your Name (required)</label>
                            <input type="text" name="fullName" id="fullName" required>
                            <label for="email">Your Email (required)</label>
                            <input type="email" name="email" id="email" required>

                            <label for="message">Your Message</label>
                            <textarea rows="5" id="message" placeholder="Type your message here..."></textarea>
                            <input type="hidden" id="captchaResponse" name="g-recaptcha-response" />
                            <input type="submit" value="Submit">
                        </form>  
                        <script>
                            grecaptcha.ready(function() {
                                grecaptcha.execute("6LdtFZYbAAAAAMv59hlb0laL1723jrzfO1l0VAAk", {action: "homepage"})
                                .then(function(token) {
                                    document.getElementById('captchaResponse').value = token;
                                });
                            });
                        </script>
                    </div>

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