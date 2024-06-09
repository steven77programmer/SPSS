<?php
session_start();
$con = mysqli_connect('sql112.infinityfree.com','if0_34419009','dCXhuPfmbSMj','if0_34419009_spss_db');
if(isset($_SESSION['IS_LOGIN'])){
    $use=$_SESSION['USERNAME'];
    $sql=mysqli_query($con,"SELECT * FROM handler WHERE hand_username='$use'");
    $count=mysqli_num_rows($sql);
    if($count==1){
        echo("Welcome ".$use);
    }
    else{
        header('location:../logout.php');
        die("Some issue contact admin");
    }
   
}
else{
    header('location:../logout.php');
    die("Some issue contact admin");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <link id="style-toggle" rel="stylesheet" href="../style.css">

 

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lato&family=Sarabun:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,500,0,200" />
<link href="https://unpkg.com/pattern.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="../main.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Page</title>
</head>
<!-- <div class="prebg">
<div class="preloader"></div>
<div class="preloader"></div>
<div class="preloader"></div>
<div class="preloader"></div>
</div> -->
<?php include("../prebg.html");?>
<body onload="load_toVerify();onload=makeactive(3);scrolling();change_mode_in();">
<!-- <div id="progress">
    <!--<span id="progress-value">&#x1F815;</span>
    <span id="progress-value" class="material-symbols-outlined">
arrow_upward
</span>
</div> -->
<?php include("../progress.html");?>
    <!-- <section class="head">
    <div class="header-bg"><h2 style="color:white;">Problem Solver</h2></div>
    <div class="header">
      <div class="logo-bg "> <div class="pattern-cross-dots-md"> <div class="logo"></div></div></div>
        <h2 class="shimmer">Problem Solver</h2></div>
    <div class="header-fake"><h2></h2></div>
</section> -->
<?php include("hand_head.html");?>
    <section class="main">    
     <div class="container">
    <!--<div class="container-item side-bar sb-one" ><h3>Menu</h3>
    <div class="menu ani"><a href="indexh.php"     class="click-here   " id="m1" >Home</a></div>
        <div class="menu ani"><a href="posth.php"      class="click-here  " id="m3" >Post</a></div>
        <div class="menu ani"><a href="profileh.php"   class="click-here   " id="m4" >Profile</a></div>
        <div class="menu ani"><a href="contactush.php" class="click-here   " id="m5" >Contact Us</a></div>
        <div class="menu ani"><a href="logout.php"    class="click-here     " id="m6" >Logout</a></div>
    </div> -->
    <?php include("hand_menu.html");?>
    <div class="container-item" id="post-section"><h3>Post section</h3>
    <div id="helppara" style="font-size: 1.2em;color:whitesmoke;margin-bottom:1%;">In this page you can verify and remove the posts.
    <div class="search" style="justify-content:right;display:flex;margin:5px 0px 5px 0px;" ><div><input type="text" placeholder="Search here..." style="background:#1f2833;color:#c5c6c7;border-radius:28px;height:30px;" id="searcht"/></div><button onclick="search_post();" style="width:fit-content;border-bottom:0px;border-radius:100px;"><span class="material-symbols-outlined">
search
</span></button></div>
<!--
<div class="input-group">
  <div class="form-outline" data-mdb-input-init>
    <input type="search" id="form1" class="form-control" />
    <label class="form-label" for="form1">Search</label>
  </div>
  <button type="button" class="btn btn-primary" data-mdb-ripple-init>
    <i class="fas fa-search"></i>
  </button>
</div>-->
    </div>
        <div id="no-post">Currently no post's available</div>
</div>
</section>
<!--
 color:#1f2833;/*rgba(31, 40, 51,1)*/
    color:#c5c6c7; 
<section class="foot">
    <div class="footer">
         <p>
                Copyrights reserved &copy;<br />
                if not please contact us <a class="click-here" href="contactush.php" style="font-size: 1.25em;">click here</a>
                </p>
                <div class="icons">
                    <a class="click-here" href="mailto:studentproblemsolver05@gmail.com">
               <span class="material-symbols-outlined">
                mail
                </span>
            </a>
               </div>
             <p> Made by Team SPSS</p> 
               </div>
</section> --><?php include("hand_footer.html");?>
    <script>
    var loader= document.querySelector(".prebg");
    window.addEventListener("load", function(){
        if(loader!=null)
        loader.style.display="none";
    })
        </script>
</body>
</html>
<script>
let pppid2=0;
function remove_post()
{
 let pts = document.querySelectorAll(".post");
for (let i = 0; i < pts.length; i++) {
    pts[i].remove();
    console.log("removed",i);
}
}
 let pts = document.querySelectorAll(".post");
for (let i = 0; i < pts.length; i++) {
    pts[i].remove();
    console.log("removed",i);
}
function search_post(){
    let text=document.querySelector("#searcht").value;
    console.log(text);
    
    if(text!=""){
//alert("searching..");
let tempp="";let n=[];   // var sess_use =
var sess_use = "<?php echo $_SESSION['USERNAME']?>";
$.ajax({
type: 'POST',
url: 'posth_searchfetch.php',
data: {use:sess_use,st:text},
success:function(data){
if(data=="zero"){
    remove_post();
    let y = document.getElementById("no-post");
    y.innerText="no post's available on the current search";
    y.style.display = "block";
}
 else if(data=="NF"){
     alert("Could not update posts");
 }
 else{
     console.log("post alert");
   let y = document.getElementById("no-post");
    y.style.display = "none";
//can try by get element by classs name
remove_post();
let dataa=JSON.parse(data);
// console.log(dataa[0].post_id);
//console.log(dataa);
    // let pts=document.querySelectorAll(".post");
    // pts.remove();

   
    for(let ii=0;ii<dataa.length;ii++) {
    addposthsearch();
    }
    //use one more loop
    
    for(let ii=0;ii<dataa.length;ii++) {
        pppid2=pppid2+1;
    let s='#posttt'+pppid2.toString();
    console.log(s);
    let ppo=document.querySelector(s);
ppo.childNodes[0].lastChild.innerText=dataa[ii].post_title;
ppo.childNodes[1].lastChild.innerText=dataa[ii].post_desc;
ppo.childNodes[2].lastChild.innerText=dataa[ii].post_pusername;
ppo.childNodes[3].lastChild.innerText=dataa[ii].post_date;
ppo.childNodes[4].lastChild.innerText=dataa[ii].verified_date;
ppo.childNodes[5].lastChild.innerText=dataa[ii].post_id;
    }
 }
}
})
    }

}


   function load_toVerify(){
let tempp="";let n=[]; // var sess_use =
var sess_use = "<?php echo $_SESSION['USERNAME']?>";
$.ajax({
type: 'POST',
url: 'posth_fetch.php',
data: {use:sess_use},
success:function(data){
if(data=="zero"){
    let y = document.getElementById("no-post");
    y.innerText="Currently no post's available";
    y.style.display = "block";
}
 else if(data=="NF"){
     alert("Could not update posts");
 }
 else{
     console.log("post alert");
   let y = document.getElementById("no-post");
    y.style.display = "none";
//can try by get element by classs name
let dataa=JSON.parse(data);
// console.log(dataa[0].post_id);
//console.log(dataa);
    for(let ii=0;ii<dataa.length;ii++) {
    addposth();
    }
    //use one more loop
    let ppid=0;
    
    for(let ii=0;ii<dataa.length;ii++) {
        ppid=ppid+1;
    let s='#posttt'+ppid.toString();
    let ppo=document.querySelector(s);
   // console.log(ppo.childNodes[4]);
ppo.childNodes[0].lastChild.innerText=dataa[ii].post_title;
ppo.childNodes[1].lastChild.innerText=dataa[ii].post_desc;
ppo.childNodes[2].lastChild.innerText=dataa[ii].post_pusername;
ppo.childNodes[3].lastChild.innerText=dataa[ii].post_date;
ppo.childNodes[4].lastChild.innerText=dataa[ii].verified_date;
ppo.childNodes[4].style.display="none";
ppo.childNodes[5].lastChild.innerText=dataa[ii].post_id;
    }
 }
}
})
   }
</script>