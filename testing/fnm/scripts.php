        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.2.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <!-- contact -->
        <script type="text/javascript" src="formValidator/jquery.validationEngine.js"></script>
        <script type="text/javascript" src="jqtransformplugin/jquery.jqtransform.js"></script>
        <script type="text/javascript" src="contact-script.js"></script>
        <!-- menu scripts -->
        <script type="text/javascript" src="js/hoverIntent.js"></script>
        <script type="text/javascript" src="js/superfish.js"></script>
        <!-- end menu scripts -->
        <script>
            var _gaq=[['_setAccount','UA-37427068-1'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
        <script type="text/javascript"> 
            var $ = jQuery.noConflict(); 
            $(document).ready(function() { 
                $('#homepage-slider').carousel({ 
                    interval: 5000, 
                    cycle: true 
                }); 
            }); 
            </script>
        <!-- slider -->
        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
        <!-- initialize menu -->
        <script type="text/javascript">

        // initialise plugins
        jQuery(function(){
            jQuery('ul.sf-menu').superfish();
        });

        </script>
        <script>
            $(document).ready(function(){
                $.preLoadImages("img/3d-box_on.jpg",
                                "img/3d-box_off.jpg",
                                "img/2d-box_on.jpg",
                                "img/2d-box_off.jpg",
                                "img/about-box_on.jpg",
                                "img/about-box_off.jpg",
                                "img/featured/clark-thumb_on.jpg",
                                "img/featured/clark-thumb_off.jpg",
                                "img/featured/cocoro-thumb_on.jpg",
                                "img/featured/cocoro-thumb_off.jpg",
                                "img/featured/construction-thumb_on.jpg",
                                "img/featured/construction-thumb_off.jpg",
                                "img/featured/innowaiting-thumb_on.jpg",
                                "img/featured/innowaiting-thumb_off.jpg",
                                "img/featured/kore-thumb_on.jpg",
                                "img/featured/kore-thumb_off.jpg",
                                "img/featured/reliable-thumb_on.jpg",
                                "img/featured/reliable-thumb_off.jpg", 
                                "img/facebook-icon_off.jpg",
                                "img/facebook-icon_on.jpg",
                                "img/linkedin-icon_off.jpg",
                                "img/linkedin-icon_on.jpg",
                                "img/youtube-icon_off.jpg",
                                "img/youtube-icon_on.jpg"
                );
 
                $(".rollovers").hover(function(){
                    this.src = this.src.replace("_off","_on");
                    },
                    function(){
                        this.src = this.src.replace("_on","_off");
                    }
                );
            });
 
            (function($) {
                var cache = [];
                    $.preLoadImages = function() {
                        var args_len = arguments.length;
                        for (var i = args_len; i--;) {
                            var cacheImage = document.createElement('img');
                            cacheImage.src = arguments[i];
                            cache.push(cacheImage);
                        }
                    }
            })(jQuery)
        </script>
        <!-- gallery -->
        <script type="text/javascript" src="js/klass.min.js"></script>
        <script type="text/javascript" src="js/code.photoswipe.jquery-3.0.5.min.js"></script>
        <script type="text/javascript">
            (function(window, $, PhotoSwipe){
                
                $(document).ready(function(){
                    
                    var options = {};
                    $("#Gallery1 a").photoSwipe(options);
                    $("#Gallery2 a").photoSwipe(options);
                    $("#Gallery3 a").photoSwipe(options);
                    $("#Gallery4 a").photoSwipe(options);
                    $("#Gallery5 a").photoSwipe(options);
                    $("#Gallery6 a").photoSwipe(options);
                    $("#Gallery7 a").photoSwipe(options);
                
                });
                
                
            }(window, window.jQuery, window.Code.PhotoSwipe));
        </script>
        <!-- end gallery -->