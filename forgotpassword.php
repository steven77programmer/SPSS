<!DOCTYPE html>
<html lang="en">
<head>
  <link id="style-toggle" rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,500,0,200" />
    <link href="https://unpkg.com/pattern.css" rel="stylesheet">
     <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="main.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password Page</title>   
</head>
<div class="prebg">
    <div class="preloader"></div>
    <div class="preloader"></div>
    <div class="preloader"></div>
    <div class="preloader"></div>
    </div>
<body class="bodybg-reg" onload="change_mode();">
    <section class="head">
        <div class="header-bg"><h2 style="color:white;">Problem Solver</h2></div>
        <div class="header">
          <div class="logo-bg "> <div class="pattern-cross-dots-md"> <div class="logo"></div></div></div>
            <h2 class="shimmer">Problem Solver</h2></div>
        <div class="header-fake"><h2></h2></div>
    </section>
    <form action="home.php">
<button type="submit" class="back" ><span class="material-symbols-outlined">
    arrow_back_ios
    </span></button>
</form>
<form action="<?php $_PHP_SELF ?>" method="POST" name="form1" onsubmit="return false;">
<div class="sign-in-fake" style="color:black;">
  <!--  <p class="su-heading">Enter details:</p>
<div class="use-cont" ><p class="su-sbheading    " style="color:black;">Username</p><input type="text" class="luse" style="background:black;"/></div>

<div class="container-item  post-con-itm" style="width:fit-content;">   
<button   id="nextlogconf" class="inpu submi" style="display:none;">Next</button>
</div>-->



<p class="su-heading">Forgot Password:</p>
        <div class="use-cont"><p class="su-sbheading" style="color:black;">Enter Username</p><input type="text" class="luse" name="lluse" style="background:black;"/></div>
        <div style="margin-top:3%;">--or--</div>
         <div class="use-cont"><p class="su-sbheading" style="color:black;margin-top:3%">Enter Email</p><input type="text" class="luse" name="lluse"  placeholder="email used in sign up" style="background:black;"/></div>
      
        <div class="container-item  post-con-itm" style="width:fit-content;margin-top:4%;">   
        <button   id="getotp" class="inpu submi"  style="display:none;">Get Password</button>
        
        </div>  
        <p><a href="" class="redirectlink" style="color:black;">Got password? Sign in</a></p>
         <!--<div class="otp-cont" style="margin-bottom:2%;"><p class="su-sbheading" style="color:black;">Enter OTP</p><input type="text" class="rotp"  name="rrotp" style="background:black;" /></div>
         <div class="container-item  post-con-itm" style="margin-left:5%;margin-top:0%;width:fit-content;">   
        <button  id="nextotpp" class="inpu submi"  style="display:none;">Verify</button>
        </div>
      <!--  <div class="pas-cont"><p class="su-sbheading" style="color:black;">Enter New Password</p><input type="text" class="lpas" name="llpas" style="background:black;"/></div>
     
         <div class="container-item  post-con-itm" style="width:fit-content;">   
        <button   id="passchange" class="inpu submi"  style="display:none;">Change</button>
        </div>  -->
</div>


        <div class="sign-in-cont">
            <p class="su-heading">Forgot Password:</p>
        <div class="use-cont"><p class="su-sbheading">Enter Username</p><input type="text" class="luse" name="lluse" id="lluse"  placeholder="Username used in sign up" required/></div>
        <div style="margin-top:3%;">--or--</div>
         <div class="use-cont"><p class="su-sbheading" style="margin-top:3%">Enter Email</p><input type="text" class="luse" name="lluse" id="llema" placeholder="Email used in sign up" required/></div>
      
        <div class="container-item  post-con-itm" style="width:fit-content;margin-top:4%;">   
        <button   id="getotp" class="inpu submi" onclick="checkuse_mail();">Get Password</button>
        
        </div>  
        <p><a href="login.php" class="redirectlink">Got password? Sign in</a></p>
        <!--
         <div class="otp-cont" style="margin-bottom:2%;"><p class="su-sbheading">Enter OTP</p><input type="text" class="rotp" id="rrotp" name="rrotp" required disabled/></div>
         <div class="container-item  post-con-itm" style="margin-left:5%;margin-top:0%;width:fit-content;">   
        <button  id="nextotpp" class="inpu submi" onclick="">Verify</button>
        </div>
       <!-- <div class="pas-cont"><p class="su-sbheading">Enter New Password</p><input type="text" class="lpas" name="llpas" id="llpas" required disabled/></div>
     
         <div class="container-item  post-con-itm" style="width:fit-content;">   
        <button   id="passchange" class="inpu submi" onclick="">Change</button>
        </div>  -->
        </div>
</form>
<section class="foot">
    <div class="footer">
     <button class="mode-toggle"id="lmm"><span id="light" class="material-symbols-outlined">light_mode</span>
</button>
          <p>
            Copyrights reserved &copy;<br />
            if not please contact us <a class="click-here" href="mailto:studentproblemsolver05@gmail.com" style="font-size: 1.25em;">click here</a>
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
</section>
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

function tgle() {
  var x = document.getElementById("llpas");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
var sent_pass=false;

function checkuse_mail(){
   
     $use=$('#lluse').val();
    $ema=$('#llema').val();
    // console.log("checking ",$use," ",$ema);
    if($use.length==0 && $ema.length==0){
        alert("Please enter username or email registered");
    }
    else if($use.length!=0){
     //  alert("username entered");
        $.ajax({
          type:'POST',
    url:'check_usemaa.php',
    data:{use:$use,ema:$ema},
    success: function(data){
        //console.log(data);
        data=JSON.parse(data);
      //alert(data.stu_email);
      if(data=='NU'){
alert("Invalid username or password");
        }
        else{
        //alert(data);
        sent_pass=true;
     //   console.log(data)
       sent_pas(data[1],data[0]);
        }
    },
    error: function() {
                        console.log(response.status);
                    }
})
    }
    else{
//alert("mail entered");
 $.ajax({
          type:'POST',
    url:'check_usemaa.php',
    data:{use:$use,ema:$ema},
    success: function(data){
        data=JSON.parse(data);
      // alert(data.stu_email);
      if(data=='NU'){
alert("Invalid username or password");
        }
        else{
        sent_pass=true;
       sent_pas(data[1],data[0]);
        }
    },
    error: function() {
                        console.log(response.status);
                    }
})
    }
}


function sent_pas(pass,ema){
    let rmsg="";let rto="";let rsub="";
                      
                       
                       rmsg='This is your password '+pass;
                       rto=ema;
                       rsub="Your Password";
    if(sent_pass){
Email.send({
                          
    // Host : "smtp.elasticemail.com",
    // Username : "be2309e0-6684-4982-9798-f3c61fa1e0c7",
    SecureToken : "6b9d686d-28ab-44b7-9793-ba592582e2a1",
 //  Password : "D0A0BDCB1DDC540C51D21AA44308B112235C",
 // Password:"tzybjzgcalkfuvkv",
    To : rto,
    From : "studentproblemsolver05@gmail.com",
   //From: "be2309e0-6684-4982-9798-f3c61fa1e0c7",
    Subject : rsub,
    Body : rmsg
}).then(
  //message => alert(message)
  alert('Password sent to mail. Please check spam.')
);
    }
     
}
 

</script>