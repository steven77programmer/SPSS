<!DOCTYPE html>
<html lang="en">
<head>
  <link id="style-toggle" rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,500,0,200" />
    <link href="https://unpkg.com/pattern.css" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="main.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in Page</title>   
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
    <p class="su-heading">Enter details:</p>
<div class="use-cont" ><p class="su-sbheading    " style="color:black;">Username</p><input type="text" class="luse" style="background:black;"/></div>
<div class="pas-cont"><p class="su-sbheading" style="color:black;">Password</p>
        <input type="password" class="lpas" name="llpas"  style="background:black;"/><br/>
      <input type="checkbox" onclick="tgle()" style="margin: 5% 2px 2px 2px;accent-color:black;visibility:hidden;">Show Password
        </div>
<p><a class="redirectlink" style="color:black;">Have not registered? Please Sign Up</a></p><br/>
 <p><a class="redirectlink" style="color:black;">I Forgot my Password</a></p>
<div class="container-item  post-con-itm" style="width:fit-content;">   
<button   id="nextlogconf" class="inpu submi" style="display:none;">Next</button>
</div>  
</div>
        <div class="sign-in-cont">
            <p class="su-heading">Enter details:</p>
        <div class="use-cont"><p class="su-sbheading">Username</p><input type="text" class="luse" name="lluse" id="lluse" required/></div>
        <div class="pas-cont"><p class="su-sbheading">Password</p><!--<input type="text" class="lpas" name="llpas" id="llpas" required/>-->
        <input type="password" class="lpas" name="llpas" id="llpas" required/><br/>
       <input type="checkbox" onclick="tgle()" style="margin:5% 2px 2px 2px;accent-color:black;">Show Password
        </div>
        <p><a href="register.php" class="redirectlink">Have not registered? Please Sign Up</a></p><br/>
        <p><a href="forgotpassword.php" class="redirectlink">I Forgot my Password</a></p>
        <div class="container-item  post-con-itm" style="width:fit-content;">   
        <button   id="nextlogconf" class="inpu submi" onclick="infologValidate();">Sign in</button>
        </div>  
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


function infologValidate(){
    $use=$('#lluse').val();
    $pas=$('#llpas').val();
  if($use.length>20)
  {
    alert("Username length must not exceed 20 characters");
  }
  else if($use.length<10)
  {
    alert("Username length must not be less than 10 characters");
  }
  else{
let s=$use;let counta=0;let countn=0;
let countc=0;let invalid=0;
    for(let i=0;i<$use.length;i++)
    {
let str=s.charAt(i);
if((/[a-zA-Z]/).test(str))
{
  counta+=1;
}
else if(str=='_')
{
  countc+=1;
}
else if(str=='0' ||str=='1' ||str=='2' ||str=='3' ||str=='4' ||str=='5' ||str=='6' ||str=='7' ||str=='8' ||str=='9')
{
  countn+=1;
}
else{
  invalid=1;
  break;
}
    }
    if(invalid==1)
    {
      alert("In username, No space or special character allowed, except underscore(_)");
    }
    else if(counta==0)
    {
      alert("In username, Minimum one alpahbet required");
    }
    else if(countn==0)
    {
      alert("In username, Minimum one number required");
    }
  }
  if($pas.length<8)
  {
    alert("Password should not be less than 8 characters");
  }
  else{
let s=$pas;let counta=0;let countn=0;
let countc=0;let invalid=0;
    for(let i=0;i<$pas.length;i++)
    {
let str=s.charAt(i);
if((/[a-zA-Z]/).test(str))
{
  counta+=1;
}
else if(str==' ')
{
  invalid=1;
}
else if(str=='0' ||str=='1' ||str=='2' ||str=='3' ||str=='4' ||str=='5' ||str=='6' ||str=='7' ||str=='8' ||str=='9')
{
  countn+=1;
}
else{
  countc+=1;
}
}
    if(invalid==1){
      alert("In password, No space character allowed");
    }
    else if(counta==0)
    {
      alert("In password, Minimum one alpahbet required");
    }
    else if(countn==0)
    {
      alert("In password, Minimum one number required");
    }
    else if(countc==0)
    {
      alert("In password, Minimum one special character required");
    }
   else{
      validate=true;
    }
  }
if(validate==true)
{
    if($use!=="")
      {
       if($pas!==""){
        $.ajax({
          type:'POST',
    url:'check_usepaslogin.php',
    data:{use:$use,pas:$pas},
    success: function(data){
     // console.log(data);
     if(data=='EU'){
//alert("Correct credentials-student");
 window.location='student/index.php';
        }
        else if(data=='EUH'){
//alert("Correct credentials-handler");
 window.location='handler/indexh.php';
        }
        else if(data=='EUA'){
//alert("Correct credentials-admin");
 window.location='admin/indexa.php';
        }
        else if(data=='NU')
        {
           alert("Username does not exist");
        }
        else if(data=='P')
        {
           alert("Incorrect Password");
        }
        else if(data=='sess'){
          alert("Already logged in");
        }
        else if(data=='IN')
        {
          alert("invalid username");
        }
        else{
        alert("Some issue");
        }
    },
    error: function() {
                        console.log(response.status);
                    }
})
       }
       else{
        alert("Please enter password");
       }
      }
      else
      {
      alert("Please enter username");
      }

    }
  }
 let valid=false;
 

</script>