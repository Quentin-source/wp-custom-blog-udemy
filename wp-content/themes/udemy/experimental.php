<?php 
/*
Template Name: Experimental
*/ 
get_header(); ?>

<!-- Page Title
        ============================================= -->
<section id="page-title">
    <div class="container clearfix">
        <h1>Experimental Code</h1>
    </div>
</section><!-- #page-title end -->

<!-- Content
    ============================================= -->
<section id="content">

    <div class="content-wrap">

        <!-- <div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
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
        </div> -->

        <div class="container clearfix">

            <!-- Post Content
          ============================================= -->

            <?php get_calendar();?> 


        </div>

    </div>

</section><!-- #content end -->

<?php get_footer() ?>