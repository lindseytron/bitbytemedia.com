<?php
    $pagetitle = "Flipped Normal Media Portfolio | Still, Animation, and Exmploratory Portfolio Galleries | Cleveland/Akron Ohio Multimedia Services";
    $pagedesc = "Flipped Normal Media's portfolio page featuring links to galleries which display single renderings, graphic design, animations, and more.";
    include_once('header.php');
    include_once('navigation.php');
?>     
        <div class="container"> <!-- begin main content -->
            <div class="row">
                <div class="span12">
                    <div class="secondary">
                        <h1>Portfolio</h1>
                        <h2>Please choose a portfolio to view...</h2>
                    </div>
                        <div class="row">
                            <div class="span6">
                                <h3><a href="still-gallery.php" title="Still Portfolio">Still Portfolio Gallery</a></h3>
                                <a href="still-gallery.php" class="thumbnail" title="View Still Portfolio">
                                    <img src="img/2d-gallery-snippet_off.jpg" width="100%" alt="2d gallery example" class="rollovers" />
                                </a>
                                <p>Be sure to check out our still gallery to see some screenshots of animations we’ve done, single renderings, graphic design and everything else!</p>
                                <p><a class="btn read-more" href="still-gallery.php" title="View the Still Portfolio">View still gallery &raquo;</a></p>
                            </div>
                            <div class="span6">
                                <h3><a href="animation-gallery.php" title="Animation Portfolio">Animation Portfolio Gallery</a></h3>
                                <a href="animation-gallery.php" class="thumbnail" title="View Animation Portfolio">
                                    <img src="img/3d-gallery-snippet_off.jpg" width="100%" alt="3d gallery example" class="rollovers" />
                                </a>
                                <p>Be sure to check out our animation gallery to see everything in motion! Still images can only tell part of the story. Seeing the pictures come to life is where it gets fun!</p>
                                <p><a class="btn read-more" href="animation-gallery.php" title="View the Animation Portfolio">View animation gallery &raquo;</a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span6">
                                <h3><a href="exploratory-gallery.php" title="Exploratory Portfolio">Exploratory Portfolio Gallery</a></h3>
                                <a href="exploratory-gallery.php" class="thumbnail" title="View Exploratory Portfolio">
                                    <img src="img/ex-gallery-snippet_off.jpg" width="100%" alt="exploratory gallery example" class="rollovers" />
                                </a>
                                <p>Be sure to check out our exploratory gallery to see how we utilize our downtime to explore new methods and further our technique.</p>
                                <p><a class="btn read-more" href="exploratory-gallery.php" title="View the Exploratory Portfolio">View exploratory gallery &raquo;</a></p>
                            </div>
                        </div>
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