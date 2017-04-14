<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

$url = 'videos/'.$_POST["GAME"].'.mp4' ;
$url1 = 'images/'.$_POST["GAME"].'.jpg' ;
?>

<html>
    <head>
        <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Minimum Specs</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Audiowide|Cabin|Catamaran|Orbitron" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="WtProject.css" >

    </head>
    <style>
        #backgroundImage{
  background-repeat: no-repeat;
  height: 100%;
  width: 100%;
  background-attachment: scroll;
  background-size: 100%;
  background-color: transparent;

  opacity: 0.8;
  z-index: -1;
  filter:alpha(opacity=40);
}
body
{

background-repeat: no-repeat;
  height: 100%;
  width: 100%;
  background-size: 100%;
  background-color: transparent;
  background-clip: padding-box;
  opacity: 1;
  z-index: -1;
  filter:alpha(opacity=40);
}
</style>
    </head>
    <body>
        
        <div id="backgroundImage">
         <video poster=<?php echo $url1; ?> id="bgvid" playsinline autoplay loop>
  <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->

<source src=<?php echo $url; ?> type="video/mp4">
</video>   
        <?php
          try
{

        $user = 'aditya';
   $pass = 'aditya123';
   $app = 'specsx';
   $col = 'game_requirements';

   $connection = new Mongo('mongodb://'.$user.':'.$pass.'@ds161400.mlab.com:61400/specsx');

   $database   = $connection->selectDB($app);
   $collection = $database->selectCollection($col);

}
catch(MongoConnectionException $e)
{
    die("Failed to connect to database ".$e->getMessage());
}
   $processor =  array(
       1 => "Intel Pentium Dual-Core",
       2 => "Intel Pentium",
       3 => "Intel Core",
       4 => "Intel Core 2",
       5 => "Intel Core i3",
       6 => "Intel Core i5",
       7 => "Intel Core i7-970",
       8 => "Intel Core i7-980",
       9 => "Intel Core i7-980x",
       10 => "Intel Core i7-5820K",
       11 => "Intel Core i7-6800K",
       12 => "Intel Core i7-990x",
       13 => "Intel Core i7-6850K",
       14 => "Intel Core i7-6900K",
       15 => "Intel Core i7-6950X"   
   );
   $graphics =  array(
       1 => "GT 8800-512MB",
       2 => "GTX 260-2GB",
       3 => "GTX 460-2GB",
       4 => "GTX 650-2GB",
       5 => "GTX 660-2GB",
       6 => "GTX 970m-3GB",
       7 => "GTX 980m-4GB",
       8 => "GTX 1060-4GB",
       9 => "GTX 1060-8GB",
       10 => "GTX 1080-4GB" 
   );
   function processor_rank($name){
       for ($i = 1;$i<=15;$i++) {
           global $processor;
           if($processor[$i] == $name){
               return $i;
           }
       }
   }
   function graphics_rank($name){
       for ($i = 1;$i<=10;$i++) {
           global $graphics;
           if($graphics[$i] == $name){
               return $i;
           }
       }
   }
  
   $game_name = $_POST["GAME"];
  
   $cursor = $collection->findOne(array('game_name' => $game_name));
   
    $game_processor = (int)$_POST["PROCESSOR"];
   $game_graphics = (int)$_POST["GRAPHICS"];
   $os = $_POST["OS"];
   $ram =(int) $_POST["RAM"];
   $min_processor = processor_rank($cursor['processor']);
   $min_graphics = graphics_rank($cursor['graphics_card']);
   $min_ram = $cursor['ram'];
  
/* foreach ($cursor as  $document) {
       echo "</br>";
      echo $document["game_name"] ; 
   }*/
     
  $flag = FALSE;
       if( $game_processor >=  $min_processor)
       {
           if( $game_graphics >= $min_graphics)
           {
               if ($ram >= $min_ram)
               {
                   $flag = TRUE;
                  }
           }
           
       }
 else {
           $flag = FALSE;
           
       }
   
   
   $proce_rank = graphics_rank($cursor['graphics_card']);
   
  
   ?>
       <div class="main">
      <nav class="navbar navbar-inverse" background-color="transparent">
        <div class="container-fluid">
          <div class="navbar-header">
              <a class="navbar-brand" href="index.php">
                  <img alt="Brand" src="images/alien.svg" width="50px" height="70px" style="margin-top: -19px; "></a>
              <div class="container">
                  <a class="navbar-brand" href="index.php">
                       <p style="color: rgb(255,209,21);font-family: 'Orbitron', sans-serif;">Specs  <span style="color: rgb(49,229,139);font-family: 'Audiowide', cursive;">X</span></p></a>
                </div>
          </div>
        </div>
      </nav>
        <h3 class="msg">
    <?php
    if($flag==true)
    {
        echo '<p class="label label-success">Bingo! Your computer can handle this game.</p>';
    }
    else {
        echo '<p class="label label-danger">Oops!!  Your computer does not meet the minimum configurations.</p>';
    }
    ?>
     </h3>
      
        
       
   
<div class="FtableForm" >
<div class="FtableBack">
    <h3 style=" text-align: center; color: #04cdff;font-family: 'Orbitron', sans-serif;" >MINIMUM SPECS</h3>
<table style="width:100%;background-color:transparent"  > <font color="black">
<tr class="oddrow">
<td><h4>Game</h4></td>
</tr>

<tr class="evenrow">
<td>
    <?php 
      echo "<h4>".$game_name."</h4>";
    ?>
</td></tr>
<tr class="oddrow">
<td>
<h4>PROCESSOR</h4>
</td></tr>
<tr class="evenrow">
<td>
<?php 
       echo "<h4>".$processor[$min_processor]."</h4>";
    ?>
</td></tr>
<tr class="oddrow">
<td>
    <h4>GRAPHICS CARD</h4>
</td></tr>
<tr class="evenrow">
<td>
<?php 
       echo "<h4>".$graphics[$min_graphics]."</h4>";
    ?>
</td></tr>
<tr class="oddrow">
<td>
    <h4>OS</h4>
</td></tr>
<tr class="evenrow">
    <td>
<?php 
       echo "<h4>".$os."</h4>";
    ?>
</td>
</tr>
<tr class="oddrow">
<td>RAM</td></tr>
<tr class="evenrow">
<td>
<?php 
       echo "<h4>".$min_ram." GB</h4>";
    ?>
</td>
</tr>
</table></div>
</div>
</div>
        </div>
    </body>
</html>
