<?php
    $page = 'Our Work';
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

    <!-- Our Work CTA -->
    <div class="content-wrapper our-work-cta">
        <div class="content-container">
            <div class="our-work-container">
                <img src="img/website-preview.svg" alt="">
                <img src="img/website-preview.svg" alt="">
                <img src="img/website-preview.svg" alt="">
                <img src="img/website-preview.svg" alt="">
                <img src="img/website-preview.svg" alt="">
                <img src="img/website-preview.svg" alt="">
            </div>
        </div>
    </div>
    <!-- END Our Work CTA -->

    <!-- Lets Get Started CTA -->
    <div class="content-wrapper lets-get-started-cta">
        <div class="content-container">
            <h2>Do you like what you see?<br><span>Let's get started.</span></h2>
            <a href="#" class="btn"><i class="material-icons-round">east</i>Find Out More</a>
        </div>
    </div>
    <!-- END Lets Get Started CTA -->

    <?php include_once "php/views/connect-with-us.php"; ?>
    <?php include_once "php/views/footer.php"; ?>
