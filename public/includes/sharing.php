<?php
    $url = "http://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
?>
<div class="fb-like" data-href="http://norwoodpantry.org" data-send="false" data-layout="button_count" data-width="100%" data-show-faces="false"></div>
<div id="fb-root"></div>
<script>
   (function(d, s, id) {
      var js, fjs;
      if (d.getElementById(id)) {
         return;
      }
      fjs = d.getElementsByTagName(s)[0];
      js = d.createElement(s);
      js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=2412207148";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
