
<?php
include ('config.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TEACHERS HUB</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
<style>
@import url('https://fonts.googleapis.com/css?family=Poppins');

body {
    font-family: 'Poppins', sans-serif;
    padding:0px;
    margin:0px;
    max-width:100vw;
    overflow-x:hidden;
    scroll-behavior: smooth;
}
#loading {
    width: 100vw;
    height: 100vh;
    position: fixed;
    background: white;
    z-index: 999;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
}
#spinner {
    animation: rotate 0.56s infinite linear;
    width:50px;
    height:50px;
    border:12px solid rgb(255, 44, 90);
    border-bottom:12px solid #fff;
    border-radius:50%;
    margin:0;
}
@keyframes rotate {
    0% {transform: rotate(0deg);}
    100% {transform: rotate(360deg);}
}
header {
    width:92vw;
    padding:6vh 4vw;
    position:fixed;
    font-weight:bold;
    background:transparent;
    color:#fff;
    transition:0.4s ease-in-out;
    z-index:2;
}
header table {
    width:100%;
}
#logo {
    width:20%;
}
#navigation {
    width:80%;
}
#magnify {
    width:100vw;
    height:100vh;
    background:rgba(0, 0, 0, 0.92);
    position:fixed;
    z-index:4;
    display:none;
    flex-direction: column;
    justify-content:center;
}
#magnify h1 {
    position:absolute;
    top:0;
    right:0;
    margin:20px 40px;
    color:#fff;
    transition:0.4s ease-in-out;
}
#magnify h1:hover{
    color:rgb(255, 44, 90);
    cursor:pointer;
}
#img_here {
    width:90%;
    height:90%;
    background-size:contain !important;
    background-repeat:no-repeat !important;
    margin:0px auto;
}
#logo {
    font-size:24px;
    color:rgb(255, 44, 90);
}
#navigation {
    text-align:right;
}
#navigation a {
    color:inherit;
    text-decoration:none;
    padding:5px 10px;
    border-bottom:2px solid transparent;
    margin-left:4vw;
    transition:0.4s ease-in-out;
}
#navigation a:hover{
    border-bottom:2px solid #fff;
}
#top_part {
    width:100%;
    border:2vh solid #fff;
}
#top_part tr td{
    width:50%;
}
#about {
    width:84% !important;
    height:95vh;
    display:flex;
    flex-direction:column;
    justify-content:center;
    text-align:left;
    padding:0px 8%;
}
#about h1 {
    font-size:45px;
    word-wrap:break-word;
}
#about table {
    width:70%;
    margin-top:4vh;
}
#about table tr td {
    width:20% !important;
    text-align:left;
}
.btn_one {
    font-size:18px;
    font-family: 'Poppins', sans-serif;
    color:rgb(255, 44, 90);
    background:#fff;
    border:3px solid rgb(255, 44, 90);
    padding:8px 40px;
    width:35%;
    border-radius:80px;
    font-weight:bold;
    margin:2vh 0px;
    transition:0.4s ease-in-out;
}
.btn_one:hover {
    box-shadow:0px 10px 30px rgba(255, 44, 90, 0.8);
    cursor:pointer;
    color:#fff;
    background:rgb(255, 44, 90);
}
#rightImage {
    width:100%;
    height:95vh;
    background:linear-gradient(0deg,rgba(255, 44, 90, 0.8),rgba(255, 44, 90, 0.8)),url("D:\Male Student Icon In Neon Style, Student Icons, Style Icons, Male Icons PNG Transparent Clipart Image and PSD File for Free Download.jpeg") center center;
    background-size:cover;
    background-repeat:no-repeat;
}
#work {
    width:92vw;
    padding:6vh 4vw;
    font-weight:bold;
}
#work h1 {
    padding:5px 0px;
    border-bottom:4px solid rgb(255, 44, 90);
    width:6%;
}
#photos {
    width:100%;
    columns:3;
    column-gap:4%;
    z-index:1;
    transition:0.4s ease-in-out;
}
#photos img {
    width:100%;
    height:auto;
    margin:4.5% 0px;
    transition:0.4s ease-in-out;
}
#photos img:hover {
    transform: scale(1.1);
    cursor: pointer;
}
#bio {
    width:92vw;
    padding:6vh 4vw;
    font-weight:bold;
}
#bio h1 {
    padding:5px 0px;
    border-bottom:4px solid rgb(255, 44, 90);
    width:8%;
}
#contact {
    width:92vw;
    padding:6vh 4vw;
}
#contact h1 {
    padding:5px 0px;
    border-bottom:4px solid rgb(255, 44, 90);
    width:10%;
}
#inner_div table{
    width:100%;
}
#inner_div table tr td{
    font-weight:bold;
}
#inner_table tr td{
    padding:10px 20px !important;
}
#footer {
    width:100%;
    padding:10vh 0px;
    text-align:center;
    font-weight:bold;
}
#footer a {
    color:rgb(255, 44, 90);
    text-decoration:none;
}
::placeholder {
    color:#000;
}
button:focus {
    outline:none;
}
::-webkit-scrollbar {
    width:5px;
    height:5px;
}
::-webkit-scrollbar-track {
    background: #f1f1f1; 
}
::-webkit-scrollbar-thumb {
    background: rgb(0, 0, 0); 
}
::-webkit-scrollbar-thumb:hover {
    background: rgba(0, 0, 0,0.8); 
}

@media (max-width: 1000px){
    #photos {
    columns:1;
    column-gap:0%;
    }
    #photos img {
        margin:2% 0px;
    }
    #photos img:hover {
        transform: scale(1);
        cursor: pointer;
    }
    #rightImage {
        display:none;
    }
    #top_part {
        border:0px;
    }
    #top_part tr td{
        width:100%;
        text-align:center;
    }
    #about {
        width:92% !important;
        height:75vh;
        padding-top:20vh !important;
        text-align:center;
        padding:0px 4%;
    }
    #about table {
        width:100%;
        margin-top:6vh;
    }
    #about table tr td {
        text-align:center;
    }
    .btn_one {
    padding:6px 30px;
    width:60%;
    margin:4vh auto;
    box-shadow:0px 10px 20px rgba(255, 44, 90, 0.8);
    background:rgb(255, 44, 90);
    color:#fff;
    }
    .btn_one:hover {
        box-shadow:0px 10px 40px rgba(255, 44, 90, 0.8);
        cursor:pointer;
    }
    #contact table tr td {
        width:100%;
        display:block;
    }
    #inner_table tr td{
        padding:10px 0px !important;
    }
    #contact form input {
        width:90%;
    }
    #contact form textarea {
        width:90%;
    }
    #Assignment h1 {
        width:19%;
    }
    #Attendance h1 {
        width:25%;
    }
    #Coding Platforms h1 {
        width:33%;
    }
    header {
        width:96vw;
        background:#fff;
        padding:4vh 2vw;
        position:absolute;
    }
    #header table tr td {
        width:100%;
        display:block;
        text-align:center;
        padding:15px 0px;
    }
    #navigation a {
        color:#000;
    }
}
</style>
<script>
var width = $(window).width(); 
window.onscroll = function(){
if ((width >= 1000)){
    if(document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        $("#header").css("background","#fff");
        $("#header").css("color","#000");
        $("#header").css("box-shadow","0px 0px 20px rgba(0,0,0,0.09)");
        $("#header").css("padding","4vh 4vw");
        $("#navigation a").hover(function(){
            $(this).css("border-bottom","2px solid rgb(255, 44, 90)");
        },function(){
            $(this).css("border-bottom","2px solid transparent");
        });
    }else{
        $("#header").css("background","transparent");
        $("#header").css("color","#fff");
        $("#header").css("box-shadow","0px 0px 0px rgba(0,0,0,0)");
        $("#header").css("padding","6vh 4vw");
        $("#navigation a").hover(function(){
            $(this).css("border-bottom","2px solid #fff");
        },function(){
            $(this).css("border-bottom","2px solid transparent");
        });
    }
}
}

function magnify(imglink){
    $("#img_here").css("background",`url('${imglink}') center center`);
    $("#magnify").css("display","flex");
    $("#magnify").addClass("animated fadeIn");
    setTimeout(function(){
        $("#magnify").removeClass("animated fadeIn");
    },800);
}

function closemagnify(){
    $("#magnify").addClass("animated fadeOut");
    setTimeout(function(){
        $("#magnify").css("display","none");
        $("#magnify").removeClass("animated fadeOut");
        $("#img_here").css("background",`url('') center center`);
    },800);
}

setTimeout(function(){
    $("#loading").addClass("animated fadeOut");
    setTimeout(function(){
      $("#loading").removeClass("animated fadeOut");
      $("#loading").css("display","none");
    },800);
},1650);

$(document).ready(function(){
    $("a").on('click', function(event) {
      if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;
        $('body,html').animate({
        scrollTop: $(hash).offset().top
        }, 1800, function(){
        window.location.hash = hash;
       });
       } 
      });
  });
  </script>
</head>
<body>
    <div id="loading">
        <div id="spinner"></div>
    </div>
    <div id="magnify">
        <h1 onclick="closemagnify()"><i class="fas fa-times"></i></h1>
        <div id="img_here"></div>
    </div>
    <header id="header" class="animated slideInDown" style="animation-delay:1.8s;">
        <table>
            <tr>
                <td id="logo">WELCOME EDUCATORS.......  </td>
                <td id="navigation">
                  <div style="text-align: center;">
                  <?php
include 'config.php';

if(isset($_GET["id"])) {
    $id = isset($_GET["id"]) ? $_GET["id"] : null;
   
    echo "<a href='http://localhost/dbsystem/internal.php?id=$id' style='display: block; color: black; margin-bottom: 20px; margin-left: 20px; font-size: 25px;'>| Internal</a>";
    echo "<a href='http://localhost/dbsystem/assignment.php?id=$id' style='display: block; color: black; margin-bottom: 20px; margin-left: 20px; font-size: 25px;'>| Assignment</a>";
    echo "<a href='http://localhost/dbsystem/attendance.php?id=$id' style='display: block; color: black; margin-bottom: 20px; margin-left: 20px; font-size: 25px;'>| Attendance</a>";
    echo "<a href='http://localhost/dbsystem/coding.php?id=$id' style='display: block; color: black; font-size: 25px; margin-left: 20px;'>| Coding Platforms</a>";
}
?>
 </div>
                </td>
            </tr>
        </table>
    </header>
    <table id="top_part">
        <tr>
            <td id="about" class="animated slideInLeft" style="animation-delay:2s;">
                <h1> Profile</h1>
                <?php
        include 'config.php';

        if(isset($_GET["id"])) {
            $id = (isset($_GET["id"]) ? $_GET["id"] : null);
            echo "<a href='http://localhost/dbsystem/checkfile.php?id=$id'><button class='btn_one'>Check $id</button></a><br>";

        }
        ?>
                
    </td>
           <td id="rightImage" >
    </td>
        </tr>
    </table>
    
    </section>
   
                  </div>
    <div id="footer">
       Teachers Hub : Streamlined Portfolio Management For Educators<br>     </div>
    <script src="index.js" type="text/javascript"></script>
</body>
</html>
