<?php get_header(); ?>

<!-- Page Title
        ============================================= -->
<section id="page-title">
    <div class="container clearfix">
        <h1><?php single_post_title() ?></h1>
        <span><?php if (function_exists("the_subtitle")) the_subtitle() ?></span>
    </div>
</section><!-- #page-title end -->

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

                <?php while (have_posts()) :
                    the_post();
                    global $post;
                    $author_ID = $post->post_author;
                    $author_URL = get_author_posts_url($author_ID);
                ?>

                    <div class="single-post nobottommargin">

                        <!-- Single Post
              ============================================= -->
                        <div class="entry clearfix">



                            <!-- Entry Image
                  ============================================= -->
                            <?php
                            if (has_post_thumbnail()) : ?>
                                <div class="entry-image">
                                    <a href="#">
                                        <?php the_post_thumbnail("full", ["class" => "image_fade"]); ?>
                                    </a>
                                </div>
                            <?php endif; ?>

                            <!-- Entry Content
                  ============================================= -->
                            <div class="entry-content notopmargin">

                                <?php the_content();

                                $defaults = array(
                                    'before' => '<p class="text-center">' . __('Pages:', "wp-custom-blog-udemy"),
                                    'after' => '</p>',
                                );

                                wp_link_pages($defaults);
                                ?>


                                <!-- Post Single - Content End -->
                                <div class="clear"></div>

                            </div>
                        </div><!-- .entry end -->

                        <div class="line"></div>

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