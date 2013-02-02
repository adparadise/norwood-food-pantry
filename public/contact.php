<!doctype html>
<html>
  <?php
     $currentPage = "contact";
     $subtitle = "Contact Us";
     $description = "Address and contact information for the Food Pantry.";
  ?>
  <?php include("includes/head.php"); ?>
  <body>
    <div class="container single-column">
      <?php
         include("includes/masthead.php");
      ?>
      <div class="main">
        <h2>Pantry Address:</h2>
        <?php include("includes/address.php"); ?>

        <h3>Do you have a question?</h3>
        <?php include("includes/director.php"); ?>
      </div>

      <div class="clear"></div>
    </div>
  </body>
</html>
