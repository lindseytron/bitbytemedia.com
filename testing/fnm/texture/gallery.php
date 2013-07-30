<?php
    include_once('header.php');
    include_once('navigation.php');
?>     
        <div class="container"> <!-- begin main content -->
            <div class="row">
                <div class="span12">
                    <div class="secondary">
                        <h1>Gallery Example</h1>
                        <h4>This is a photo gallery</h4>
                        <ul id="Gallery" class="gallery">
                            <li><a href="img/gallery/example-full.jpg"><img src="img/gallery/example-thumb.jpg" alt="Example One" /></a></li>
                            <li><a href="img/gallery/example2-full.jpg"><img src="img/gallery/example2-thumb.jpg" alt="Example Two" /></a></li>
                            <li><a href="img/gallery/example3-full.jpg"><img src="img/gallery/example3-thumb.jpg" alt="Example Three" /></a></li>
                            <li><a href="img/gallery/example-full.jpg"><img src="img/gallery/example-thumb.jpg" alt="Example One" /></a></li>
                            <li><a href="img/gallery/example2-full.jpg"><img src="img/gallery/example2-thumb.jpg" alt="Example Two" /></a></li>
                            <li><a href="img/gallery/example3-full.jpg"><img src="img/gallery/example3-thumb.jpg" alt="Example Three" /></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- /container -->
        <?php
            include_once('footer.php');
            include_once('scripts.php');
        ?>
    </body>
</html>
