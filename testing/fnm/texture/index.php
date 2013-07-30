<?php
    include_once('header.php');
    include_once('navigation.php');
?>     
        <div class="container"> <!-- begin main content -->
            <?php
                include_once('slider.php');
                include_once('homepage-content-boxes.php');
            ?>   
        </div> <!-- /container -->
        <div class="tagline-wrapper">
            <div class="container tagline-image">
                <img src="img/animation-tagline.jpg" width="100%" alt="high performance animation tagline" />
            </div>
        </div>
        <?php 
            include_once('featured-module.php');
        ?>
        <?php
            include_once('footer.php');
            include_once('scripts.php');
        ?>
    </body>
</html>
