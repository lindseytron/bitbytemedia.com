<?php
    $pagetitle = "Flipped Normal Media | 2D, 3D, Multimedia services in Cleveland/Akron Ohio";
    $pagedesc = "Flipped Normal Media's error 404 page. Contact us to bring your next project to life!";
    include_once('header.php');
    include_once('navigation.php');
?>     
        <div class="container"> <!-- begin main content -->
            <div class="row">
                <div class="span8">
                    <div class="secondary">
                        <h1>Oops, Our Bad!</h1>
                        <h2>It seems the page you were seeking has vanished...</h2>
                        <p>Instead, try using the main navigation above, or use the search bar. Even better, you can try out one of these links:</p>
                        <ul class="sitemap-list">
                            <li><a href="index.php" title="Back to the Home Page!">&laquo; Back to the Home Page</a></li>
                            <li><a href="about.php" title="About Flipped Normal Media">About Flipped Normal Media</a></li>
                            <li><a href="services.php" title="Our Services">Services</a>
                                <ul>
                                    <li><a href="3d.php" title="3D Services">3D</a></li>
                                    <li><a href="2d.php" title="2D Services">2D</a></li>
                                </ul>
                            </li>
                            <li><a href="portfolio.php" title="Portfolio">Portfolio</a>
                                <ul>
                                    <li><a href="still-gallery.php" title="Still Portfolio Gallery">Still Gallery</a></li>
                                    <li><a href="animation-gallery.php" title="Animation Portfolio Gallery">Animation Gallery</a></li>
                                    <li><a href="exploratory-gallery.php" title="Exploratory Portfolio Gallery">Exploratory Gallery</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.php" title="Contact Us!">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="span4">
                    <div class="secondary">
                        <div class="well">
                            <h3>Feeling a little lost? Contact us!</h3>
                            <p>Call us or send a message and we can help you find what you're looking for!
                            <br /><br />
                            <a class="btn btn-large btn-primary" href="contact.php" title="Contact FNM">Contact Flipped Normal Media &raquo;</a></p>

                            <h2>Check out our portfolio!</h2>
                            <p>Take a look to see what we've been up to...and how we can help you!</p>
                            <p><a class="btn read-more" href="portfolio.php" title="View our work">View Our Work &raquo;</a></p>
                        </div>
                    </div>
                </div>
            </div>
               <?php include_once('featured-module.php'); ?>
            </div>
        </div> <!-- /container -->
        <?php
            include_once('footer.php');
            include_once('scripts.php');
        ?>
    </body>
</html>
