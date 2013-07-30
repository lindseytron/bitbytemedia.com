<?php
    $pagetitle = "Flipped Normal Media | Akron, Cleveland, Northeast Ohio, 2D &amp; 3D Multimedia Services";
    $pagedesc = "Flipped Normal Media offers Multimedia services including 3d and 2d animation, design, video, audio and output services catering to the architectural, advertising, engineering, education and legal industries, as well as others. Flipped Normal Media serves local clients in the Cleveland/Akron area, as well as across the United States.";
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
