<?php
    $index_url = "/dev";
    //$index_url = "/strikexcreative";
?>

<div class="nav-container">
    <a href="<?= h($index_url); ?>" class="logo">
        <img src="img/X-left.svg" alt="" class="x-left">
        <img src="img/X-right.svg" alt="" class="x-right">
        <img src="img/strike-creative.svg" alt="" class="logo-text">
        <!-- <img src="img/white-logo.svg" alt=""> -->
    </a>
    <!-- <img src="img/white-logo.svg" alt="Strike Creative Logo - White"> -->
    <ul>
        <li><a href="about-us.php" class="<?= $page == 'About Us' ? 'active' : '' ?>">About Us</a></li>
        <li><a href="our-work.php" class="<?= $page == 'Our Work' ? 'active' : '' ?>">Our Work</a></li>
        <li><a href="what-we-offer.php" class="<?= $page == 'What We Offer' ? 'active' : '' ?>">What We Offer</a></li>
        <li><a href="blog.php" class="<?= $page == 'Blog' ? 'active' : '' ?>">Blog</a></li>
        <li><a href="contact-us.php" class="btn"><i class="material-icons-round">east</i>Let's Talk</a></li>
    </ul>
    <a href="#" class="mobile-menu-open" onclick="mobileMenuOpen()"><img src="img/mobile-menu-open.svg" alt=""></a>
</div>

<div class="mobile-nav-container">
    <a href="<?= h($index_url); ?>" class="logo">
        <img src="img/X-left.svg" alt="" class="x-left">
        <img src="img/X-right.svg" alt="" class="x-right">
    </a>
    <a href="#" class="mobile-menu-close" onclick="mobileMenuClose()"><img src="img/mobile-menu-close.svg" alt=""></a>
    <!-- Nav -->
    <a href="about-us.php" class="mobile-nav-container--link <?= $page == 'About Us' ? 'active' : '' ?>">About Us</a>
    <a href="our-work.php" class="mobile-nav-container--link <?= $page == 'Our Work' ? 'active' : '' ?>">Our Work</a>
    <a href="what-we-offer.php" class="mobile-nav-container--link <?= $page == 'What We Offer' ? 'active' : '' ?>">What We Offer</a>
    <a href="blog.php" class="mobile-nav-container--link <?= $page == 'Blog' ? 'active' : '' ?>">Blog</a>
    <!-- END Nav -->
    <a href="contact-us.php" class="btn"><i class="material-icons-round">east</i>Let's Talk</a>
    <div class="social-icons">
        <a href="#"><img src="img/facebook-icon.svg" alt=""></a>
        <a href="#"><img src="img/twitter-icon.svg" alt=""></a>
    </div>
    <p class="mobile-nav-container--footer">&copy; 2021-<?= h(date('Y')); ?> Strike Creative</p>
</div>
