<?php
    include_once('header.php');
    include_once('navigation.php');
?>     
        <div class="container"> <!-- begin main content -->
            <div class="row">
                <div class="span8">
                    <div class="secondary">
                        <h1>Contact Flipped Normal Media</h1>
                        <hr />
                        <h4>Get ahold of us for your next project!</h4>
                        <div class="contact">
                            <form id="contact-form" name="contact-form" class="form-horizontal" method="post" action="submit.php">
                                <div class="control-group">
                                    <label class="control-label" for="name"><i class="icon-user icon-white"></i> Name</label>
                                    <div class="controls">
                                        <input type="text" class="validate[required,custom[onlyLetter]]" name="name" id="name" value="<?=$_SESSION['post']['name']?>" placeholder="Your Name" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="email"><i class="icon-envelope icon-white"></i> Email</label>
                                    <div class="controls">
                                        <input type="text" class="validate[required,custom[email]]" name="email" id="email" value="<?=$_SESSION['post']['email']?>" placeholder="e.g. you@youremail.com" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="subject"><i class="icon-pencil icon-white"></i> Subject</label>
                                    <div class="controls">
                                        <select name="subject" id="subject">
                                            <option value="" selected="selected"> - Choose One -</option>
                                            <option value="Question">Question</option>
                                            <option value="Project Inquiry">Project inquiry</option>
                                            <option value="Comment">Comment</option>
                                            <option value="Message">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="message"><i class="icon-comment icon-white"></i> Message</label>
                                    <div class="controls">
                                        <textarea name="message" id="message" class="validate[required]" cols="35" rows="5"><?=$_SESSION['post']['message']?></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="captcha"><i class="icon-question-sign icon-white"></i> <?=$_SESSION['n1']?> + <?=$_SESSION['n2']?> =</label>
                                    <div class="controls">
                                        <input type="text" class="validate[required,custom[onlyNumber]]" name="captcha" id="captcha" />
                                    </div>
                                </div>
                                 <div class="control-group">
                                    <div class="controls">
                                        <input type="submit" name="submit" id="submit" value="Send Message!" /><br />
                                        <?=$str?>
                                        <img id="loading" src="img/ajax-load.gif" width="16" height="16" alt="loading" />
                                    </div>
                                </div>
                            </form>   
                            <?=$success?> 
                        </div>                        
                    </div>
                </div>
                <div class="span4">
                    <div class="secondary">
                        <p>We can put contact information over here.</p>
                        <p>Flipped Normal Media<br />PO Box 555, Cleveland, OH 55555<br /><br />555-5555</p>
                    </div>
                </div>
            </div>
        </div> <!-- /container -->
        <?php
            include_once('featured-module.php');
            include_once('footer.php');
            include_once('scripts.php');
        ?>
    </body>
</html>
