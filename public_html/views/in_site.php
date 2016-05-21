<!DOCTYPE html>
<html>
<head>
	<title>MuzZone - get positive with US</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="stylesheet" type="text/css" href="styles/style2.css">
        <link rel="shortcut icon" href="../imag/favicon.ico" type="image/x-icon">
	<script type="text/javascript" src='scripts/jquery-2.1.4.min.js'></script>
	<script type="text/javascript" src='scripts/jsq3.js'></script>
	<script type="text/javascript" src='scripts/jsq1.js'></script>
<style>
#top_lop{
width:900px;
}
input:focus{
outline:none;
}
select:focus{
outline:none;
}
#telesh{
font-family:'neou',helvetica,arial,sans-serif;
font-size:45px;
color:white;
text-shadow:1px 1px 10px white,0 0 1em;
font-weight:bolder;
}
#kolasf{
margin-top:0px;
padding-top:60px;
text-align:center;
width:1150px;
height:580px;
font-family:'Courier 10 Pitch';
}
#kolasf .asdfsdaf{
font-weight:bolder;
border:1px outset white;
float:left;
color:rgba(0,0,0,0.6);
background-color:rgba(255,255,255,1);
margin-left:63px;
font-size:18px;
font-family:FreeMono;
}
#registration{
margin-top:80px;
margin-left:475px;
background-color:rgba(255,255,252,0.9);
}
#top_lop ul li a{
font-weight:normal;
font-family:'neou',helvetica,arial,sans-serif;
color:rgba(255,255,255,0.9);
text-decoration:none;
}
#top_lop ul li a:hover{
color:rgba(255,255,255,0.56);
}
#sadfsadf{
color:rgba(0,0,0,0.7);
background-color:white;
font-size:17px;
width:1190px;
height:80px;
padding-top:20px;
font-weight:bold;
text-align:center;
font-family:FreeMono;
}
#allas{
width:100%;
height:100%;
margin-top:-10px;
position:fixed;
background-color:rgba(0,0,0,0.8);
display:none;
}
#cloop{
text-align:center;
}
#cloop:hover{
background-color:rgba(255,255,255,0.1);
}
.get_it2{
    text-align: center;
    font-size: 15px;
    width: 295px;
    height: 35px;
    margin-bottom: 15px;
    border-radius: 30px;
    border: 2px solid whitesmoke;
}
.oppoas{
    width: 131px;
    height: 35px;
    margin-top: 10px;
    color: white;
    background-color: grey;
    border: 0px;
    border-radius: 40px;
    cursor:pointer;
    font-weight:bold;
}
</style>
</head>
<body>
<div id='allas'><div id='cloop' style='width:100px;cursor:pointer; height:100%; float:right;'><span style='color:rgba(255,255,255,0.3); font-size:72px;'>X</span></div>
	<div id='registration' style='margin:0px auto;margin-top:80px;'>
		<ul>
		<li style='border-bottom-left-radius:55px;color:white;font-family:Padauk Book; background-color:rgba(100,100,100,0.3);' id='left_shet'>Login</li>
		<li style='border-bottom-right-radius:55px;color:white;font-family:Padauk Book;' id='right_shet'>Registration</li>
		</ul>
		<br>
		<div id='pole_reg'>
			<br>
			<input type='text' id='log_line' onkeypress="return shuw(event);" placeholder='Nickname' class='get_it2'><br>
			<input type='password' id='log_pass' onkeypress="return shuw(event);" placeholder='Password' class='get_it2'><br>
			<input type="submit" id='clisk' class='oppoas' onclick='check_log()' value='Log In'>
		</div>
		<div id='new_pole'>
			<?php
				if(isset($_GET['section'])){
					echo "Hello";
				}else{
					require_once 'main_page.html';
			}
			?>
		</div>
	</div>
</div>
<div id='main_coin'>
	<div id='top_lop'>
        <ul>
	<li><a href='index.php'>Home</a></li>
	<li><a href='#kolasf'>About</a></li>
	<li><a href='#sadfsadf'>Contacts</a></li>
	<li id='sings' style='float:right;'><a href='#'>Log In</a></li>
        </ul>
	</div>        
<div id="kolasf">
	<div id='header' style='color:white; font-size:35px;font-weight:bolder; font-family:FreeMono;'>Why MuzZone???</div><br>
<hr>
        <span style="color:white;font-size:18px;font-family:FreeMono; margin-left:20px;">Music is an art form and cultural activity whose medium is silence and sound. The common elements of music are pitch (which governs melody and harmony), rhythm (and its associated concepts tempo, meter, and articulation), dynamics (loudness and softness), and the sonic qualities of timbre and texture (which are sometimes termed the "color" of a musical sound). Different styles or types of music may emphasize, de-emphasize or omit some of these elements. <br>Made from the heart</span>
        <br><br><hr>
	<div class='asdfsdaf' style='width:300px;height:280px;text-align:center;'><img src='../imag/qwerty.jpg' width='300px' height='250px;'><br>Get Positive</div>
	<div class='asdfsdaf' style='width:300px;height:280px;text-align:center;'><img src='../imag/alox2.jpg' width='300px' height='250px;'><br>Share Music</div>
	<div class='asdfsdaf' style='width:300px;height:280px;text-align:center;'><img src='../imag/alox.jpg' width='300px' height='250px;'><br>Connect to US</div>
        </div>
        <div id='sadfsadf'>
        Kazimov Darkhan <br>
        Contact with me: +7 (778) 488 16 57,<a target='_blank' style='color:rgba(0,0,0,0.7);text-decoration:none;' href='https://vk.com/darkhan0323'>VK</a><br>
        Current Location: Kazakhstan, Almaty region, Kaskelen<br>
        </div>

</div>
</body>
</html>					