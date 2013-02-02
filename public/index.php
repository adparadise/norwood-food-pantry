<!doctype html>
<html>
  <?php
     $currentPage = "home";
     $subtitle = "Home";
     $description = "A food pantry serving the families of Norwood, MA.";
  ?>
  <?php include("includes/head.php"); ?>
  <body>
    <div class="container single-column">
      <?php
         include("includes/masthead.php");
      ?>
      <div class="main">
        <h1></h1>
        <p>The Ecumenical Community Food Pantry of Norwood, Inc. serves
          over 350 families in the towns of Norwood and Westwood. We
          encourage clients to use the pantry as a stepping stone toward
          independence. All clients are treated with respect and dignity,
          and services are confidential.</p>

        <!--
        <p><a href="documents/norwood-food-pantry-brochure.pdf">Pantry
            Brochure</a></p>
        -->

        <p>If you are not a Norwood or Westwood resident,
          the <a href="http://www.gbfb.org">Greater Boston Food Bank</a>
          can help you locate a pantry in your community.</p>
      </div>

      <!--
      <div class="side">
        <h1>News and Events</h1>
        <p>Announcements</p>
        <p>Links</p>
      </div>
      -->

      <div class="main">
        <div class="info">
          <h2>Did you know?</h2>
          <ul>
            <li>The pantry opened in 1989 providing food to six
              clients.</li>

            <li>We have a completely volunteer staff, giving many hours of
              their time each week to purchasing food, stocking shelves,
              sorting goods by expiration dates, cleaning, repairing, and
              handling administrative duties. Currently, we have over 100
              volunteers involved in one or more of these activities.</li>

            <!--
            <li>Last year we collected over XXXXX-lbs of food for
              distribution.</li>
            -->

            <li>Federal/USDA data, values food at $1.66 per
              pound. Fortunately we receive many donations of food rather
              than having to purchase all of the food we need.</li>
          </ul>
        </div>

        <p>Norwood and Westwood are extremely generous communities. We
          are fortunate to have these resources available to us. Thank you
          to all of you for all you do.</p>

        <ul class="centered-logos">
          <li><img src="images/ProjectBreadlogo.gif"/></li>
          <li><img src="images/UnitedWaylogo.jpg"/></li>
        </ul>
        <div class="clear"></div>

        <?php include("includes/footer.php"); ?>
      </div>

      <div class="clear"></div>
    </div>
  </body>
</html>
