<?php
    $page = 'What We Offer';
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

    <?php include_once "php/views/connect-with-us.php"; ?>
    <?php include_once "php/views/footer.php"; ?>
