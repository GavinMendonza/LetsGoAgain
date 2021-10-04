<?php
include 'arrays.php';
?>
<main>
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto" style="margin-top: 14%">
                <h1 class=" fw-light">Deals from your favourite booking sites. All in one place!</h1>
                <p class="lead text-muted">We are a metasearch engine that compares accommodation prices and offers provided to us by many different online booking sites. We compare and display different offers from many booking sites!</p>
                <p>
                    <a href="login.php" class="btn btn-primary my-2">Login/Signup</a>
                    <a href="#" id="topDealsButton" class="btn btn-secondary my-2">Check out our best deals!</a>
                </p>
            </div>
        </div>
    </section>
    <!--  -->
    <div id="topContentCreators" class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                <?php
                $colors = array("red", "green", "blue", "yellow");

                foreach ($array as $value) {
                    include 'posts.php';
                }
                ?>
            </div>
        </div>
    </div>
    <!--  -->
</main>