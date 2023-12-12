<?php
    $page = "Home";
    include_once "php/views/head.php";
?>
    <!-- Header & Header CTA -->
    <header class="content-wrapper home-hero">
        <?php include_once "php/views/navigation.php"; ?>
        <div class="content-container">
            <div class="home-hero-container">
                <div class="header-cta-content">
                    <h1>Web done the<br>right way.<br><span>Just for you.</span></h1>
                    <a href="what-we-offer.php" class="btn"><i class="material-icons-round">east</i>Learn More</a>
                </div>
                <img src="img/homepage-header.svg" alt="">
            </div>
            <div class="home-hero-content">
                <h3>Data driven solutions, built with your needs in mind.</h3>
                <p>An online presence is extremely important in todays business marketplace, that's why <strong>Strike Creative prides itself on understanding the needs of your business</strong> and developing a mobile-friendly website that is informative and professional, yet creative and attractive.</p>
            </div>
        </div>
    </header>
    <!-- END Header & Header CTA -->

    <!-- Digital Services -->
    <div class="content-wrapper digital-services-cta">
        <div class="content-container">
            <h3>Learn how we help you get online.</h3>

            <!-- Flip Cards -->
            <div class="digital-services-cta-flip-cards">
                <div class="digital-service-item">
                    <div class="service-item--front flip-card design">
                        <img src="img/icon-web-design.svg" alt="">
                        <h4>Web Design</h4>
                    </div>
                    <div class="service-item--back flip-card design">
                        <h4>Web Design</h4>
                        <p>We pride ourselves on our design work. We can promise you that you will get both an effective and attractive design.</p>
                        <a href="what-we-offer.php" class="btn"><i class="material-icons-round">east</i>Learn More</a>
                    </div>
                </div>
                <div class="digital-service-item">
                    <div class="service-item--front flip-card development">
                        <img src="img/icon-development.svg" alt="">
                        <h4>Development</h4>
                    </div>
                    <div class="service-item--back flip-card development">
                        <h4>Development</h4>
                        <p>We strive to not only design great websites, but also effective and performance driven. We are up to date on all new technologies to make the best use for you.</p>
                        <a href="what-we-offer.php" class="btn"><i class="material-icons-round">east</i>Learn More</a>
                    </div>
                </div>
                <div class="digital-service-item">
                    <div class="service-item--front flip-card seo">
                        <img src="img/icon-seo.svg" alt="">
                        <h4>SEO</h4>
                    </div>
                    <div class="service-item--back flip-card seo">
                        <h4>SEO</h4>
                        <p>Our goal is to drive traffic to your website, search engine optimization is a very important aspect of this and we offer a full suite of tools.</p>
                        <a href="what-we-offer.php" class="btn"><i class="material-icons-round">east</i>Learn More</a>
                    </div>
                </div>
            </div>
            <!-- END Flip Cards -->

            <!-- Slider -->
            <div class="digital-services-cta-slider">
                <!-- Design -->
                <div class="digital-service-item--tablet">
                    <div class="digital-service-item--left design">
                        <img src="img/icon-web-design.svg" alt="">
                        <h4>Web Design</h4>
                    </div>
                    <div class="digital-service-item--right design">
                        <h4>Web Design</h4>
                        <p>We pride ourselves on our design work. We can promise you that you will get both an effective and attractive design.</p>
                        <a href="what-we-offer.php" class="btn"><i class="material-icons-round">east</i>Learn More</a>
                    </div>
                </div>
                <!-- END Design -->
                <!-- Development -->
                <div class="digital-service-item--tablet">
                    <div class="digital-service-item--left development">
                        <img src="img/icon-development.svg" alt="">
                        <h4>Development</h4>
                    </div>
                    <div class="digital-service-item--right development">
                        <h4>Development</h4>
                        <p>We strive to not only design great websites, but also effective and performance driven. We are up to date on all new technologies to make the best use for you.</p>
                        <a href="what-we-offer.php" class="btn"><i class="material-icons-round">east</i>Learn More</a>
                    </div>
                </div>
                <!-- END Development -->
                <!-- SEO -->
                <div class="digital-service-item--tablet">
                    <div class="digital-service-item--left seo">
                        <img src="img/icon-seo.svg" alt="">
                        <h4>SEO</h4>
                    </div>
                    <div class="digital-service-item--right seo">
                        <h4>SEO</h4>
                        <p>Our goal is to drive traffic to your website, search engine optimization is a very important aspect of this and we offer a full suite of tools.</p>
                        <a href="what-we-offer.php" class="btn"><i class="material-icons-round">east</i>Learn More</a>
                    </div>
                </div>
                <!-- END SEO -->
            </div>
            <!-- END Slider -->

            <p>Your website is the first thing your potential customers see, thats why its a crucial part of your brand.</p>
        </div>
    </div>
    <!-- END Digital Services -->

    <!-- Discover Our Work CTA -->
    <div class="content-wrapper discover-our-work-cta">
        <div class="content-container">
            <h3>This is what we can do for you.</h3>
            <div class="discover-our-work-cta-slider">
                <img src="img/website-preview.svg" alt="">
                <img src="img/website-preview.svg" alt="">
                <img src="img/website-preview.svg" alt="">
                <img src="img/website-preview.svg" alt="">
                <img src="img/website-preview.svg" alt="">
            </div>
        </div>
    </div>
    <!-- END Discover Our Work CTA -->

    <!-- Works For You CTA -->
    <div class="content-wrapper works-for-you-cta">
        <div class="content-container">
            <h2>We put in the work.<br><span>Your website works for you.</span></h2>
            <a href="what-we-offer.php" class="btn"><i class="material-icons-round">east</i>Find Out More</a>
        </div>
    </div>
    <!-- END Works For You CTA -->

    <!-- Lets Talk Pricing CTA -->
    <div class="content-wrapper lets-talk-pricing-cta">
        <div class="content-container">
            <h3>Find the package that works best for you.</h3>
            <!-- Pricing Container -->
            <div class="lets-talk-pricing-container">
                <!-- <div class="pricing-item purple">
                    <p class="pi-heading">Basic</p>
                    <p class="pi-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem deserunt aut nobis? Hic odio fugit atque ipsam tempora excepturi facilis facere cumque quaerat accusantium!</p>
                    <p class="pi-starting">Starting at</p>
                    <p class="pi-price">$800</p>
                    <a href="what-we-offer.php" class="btn"><i class="material-icons-round">east</i>Learn More</a>
                </div> -->
                <div class="pricing-item">
                    <p class="pi-heading">Standard</p>
                    <div class="pi-description-pricing-container">
                        <p class="pi-description">
                            <span>Our <strong>Most Common</strong> Package</span>
                            <span>Includes <strong>6-10 Custom Pages</strong></span>
                            <span>Fully <strong>Custom Design</strong></span>
                            <span><strong>SEO</strong> Included</span>
                            <span>Includes Custom <strong>Integrations</strong></span>
                        </p>
                        <div class="pi-pricing">
                            <span class="pi-text">Starting at</span>
                            <span class="pi-price">$1,200</span>
                            <a href="what-we-offer.php" class="btn"><i class="material-icons-round">east</i>Learn More</a>
                        </div>
                    </div>
                </div>
                <!-- <div class="pricing-item purple">
                    <p class="pi-heading">Advanced</p>
                    <p class="pi-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem deserunt aut nobis? Hic odio fugit atque ipsam tempora excepturi facilis facere cumque quaerat accusantium!</p>
                    <p class="pi-starting">Starting at</p>
                    <p class="pi-price">$1,800</p>
                    <a href="what-we-offer.php" class="btn"><i class="material-icons-round">east</i>Learn More</a>
                </div> -->
            </div>
            <!-- END Pricing Container -->
        </div>
    </div>
    <!-- END Lets Talk Pricing CTA -->

    <?php include_once "php/views/connect-with-us.php"; ?>
    <?php include_once "php/views/footer.php"; ?>
