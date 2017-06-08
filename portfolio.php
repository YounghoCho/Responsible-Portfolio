<?
header("Content-Type: text/html; charset=UTF-8");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi">

<title>조영호의 포트폴리오</title>
 <!--apng 모듈 1 S-->
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdn.rawgit.com/davidmz/apng-canvas/v2.0.0/build/apng-canvas.min.js"></script>
  <script>
  $(function () {
    APNG.ifNeeded()
    .then(function () {
      $("#one").find("img").each(function () { APNG.animateImage(this); });
    })
  });
  </script>
 <!--apng 모듈 1 E-->

<style>
.who{position:absolute;top:0;left:0;color:white;z-index:2;margin:10px 0px 0px 10px;}
body {font-family: "Lato", sans-serif; margin:0;width:100%;}
#one{position:absolute;background-color:#aaa;width:100%;z-index:-1;overflow:hidden;}
/* Style the tab */
div.tab {
    overflow: hidden;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #666;
}

/* Create an active/current tablink class */
div.tab button.active {
}

/* Style the tab content */
.tabcontent {
	margin:0;
    display: none;
    padding: 6px 12px;
    border:none;
    border-top: none;
}

/* Style the close button */
.topright {
    float: right;
    cursor: pointer;
    font-size: 30px;
	font-weight:bold;
	color:white;
	margin-top:10%;
	margin-right:220px;
}

.topright:hover {color: red;}
#myDIV{display:none;}
.container1{display:none;}
#overlay1,#overlay2,#overlay3,#overlay4,#overlay5 {display:none;}
/*넓은화면*/
@media all and (max-width:1024px){
.who{position:absolute;top:0;right:0;color:white;z-index:2;margin:10px 0px 0px 10px;}
body{ font-family: "Lato", sans-serif; margin:0;width:100%;height:720px;background-color:black;}
.tab{display:none;}
#one{position:absolute;top:20%;border:none;width:100%;z-index:-1;overflow:hidden;}

/*버튼*/
.container1{display:inline-block;margin:42px 0px 0px 20px;cursor: pointer;}
.bar1, .bar2, .bar3 {
		width: 35px;
		height: 5px;
		background-color: #fff;
		margin: 6px 0;
		transition: 0.4s;
	}
	.change .bar1 {
		-webkit-transform: rotate(-45deg) translate(-9px, 6px) ;
		transform: rotate(-45deg) translate(-9px, 6px) ;
	}

	.change .bar2 {opacity: 0;}

	.change .bar3 {
		-webkit-transform: rotate(45deg) translate(-8px, -8px) ;
		transform: rotate(45deg) translate(-8px, -8px) ;
	}
/*탭*/
#myDIV {
	display:none;
    width: 40%;
    text-align: center;
    background-color: RGBA(35,35,35,0.9);
    margin-top:20px;
}
.tabs{border:1px solid black;padding:18px;color:white;font-weight:bold;
}

/*오버레이*/
#overlay1,#overlay2,#overlay3,#overlay4,#overlay5 {
    position: fixed;
    display: none;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0,0,0,0.5);
    z-index: 2;
    cursor: pointer;
	overflow:hidden;
}

#text{
    position: absolute;
    top: 50%;
    left: 50%;
    color: white;
    transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
	background-color: RGBA(35,35,35,1);
	width:84%;
	height:80%;
	overflow:hidden;

}
#cut{width:105%;height:100%;overflow:auto;}
}
</style>
<div class="who">APNG Background mady by Youngho Jo</div>
<!--button S-->
<div class="container1" onclick="myFunction(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div>
<!--button E-->

<!--toggle show S-->
<div id="myDIV">
	<div class="tabs" onclick="on(1)">
		Profile
	</div>
	<div class="tabs" onclick="on(2)">
		About Me
	</div>
	<div class="tabs" onclick="location.href='./projects_mobile.php'">
		Projects
	</div>
	<div class="tabs" onclick="on(4)">
		Interests
	</div>
	<div class="tabs" onclick="on(5)">
		Contact
	</div>
</div>
<!--toggle show E-->
<!--오버레이 S-->
<div id="overlay1" onclick="off(1)">
  <div id="text">
	<div id="cut">
		<?php 
		include('./profile.html');
		?>
	</div>
  </div>
</div>
<div id="overlay2" onclick="off(2)">
  <div id="text">	
	<div id="cut">
		<?include('./aboutme.html');?>
	</div>
  </div>
</div>
<!--projects 모바일버전은 내부탭때문에 따로 이동한다-->
<div id="overlay3" onclick="">
</div>

<div id="overlay4" onclick="off(4)">
  <div id="text">
  	<div id="cut">
		<?include('./interests.html');?>
	</div>
  </div>
</div>
<div id="overlay5" onclick="off(5)">
  <div id="text">
  	<div id="cut">
		<?include('./contact.html');?>
	</div>
  </div>
</div>
<!--오버레이 E-->

<!--button-->
<script>
function myFunction(button) {
    button.classList.toggle("change");

	var x = document.getElementById('myDIV');
    if (x.style.display === 'block') {
        x.style.display = 'none';
    } else {
        x.style.display = 'block';
    }
}
</script>
<!--오버레이-->
<script>
function on(value) {
	switch(value){
		case 1:
			document.getElementById("overlay1").style.display = "block";
			break;
		case 2:
			document.getElementById("overlay2").style.display = "block";
			break;
		case 4:
			document.getElementById("overlay4").style.display = "block";
			break;
		case 5:
			document.getElementById("overlay5").style.display = "block";
			break;

	}
    
}

function off(value) {
	switch(value){
		case 1:
			document.getElementById("overlay1").style.display = "none";
			break;
		case 2:
			document.getElementById("overlay2").style.display = "none";
			break;
		case 3:
			document.getElementById("overlay3").style.display = "none";
			break;
		case 4:
			document.getElementById("overlay4").style.display = "none";
			break;
		case 5:
			document.getElementById("overlay5").style.display = "none";
			break;
	}
}
</script>

 <!--apng 모듈 2 S (absolute 두번이 핵심)-->
<div id="one">
	<img src="./assets/original.jpg" style="position:absolute;top:0;z-index:-3;width:100%;border:none;"/>
	<img src="./assets/animated22.png" style="z-index:-2;width:100%;border:none;"/>
</div>

<div class="tab" style="position:absolute;margin-left:10%;margin-top:5%;width:80%;z-index:1;">
 <!--apng 모듈 2 E-->
  <button class="tablinks" style="width:20%;border:none;color:#fff;font-weight:bold; font-size:18pt;" onclick="openCity(event, 'a')">Profile</button>
  <button class="tablinks" style="width:20%;border:none;color:#fff;font-weight:bold; font-size:18pt;" onclick="openCity(event, 'b')">About Me</button>
  <button class="tablinks" style="width:20%;border:none;color:#fff;font-weight:bold; font-size:18pt;" onclick="openCity(event, 'c')">Projects</button>
  <button class="tablinks" style="width:20%;border:none;color:#fff;font-weight:bold; font-size:18pt;" onclick="openCity(event, 'd')">Interests</button>
  <button class="tablinks" style="width:20%;border:none;color:#fff;font-weight:bold; font-size:18pt;" onclick="openCity(event, 'e')">Contact</button>
</div>

<div id="a" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">x</span>
  <?
  include('./profile.html');
  ?>
</div>

<div id="b" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">x</span>
  <?
  include('./aboutme.html');
  ?>
</div>

<div id="c" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">x</span>
  <?
  include('./projects.html');
  ?>
</div>

<div id="d" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">x</span>
  <?
  include('./interests.html');
  ?>
</div>

<div id="e" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">x</span>
  <?
  include('./contact.html');
  ?>
</div>
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}


</script>
     
</body>
</html> 