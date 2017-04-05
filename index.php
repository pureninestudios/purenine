<?php include('header.php'); ?>
        <!-- .page-content start -->
        <div class="page-content container-no-padding column-no-padding">
            <div class="container-fluid">
                <div class="hero-wrap">
                    <p class="hero__mega-title">Pure</p>
                    <div class="hero-content">
                        <div class="hero-content-inner">
                            <h1 class="hero-title">Product Design. UX/UI. Advisor. Investor through Design.</h1>
                            <h2 class="hero-subtitle">PURENINE is a digital design studio of Thomas Klinger.</h2>
                            <a class="p9-button p9-button-pill" href="mailto:hello@purenine.com">Drop us a line</a>
                        </div>
                    </div><!-- .hero-content -->
                    <?php
                        $heroImages = array(
                            array('top-image-twitch.jpg', 'twitch.php'),
                            array('top-image-pga.jpg', 'pgatour.php'),
                            array('top-image-natgeo.jpg', 'explorer.php'),
                            array('top-image-epicured.jpg', 'https://www.instagram.com/p/BSM1zBthXDR'),
                        );
                        shuffle($heroImages);
                    ?>
                    <div class="hero-image">
                        <a href="<?php echo $heroImages[0][1]; ?>">
                            <img src="hero/<?php echo $heroImages[0][0]; ?>" alt="" />
                        </a>
                    </div><!-- .hero-image -->
                </div><!--/.hero-wrap-->
            </div><!-- .container-fluid end -->
        </div><!-- .page-content end -->

        <!-- .page-content start -->
        <div id="slide-to-next-section" class="page-content light pt-40 mb-0">
            <div class="container-fluid">
                <!-- .row start -->
                <div class="row mb-0">
                    <!-- .col-md-12 start -->
                    <div class="col-md-12 mb-0">
                        <ul id="filters" class="button-group filters-button-group mb-40 triggerAnimation animated" data-animate="fadeInUp">
                            <li class="filter-text">Filter Projects:</li>
                            <li class="filter-button is-checked" data-filter="*">All</li>
                            <li class="filter-button" data-filter=".design">Visual Design</li>
                            <li class="filter-button" data-filter=".ux">UX / UI</li>
                            <li class="filter-button" data-filter=".mobile">Mobile Apps</li>
                            <li class="filter-button" data-filter=".dev">Development</li>
                            <li class="filter-button" data-filter=".wip">Work In Progress</li>
                            <li class="filter-button" data-filter=".motion">Motion / Video</li>
                        </ul>
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .container-fluid end -->
        </div><!-- .page-content end -->

        <!-- .page-content start -->
        <div class="page-content custom-background color-background light bkg-lightgrey-2 pt-60">
            <div class="container-fluid">
                <!-- .row start -->
                <div class="row mb-30">
                    <ul id="blog-masonry" class="blog-posts">
                        <li class="grid-sizer col-lg-3 col-md-4 col-sm-6 col-xs-12"></li>

                         <!-- piece -->
                        <li class="blog-post col-lg-3 col-md-4 col-sm-6 col-xs-12 single-image-post isotope-item design ux wip">
                            <div class="blog-post-item-inner">
                                <div class="post-media">
                                    <a href="https://www.instagram.com/p/BSM1zBthXDR/?taken-by=purenine" target="_blank"><img src="thumbs/thumbs-epicured.jpg"></a>
                                </div><!-- .post-media end -->

                                <article class="post-body">
                                    <a href="https://www.instagram.com/p/BSM1zBthXDR/?taken-by=purenine" target="_blank">
                                        <h4>Epicured.com</h4>
                                    </a>
                                    <p>
                                       Excited to partner with #epicured on an enhanced user experience. #comingsoon #ux #design #agency
                                    </p>
                                </article><!-- .post-body end -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-tags">UX, Visual Design</li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <!-- piece -->
                        <li class="blog-post col-lg-3 col-md-4 col-sm-6 col-xs-12 single-image-post isotope-item motion wip">
                            <div class="blog-post-item-inner">
                                <div class="post-media">
                                    <a href="https://www.instagram.com/p/BRrHaEQDqqc/" target="_blank"><img src="thumbs/thumbs-video-djb.jpg" alt=""/>
                                        <span class="video-button"><img src="images/play-arrow.svg" alt=""/></span>
                                    </a>
                                    <div class="post-meta">
                                        <div class="post-author">
                                            <a href="https://www.instagram.com/purenine/">
                                                <div class="post-author-thumbnail">
                                                    <img src="https://scontent-ort2-1.cdninstagram.com/t51.2885-19/s320x320/15306595_563354530456041_750007397048647680_a.jpg" alt="">
                                                </div>
                                                <p>purenine</p>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- .post-media end -->
                            </div>
                        </li>

                        <!-- piece -->
                        <li class="blog-post col-lg-3 col-md-4 col-sm-6 col-xs-12 single-image-post isotope-item design ux mobile">
                            <div class="blog-post-item-inner">
                                <div class="post-media">
                                    <a href="explorer.php"><img src="thumbs/thumbs-natgeo.jpg"></a>
                                </div><!-- .post-media end -->

                                <article class="post-body">
                                    <div class="post-date">
                                        <span>Neo-Pangea</span>
                                    </div><!-- .post-meta end -->
                                    <a href="explorer.php">
                                        <h4>National Geographic - Explorer Minisite</h4>
                                    </a>
                                    <p>
                                        Partnered with Neo-Pangea to design the minisite for Explorer, the longest-running documentary series in television history.
                                    </p>
                                </article><!-- .post-body end -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-tags">Visual Design, UX, UI, Mobile</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <!-- piece -->
                        <li class="blog-post col-lg-3 col-md-4 col-sm-6 col-xs-12 single-image-post isotope-item design mobile">
                            <div class="blog-post-item-inner">
                                <div class="post-media">
                                    <a href="playerstribune.php"><img src="thumbs/thumbs-playerstribune.jpg"></a>
                                </div><!-- .post-media end -->

                                <article class="post-body">
                                    <div class="post-date">
                                        <span>HYFN</span>
                                    </div><!-- .post-meta end -->
                                    <a href="playerstribune.php">
                                        <h4>The Players Tribune</h4>
                                    </a>
                                    <p>
                                        Designed an app that provides athletes with a platform to connect directly with their fans.
                                    </p>
                                </article><!-- .post-body end -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-tags">Visual Design, UX, Mobile App</li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                       <!-- piece -->
                        <li class="blog-post col-lg-3 col-md-4 col-sm-6 col-xs-12 single-image-post isotope-item design ux dev">
                            <div class="blog-post-item-inner">
                                <div class="post-media">
                                    <a href="twitch.php"><img src="thumbs/thumbs-twitch.jpg"></a>
                                </div><!-- .post-media end -->

                                <article class="post-body">
                                    <div class="post-date">
                                        <span>EA Sports</span>
                                    </div><!-- .post-meta end -->
                                    <a href="twitch.php">
                                        <h4>Madden Live Challenge</h4>
                                    </a>
                                    <p>
                                        Conceptualized ideas and designed a website for the Madden Challenge Tournament.
                                    </p>
                                </article><!-- .post-body end -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-tags">Visual Design, UX</li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                       <!-- piece -->
                        <li class="blog-post col-lg-3 col-md-4 col-sm-6 col-xs-12 single-image-post isotope-item design mobile">
                            <div class="blog-post-item-inner">
                                <div class="post-media">
                                    <a href="pgatour.php"><img src="thumbs/thumbs-pga-ipad.jpg"></a>
                                </div><!-- .post-media end -->

                                <article class="post-body">
                                    <div class="post-date">
                                        <span>Omnigon</span>
                                    </div><!-- .post-meta end -->
                                    <a href="pgatour.php">
                                        <h4>PGA Tour iPad App</h4>
                                    </a>
                                    <p>
                                        Helped designed the new PGAtour iPad app.
                                    </p>
                                </article><!-- .post-body end -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-tags">Visual Design, Mobile </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                       <!-- piece -->
                        <li class="blog-post col-lg-3 col-md-4 col-sm-6 col-xs-12 image-post isotope-item design ux mobile">
                            <div class="blog-post-item-inner">
                                <article class="post-body">
                                    <a href="theplug.php">
                                        <h4>The Plug by DJBooth</h4>
                                    </a>
                                </article><!-- .post-body end -->
                                <div class="post-media">
                                    <a href="theplug.php"><img src="thumbs/thumbs-theplug.jpg" alt=""></a>
                                </div><!-- .post-media end -->
                            </div>
                        </li>

                        <!-- piece -->
                        <li class="blog-post col-lg-3 col-md-4 col-sm-6 col-xs-12 quote-post isotope-item">
                            <div class="blog-post-item-inner">
                                <article class="post-body">
                                    <div class="post-date">
                                        <span>Inspiration</span>
                                    </div><!-- .post-meta end -->
                                    <blockquote class="blockquote">
                                        <p>"If you're romantic about doing thigns how they've always been done... Your going to lose."</p>
                                        <p class="cite">Gary Vaynerchuck</p>
                                    </blockquote>
                                </article><!-- .post-body end -->
                            </div>
                        </li>
                                                <!-- piece -->
                        <li class="blog-post col-lg-3 col-md-4 col-sm-6 col-xs-12 single-image-post isotope-item design ux">
                            <div class="blog-post-item-inner">
                                <div class="post-media">
                                    <a href="pgatour.php"><img src="thumbs/thumbs-pga-desktop.jpg"></a>
                                </div><!-- .post-media end -->

                                <article class="post-body">
                                    <div class="post-date">
                                        <span>Omnigon</span>
                                    </div><!-- .post-meta end -->
                                    <a href="pgatour.php">
                                        <h4>PGATour.com</h4>
                                    </a>
                                    <p>
                                        Partnered with the team at Omnigon to design the new PGAtour.com for desktop and mobile.
                                    </p>
                                </article><!-- .post-body end -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-tags">Visual Design, Mobile </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <!-- piece -->
                        <li class="blog-post col-lg-3 col-md-4 col-sm-6 col-xs-12 single-image-post isotope-item design ux">
                            <div class="blog-post-item-inner">
                                <div class="post-media">
                                    <a href="omnigon.php"><img src="thumbs/thumbs-omnigon.jpg"></a>
                                </div><!-- .post-media end -->

                                <article class="post-body">
                                    <a href="omnigon.php">
                                        <h4>Omnigon.com</h4>
                                    </a>
                                    <p>
                                        Conceptualized ideas and designed some website prototypes for Omnigon.
                                    </p>
                                </article><!-- .post-body end -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-tags">Visual Design, UX, Mobile</li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <!-- piece -->
                        <li class="blog-post col-lg-3 col-md-4 col-sm-6 col-xs-12 single-image-post isotope-item motion">
                            <div class="blog-post-item-inner">
                                <div class="post-media">
                                    <a href="https://www.instagram.com/p/BMSeXGNBTUL/" target="_blank"><img src="thumbs/thumbs-video-p9.jpg" alt=""/>
                                        <span class="video-button"><img src="images/play-arrow.svg" alt=""/></span>
                                    </a>
                                    <div class="post-meta">
                                        <div class="post-author">
                                            <a href="https://www.instagram.com/purenine/">
                                                <div class="post-author-thumbnail">
                                                    <img src="https://scontent-ort2-1.cdninstagram.com/t51.2885-19/s320x320/15306595_563354530456041_750007397048647680_a.jpg" alt="">
                                                </div>
                                                <p>purenine</p>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- .post-media end -->
                            </div>
                        </li>

                         <!-- piece -->
                        <li class="blog-post col-lg-3 col-md-4 col-sm-6 col-xs-12 single-image-post isotope-item design ux dev">
                            <div class="blog-post-item-inner">
                                <div class="post-media">
                                    <a href="djbooth.php"><img src="thumbs/thumbs-djbooth.jpg"></a>
                                </div><!-- .post-media end -->

                                <article class="post-body">
                                    <a href="djbooth.php">
                                        <h4>The new DJBooth.net</h4>
                                    </a>
                                    <p>
                                        Re-branded DJBooth.net to include a new website for desktop and mobile.
                                    </p>
                                </article><!-- .post-body end -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-tags">Branding, Visual Design, UX, UI</li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <!-- piece -->
                        <li class="blog-post col-lg-3 col-md-4 col-sm-6 col-xs-12 single-image-post isotope-item motion">
                            <div class="blog-post-item-inner">
                                <div class="post-media">
                                    <a href="https://www.instagram.com/p/BNaAO6fh9Ho/" target="_blank"><img src="thumbs/thumbs-video-am.jpg" alt=""/>
                                        <span class="video-button"><img src="images/play-arrow.svg" alt=""/></span>
                                    </a>
                                    <div class="post-meta">
                                        <div class="post-author">
                                            <a href="https://www.instagram.com/purenine/">
                                                <div class="post-author-thumbnail">
                                                    <img src="https://scontent-ort2-1.cdninstagram.com/t51.2885-19/s320x320/15306595_563354530456041_750007397048647680_a.jpg" alt="">
                                                </div>
                                                <p>purenine</p>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- .post-media end -->
                            </div>
                        </li>
                         <!-- piece -->
                        <li class="blog-post col-lg-3 col-md-4 col-sm-6 col-xs-12 single-image-post isotope-item design ux">
                            <div class="blog-post-item-inner">
                                <div class="post-media">
                                    <a href="https://www.behance.net/gallery/14938307/Activision" target="_blank"><img src="thumbs/thumbs-activision.jpg"></a>
                                </div><!-- .post-media end -->

                                <article class="post-body">
                                    <div class="post-date">
                                        <span>Haven Agency</span>
                                    </div><!-- .post-meta end -->
                                    <a href="https://www.behance.net/gallery/14938307/Activision" target="_blank">
                                        <h4>Shop Activision.com</h4>
                                    </a>
                                    <p>
                                        Created a fully responsive eCommerce shop platform for Activision.com.
                                    </p>
                                </article><!-- .post-body end -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-tags">Art Direction, Visual Design, UX</li>
                                    </ul>
                                </div>
                            </div>
                        </li>


                        <!-- piece -->
                        <li class="blog-post col-lg-3 col-md-4 col-sm-6 col-xs-12 single-image-post isotope-item design ux">
                            <div class="blog-post-item-inner">
                                <div class="post-media">
                                    <a href="proactiv.php"><img src="thumbs/thumbs-proactiv.jpg"></a>
                                </div><!-- .post-media end -->

                                <article class="post-body">
                                    <div class="post-date">
                                        <span>Haven Agency</span>
                                    </div><!-- .post-meta end -->
                                    <a href="proactiv.php">
                                        <h4>Proactiv.com</h4>
                                    </a>
                                    <p>
                                        Conceptualized ideas and designed a website for Proactiv+.
                                    </p>
                                </article><!-- .post-body end -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-tags">Art Direction, Visual Design, UX</li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <!-- piece -->
                        <li class="blog-post col-lg-3 col-md-4 col-sm-6 col-xs-12 single-image-post isotope-item design ux">
                            <div class="blog-post-item-inner">
                                <div class="post-media">
                                    <a href="https://www.behance.net/gallery/43388481/Pennzoil-Sweepstakes" target="_blank"><img src="thumbs/thumbs-pennzoil.jpg"></a>
                                </div><!-- .post-media end -->

                                <article class="post-body">
                                    <div class="post-date">
                                        <span>Livenation</span>
                                    </div><!-- .post-meta end -->
                                    <a href="https://www.behance.net/gallery/43388481/Pennzoil-Sweepstakes" target="_blank">
                                        <h4>Pennzoil Sweepstakes</h4>
                                    </a>
                                    <p>
                                        Conceptualized ideas and designed a sweepstakes website for Pennzoil and Livenation.
                                    </p>
                                </article><!-- .post-body end -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-tags">Art Direction, Visual Design, UX</li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <!-- piece -->
                        <li class="blog-post col-lg-3 col-md-4 col-sm-6 col-xs-12 single-image-post isotope-item design ux">
                            <div class="blog-post-item-inner">
                                <div class="post-media">
                                    <a href="https://www.behance.net/gallery/43388563/One-Direction-Tour" target="_blank"><img src="thumbs/thumbs-1d.jpg"></a>
                                </div><!-- .post-media end -->

                                <article class="post-body">
                                    <div class="post-date">
                                        <span>Livenation</span>
                                    </div><!-- .post-meta end -->
                                    <a href="https://www.behance.net/gallery/43388563/One-Direction-Tour" target="_blank">
                                        <h4>One Direction Tour</h4>
                                    </a>
                                    <p>
                                        Conceptualized ideas and designed a website for One Direction Summer Tour.
                                    </p>
                                </article><!-- .post-body end -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-tags">Visual Design, UX</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- .container-fluid end -->
        </div><!-- .page-content end -->

        <?php include('footer.php'); ?>

        <script src="js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
        <script src="bootstrap/js/bootstrap.min.js"></script><!-- .bootstrap script -->
        <script src="js/jquery.scripts.min.js"></script><!-- modernizr -->

        <script type="text/javascript" src="js/jquery.fatNav.js"></script><!-- hamburger menu js -->
        <script src="js/isotope.pkgd.min.js"></script> <!-- jQuery isotope -->
        <script src="js/imagesloaded.pkgd.min.js"></script> <!-- jQuery isotope -->
        <script src="masterslider/masterslider.min.js"></script><!-- Master slider main js -->
        <script src="masterslider/jquery.easing.min.js"></script><!-- Master slider easing js -->
        <script src="js/jquery-retina.js"></script><!-- retina -->
        <script src="js/volcanno.include.js"></script><!-- custom js functions -->

        <script>
            /* <![CDATA[ */
            jQuery(document).ready(function ($) {
                'use strict';


                // HAMBURGER MENU
                $.fatNav();

                // ISOTOPE MASONRY
                $(function () {
                    // init Isotope
                    var $grid = $('#blog-masonry').isotope({
                        itemSelector: '.isotope-item',
                        percentPosition: true,
                        masonry: {
                            columnWidth: '.grid-sizer'
                        }
                    });
                    // layout Isotope after each image loads
                    $grid.imagesLoaded().progress(function () {
                        $grid.isotope('layout');
                    });

                    // filter functions
                    var filterFns = {
                    };
                    // bind filter button click
                    $('.filters-button-group').on('click', '.filter-button', function () {
                        var filterValue = $(this).attr('data-filter');
                        // use filterFn if matches value
                        filterValue = filterFns[ filterValue ] || filterValue;
                        $grid.isotope({filter: filterValue});
                    });
                    // change is-checked class on buttons
                    $('.button-group').each(function (i, buttonGroup) {
                        var $buttonGroup = $(buttonGroup);
                        $buttonGroup.on('click', '.filter-button', function () {
                            $buttonGroup.find('.is-checked').removeClass('is-checked');
                            $(this).addClass('is-checked');
                        });
                    });
                });

        </script>

    </body>
</html>
