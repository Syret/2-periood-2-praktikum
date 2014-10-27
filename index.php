
<?php
  header("Location: components/new-page.php");
  exit;
?>
<!DOCTYPE html>
<html>
  <head>
   <?php 
   require ("components/site-functions.php"); 
   ?>
  </head>
  <body>
   <?php
     $argument = " Syret";
     echo "<p>Hei{$argument}</p>";
   ?>
  </body>
</html>