<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once $_SERVER['DOCUMENT_ROOT'] . "/lib/functions.php";
?>
<html>
  <head>
  </head>
  <body>
    <center>
      <h1>Welcome - CMSC495</h1>
      <h3>Stuff goes here...</h3>
    </center>
    <p>&nbsp;</p>
    <p>Search for breeder pairs older than (months):</p>
 <form action="lib/getAgingBreeders.php" method="get"> 
 <input type="text" name="months" placeholder="6" /> 
 <input type="submit" name="submit" /> </form> 
    </p>
  </body>
</html>
