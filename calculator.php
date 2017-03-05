<html>
 <head>
 <title>calculator.php</title>
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1"">
  <style>
     .title p{
     font-size: 19pt;
     }
   </style>
 </head>
 <body>
 <p align="center" class="title">Calculator for beginner [PHP]</p>
  <form method="post">
   <center>
    <input type="number" style="width: 65px;" name="num1">
    <select name="c">
     <option selected>+</option>
     <option>-</option>
     <option>*</option>
     <option>/</option>
    <select>
    <input type="number" style="width: 65px;" name="num2">
    <input type="submit" value="Calculate" name="send">
   </center>
  </form>
  <br>
  <br>
  </body>
</html>

<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$c = $_POST['c'];
$send = $_POST['send'];
$calculate = true;
$r = $num1 + $num2;

if(isset($send)){
if($c == "+"){
$r = $num1 + $num2;
echo("\n<p align='center'>$num1 + $num2 = $r</p>");
}
if($c == "*"){
$r = $num1 * $num2;
echo("\n<p align='center'>$num1 * $num2 = $r</p>");
}
if($c == "-"){
$r = $num1 - $num2;
echo("\n<p align='center'>$num1 - $num2 = $r</p>");
}
if($c == "/"){
$r = $num1 / $num2;
echo("\n<p align='center'>$num1 / $num2 = $r</p>");
}
}

?>
