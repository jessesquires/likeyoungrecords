<!DOCTYPE html>
<?php $thisPage="news"; ?>
<html lang="en">
  <head>
    <title>Like Young Records</title>
    <?php include('includes/head.php'); ?>
  </head>
  <body>
    <?php include('includes/banner.php'); ?>
    <?php include('includes/menu.php'); ?>
    
    <div id="about">
      <p>Like Young Records is a small, independent record label that is based in <a href="http://maps.google.com/maps/place?q=New+Albany+IN" target="_blank">New Albany, IN</a> (seriously, <em>that</em> place) and is run by <a href="http://www.facebook.com/jordan.reidinger" target="_blank">Jordan Reidinger</a>. Like Young primarily releases cassettes full of noise / ambient / minimal / indie / pop galore! We are dedicated to spreading good music and helping bands as much as possible. Fuck money. Mind the tape.</p>
      <p class="text-center">Tonight, we will live like young.</p>
    </div>
    <hr>
    <div class="center" id="fb-container"></div>
    
    <?php include('includes/footer.php'); ?>

    <div id="fb-root"></div>
    <script>
      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));

      $(window).bind("load resize", function() {   
        var container_width = $('#main').width() - 50;    
        
        $('#fb-container').html('<div class="fb-like-box" ' + 
        'data-href="https://www.facebook.com/likexyoung"' +
        ' data-width="' + container_width + '" data-height="500" data-show-faces="false" ' +
        'data-stream="true" data-border-color="#ffffff" data-header="false"></div>');
        FB.XFBML.parse( );    
    }); 
    </script>

  </body>
</html>