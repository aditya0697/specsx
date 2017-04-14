
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>specsX | Specs</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="WtProject.css" >
   <link href="https://fonts.googleapis.com/css?family=Audiowide|Cabin|Catamaran|Orbitron" rel="stylesheet">
    <script src="WtProject.js" ></script>
    <script type='text/javascript'>
        function validateForm() {
    
    //var myForm = document.getElementByName("select_game");
    //Extract Each Element Value
    var game = document.getElementById("GAME").value;
    var processor = document.getElementById("PROCESSOR").value;
    var graphics = document.getElementById("GRAPHICS").value;
    var os = document.getElementById("OS").value;
    var ram = document.getElementById("RAM").value;
   // var y = document.getElementByName("GAME").options;
    if(game == "" ||processor == "" ||graphics == "" ||os == "" ||ram == "")
    {
        document.getElementById("errors").innerHTML="<h3 class='msg'><p class='label label-danger'>Please Select All Options!!.</p></h3>";
        return false;
    }
    return true;
    
    }

     //return false;

   // var x = document.forms["select"].elements;
    //return false;
     //document.getElementById('error_msg').innerHTML = '<h3>Aditya</h3>';
    //for(var i=0 ;i<x.length;i++)
    //{
      ///  document.getElementById('error_msg').innerHTML += x[i];
        //if (x[i] === "") {
          //  document.getElementById('error_msg').innerHTML = '<h3>Aditya</h3>';
            
       // }
   // }
    </script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>
  <body onload="runBGSlideShow()">
     

<div id="backgroundImage">

    <div class="main">
      <nav class="navbar navbar-inverse" background-color="transparent">
        <div class="container-fluid">
          <div class="navbar-header">
              <a class="navbar-brand" href="#" style="image-orientation: 180deg;">
                  <img alt="Brand" src="images/alien.svg" width="50px" height="70px" id="brandlogo" style="margin-top: -19px; "></a>
              <div class="container">
                   <a class="navbar-brand" href="#">
                       <p style="color: rgb(255,209,21);font-family: 'Orbitron', sans-serif;">Specs  <span style="color: rgb(49,229,139);font-family: 'Audiowide', cursive;">X</span></p></a></div>
          </div>
        </div>
      </nav>
        <div id="errors"></div>
      <div class="tableForm" >
        <div class="tableBack">

<table style="width:100%; background-color:transparent"  > 
    <font color="black">
<tr class="oddrow">
<td>GAME</td>
</tr>
<form id="land" name="select_game" action="form.php" onsubmit="return validateForm()" method="POST">
<tr class="evenrow">
<td>
<select name="GAME" id="GAME" >
    <option value="" >Select Game </option>
<option  value="Battlefield_1">Battlefield 1</option>
<option  value="Overwatch">Overwatch</option>
<option  value="Bioshock_Infinite">Bioshock Infinte</option>
<option  value="Assassins_Creed_Syndicate">Assassins Creed Syndicate</option>
<option  value="Mass_effect_Andromeda">Mass effect Andromeda</option>
<option  value="Rise_of_the_Tomb_Raider">Rise of Tom Raider</option>
<option  value="Crysis_3">Crysis 3</option>
<option  value="Watch_Dogs_2">Watch Dogs 2</option>
<option  value="GTA_5">GTA 5</option>
<option  value="Devil_May_Cry">Devil May Cry</option>
</select>
</td></tr>
<tr class="oddrow">
<td>
PROCESSOR
</td></tr>
<tr class="evenrow">
<td>
<select name="PROCESSOR" id="PROCESSOR">
<option value="">Select Processor</option>
<option  value="1">Intel Pentium Dual-Core</option>
<option  value="2">Intel Pentium </option>
<option  value="3">Intel Core</option>
<option  value="4">Intel Core 2</option>
<option  value="5">Intel Core i3</option>
<option  value="6">Intel Core i5</option>
<option  value="7">Intel Core i7-970</option>
<option  value="8">Intel Core i7-980</option>
<option  value="9">Intel Core i7-980x</option>
<option  value="10">Intel Core i7-5820K</option>
<option  value="11">Intel Core i7-6800K</option>
<option  value="12">Intel Core i7-990x</option>
<option  value="13">Intel Core i7-6850K</option>
<option  value="14">Intel Core i7-6900K</option>
<option  value="15">Intel Core i7-6950X</option>
</select>
</td></tr>
<tr class="oddrow">
<td>
 GRAPHICS CARD
</td></tr>
<tr class="evenrow">
<td>
<select name="GRAPHICS" id="GRAPHICS" >
<option value="">Select Graphics</option>
<option  value="1">GT 8800-512MB</option>
<option  value="2">GTX 260-2GB</option>
<option  value="3">GTX 460-2GB</option>
<option  value="4">GTX 650-2GB</option>
<option  value="5">GTX 660-2GB</option>
<option  value="6">GTX 970m-3GB</option>
<option  value="7">GTX 980m-4GB</option>
<option  value="8">GTX 1060-4GB</option>
<option  value="9">GTX 1060-8GB</option>
<option  value="10">GTX 1080-4GB</option>
</select>
</td></tr>
<tr class="oddrow">
<td>
OS
</td></tr>
<tr class="evenrow">
<td>
    <select name="OS" id="OS">
<option value="">Select OS</option>
<option  value="Windows XP">Windows XP</option>
<option  value="Windows 7(32-bit)">Windows 7(32-bit)</option>
<option  value="Windows 7(64-bit)">Windows 7(64-bit)</option>
<option  value="Windows 8(32-bit)">Windows 8(32-bit)</option>
<option  value="Windows 8(64-bit)">Windows 8(64-bit)</option>
<option  value="Windows 10(32-bit)">Windows 10(32-bit)</option>
<option  value="Windows 10(64-bit)">Windows 10(64-bit)</option>
</select>
</td>
</tr>
<tr class="oddrow">
<td>
RAM
</td></tr>
<tr class="evenrow">
<td>
    <select name="RAM" id="RAM">
<option value="">Select RAM</option>
<option  value="0.5">512 MB</option>
<option  value="1">1 GB</option>
<option  value="2">2 GB</option>
<option  value="4">4 GB</option>
<option  value="6">6 GB</option>
<option  value="8">8 GB</option>
</select><br>
</td>
</tr>
      
</table>
</form></font>

        </div>
          
        
          
</div>
        <div class="sono"style="align-items: center;">
<div style="display: inline-block;">          
    <input type="submit" class="btn btn-primary"  value="Submit" form="land">
<input type="reset" class="btn btn-danger" value="Reset">
    </div>
        </div>
   
</div>
</div>
</body>
</html>
