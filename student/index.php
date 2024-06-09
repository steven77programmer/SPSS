<!-- public usernamealgo+    profile backend+     login backend+      posting post to handler+      then  verification+      vote working+    
handler+      other users -->
<!-- either send through session all details of profile or every time server interaction     registerdno maybe issue--> 
<!-- profile history in profile  index page backend   post column removal   changescoresponding to it  
     posy id html issue      account created mail php      when verified verify date to be changed+     
     when closing browser set to inactive up button+-->
     <?php
session_start();
$con = mysqli_connect('sql112.infinityfree.com','if0_34419009','dCXhuPfmbSMj','if0_34419009_spss_db');
if(isset($_SESSION['IS_LOGIN'])){
    $use=$_SESSION['USERNAME'];
    $sql=mysqli_query($con,"SELECT * FROM stud_account WHERE stu_username='$use'");
    $count=mysqli_num_rows($sql);
    if($count==1){
        echo("Welcome");
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
    <title>Student Page</title>
</head>
<div id="indexusername"></div>
<!--<div class="prebg">
<div class="preloader"></div>
<div class="preloader"></div>
<div class="preloader"></div>
<div class="preloader"></div>
</div>-->
 <?php include("prebg.html");?>
<body onload="makeactive(1);load_toPost();scrolling();change_mode_in();">
<div id="hidder">
    <div class="modalg active" style="z-index:9999;">
        <div class="modal-headerg">
            <div class="modal-titleg"><h1 class="gh1">Guidelines for Posting</h1></div>          
        </div>
        <div class="modal-bodyg">
            <div class="part1" >
        <h2 class="gh2">1. Be Respectful</h2>
        <p class="gp">Respect other users and their opinions. Avoid personal attacks, harassment, or any form of discrimination.</p>
      
        <h2 class="gh2">2. Stay Relevant</h2>
        <p class="gp">Make sure your posts are relevant. Avoid posting unrelated content.</p>
      
        <h2 class="gh2">3. Provide Value</h2>
        <p class="gp">Contribute meaningful and informative posts. Avoid spamming, advertising, or posting irrelevant links.</p>
      
        <h2 class="gh2">4. Use Appropriate Language</h2>
        <p class="gp">Keep the language clean and appropriate for all users. Refrain from using offensive or inappropriate words.</p>
      
        <h2 class="gh2">5. Be Mindful of Privacy</h2>
        <p class="gp">Respect the privacy of others. Do not share personal information or any confidential details in your posts.</p>
    </div>
    <div class="part2" >
        <h2 class="gh2">6. Report Inappropriate Content</h2>
        <p class="gp">If you come across any posts that violate these guidelines, please report them to the moderators for appropriate action.</p>
      
        <h2 class="gh2">7. No Plagiarism</h2>
        <p class="gp">Do not post content that infringes upon the intellectual property rights of others. Give credit to original sources when necessary.</p>
      
        <h2 class="gh2">8. Be Constructive</h2>
        <p class="gp">Engage in constructive discussions and provide helpful feedback. Avoid unnecessary arguments or trolling.</p>
      
        <h2 class="gh2">9. Respect the Platform</h2>
        <p class="gp">Follow the rules and policies of the website. Do not attempt to hack, exploit, or disrupt the normal functioning of the platform.
        </p>
      
        <h2 class="gh2">10. Consequences for Violations</h2>
        <p class="gp">Failure to comply with these guidelines may result in the removal of your posts, temporary or permanent suspension of your account, or other appropriate actions as determined by the college.</p>
        </div>
    </div>
    <div class="modal-bodyb">
        <input type="checkbox" name="conf" id="conf" required /><p class="gp" style="width:80%;margin-right:3px;font-size:0.88em;color:whitesmoke;">I Accept and will follow all the guidelines. I am ready to face the consequences incase of violaion</p>
        <button class="close-buttong" onclick="checking();">Confirm</button>
    </div>
      </div>
      <div id="overlay" class="active" style="z-index:99;"></div>

      </div>
<!--<div id="progress">
    <!--<span id="progress-value">&#x1F815;</span>
    <span id="progress-value" class="material-symbols-outlined">
arrow_upward
</span>
</div>-->
   <!-- <section class="head">
    <div class="header-bg"><h2 style="color:white;">Problem Solver</h2></div>
    <div class="header">
      <div class="logo-bg "> <div class="pattern-cross-dots-md"> <div class="logo"></div></div></div>
        <h2 class="shimmer">Problem Solver</h2></div>
    <div class="header-fake"><h2></h2></div>
</section>-->
 <?php include("../progress.html");?>
 <?php include("stu_head.html");?>
    <section class="main">    
    <div class="container" >
    <!--<div class="container-item side-bar sb-one"><h3>Menu</h3>
        <div class="menu ani"><a href="index.php"     class="click-here   " id="m1" >Home</a></div>
        <div class="menu ani"><a href="post.php"      class="click-here   " id="m2" >Post</a></div>
        <div class="menu ani"><a href="profile.php"   class="click-here   " id="m4" >Profile</a></div>
        <div class="menu ani"><a href="contactus.php" class="click-here   " id="m5" >Contact Us</a></div>
        <div class="menu ani"><a href="logout.php"    class="click-here     " id="m6" >Logout</a></div>
    </div>-->
     <?php include("stu_menu.html");?>
    <div class="container-item" id="post-section"><h3>Post section</h3>
    <div id="helppara" style="font-size: 1.2em;color:whitesmoke;margin-bottom:1%;">In this page you can view and vote the post according to your opinions.</div>
        <div id="no-post">Currently no post's available</div>
</div>
</section>
<!--<section class="foot">
    <div class="footer">
            <p>
                Copyrights reserved &copy;<br />
                if not please contact us <a class="click-here" href="contactus.php" style="font-size: 1.25em;">click here</a>
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
 <?php include("stu_footer.html");?>
    <script>
var loader= document.querySelector(".prebg");
window.addEventListener("load", function(){
    if(loader!=null)
    loader.style.display="none";
})
    </script>
    <script type="text/javascript">
        
    console.log("Checking");
    if (checkCookie("guidelinesAccepted")){
        console.log("Checked");
      let hidder = document.getElementById('hidder');
      hidder.style.display = 'none';
}
function checkCookie(cookieName) {
  //  console.log("checkcookie");
  return document.cookie.split("; ").some((cookie) => {
    return cookie.split("=")[0] === cookieName;
  });
}
        </script>
</body>
</html>
<script>
function checking(){
    let c=document.getElementById('conf');
   // console.log(c);
    if(c.checked){
        const modal = document.querySelector('.modalg');
        modal.classList.remove('active');
  overlay.classList.remove('active');
  setCookie("guidelinesAccepted", "true", 60);
    }
    else{
        alert('Please accept the guidlines to continue');
    }
}
function setCookie(cookieName, cookieValue, expirationDays) {
  const date = new Date();
  date.setTime(date.getTime() + (expirationDays * 24 * 60 * 60 * 1000));
  const expires = "expires=" + date.toUTCString();
  document.cookie = cookieName + "=" + cookieValue + ";" + expires + ";path=/";
}
   function load_toPost(){
let tempp="";let n=[];  
var sess_use="<?php echo $_SESSION['USERNAME']?>";
let iu=document.querySelector('#indexusername');
iu.innerText=sess_use;
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
    // console.log("post alert");
   let y = document.getElementById("no-post");
    y.style.display = "none";
let dataa=JSON.parse(data);
dataa=dataa.sort((a,b)=>{
//     if(a.post_votes > b.post_votes){
// return -1;
//     }
 return parseInt(b.post_votes) - parseInt(a.post_votes);
})
//console.log(dataa);
    for(let ii=0;ii<dataa.length;ii++) {
    addpost();
    }
    //use one more loop
    let ppid=0;
    for(let ii=0;ii<dataa.length;ii++) {
        ppid=ppid+1;
    let s='#posttt'+ppid.toString();
    let ppo=document.querySelector(s);
ppo.childNodes[0].lastChild.innerText=dataa[ii].post_title;
ppo.childNodes[1].lastChild.innerText=dataa[ii].post_desc;
//ppo.childNodes[2].lastChild.innerText=dataa[ii].post_pusername;
//ppo.childNodes[3].lastChild.innerText=dataa[ii].post_date;
ppo.childNodes[2].lastChild.innerText=dataa[ii].verified_date;
ppo.childNodes[3].lastChild.innerText=dataa[ii].post_id;
ppo.childNodes[4].lastChild.innerText=dataa[ii].post_votes;
    }
 }
}
})
   }
</script>