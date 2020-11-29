<?php 
session_start();
?>
<html>
	
	<head>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
<link rel="stylesheet" href="css/bootstrap.min.css" />
 <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/popper.min.js"></script>

<meta name="viewport" content="width=device-width , initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">

 
		<title>
		Webpages by Kedar Mayekar
		</title>
<style>
#maindot1:hover #yellowfbtn{
background:pink;
}

body{
    box-sizing: border-box;
}
    .snipplet1
    {
     height:40%;
     width:60%;
     border-radius:15px 25px 20px;
     box-shadow:15px 15px 5px ;
     background: yellow;
     transition:background 1s,width 1s;
    }
   .snipplet1:hover{
        background:red;
        width:100%;
    }
    @media screen and(max-width:1250px){
        span{
            font-size:10vw;
        }
    }

    @media screen and(max-width:320px){
        span{
            font-size:10vw;
        }
    .snipplet1
    {
     height:60%;
     width:70%;
     
    }
    }
.hideback{
    display:none;
}

.navMain{
height:5vh;
background:blueviolet;
display:flex;
flex-direction:row-reverse;
flex-wrap: wrap;
opacity:0.7;
}
.navtext{
color:black;
list-style-type:none;
height:inherit;
}
li{
    left:10px;
    float:left;
    margin-left:1vh;
    padding:1vh;
    cursor:pointer;
}
li:hover{
    background:black;
    color:white;
}

.col-10per {width:10%;height:30vh;}
.col-30per {width:30%;
height:30vh;
cursor: pointer;
box-sizing:border-box;
padding:1vh;
margin:1vh;
transition:ease-in-out,opacity .2s ease,z-index .2s ease;
}
/*  transform:scale(1.02);transform .2s */
.col-30per:hover {
  
    opacity:0.7;
    z-index:3;
     }

@media screen and (max-width: 600px) {
 .ediv ,.edivo{
display:none;
 }
 .col-30per{
     width:80%;
}
}

@media screen and (min-width:601px) and (max-width: 1200px) {
 .ediv {
display:none;
 }
.col-30per{
     width:40%;
 }
}
#maindot{
height:5vh;
width:5vh;
border-radius:50%;
background:red;
border:5vh;
transition:border .5s,border-radius .5s,transform .5s,background .3s;
}

#maindot:hover::before {
box-shadow: 0 0 15px #ffee10;
border:2px solid black;
border-outline:25px dotted green;
transition:transform .5s;

}
#maindot:hover{
     color: #ffee10;
  box-shadow: 0 0 5px #ffee10;
  text-shadow: 0 0 5px #ffee10;
transform:scale(1.2);
}
#maindot1{
height:7vh;
width:7vh;
border-radius:50%;
background:red;
border:5vh;
transition:transform .5s;
}

#maindot1:hover {
transform:scale(1.2);
}



.flexbtn {
display:flex;
align-items:center;
justify-content:center;
width:100vw;
}
#yellowfbtn{
    position:absolute;
    height:5vh;
    width:5vh;
    background: yellow;
    border-radius:50%;
    opacity:0;
}

#orangefbtn{
    position:absolute;
    height:5vh;
    width:5vh;
    background:tomato;
    border-radius:50%;
    opacity:0;
}
.footer-element{
 padding:20px;
cursor:pointer;
 transition:color .5s,transform .3s;
}
.footer-element:hover{
	color:orange;
	transform:scale(1.2);	
}

</style>

</head>	
<script>
var bg=1;
function openLoginPanel()
{
//    alert(document.querySelector("#logindrop").classList.contains("hideback"));
    if(document.querySelector('#logindrop').classList.contains('hideback')) 
    {
         document.getElementById("logindrop").classList.remove("hideback"); 
         }
else {
         document.getElementById("logindrop").classList.add("hideback");
         }     
}

</script>
<script>
function chc(){
document.getElementById("yellowfbtn").style.opacity=0.9;
document.getElementById("orangefbtn").style.opacity=0.7;
}	
function rchc(){
document.getElementById("yellowfbtn").style.opacity=0;
document.getElementById("orangefbtn").style.opacity=0;
}	
function bgch(){
if(bg===0){
		document.getElementsByTagName("body")[0].style.background="white";

	bg=1;
	}
	else{
document.getElementsByTagName("body")[0].style.background="black";		
	bg=0;
	}

document.getElementById("yellowfbtn").style.opacity=0;
document.getElementById("orangefbtn").style.opacity=0;

}	


</script>
	<body>
    <nav class="navMain">
    <li class="navtext" style="float:right;background-color:tomato;" onclick="openLoginPanel()">Login to website <i class="fa fa-caret-down" aria-hidden="true"></i></li>
    <li class="navtext">Contact</li>
    <li class="navtext">Projects</li>
    <li class="navtext"> Home</li>

    </nav>

<div id="logintrig" class="container-fluid bg-danger"  > </div>
	<div class="bg-primary ">    Hello, 
        <?php if($_SESSION["usrId"]){echo $_SESSION["usrId"];} else {echo "Guest";}    ?></div>		
        
        <div class="container-fluid bg-warning row hideback " id="logindrop">

  <form action="verify.php" method="post">
  <div class="col-sm-2 col-md-2 col-lg-2">
    <img src=" " alt="Avatar" class="avatar">
  </div>

  <div class="col-sm-4 col-md-4 col-lg-4">
    <label for="uname"><b>Username: </b></label>    <input type="text" placeholder="Enter Username" name="uname" required>
    </div>
  <div class="col-sm-4 col-md-4 col-lg-4">
    <label for="psw"><b>Password:</b></label>  <input type="password" placeholder="Enter Password" name="psw" required>
    </div>
	<div class="col-sm-2 col-md-2 col-lg-2">
	    <button class="btn btn-success" type="submit">Login</button>
        </div>
</form>
</div>
	

    
    <div class="container-fluid">
	<div class="jumbotron-text justify-content-center " style="background-color:orange;" >
	<h1 class="text-weight-bold p-3 m-2" id="pagetitle" >&nbsp;&nbsp;&nbsp;&nbsp;Portfolio Kedar Mayekar</h1>	
	</div>
<!--
<a href="ReviewWebsite.html" style="text-decoration:none;color:black;font-size:4vh;">
	<div  class="container  snipplet1 " >
<span class="justify-content-center font-weight-bold jumbotron-text">To see the Review website (Responsive Webpages) made by using HTML CSS Bootstrap 4 please click here</span>
    </div>
    </a>
	</div>
    <br>
<div>
<a href="authenticate.php" style="text-decoration:none;color:black;font-size:4vh;">
	<div  class="container  snipplet1 " >
<span class="justify-content-center font-weight-bold jumbotron-text">Login to website</span>
    </div>
    </a>

    
<a href="login.php" class="btn btn-primary">Login page</a>
<a href="info.html" class="btn btn-warning">Info page</a>
</div>
-->

    <div style="width:100%;overflow-x:hidden;display:flex;flex-wrap: wrap;justify-content:center;">
    <div class ="col-30per" style="background:black;color:white;border:10px solid floralwhite;"><a href="ReviewWebsite.html" style="text-decoration:none;color:white;font-size:4vh;height:inherit;width:inherit;">To see the Review website (Responsive Webpages) made by using HTML CSS Bootstrap 4 please click here</a></div>
    <div class="col-30per eff1" style="background-image: linear-gradient(120deg,#eaee44,#33d0ff);border:10px solid yellowgreen;"><p class="ineff1"><a href="info.html" style="text-decoration:none;color:black;font-size:4vh;height:inherit;width:inherit;">Info of your device and browser</a></p></div>
 

     <div class ="col-30per " style="background:darkviolet;"><a href="coin-game.html" style="text-decoration:none;color:black;font-size:4vh;height:inherit;width:inherit;">coin game using html css and javascript</a></div>       
    <div class="col-30per" style="background:red;">data -2</div>



    <div class ="col-30per" style="background:purple;">data -2 </div>       
    <div class="col-30per " style="background:darkviolet;">data -2</div>
<!--    <div class="col-10per ediv" style="background:yellow;">&nbsp;</div>
    <div class="col-10per edivo" style="background:yellow;">&nbsp;</div>-->

    </div>
  <div  id="maindot" style="z-index:3;"></div>

<div class="flexbtn">


<div id="orangefbtn" style="height:15vh;width:15vh;z-index:1;"></div>

<div id="yellowfbtn" style="height:10vh;width:10vh;z-index:2;"></div>
<div  id="maindot1" style="z-index:3;" onmouseover="chc()" onmouseout="rchc()" onclick="bgch()"></div>
</div>

<footer>
<div  style="background-color:black;height:10%;width:100%;color:white;font-size:1.5em;">
<div style="display:flex;">
<div class="footer-element">Github</div>
<div class="footer-element">Projects</div>
<div class="footer-element">Websites</div>
</div>
by kedarmayekar
<!-- Go to www.addthis.com/dashboard to customize your tools -->

<div class="addthis_inline_share_toolbox" style="float:right;"></div><!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ea97d694beb2fc9">
</script>
</div>
</footer>
	</body>
	
</html>