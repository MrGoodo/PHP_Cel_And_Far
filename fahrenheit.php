<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
     error_reporting(0);
     $fahrenheit = $_POST['fahrenheit'];
     $celsius = $_POST['celsius'];

  if (isset($_POST['convert'])){
   $f = $_POST['fahrenheit'];
   $c = ($f-32) * 5/9;
   $display = round($c,2)."". " Degree's Celsius";
  }

  
  if (isset($_POST['clear'])) {
    $fahrenheit = "";
    $celsius = "";
  } 

  ?>

  <h3>F to C converter </h3>
  <table>
   <form name="temperature" method="post">
    <tr>
    <td>Fahrenheit</td>
    <td><input type="text" name="fahrenheit" value="<?php echo $fahrenheit; ?>"
        required autofocus> </td>
       </tr>
       <tr>
       <tr><td>Celsius is </td>
       <td><input type="text" name="celsius:" value="<?php echo $display;?>"</td></tr>
       <tr></tr></tr>
       <tr>
       <td><input type="submit" value="Convert" name="convert"/>
       &nbsp;&nbsp;&nbsp;
       <input type="submit" value="Clear" name="clear" /></td>
      </tr>
   </form>
     </table>
    </body>
</html>