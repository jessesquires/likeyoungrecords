<!DOCTYPE html>
<?php $thisPage="news"; ?>
<html lang="en">
  <head>
    <title>Like Young Records</title>
    <?php include('includes/head.php'); ?>
  </head>
  <body>
    <?php include('includes/header.php'); ?>

    <p>Like Young Records is a small, independent label that is based in New Albany, IN and run by Jordan Reidinger. NOSIE / AMBIENT / MINIMAL / INDIE / POP. Like Young Records is a small, independent label that is based in New Albany, IN and run by Jordan Reidinger. NOSIE / AMBIENT / MINIMAL / INDIE / POP. Like Young Records is a small, independent label that is based in New Albany, IN and run by Jordan Reidinger. NOSIE / AMBIENT / MINIMAL / INDIE / POP. Like Young Records is a small, independent label that is based in New Albany, IN and run by Jordan Reidinger. NOSIE / AMBIENT / MINIMAL / INDIE / POP. Like Young Records is a small, independent label that is based in New Albany, IN and run by Jordan Reidinger. NOSIE / AMBIENT / MINIMAL / INDIE / POP. </p>
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