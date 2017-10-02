<?php
$template = 'homepage';
$root = '';
include('header.php'); ?>
    <?php
        $current = basename($_SERVER['REQUEST_URI']);
        $klass = '';
        // If is empty assume it's homepage
        if ($current == '' || $current == 'index.php') {
            $klass = 'homepage';
        }
    ?>
        <!-- .page-content start -->
        <div class="page-content container-no-padding column-no-padding <?php echo $klass; ?>">
            <div class="container-fluid">
                <div class="hero-wrap">
                    <p class="hero__mega-title">Pure</p>
                    <div class="hero-content">
                        <div class="hero-content-inner">
                            <h1 class="hero-title">Product Design. UX/UI. Advisor. Investor through Design.</h1>
                            <h2 class="hero-subtitle">PURENINE is the design collective of Thomas Klinger.</h2>
                            <a class="p9-button p9-button-pill" href="mailto:hello@purenine.com">Let's work together</a>
                        </div>
                    </div><!-- .hero-content -->
                    <?php
                        $heroImages = array(
                            array('top-image-ultracast.jpg', '/work/ultracast'),
                            array('top-image-mars.jpg', '/work/mars'),
                            array('top-image-nba.jpg', 'http://www.adweek.com/agencies/ready-set-rocket-is-helping-brands-find-their-place-in-the-digital-space/'),
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
                        <ul id="filters" class="button-group filters-button-group mb-40 triggerAnimation " data-animate="fadeInUp">
                            <li class="filter-text">Filter Projects:</li>
                            <li class="filter-button is-checked" data-filter="*">All</li>
                            <li class="filter-button" data-filter=".design">Visual Design</li>
                            <li class="filter-button" data-filter=".ux">UX / UI</li>
                            <li class="filter-button" data-filter=".mobile">Mobile Apps</li>
                            <li class="filter-button" data-filter=".dev">Development</li>
                            <li class="filter-button" data-filter=".motion">Motion / Video</li>
                            <li class="filter-button" data-filter=".wip">Work In Progress</li>
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
                        <li class="blog-post col-lg-3 col-md-4 col-sm-6 col-xs-12 single-image-post isotope-item design wip">
                            <div class="blog-post-item-inner">
                                <div class="post-media">
                                    <a href="https://www.instagram.com/p/BZpJ3yKhP3d/" target="_blank"><img src="thumbs/thumbs-audiosnap.jpg"></a>
                                </div><!-- .post-media end -->

                                <article class="post-body">
                                    <div class="post-date">
                                    </div><!-- .post-meta end -->
                                    <a href="https://www.instagram.com/p/BZpJ3yKhP3d/" target="_blank">
                                        <h4>Audiosnap</h4>
                                    </a>
                                    <p>
                                       We’re working hard on a new version of #audiosnap, a feature that allows you to create and share music videos with your friends... 
                                    </p>
                                </article><!-- .post-body end -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-tags">#design #ux #ui #app</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <!-- piece -->
                        <!-- piece -->
                        <li class="blog-post col-lg-3 col-md-4 col-sm-6 col-xs-12 single-image-post isotope-item design">
                            <div class="blog-post-item-inner">
                                <div class="post-media">
                                    <a href="http://www.omnigon.com" target="_blank"><img src="thumbs/thumbs-omnigon-2017.jpg"></a>
                                </div><!-- .post-media end -->

                                <article class="post-body">
                                    <div class="post-date">
                                    <span>Omnigon</span>
                                    </div><!-- .post-meta end -->
                                    <a href="http://www.omnigon.com" target="_blank">
                                        <h4>Omnigon.com</h4>
                                    </a>
                                    <p>
                                       Worked with #Omnigon to help design and produce their new agency website.
                                    </p>
                                </article><!-- .post-body end -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-tags">Production, Visual Design</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <!-- piece -->
                        <!-- piece -->
                        <li class="blog-post col-lg-3 col-md-4 col-sm-6 col-xs-12 single-image-post isotope-item ux">
                            <div class="blog-post-item-inner">
                                <div class="post-media">
                                    <a href="http://www.cleanprogram.com" target="_blank"><img src="thumbs/thumbs-clean.jpg"></a>
                                </div><!-- .post-media end -->

                                <article class="post-body">
                                    <div class="post-date">
                                        <span>Metajive</span>
                                    </div><!-- .post-meta end -->
                                    <a href="http://www.cleanprogram.com" target="_blank">
                                        <h4>The Clean Program</h4>
                                    </a>
                                    <p>
                                       Partnered with #Metajive to produce the website for Clean, a powerful and transformative tool for your health. Full case study coming soon.
                                    </p>
                                </article><!-- .post-body end -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-tags">UX, UI, Visual Design</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <!-- piece -->
                        <li class="blog-post col-lg-3 col-md-4 col-sm-6 col-xs-12 single-image-post isotope-item design ux">
                            <div class="blog-post-item-inner">
                                <div class="post-media">
                                    <a href="/work/ultracast"><img src="thumbs/thumbs-ultracast.jpg"></a>
                                </div><!-- .post-media end -->

                                <article class="post-body">
                                    <div class="post-date">
                                        <span>Omnigon</span>
                                    </div><!-- .post-meta end -->
                                    <a href="/work/ultracast">
                                        <h4>Ultracast</h4>
                                    </a>
                                    <p>
                                       Creating an interactive experience from desktop to mobile with #Omnigon for #Ultracast.
                                    </p>
                                </article><!-- .post-body end -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-tags">UX, UI, Visual Design,</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <!-- .row start -->
                         <div class="row mb-30">
                              <ul id="blog-masonry" class="blog-posts">
                        <li class="grid-sizer col-lg-3 col-md-4 col-sm-6 col-xs-12"></li>

                         <!-- piece -->
                        <li class="blog-post col-lg-3 col-md-4 col-sm-6 col-xs-12 single-image-post isotope-item design wip">
                            <div class="blog-post-item-inner">
                                <div class="post-media">
                                    <a href="https://www.instagram.com/p/BYuGhASBHqE/" target="_blank"><img src="thumbs/thumbs-djbproaudio.jpg"></a>
                                </div><!-- .post-media end -->

                                <article class="post-body">
                                    <div class="post-date">
                                    </div><!-- .post-meta end -->
                                    <a href="https://www.instagram.com/p/BYuGhASBHqE/" target="_blank">
                                        <h4>DJBooth Pro Audio</h4>
                                    </a>
                                    <p>
                                       Launched the new YouTube channel for @djboothproaudio to include new branding and creative assets.
                                    </p>
                                </article><!-- .post-body end -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-tags">Visual design, Branding, Social</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <!-- piece -->
                         <!-- piece -->
                        <li class="blog-post col-lg-3 col-md-4 col-sm-6 col-xs-12 single-image-post isotope-item design">
                            <div class="blog-post-item-inner">
                                <div class="post-media">
                                    <a href="/work/mars"><img src="thumbs/thumbs-mars.jpg"></a>
                                </div><!-- .post-media end -->

                                <article class="post-body">
                                    <div class="post-date">
                                        <span>Neo-Pangea</span>
                                    </div><!-- .post-meta end -->
                                    <a href="/work/mars">
                                        <h4>Make Mars Home</h4>
                                    </a>
                                    <p>
                                        Designed multiple UI screens and backgrounds - in collaboration with Neo-Pangea.
                                    </p>
                                </article><!-- .post-body end -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-tags">Visual Design, UI, Production</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <!-- piece -->
                        <li class="blog-post col-lg-3 col-md-4 col-sm-6 col-xs-12 single-image-post isotope-item design mobile">
                            <div class="blog-post-item-inner">
                                <div class="post-media">
                                    <a href="http://www.adweek.com/agencies/ready-set-rocket-is-helping-brands-find-their-place-in-the-digital-space/" target="_blank"><img src="thumbs/thumbs-nba.jpg"></a>
                                </div><!-- .post-media end -->

                                <article class="post-body">
                                <div class="post-date">
                                        <span>ReadySetRocket</span>
                                    </div><!-- .post-meta end -->
                                    <a href="http://www.adweek.com/agencies/ready-set-rocket-is-helping-brands-find-their-place-in-the-digital-space/" target="_blank">
                                        <h4>NBA.com</h4>
                                    </a>
                                    <p>
                                       Partnered with #readysetrocket to design digital products for the NBA. Contact for more details.
                                    </p>
                                </article><!-- .post-body end -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-tags">UX, Visual Design, Mobile, App</li>
                                    </ul>
                                </div>
                            </div>
                        </li>


                        <!-- piece -->
                        <li class="blog-post col-lg-3 col-md-4 col-sm-6 col-xs-12 single-image-post isotope-item design ux">
                            <div class="blog-post-item-inner">
                                <div class="post-media">
                                    <a href="https://www.instagram.com/p/BT5EpikheE8" target="_blank"><img src="thumbs/thumbs-prosuite.jpg"></a>
                                </div><!-- .post-media end -->

                                <article class="post-body">
                                <div class="post-date">
                                        <span>Omnigon</span>
                                    </div><!-- .post-meta end -->
                                    <a href="https://www.instagram.com/p/BT5EpikheE8" target="_blank">
                                        <h4>ProSuite by Omnigon</h4>
                                    </a>
                                    <p>
                                       Working with #Omnigon to design #ProSuite, a set of fan engagement tools to help partners deliver unique, compelling experiences.
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
                                    <a href="/work/audiomack.php"><img src="thumbs/thumbs-am-app.jpg"></a>
                                </div><!-- .post-media end -->

                                <article class="post-body">

                                    <a href="/work/audiomack.php">
                                        <h4>Audiomack</h4>
                                    </a>
                                    <p>
                                        Created the new Audiomack.com, as well as the iOS and Android apps.
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
                        <li class="blog-post col-lg-3 col-md-4 col-sm-6 col-xs-12 single-image-post isotope-item design ux">
                            <div class="blog-post-item-inner">
                                <div class="post-media">
                                    <a href="/work/epicured.php"><img src="thumbs/thumbs-epicured.jpg"></a>
                                </div><!-- .post-media end -->

                                <article class="post-body">
                                    <a href="/work/epicured.php">
                                        <h4>GetEpicured.com</h4>
                                    </a>
                                    <p>
                                       Partnered with #epicured on an enhanced user experience. #ux #design #agency
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
                        <li class="blog-post col-lg-3 col-md-4 col-sm-6 col-xs-12 single-image-post isotope-item design ux mobile wip">
                            <div class="blog-post-item-inner">
                                <div class="post-media">
                                    <a href="https://www.instagram.com/p/BXjT3mLBR2-/?taken-by=purenine" target="_blank"><img src="thumbs/thumbs-steveharvey.jpg"></a>
                                </div><!-- .post-media end -->

                                <article class="post-body">
                                    <div class="post-date">
                                        <span>Quantasy</span>
                                    </div><!-- .post-meta end -->
                                    <a href="https://www.instagram.com/p/BXjT3mLBR2-/?taken-by=purenine" target="_blank">
                                        <h4>Steve Harvey TV</h4>
                                    </a>
                                    <p>
                                       Explored app ideas for Steve Harvey’s new TV show - in collaboration with #Quantasy #ux #ui #freelance #design #app #portfolio
                                    </p>
                                </article><!-- .post-body end -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-tags">UX, UI, Visual Design,</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                         <!-- piece -->
                        <li class="blog-post col-lg-3 col-md-4 col-sm-6 col-xs-12 single-image-post isotope-item design ux mobile">
                            <div class="blog-post-item-inner">
                                <div class="post-media">
                                    <a href="/work/theplug.php"><img src="thumbs/thumbs-theplug.jpg"></a>
                                </div><!-- .post-media end -->

                                <article class="post-body">
                                    <a href="/work/theplug.php">
                                        <h4>The Plug by DJBooth</h4>
                                    </a>
                                    <p>
                                        Designed an app that highlights all things related to current hip-hop news.
                                    </p>
                                </article><!-- .post-body end -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-tags">Art Directon, Visual Design, UX, Mobile</li>
                                    </ul>
                                </div>
                            </div>
                        </li>


                        <!-- piece -->
                        <li class="blog-post col-lg-3 col-md-4 col-sm-6 col-xs-12 single-image-post isotope-item design mobile">
                            <div class="blog-post-item-inner">
                                <div class="post-media">
                                    <a href="/work/explorer.php"><img src="thumbs/thumbs-natgeo.jpg"></a>
                                </div><!-- .post-media end -->

                                <article class="post-body">
                                    <div class="post-date">
                                        <span>Neo-Pangea</span>
                                    </div><!-- .post-meta end -->
                                    <a href="/work/explorer.php">
                                        <h4>National Geographic - Explorer</h4>
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
                                    <a href="/work/playerstribune.php"><img src="thumbs/thumbs-playerstribune.jpg"></a>
                                </div><!-- .post-media end -->

                                <article class="post-body">
                                    <div class="post-date">
                                        <span>HYFN</span>
                                    </div><!-- .post-meta end -->
                                    <a href="/work/playerstribune.php">
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
                        <li class="blog-post col-lg-3 col-md-4 col-sm-6 col-xs-12 single-image-post isotope-item design dev ">
                            <div class="blog-post-item-inner">
                                <div class="post-media">
                                    <a href="http://newleafliterary.com/"><img src="thumbs/thumbs-newleaf.jpg"></a>
                                </div><!-- .post-media end -->

                                <article class="post-body">
                                    <a href="http://newleafliterary.com/">
                                        <h4>New Leaf Literary</h4>
                                    </a>
                                    <p>
                                        Designed a new digital experience and built a complete CMS platform.
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
                                    <a href="/work/twitch.php"><img src="thumbs/thumbs-twitch.jpg"></a>
                                </div><!-- .post-media end -->

                                <article class="post-body">
                                    <div class="post-date">
                                        <span>EA Sports</span>
                                    </div><!-- .post-meta end -->
                                    <a href="/work/twitch.php">
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
                                    <a href="/work/pgatour.php"><img src="thumbs/thumbs-pga-ipad.jpg"></a>
                                </div><!-- .post-media end -->

                                <article class="post-body">
                                    <div class="post-date">
                                        <span>Omnigon</span>
                                    </div><!-- .post-meta end -->
                                    <a href="/work/pgatour.php">
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
                        <li class="blog-post col-lg-3 col-md-4 col-sm-6 col-xs-12 single-image-post isotope-item design ux">
                            <div class="blog-post-item-inner">
                                <div class="post-media">
                                    <a href="https://www.behance.net/gallery/52512915/Abaris" target="_blank"><img src="thumbs/thumbs-abaris.jpg"></a>
                                </div><!-- .post-media end -->

                                <article class="post-body">
                                    <a href="https://www.behance.net/gallery/52512915/Abaris" target="_blank">
                                        <h4>Abaris</h4>
                                    </a>
                                    <p>
                                        Helped Abaris design a product landing page for desktop and mobile.
                                    </p>
                                </article><!-- .post-body end -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-tags">Art Directon, Visual Design, UX, Mobile</li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <!-- piece -->
                        <li class="blog-post col-lg-3 col-md-4 col-sm-6 col-xs-12 single-image-post isotope-item motion">
                            <div class="blog-post-item-inner">
                                <div class="post-media">
                                    <a href="https://www.instagram.com/p/BRrHaEQDqqc/" target="_blank"><img src="thumbs/thumbs-video-djb.jpg" alt=""/>
                                        <span class="video-button"><img src="images/play-arrow.svg" alt=""/></span>
                                    </a>
                                    <div class="post-meta">
                                        <div class="post-author">
                                            <a href="https://www.instagram.com/purenine/">
                                                <div class="post-author-thumbnail">
                                                    <img src="img/p9-social-thumb.jpg" alt="">
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
                                    <a href="/work/pgatour.php"><img src="thumbs/thumbs-pga-desktop.jpg"></a>
                                </div><!-- .post-media end -->

                                <article class="post-body">
                                    <div class="post-date">
                                        <span>Omnigon</span>
                                    </div><!-- .post-meta end -->
                                    <a href="/work/pgatour.php">
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
                                    <a href="https://www.behance.net/gallery/52512785/Omnigon-Website-Concepts" target="_blank"><img src="thumbs/thumbs-omnigon.jpg"></a>
                                </div><!-- .post-media end -->

                                <article class="post-body">
                                    <a href="https://www.behance.net/gallery/52512785/Omnigon-Website-Concepts" target="_blank">
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
                                                    <img src="img/p9-social-thumb.jpg" alt="">
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
                                    <a href="https://www.behance.net/gallery/53990335/DJBoothnet" target="_blank"><img src="thumbs/thumbs-djbooth.jpg"></a>
                                </div><!-- .post-media end -->

                                <article class="post-body">
                                    <a href="https://www.behance.net/gallery/53990335/DJBoothnet" target="_blank">
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
                                                    <img src="img/p9-social-thumb.jpg" alt="">
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
                                    <a href="https://www.behance.net/gallery/52512685/Proactiv" target="_blank"><img src="thumbs/thumbs-proactiv.jpg"></a>
                                </div><!-- .post-media end -->

                                <article class="post-body">
                                    <div class="post-date">
                                        <span>Haven Agency</span>
                                    </div><!-- .post-meta end -->
                                    <a href="https://www.behance.net/gallery/52512685/Proactiv" target="_blank">
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
