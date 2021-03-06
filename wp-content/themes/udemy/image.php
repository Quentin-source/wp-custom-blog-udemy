<?php get_header(); ?>
<!-- Content
    ============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
            <div>
                <div class="container clearfix">
                    <span class="badge badge-danger bnews-title">Breaking News:</span>

                    <div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false" data-pagi="false">
                        <div class="flexslider">
                            <div class="slider-wrap">
                                <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        </strong></a></div>
                                <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        </strong></a></div>
                                <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        </strong></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container clearfix">

            <!-- Post Content
          ============================================= -->
            <div class="postcontent nobottommargin clearfix">

                <?php if (have_posts()) while (have_posts()) :
                    the_post();
                    global $post;
                    $author_ID = $post->post_author;
                    $author_URL = get_author_posts_url($author_ID);
                ?>

                    <div class="single-post nobottommargin">

                        <!-- Single Post
              ============================================= -->
                        <div class="entry clearfix">

                            <!-- Entry Title
                  ============================================= -->
                            <div class="entry-title">
                                <h2><?php the_title(); ?></h2>
                            </div><!-- .entry-title end -->


                            <!-- Entry Content
                  ============================================= -->
                            <div class="entry-content notopmargin">

                                <a href="<?php echo $post->guid ?>">Direct Download Image</a>
                                <img src="<?php echo $post->guid ?>" class="img-responsive" alt="">
                                <!-- Post Single - Content End -->
                            </div>
                        </div><!-- .entry end -->

                        <?php

                        if (comments_open() || get_comments()) comments_template() ?>

                    </div>

                <?php endwhile; ?>


            </div><!-- .postcontent end -->

            <?php get_sidebar(); ?>

        </div>

    </div>

</section><!-- #content end -->

<?php get_footer() ?>