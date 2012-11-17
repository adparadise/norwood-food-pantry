<!doctype html>
<html>
  <?php include("head.php"); ?>
  <body>
    <div class="container">
      <?php 
         $currentPage = "contact";
         include("masthead.php"); 
      ?>
      <div class="main">
        <h2>Pantry Address:</h2>
        <?php include("address.php"); ?>

        <h3>Do you have a question?</h3>
        <?php include("director.php"); ?>
      </div>
    </div>
  </body>
</html>
