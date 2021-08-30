<?php
$username = "xxxx"; 
$password = "xxxx"; 
$database = "id14529920_computersite"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM pairs";

if ($result = $mysqli->query($query)) {
?>
<!DOCTYPE html>
<html>
    <body>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <div>
            <canvas style="background-color: rgb(96, 177, 243); width:100cm; height:150px; left:-20px;top:  px;position: relative;"></canvas>
            <h1 id="t"
            style="text-align: center;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;color: rgb(255, 123, 0);;position: relative;font-size:xx-large;top: -160px;"
            >Computerpart
    pairing</h1>
    <span id="hom" style="font-size:30px;cursor:pointer;position: relative;top: -230px;" onclick="openNav()">&#9776;</span>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php">Home</a>
        <a href="pairs.php">Build-Pairs</a>
        <a href="manual.php">Manual</a>
        <a href="Comments.php">Comments</a>
        <a href="me.php">About Me</a>
      </div>
            <p style="text-align: center;position: relative;top: -200px;">Made by Arav Rambali</p>
        </div>
        <canvas style="background-color: rgb(160, 38, 38); width:10000px; height:70px; left:-1000px;top: -170px;position: relative;"></canvas>
        <p id="a" style="text-align: center ;position: relative;font-size: xx-large;top: -260px;">Comments</p>
  <?php     while ($row = $result->fetch_assoc()) {
        $field1name = $row["names"];
        $field2name = $row["content"];
        $field3name = $row["stars"];
        if($field3name == 0){
          $i1 = "width: 0px;";
          $i2 = "width: 0px;";
          $i3 = "width: 0px;";
          $i4 = "width: 0px;";
          $i5 = "width: 0px;";
        }
        if($field3name == 1){
          $i1 = "";
          $i2 = "width: 0px;";
          $i3 = "width: 0px;";
          $i4 = "width: 0px;";
          $i5 = "width: 0px;";
        }
        if($field3name == 2){
          $i1 = "";
          $i2 = "";
          $i3 = "width: 0px;";
          $i4 = "width: 0px;";
          $i5 = "width: 0px;";
        }
        if($field3name == 3){
          $i1 = "";
          $i2 = "";
          $i3 = "";
          $i4 = "width: 0px;";
          $i5 = "width: 0px;";
        }
        if($field3name == 4){
          $i1 = "";
          $i2 = "";
          $i3 = "";
          $i4 = "";
          $i5 = "width: 0px;";
        }
        if($field3name == 5){
          $i1 = "";
          $i2 = "";
          $i3 = "";
          $i4 = "";
          $i5 = "";
        }

        echo '
                  <h2 style="position: relative;top:-240px">'.$field1name.'<h2> 
                  <h4 style="position: relative; top:-240px">'.$field2name.'</h4> 
                  <img src="https://cms-assets.tutsplus.com/uploads/users/34/posts/30118/preview_image/star-rating.jpg" style="height: 20px;position: relative;top: -240px;'.$i1.'">
                  <img src="https://cms-assets.tutsplus.com/uploads/users/34/posts/30118/preview_image/star-rating.jpg" style="height: 20px;position: relative;top: -240px;'.$i2.'">
                  <img src="https://cms-assets.tutsplus.com/uploads/users/34/posts/30118/preview_image/star-rating.jpg" style="height: 20px;position: relative;top: -240px;'.$i3.'">
                  <img src="https://cms-assets.tutsplus.com/uploads/users/34/posts/30118/preview_image/star-rating.jpg" style="height: 20px;position: relative;top: -240px;'.$i4.'">
                  <img src="https://cms-assets.tutsplus.com/uploads/users/34/posts/30118/preview_image/star-rating.jpg" style="height: 20px;position: relative;top: -240px;'.$i5.'">
                  <br>
                  <br>
              ';
    }
    $result->free();
} ?>
<br><br><br>
  <div id="for" style="position:relative;top:-240px;">
  <h3>Do you want to leave a review?</h3><br>
        <form id="comf" action="servercom.php" method="POST">
        <label for="fname">Your name:</label><br>
        <input type="text" id="fname" name="fname" maxlength="20"><br><br>
        <label for="st">How many stars is this site worth?</label><br>
        <input type="radio" id="nul" name="stars" value="0">
  <label for="nul">0</label><br>
        <input type="radio" id="een" name="stars" value="1">
  <label for="een">1</label><br>
  <input type="radio" id="twee" name="stars" value="2">
  <label for="twee">2</label><br>
  <input type="radio" id="drie" name="stars" value="3">
  <label for="drie">3</label><br>
  <input type="radio" id="vier" name="stars" value="4">
  <label for="vier">4</label><br>
  <input type="radio" id="vijf" name="stars" value="5">
  <label for="vijf">5</label><br>
  <input style="position: relative; top: 150px; border-radius: 10px;" type="submit" value="Submit"><br>
        <label for="fname">Your comment:</label><br>
        </form>
        <textarea maxlength="200" rows="4" cols="50" name="comment" form="comf"></textarea>
</div>
<br><br><br><br><br>
       <p style="position: relative; top: -250px;">Do you have any questions? email met at: <a href="mailto:aravrambali@gmail.com" >aravrambali@gmail.com</p>
          <div id="dpi" style="height: 1in; width: 1in; left: 100%; position: fixed; top: 100%;"></div>
            
    </body>
    <style>
        html, body {
        max-width: 100%;
        overflow-x: hidden;
    }
    body {
      font-family: "Lato", sans-serif;
    }
    
    .sidenav {
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color:rgb(255, 123, 0);
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 60px;
    }
    
    .sidenav a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 25px;
      color: #000000;
      display: block;
      transition: 0.3s;
    }
    
    .sidenav a:hover {
      color: #f1f1f1;
    }
    
    .sidenav .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }
    
    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }
    </style>
    <script>
        function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }
    
    
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
        var dpi_x = document.getElementById('dpi').offsetWidth;
    var dpi_y = document.getElementById('dpi').offsetHeight;
    var width = screen.width / dpi_x;
    var height = screen.height / dpi_y;
    var norm = 27;
    var title = 32;
    if(width/height >1){
        document.getElementById("hom").style.top = "-280px";
    
        document.getElementById("a").style.top = "-250px";
    
        document.getElementById("t").style.fontSize = "50px";
    }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      $('html, body').animate({scrollTop:$(document).height()}, 'slow');
    </script>
    </html>
