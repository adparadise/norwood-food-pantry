  <head>
<?php
    $url = "http://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];

    $title = "Norwood Ecumenical Food Pantry";
    if (strlen($subtitle) > 0) {
       $title = "$title - $subtitle";
    }
?>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/foodpantry.css"/>
    <link rel="stylesheet" href="css/fifties.css"/>
    <link rel="stylesheet" href="css/colors.css"/>
    <meta name="viewport" content="width=device-width initial-scale=1.0" />
    <meta name="description" content="<?php echo $description; ?>"/>
    <title><?php echo $title; ?></title>
    <meta property="og:title" content="<?php echo $title; ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:description" content="<?php echo $description; ?>"/>
    <meta property="og:url" content="<?php echo $url; ?>"/>
    <meta property="og:image" content="http://norwoodpantry.org/images/giving.jpg"/>
  </head>
