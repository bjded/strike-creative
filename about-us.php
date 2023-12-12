<?php
    $page = 'About Us';
    include_once "php/views/head.php";
?>
    <!-- Page Banner -->
    <header class="page-banner">
        <?php include_once "php/views/navigation.php"; ?>
        <div class="content-container page-banner-cta">
            <h1><?= h($page); ?></h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero fugit dolorem accusantium aut veritatis tenetur similique sequi. Earum vero excepturi distinctio necessitatibus perferendis. Incidunt.</p>
        </div>
    </header>
    <!-- END Page Banner -->

    <!-- Mission View Values CTA -->
    <div class="content-wrapper mission-vision-values-cta">
        <div class="content-container">
            <div class="mission-vision-values-container">
                <!-- Mission -->
                <div class="mission-vision-values-item">
                    <div class="mission-vision-values-text">
                        <p class="mission-vision-values-header">Our Mission</p>
                        <h3>Deliver A+ web content specialized to our clients.</h3>
                        <p class="mission-vision-values-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea optio aut rem cumque modi, enim saepe repellat? Veritatis aut magnam, libero optio corporis at porro blanditiis eligendi sequi possimus aliquid non pariatur tempore nostrum ad assumenda aperiam. Ipsum unde adipisci tempora sapiente. Non labore impedit veniam dolor id! Laboriosam officia nam nemo vero magnam error, saepe qui quo reprehenderit cupiditate, totam pariatur quisquam natus?</span>
                    </div>
                    <img src="img/icon-mission.svg" alt="" class="margin-right">
                </div>
                <!-- END Mission -->
                <!-- Vision -->
                <div class="mission-vision-values-item">
                    <img src="img/icon-vision.svg" alt="" class="margin-left">
                    <div class="mission-vision-values-text">
                        <p class="mission-vision-values-header">Our Vision</p>
                        <h3>Be innovative and forward thinking, to best help our clients.</h3>
                        <p class="mission-vision-values-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea optio aut rem cumque modi, enim saepe repellat? Veritatis aut magnam, libero optio corporis at porro blanditiis eligendi sequi possimus aliquid non pariatur tempore nostrum ad assumenda aperiam. Ipsum unde adipisci tempora sapiente. Non labore impedit veniam dolor id! Laboriosam officia nam nemo vero magnam error, saepe qui quo reprehenderit cupiditate, totam pariatur quisquam natus?</span>
                    </div>
                </div>
                <!-- END Vision -->
                <!-- Values -->
                <div class="mission-vision-values-item">
                    <div class="mission-vision-values-text">
                        <p class="mission-vision-values-header">Our Values</p>
                        <h3>Full satisfy our clients needs and deliver high quality work.</h3>
                        <p class="mission-vision-values-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea optio aut rem cumque modi, enim saepe repellat? Veritatis aut magnam, libero optio corporis at porro blanditiis eligendi sequi possimus aliquid non pariatur tempore nostrum ad assumenda aperiam. Ipsum unde adipisci tempora sapiente. Non labore impedit veniam dolor id! Laboriosam officia nam nemo vero magnam error, saepe qui quo reprehenderit cupiditate, totam pariatur quisquam natus?</span>
                    </div>
                    <img src="img/icon-values.svg" alt="" class="margin-right">
                </div>
                <!-- END Values -->
            </div>
        </div>
    </div>

    <!-- Meet Our Team -->
    <div class="content-wrapper meet-our-team-cta">
        <div class="content-container">
            <h2>Meet Our Team</h2>
            <div class="meet-our-team-container">
                <div class="team-member">
                    <img src="img/team-member-stock.png" alt="">
                    <h3>Sam LaMothe</h3>
                    <p>Designer</p>
                </div>
                <div class="team-member">
                    <img src="img/team-member-stock.png" alt="">
                    <h3>BJ Dedushaj</h3>
                    <p>Developer</p>
                </div>
                <div class="team-member">
                    <img src="img/team-member-stock.png" alt="">
                    <h3>Madison Sterner</h3>
                    <p>Writer/Developer</p>
                </div>
            </div>
        </div>
    </div>
    <!-- END Meet Out Team -->

    <?php include_once "php/views/connect-with-us.php"; ?>
    <?php include_once "php/views/footer.php"; ?>
