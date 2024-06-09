<!-- public usernamealgo+    profile backend+     login backend+      posting post to handler+     
 then  verification+      vote working+    
handler+      other users+     admin postand index details       extra updationtab->editusers+   -->
<!-- either send through session all details of profile or every time server interaction     registerdno maybe issue 
    dark mode light mode(up)  --> 
<!-- profile history in profile       index page backend+   post column removal(x)   changescoresponding to it(x)  
     post id html issue+     guiline rules page or modal(w)+      account created mail php(up)    
     remove console log and uneccasry alerts(f)      when verified verify date to be changed+      up button+
    2/3 days auto delete post(up)    manual and auto removal of removed posts(W)     guideline page(W)+   
   hosting(f)    sqlcertifcate(f)    admin removed post(W)    change in php else message   alert manipulation(up) 
   password encryption(x)   restirict a  username to one session(w)
-->
<!-- to do master files       preloader   scrollvalue    header    menu     footer  -->
<?php
session_start();
$con = mysqli_connect('sql112.infinityfree.com','if0_34419009','dCXhuPfmbSMj','if0_34419009_spss_db');
if(isset($_SESSION['IS_LOGIN'])){
    $use=$_SESSION['USERNAME'];
    $sql=mysqli_query($con,"SELECT * FROM admin WHERE admin_username='$use'");
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
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lato&family=Sarabun:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,500,0,200" />
<link href="https://unpkg.com/pattern.css" rel="stylesheet">
<link id="style-toggle" rel="stylesheet" href="../style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="../main.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<!--<div class="prebg">
<div class="preloader"></div>
<div class="preloader"></div>
<div class="preloader"></div>
<div class="preloader"></div>
</div> -->
<?php include("../prebg.html");?>
<body class="bodybg" onload="makeactive(1);load_toPost();scrolling();change_mode_in();">
<?php include("../progress.html");?>
<!--<div id="progress">
   
    <span id="progress-value" class="material-symbols-outlined">
arrow_upward
</span>
</div>
    <section class="head">
    <div class="header-bg"><h2 style="color:white;">Problem Solver</h2></div>
    <div class="header">
      <div class="logo-bg "> <div class="pattern-cross-dots-md"> <div class="logo"></div></div></div>
        <h2 class="shimmer">Problem Solver</h2></div>
    <div class="header-fake"><h2></h2></div>
</section>-->
<?php include("adm_head.html");?>
    <section class="main">    
    <div class="container" >
  <!--  <div class="container-item side-bar sb-one"><h3>Menu</h3>
    <div class="menu ani"><a href="indexa.php"     class="click-here   " id="m1" >Home</a></div>
        <div class="menu ani"><a href="posta.php"      class="click-here   " id="m2" >Post</a></div>
        <div class="menu ani"><a href="profilea.php"   class="click-here   " id="m4" >Profile</a></div>
        <div class="menu ani"><a href="updateuser.php"   class="click-here   " id="m3" >Update Users</a></div>
        <div class="menu ani"><a href="contactusa.php" class="click-here   " id="m5" >Contact Us</a></div>
        <div class="menu ani"><a href="logout.php"    class="click-here     " id="m6" >Logout</a></div>
    </div>--><?php include("adm_menu.html");?>
    <div class="container-item" id="post-section"><h3>Post section</h3>
    <div id="helppara" style="font-size: 1.2em;color:whitesmoke;margin-bottom:1%;">In this page you can view and remove the post.</div>
        <div id="no-post">Currently no post's available</div>
</div>
</section>

<!--<section class="foot">
    <div class="footer">
         <p>
                Copyrights reserved &copy;<br />
                if not please contact us <a class="click-here" href="contactusa.php" style="font-size: 1.25em;">click here</a>
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
</section>-->
<?php include("adm_footer.html");?>
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
   function load_toPost(){
let tempp="";let n=[];  var sess_use = "<?php echo $_SESSION['USERNAME']?>";
$.ajax({

type: 'POST',
url: '../handler/indexh_fetch.php',
data: {use:sess_use},
success:function(data){
if(data=="zero"){
    let y = document.getElementById("no-post");
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
dataa=dataa.sort((a,b)=>{
//     if(a.post_votes > b.post_votes){
// return -1;
return parseInt(b.post_votes) - parseInt(a.post_votes);
    
})
//console.log(dataa);
    for(let ii=0;ii<dataa.length;ii++) {
    addpostaa();
    }
    //use one more loop
    let ppid=0;//let j=0;
    for(let ii=0;ii<dataa.length;ii++) {
        ppid=ppid+1;
    let s='#posttt'+ppid.toString();
    let ppo=document.querySelector(s);
     console.log(ppo.childNodes[6]);
ppo.childNodes[0].lastChild.innerText=dataa[ii].post_title;
ppo.childNodes[1].lastChild.innerText=dataa[ii].post_desc;
ppo.childNodes[2].lastChild.innerText=dataa[ii].post_pusername;
ppo.childNodes[3].lastChild.innerText=dataa[ii].post_date;
ppo.childNodes[4].lastChild.innerText=dataa[ii].verified_date;
ppo.childNodes[5].lastChild.innerText=dataa[ii].post_id;
ppo.childNodes[6].disabled=true;
ppo.childNodes[6].lastChild.innerText=dataa[ii].post_votes;
    }
 }
}
})
   }
</script>