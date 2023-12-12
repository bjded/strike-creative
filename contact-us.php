<?php
    $page = 'Contact Us';
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

    <!-- Your Details -->
    <div class="content-wrapper your-details-cta">
        <div class="content-container">
            <h3>Your Details</h3>
            <div class="your-details-container">
                <form action="" method="">
                    <label for="full_name" class="sr-only">Full Name</label>
                    <input type="text" name="full_name" id="full_name" placeholder="Full Name">
                    <label for="email_address" class="sr-only">Email Address</label>
                    <input type="email" name="email_address" id="email_address" placeholder="Email Address">
                    <label for="phone_number" class="sr-only">Phone Number</label>
                    <input type="text" name="phone_number" id="phone_number" placeholder="Phone Number">
                    <label for="message" class="sr-only">Message</label>
                    <textarea name="message" id="message" placeholder="Leave us a message"></textarea>
                    <div class="disclaimer-hcaptcha">
                        <p>This site is protected by hCaptcha and its <a href="https://hcaptcha.com/privacy">Privacy Policy</a> and <a href="https://hcaptcha.com/terms">Terms of Service</a> apply.</p>
                    </div>
                    <a href="#" class="btn"><i class="material-icons-round">east</i>Submit</a>
                </form>
            </div>
        </div>
    </div>
    <!-- END Your Details -->

    <!-- We Can Help CTA -->
    <div class="content-wrapper we-can-help-cta">
        <div class="content-container">
            <h2>Have you ever thought about<br>going online? <span>We can help.</span></h2>
            <a href="what-we-offer.php" class="btn"><i class="material-icons-round">east</i>Find Out More</a>
        </div>
    </div>
    <!-- END We Can Help CTA -->

    <?php include_once "php/views/footer.php"; ?>
