// (C) 2003 CodeLifter.com
// Free for all users, but leave in this  header

// =======================================
// set the following variables
// =======================================

// Set speed (milliseconds)
var speed = 3000;

// Specify the image files
var Pic = new Array() ;// don't touch this
// to add more images, just continue
// the pattern, adding to the array below

Pic[0] = 'images/Assassins_Creed_Syndicate.jpg';
Pic[1] = 'images/Battlefield_1.jpg';
Pic[2] = 'images/Bioshock_Infinite.jpg';
Pic[3] = 'images/Crysis_3.jpg';
Pic[4] = 'images/hitman_absolution.jpg';
Pic[5] = 'images/Mass_effect_Andromeda.jpg';
Pic[6] = 'images/Rise_of_the_Tomb_Raider.jpg';
Pic[7] = 'images/Watch_Dogs_2.jpg';
Pic[8] = 'images/Devil_May_Cry.jpg';
Pic[9] = 'images/GTA_5.jpg';
Pic[10] = 'images/Overwatch.jpg';

// =======================================
// do not edit anything below this line
// =======================================

var t;
var j = 0;
var p = Pic.length;
var str1 = 'url(';
var str2 = ')';
var preLoad = new Array();
for (i = 0; i < p; i++){
   preLoad[i] = new Image();
   preLoad[i].src = Pic[i];
}

function runBGSlideShow(){
   if (document.body){
      document.getElementById("backgroundImage").style.backgroundImage= "url('" + Pic[j] + "')";
   j = j + 1;
   if (j > (p-1)) j=0;
   t = setTimeout('runBGSlideShow()', speed);
   }
   }

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
   
    

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
