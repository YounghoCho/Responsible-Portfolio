<?
header("Content-Type: text/html; charset=UTF-8");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi">
<title>프로젝트</title>
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

@media all and (max-width:1024px){

.tablinks2{border:1px solid white;}
/* Style the tab */
div.tab2 {
    float: left;
	height:100%;

}
.tablinks3{width:100%;}
/* Style the buttons inside the tab */
div.tab2 button {
    display: block;
    background-color: inherit;
    padding: 30px 30px;
    width: 100%;
    border:none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
	margin:0;
	font-weight:bold;
}

/* Change background color of buttons on hover */
div.tab2 button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
div.tab2 button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent2 {
    float: left;
    padding: 0px 12px;
    width: 70%;
    border-left: none;
    height: 300px;
	display:none;
}
.tabcontent3 {
	position:absolute;
	left:10%;top:10%;
    float: left;
    padding: 0px 12px;
    width: 80%;
    border-left: none;
    height: 700px;
	display:none;
	background-color:black;
	border:1px solid #ccc;
}
.who{position:absolute;top:0;right:0;color:white;z-index:2;margin:10px 0px 0px 10px;}
body{ font-family: "Lato", sans-serif; margin:0;width:100%;height:720px;background-color:black;}
.tab{display:none;}
#one{position:absolute;border:none;width:100%;z-index:-1;overflow:hidden;}

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
    background-color: RGBA(35,35,35,0.6);
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

#widthevidence{width:90%;margin-right:2px;}
#heightevidence{width:45%;margin-right:2px;}
#halfevidence{width:90%;margin-right:2px;}
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

 <!--apng 모듈 2 S (absolute 두번이 핵심)-->
<div id="one">
	<img src="./assets/original.jpg" style="position:absolute;top:0;z-index:-3;width:100%;border:none;"/>
	<img src="./assets/animated22.png" style="z-index:-2;width:100%;border:none;"/>
</div>

<!--시작-->
<table id="projectcontainer"style="width:80%;height:100%;margin-left:10%;margin-top:10%;background-color:RGBA(35,35,35,0.6);padding:0;">
<tr><td>
<div style="width:94%;height:700px;padding-top:5px;padding-left:5px;overflow:hidden;">
	
	<div class="tab2" style="width:90%;">
	  <button style="color:white;width:10px;height:10px;float:right;padding:0;font-size:22px;" onclick="location.href='./portfolio.php'">x</button>
	  <button class="tablinks3" onclick="openCity3(event, 'q1')" style="color:#fff;">Smart Mirror</button>
	  <button class="tablinks3" onclick="openCity3(event, 'w1')" style="color:#fff">O2O Flatform</button>
	  <button class="tablinks3" onclick="openCity3(event, 'ee1')" style="color:#fff">VR Camera</button>
	  <button class="tablinks3" onclick="openCity3(event, 'r1')" style="color:#fff">Community App</button>
	  <button class="tablinks3" onclick="openCity3(event, 't1')" style="color:#fff">Java Game</button>
	  <button class="tablinks3" onclick="openCity3(event, 'y1')" style="color:#fff">Cpp Game</button>
	</div>

	<div id="q1" class="tabcontent3" style="color:white">
	  <h3>Smart Mirror</h3>
	  <button style="position:absolute;right:8%;top:3%;background-color:black;color:white;border:none;font-size:24px;" onclick="closemobileprojects()">x</button>
	  <p id="aboutmecontent">현재 제작중입니다.<br>라즈베리 파이를 활용하여 IOT Smart Mirror를 제작하고 있습니다. 현재 CentOS 6.4를 사용하고 있으며 서버를 구축하고 있습니다.</p>
	</div>

	<div id="w1" class="tabcontent3" style="color:white">
	  <h3>O2O Flatform</h3>
	  <button style="position:absolute;right:8%;top:3%;background-color:black;color:white;border:none;font-size:24px;" onclick="closemobileprojects()">x</button>
	  <p>반응형 웹을 기반으로한 O2O 플랫폼을 개발한 경험이 있습니다. 표준 웹 제작 언어와 PHP, MySql을 사용하였습니다. 현재, 스타트업 회사 이놀루션의 개발책임자(CTO)로 있으며 유저용 웹사이트, 업소용 웹사이트, 관리자용 웹사이트를 제작했습니다. 현재 사업 초기단계에 있습니다.</p> 
	  <img id="widthevidence" src="./assets/o2o1.png"><img id="heightevidence" src="./assets/o2o2.png"> 
	</div>

	<div id="ee1" class="tabcontent3" style="color:white">
	  <h3>VR Camera</h3>
	  <button style="position:absolute;right:8%;top:3%;background-color:black;color:white;border:none;font-size:24px;" onclick="closemobileprojects()">x</button>
	  <p>라즈베리파이3를 활용한 VR camera를 제작한 경험이 있습니다. 라즈베리파이에 Apache를 설치하여 서버를 구동하였고, javascript언어를 사용하여 VR Camera 모듈을 커스터마이징 하여 사용했습니다. 또한, 테더링 IP를 감지하여 이동시에도 VR camera를 활용 할 수 있도록 구현했습니다. 동영상 녹화 앱과 결합하여, 장기간 침대에 누워있어야 하는 환자들을 대상으로 재활 의지를 상승시키는 방향으로 프로젝트를 진행했습니다.</p>
	  <img id="halfevidence" src="./assets/ras1.jpg"><img id="halfevidence" src="./assets/ras2.jpg">
	</div>
	
	<div id="r1" class="tabcontent3" style="color:white">
	  <h3>Community App</h3>
	  <button style="position:absolute;right:8%;top:3%;background-color:black;color:white;border:none;font-size:24px;" onclick="closemobileprojects()">x</button>
	  <p>대학생들의 커뮤니티와 편의 정보를 제공하는 하이브리드 앱을 개발한 경험이 있습니다. 기획자, IOS개발자, Web/Android개발자, UX/UI 디자이너, 마케터로 총 5인 팀으로 구성되어 있으며, Web/Android 개발을 담당했습니다. 50인 오프라인 설문 결과, 1250명의 대학 신입생중 91%가 앱을 알고 있었으며 85%가 앱을 다운받은 경험이 있다고 답했습니다. 3개월간 총 1900번의 다운로드를 기록했으며 목표한 1000명보다 두배가 넘는 수치였습니다. 또한, 학교 광고와 음식점 광고를 통하여 3개월간 약 6,000,000원의 순수익을 창출한 경험이 있습니다.</p>
	</div>
	
	<div id="t1" class="tabcontent3" style="color:white">
	  <h3>Java Game</h3>
	  <button style="position:absolute;right:8%;top:3%;background-color:black;color:white;border:none;font-size:24px;" onclick="closemobileprojects()">x</button>
	  <p>Java AWT의 FRAM과 EVENT, IMAGE 패키지를 사용한 JAVA 게임을 제작한 경험이 있습니다. 관심에 의해 스스로 시작한 JAVA공부를 구현시켜보고자 프로젝트를 기획하게 되었으며, Runnable, KeyListener, ActionListener 인터페이스를 사용한 Frame 클래스를 GMA클래스가 상속받는 구성으로 설정했습니다. 상단 메뉴들을 만들고 액션들을 추가한 뒤 동작 조건들을 구현했습니다. 학생이 떨어지는 F학점을 피해 A학점을 획득하여 최종목적지에 골인하는 게임입니다. 메뉴는 Home, Start, Exit / Level 1~3(속도조절) / Rules 로 구성했습니다.</p>
	<img id="heightevidence" src="./assets/java0.png"><img id="heightevidence" src="./assets/java1.png"><img id="heightevidence" src="./assets/java2.png"><img id="heightevidence" src="./assets/java3.png">
	</div>
	
	<div id="y1" class="tabcontent3" style="color:white">
	  <button style="position:absolute;right:8%;top:3%;background-color:black;color:white;border:none;font-size:24px;" onclick="closemobileprojects()">x</button>
	  <p>CPP의 파일 입 출력 함수를 통해 Hangman 게임을 제작한 경험이 있습니다. fstream헤더를 사용하여, 텍스트 파일에서 단어를 읽어와 사용자가 그 단어를 추측하는 것을 핵심 기능으로 삼았습니다. 일반적인 단어를 추측하는 행맨 게임에, 사용자의 흥미유발을 위해 레벨과 경험치의 기능을 추가 했습니다. 총 15단계까지 단어 레벨이 설정되어있으며, 단어를 맞출 때 마다 경험치(Exp)를 획득해 레벨업을 하는 체계입니다. </p>
	  <img id="widthevidence" src="./assets/hangman.jpg">
	</div>
</div>
</td></tr>
</table>

<script>
function closemobileprojects(){
	var q1=document.getElementById('q1');
	var w1=document.getElementById('w1');
	var ee1=document.getElementById('ee1');
	var r1=document.getElementById('r1');
	var t1=document.getElementById('t1');
	var y1=document.getElementById('y1');
	
q1.style.display="none";
w1.style.display="none";
ee1.style.display="none";
r1.style.display="none";
t1.style.display="none";
y1.style.display="none";
}
function openCity3(evt, cityName) {
	var i, tabcontent, tablinks;
	tabcontent = document.getElementsByClassName("tabcontent3");
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}
	tablinks = document.getElementsByClassName("tablinks3");
	for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	}
	document.getElementById(cityName).style.display = "block";
	evt.currentTarget.className += " active";
}
</script>
	<!--button-->
<script>
tt=1;
function myFunction(button) {
	var g=document.getElementById('projectcontainer');
	if(tt>0){
	g.style.display="none";
	tt=-1;
	}else{
	g.style.display="block";
	tt=1;
	}
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