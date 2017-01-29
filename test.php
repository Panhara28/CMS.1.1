<?php include 'setup.php';?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="styles/main.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <title><?php echo $page['title']." | ".$page_title ?></title>
  </head>
  <body>

  <div class="expanded row">
    <div class="large-12 columns no-margin">
      <nav class="menu-centered" id="ctr-nav-background">
        <ul class="menu">
          <?php
            DynamicPages($conn);
           ?>
        </ul>
      </nav>
    </div>
  </div>


  <div class="row">
    <div class="large-12 columns">
      <h3>
        <?php echo $page['header'];?>
      </h3>
      <?php echo $page['body']; ?>
    </div>
  </div>

  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/foundation.min.js"></script>
  <script src="js/main.js" type="text/javascript"></script>
  <script>
    $(document).foundation();
  </script>
  </body>
</html>
