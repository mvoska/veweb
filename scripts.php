<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.9.0.min.js"><\/script>')</script>
<script src="twitter-bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/modernizr.custom.48287.js"></script>
<script src="js/woothemes-FlexSlider-06b12f8/jquery.flexslider-min.js"></script>
<script src="js/prettyPhoto_3.1.5/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script src="js/isotope/jquery.isotope.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.ui.totop.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/restart_theme.js"></script>
<script type="text/javascript" src="js/tweetable.jquery.js"></script>
<script type="text/javascript">
  jQuery(function(){
        jQuery('#tweets').tweetable({
          username: 'mattvoska', 
            time: true,
            rotate: true,
            speed: 8000, 
            limit: 10,
            replies: true,
            retweets: true,
            position: 'append',
            failed: "Sorry, twitter is currently unavailable for this user.",
            html5: true,
            onComplete:function(jQueryul){
              jQuery('time').timeago();
            }
        });
        });
  </script>
