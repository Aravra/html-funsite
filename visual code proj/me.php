<html>
<body>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <div>
        <p style="position: absolute;height: 100000px;width: 10000px; background-color: black; top: -20px; left: -10px;"></p>
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
    <p id="a" style="text-align: center ;position: relative;font-size: xx-large;top: -260px;">About Me</p>
    <p id="hfd" style="position: relative;top: -240px; color: green;"></p>
    <p id="pr" style="position: relative;top: -240px; color: green;"></p>
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
var getallen = 1;
                 var checker = 1;
                 var totaal = 0;
                 var spe = 10;
                 var aantal = 1000;
                 var c = 997;
                 setTimeout(pri,18000);
                 setTimeout(ppn2,35000)
function ppn2(){
  getallen = 1;
  checker = 1;
  totaal = 0;
  spe = 0;
  aantal = 5000;
  c = 4999
  pri();
}
                 function pri(){
                if (getallen % checker == 0)
                {
                  if (getallen > c)
                    {                        document.getElementById("pr").innerHTML = "total prime number between 0 and "+ aantal+": " + totaal;
                        clearInterval(h);
                    }

                    else if (getallen == checker)
                    {
                        document.getElementById("pr").innerHTML = getallen;
                        totaal += 1;
                        getallen += 1;
                        checker = 2;
                        var h = setInterval(pri,spe);

                    }
                    else
                    {
                        checker = 2;
                        getallen += 1;

                    }

                }
                else
                {
                    checker += 1;
                }

                 }











var x;

var i = 0;
var txt = "Hello, I'm programmed to say this... I contain a lot of code, i'm made from html, css, javascript and php. Do you know a litle bit of coding?, what does this mean: <p>hello</p> and this: $_POST an this: var. Probably most of you don't know this... Do you know all the prime numbers between 0 an 1000? I know, look at the numbers below! I slowed the process down to make it visible for you, this is the maximum speed i can find every prime number between 0 and 5000. This project was my builders first website that he coded. He already made a game called Save The Block. Feel free to email me if you have any questions. ";
var speed = 50;
typeWriter();
function typeWriter() {
  if( i == 335 ){
    document.getElementById("hfd").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, 10000);
  }
 else if( i == 465 ){
    document.getElementById("hfd").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, 18000);
  }
 else if (i < txt.length) {
    document.getElementById("hfd").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
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
</html>