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

    <div class="row">
      <div id="about">
        <p>Like Young Records is a small, independent record label that is based in <a href="http://maps.google.com/maps/place?q=New+Albany+IN" target="_blank">New Albany, IN</a> (seriously, <em>that</em> place) and is run by <a href="http://www.facebook.com/jordan.reidinger" target="_blank">Jordan Reidinger</a>. Like Young primarily releases cassettes full of noise / ambient / minimal / indie / pop galore! And, we've even released hardcore and black metal. We are dedicated to spreading good music and helping bands as much as possible. Fuck money. Mind the <a href="http://en.wikipedia.org/wiki/Compact_Cassette" target="_blank">tape</a>.</p>
        <p class="tagline text-muted text-center">
        <a href="http://store.likeyoungrecords.com/product/3-button-set">Fuck Donald Trump.</a><br/>Tonight, we will live like young.<br />Welcome to our cult.</p>
      </div> <!-- about -->
    </div> <!-- row -->
    <br />
    <div class="center" id="fb-container"></div>

    <?php include('includes/footer.php'); ?>

    <div id="fb-root"></div>
    <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    $(window).bind("load resize", function() {
      var container_width = $('#banner').width();
      $('#fb-container').html('<div class="fb-page" ' +
      'data-href="https://www.facebook.com/likexyoung" ' +
      'data-width="' + container_width + '" ' +
      'data-height="500" ' +
      'data-small-header="false" ' +
      'data-adapt-container-width="true" ' +
      'data-hide-cover="false" ' +
      'data-show-facepile="false" ' +
      'data-show-posts="true">' +
      '</div>');
      FB.XFBML.parse();
    });
    </script>

  </body>
</html>
