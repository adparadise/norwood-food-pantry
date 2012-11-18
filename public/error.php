<!doctype html>
<html>
  <?php include("includes/head.php"); ?>
  <body>
    <div class="container">
      <?php 
         include("includes/masthead.php"); 
      ?>
      <div class="main">

        <?php 
           $message = "Page not found";
           switch ($_SERVER['REDIRECT_STATUS']) { 
               case "500":
                   $message = "There was a server error...";
                   break;
           }
        ?>
        <h1><?php echo $message ?></h1>

        <?php include("includes/address.php"); ?>
      </div>
    </div>
  </body>
</html>
