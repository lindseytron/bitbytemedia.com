<?php
    $pagetitle = "Contact Flipped Normal Media | 2D and 3D Multimedia Services in Cleveland, Akron, and Northeast Ohio";
    $pagedesc = "Flipped Normal Media's Contact page. Contact us and we can help you on your next media project!";
    include_once('header.php');
    include_once('navigation.php');
?>     
        <div class="container"> <!-- begin main content -->
            <div class="row">
                <div class="span8">
                    <div class="secondary">
                        <h1>Contact Flipped Normal Media</h1>
                        <div class="contact">
                            <h2>Get ahold of us for your next project!</h2>
                            <br /><br />
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
                        <h2>Please call or email us with any questions.</h2>
                        <p>We are available Monday &dash; Friday, from 9:00 am to 6:00 pm, unless otherwise specified.</p>
                        <p>Use the contact form to send a message any time and we will get back with you as soon as possible!</p>
                        <h2>Flipped Normal Media</h2>
                        <p class="hidden-phone"><strong>Phone: </strong>330.748.4913<br /><strong>Email: </strong> <a href="mailto:info@3dfnm.com" title="Email Flipped Normal Media">info@3dfnm.com</a></p> 
                        <p class="visible-phone"><strong>Phone:</strong> <span itemprop="telephone"><a href="tel:+3307484913">330.748.4913</a></span><br /><strong>Email: </strong> <a href="mailto:info@3dfnm.com" title="Email Flipped Normal Media">info@3dfnm.com</a></p>
                        <p>For all billing or technical support inquiries, please email <a href="mailto:support@3dfnm.com" title="Email Billing/Support">support@3dfnm.com</a>.</p>
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
