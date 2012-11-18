<?php
  $classes = array();
  $classes[$currentPage] = "current";
?>
      <div class="masthead">
        <div class="banner">
          <img src="images/main-banner.jpg"/>
        </div>
        <ul class="main-menu">
          <li class="<?php echo $classes['home'] ?>"><a href="index">Home</a></li>
          <li class="<?php echo $classes['about'] ?>"><a href="about">About Us</a></li>
          <li class="<?php echo $classes['food'] ?>"><a href="food">Need Food?</a></li>
          <li class="<?php echo $classes['helping'] ?>"><a href="helping">Want to Help?</a></li>
          <li class="<?php echo $classes['thanks'] ?>"><a href="thanks">Special Thanks</a></li>
          <li class="<?php echo $classes['contact'] ?>"><a href="contact">Contact Us</a></li>
        </ul>
      </div>
