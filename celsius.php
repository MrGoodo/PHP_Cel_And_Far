<!DOCTYPE html>
<html>
<head>
 <title> Fahrenheit To Celsius in PHP </title>
</head>
<body>
   <?php
     error_reporting(0);
     $fahrenheit = $_POST['fahrenheit'];
     $celsius = $_POST['celsius'];

  if (isset($_POST['convert'])){
   $c = $_POST['celsius'];
   $f = $c * 1.8 + 32;
   $display = round($f,2)."". " Degree's F";
  }

  
  if (isset($_POST['clear'])) {
    $fahrenheit = "";
    $celsius = "";
  } 

  ?>

  <h3>C to F converter </h3>
  <table>
   <form name="temperature" method="post">
    <tr>
    <td>Celsius</td>
    <td><input type="text" name="celsius" value="<?php echo $celsius; ?>"
        required autofocus> </td>
       </tr>
       <tr>
       <tr><td>Fahrenheit</td>
       <td><input type="text" name="fahrenheit:" value="<?php echo $display;?>"</td></tr>
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