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
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
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
                $.preLoadImages("img/car-filler_on.jpg",
                                "img/car-filler_off.jpg",
                                "img/3d-filler_on.jpg",
                                "img/3d-filler_off.jpg",
                                "img/2d-filler_on.jpg",
                                "img/2d-filler_off.jpg",
                                "img/featured1_on.jpg",
                                "img/featured1_off.jpg",
                                "img/featured2_on.jpg",
                                "img/featured2_off.jpg",
                                "img/featured3_on.jpg",
                                "img/featured3_off.jpg",
                                "img/featured4_on.jpg",
                                "img/featured4_off.jpg",
                                "img/featured5_on.jpg",
                                "img/featured5_off.jpg",
                                "img/featured6_on.jpg",
                                "img/featured6_off.jpg", 
                                "img/facebook-icon_off.jpg",
                                "img/facebook-icon_on.jpg"
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
                    $("#Gallery a").photoSwipe(options);
                
                });
                
                
            }(window, window.jQuery, window.Code.PhotoSwipe));
        </script>
        <!-- end gallery -->