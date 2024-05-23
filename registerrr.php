<!DOCTYPE html>
<html lang="en">
<head>
<link id="style-toggle" rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,500,0,200" />
    <link href="https://unpkg.com/pattern.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
     <script src="main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
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
<div class="bb"style="display:none;">
<div class="ball-box">
<div class="ball"></div>
</div>
<div class="ball-box">
    <div class="ball"></div>
    </div>
    <div class="ball-box">
        <div class="ball"></div>
        </div>
        <div class="ball-box">
            <div class="ball"></div>
            </div>
            <div class="ball-box">
                <div class="ball"></div>
                </div>
                <div class="ball-box">
                    <div class="ball"></div>
                    </div>
                    <div class="ball-box">
                        <div class="ball"></div>
                        </div>
                        </div>
<!-- <div class="ball"></div>
<div class="ball"></div>
<div class="ball"></div>
<div class="ball"></div>
<div class="ball"></div>
<div class="ball"></div>
<div class="ball"></div>
<div class="ball"></div>
<div class="ball"></div> -->
    <form action="home.php">
<button type="submit" class="back" ><span class="material-symbols-outlined">
    arrow_back_ios
    </span></button>
</form>
    <form action="<?php $_PHP_SELF ?>" method="POST" name="form1" onsubmit="return false;">
    <div class="sign-up-fake" style="color:black;">
    <p class="su-heading">Enter details</p>
    <div class="cid-cont" ><p class="su-sbheading    " style="color:black;">Control Id</p><input type="text" class="rcid" style="background:black;"/></div>
<div class="rollno-cont" ><p class="su-sbheading " style="color:black;">Roll No</p><input type="text"    class="rrno" style="background:black;"/></div>
<div class="mail-cont" ><p class="su-sbheading  " style="color:black;">Email</p><input type="email"   class="rmai" style="background:black;"/></div>
<p ><a href="login.html" style="color:black;font-size:1em;">Have registered? Please Sign in</a></p>
<div class="container-item  post-con-itm" style="width:fit-content;">   
</div> 
</div>
<div class="verify-fake" style="display:none;color:black;">
        <p class="su-heading">Verification</p>
        <div class="otp-cont" style="margin-bottom:2%;"><p class="su-sbheading"  style="color:black;">Enter OTP</p><input type="text" class="rotp" style="background:black;" /></div>
        <div class="container-item  post-con-itm" style="margin-left:5%;margin-top:0%;width:fit-content;">   
            <button  id="nextotp" class="inpu submi" style="display:none;width:fit-content;" onclick="">Verify</button>
            </div>
           </div> 
            <div class="user-fake"  style="display:none;color:black;"><p class="su-heading">Create Account</p>
            <div class="use-cont"><p class="su-sbheading" style="color:black;">Enter valid username</p><input type="text" class="ruse" style="background:black;"/>
                <div class="pas-cont"><p class="su-sbheading"  style="color:black;margin-top: 8%;margin-left:5%;">Enter valid Password:</p><input type="text" class="rpas" id="sppas" style="background:black;"/></div>
            </div>
            <div class="container-item  post-con-itm" style="margin-left:5%;width:fit-content;">   
                <button  id="nextuse" class="inpu submi" style="display:none;">Create</button>
               </div>
               </div> 
    <div class="sign-up-cont">
    <p class="su-heading">Enter details</p>
<div class="cid-cont"><p class="su-sbheading">Control Id</p><input type="text" class="rcid" id="rrcid" name="rrcid" required/></div>
<div class="rollno-cont"><p class="su-sbheading">Roll No</p><input type="text" class="rrno" id="rrrno" name="rrrno" placeholder="Ex:4045A100" required/></div>
<!-- <div class="phone-cont"><p class="su-sbheading">Phone No</p><input type="text" class="rpno" id="rrpno" name="rrpno" required/></div> -->
<div class="mail-cont" ><p class="su-sbheading  " >Email</p><input type="email"  class="rmai" id="rrmai" name="rrmai" required/></div>
<p><a href="login.php" class="redirectlink">Have registered? Please Sign in</a></p>
<div class="container-item  post-con-itm" style="width:fit-content;">   
<button   id="next1" class="inpu submi" >Next&nbsp; <span class="material-symbols-outlined" style="font-size:1em;margin-top:0px;">
    arrow_forward_ios
    </span></button>
</div>  
</div>
   <div class="verify-cont" style="display:none;">
    <p class="su-heading" >Verification</p>
    <div class="otp-cont" style="margin-bottom:2%;"><p class="su-sbheading">Enter OTP</p><input type="text" class="rotp" id="rrotp" name="rrotp" required /></div>
    <div class="container-item  post-con-itm" style="margin-left:5%;margin-top:0%;width:fit-content;">   
        <button  id="nextotp" class="inpu submi" onclick="verifyotp();">Verify</button>
        </div>
       </div>  
       <div class="user-cont"  style="display:none;"><p class="su-heading">Create Account</p>
        <div class="use-cont"><p class="su-sbheading">Enter valid Username:</p><input type="text" class="ruse" name="rruse" id="rruse"/></div>
        <div class="pas-cont"><p class="su-sbheading">Enter valid Password:</p><input type="text" class="rpas" name="rrpas" id="rrpas"/></div>
        <div class="container-item  post-con-itm" style="margin-left:5%;width:fit-content;">   
            <button  id="nextuse" class="inpu submi" onclick="createacc();">Create</button>
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
 let rotp="";
   var validate1=true;
    var validate2=false;
 $('#next1').on('click',function(e){ 
    $control_id = $('#rrcid').val();//covert id to php variable
    $roll_no = $('#rrrno').val();
    $e_mail = $('#rrmai').val();
 
 let valid=false;
valid=true;
if(valid){
    if($control_id!=="")
    {
        if($roll_no!=="")
        {
            // if($phone_no!=="")
            if($e_mail!=="")
            {
                $.ajax({
                    type: 'POST',
                    url: 'student/check_cid.php',
                    data: {control_id:$control_id,roll_no:$roll_no,e_mail:$e_mail},
                    success: function(data) {
                        console.log(data);
                        if(data=="EU")
                        {
                            //console.log("Existing user");
                            $('.verify-cont').show();
                            $('.verify-fake').show();
                            $('.sign-up-cont').hide();
                            $('.sign-up-fake').hide();
                            console.log("OTP is send to the given email");
                        //     $.ajax({
                        //    type: 'POST',
                        //    url: 'student/sent_otp.php',
                        //    data: {e_mail:$e_mail},
                        //    success:function(data){
                          //  console.log(data);
                        //         if(data=='yes')
                        //    {
                        //    console.log("otp sent successfully");

                        //    }
                           
                        //    else if(data=='smpt_error'){
                        //    alert("otp not sent");
                        //    }
                        //    else{
                        //     alert("some issue encountered");
                        //    }
                        // if(data=='not_exist'){
                        //     alert("some issue encountered");
                        // }
                        // else{
                            console.log("otp sent successfully");
                            //let dataa=data+"^";
                           // let temp="";let f=0;
                    let rmsg="";let rto="";let rsub="";let n=[];
                        //   for(let a=0;a<dataa.length;a++){
                        //     ch=dataa.charAt(a);
                        //     if(ch=='^'){
                        //     n[f]=temp;
                        //     temp="";
                        //     f=f+1;
                        //     }
                        //     else{
                        //         temp=temp+ch;
                        //     }
                        // }
                        // rotp=n[0];
                        // rmsg=n[1];
                        // rto=n[2];
                        // rsub=n[3];
                        rotp=Math.floor((Math.random()*1000000)+1);
                       rmsg='This is your OTP '+rotp;
                       rto=$e_mail;
                       rsub="OTP Verification";
                       // console.log(rotp);
                       // console.log(rmsg);
                       // console.log(rto);
                       // console.log(rsub);
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
  //message => alert('otp sent to mail')
  alert('otp sent to mail. Please check spam.')
);
                        //    }
                        // }
                        //    }) 
                        }
                        else if(data=="EUEU"){
                           alert("Already registered");
                           }
                        else if(data=="EUNR")
                        {
                            alert("roll no does not match with control id");
                        }
                        else if(data=="EUNE")
                        {
                            alert("email does not match with control id");
                        }
                        else if(data=="NU")
                        {
                            alert("control id does not exist");
                        }
                        else{
                             alert("something went wrong");
                            //alert(data);
                        }                       
                    },
                    error: function() {
                        console.log(response.status);
                    },
                })
            }
            else{
        alert("fill email");
    }
        }
        else{
        alert("fill roll no");
    }
    }
    else{
        alert("fill control id");
    }
}
    e.preventDefault();
 })
   function verifyotp(){
    $otp=$('#rrotp').val();
      if($otp!=="")
      {
// $.ajax({
//   type:'POST',
//     url:'student/checkotp.php',
//     data:{otp:$otp},//,e_mail:$e_mail
//     success: function(data){
     // console.log(data);

        // if(data=='yess'){
             if($otp==rotp){
        alert("Correct otp");
        $('.verify-cont').hide();
     $('.verify-fake').hide();
        $('.user-cont').show();
      $('.user-fake').show();
        }
        else{
        alert("Please enter valid otp");
        }
    // if(data=='not_exist')
    // {
    //     alert("Some issue");
    // }
    // else{

    //     console.log("otp sent");
    // }
//      }
// })
     }
        else
            {
            alert("Enter otp");
            }
         }
   function createacc(){
    $use=$('#rruse').val();
    $pas=$('#rrpas').val();
  if($use.length>20)
  {
    alert("Username length must not exceed 20 characters");
     validate1=false;
  }
  else if($use.length<10)
  {
    alert("Username length must not be less than 10 characters");
     validate1=false;
  }
  else{
let s=$use;let counta=0;let countn=0;
let countc=0;let invalid=0;validate1=true;
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
      validate1=false;
    }
    else if(counta==0)
    {
      alert("In username, Minimum one alphabet required");
       validate1=false;
    }
    else if(countn==0)
    {
      alert("In username, Minimum one number required");
       validate1=false;
    }
  }
  if($pas.length<8)
  {
    alert("Password should not be less than 8 characters");
  }
  else{
let s=$pas;let counta=0;let countn=0;
let countc=0;let invalid2=0;validate2=false;
    for(let i=0;i<$pas.length;i++)
    {
let str=s.charAt(i);
if((/[a-zA-Z]/).test(str))
{
  counta+=1;
}
else if(str==' ')
{
  invalid2=1;
}
else if(str=='0' ||str=='1' ||str=='2' ||str=='3' ||str=='4' ||str=='5' ||str=='6' ||str=='7' ||str=='8' ||str=='9')
{
  countn+=1;
}
else{
  countc+=1;
}
}
    if(invalid2==1){
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
      validate2=true;
    }
  }
if(validate1==true && validate2==true)
{
    if($use!=="")
      {
       if($pas!==""){
        $.ajax({
          type:'POST',
    url:'student/check_usepas.php',
    data:{control_id:$control_id,roll_no:$roll_no,e_mail:$e_mail,use:$use,pas:$pas},
    success: function(data){
      console.log(data);
     if(data=='NU'){
alert("Correct credentials");
 window.location='../student/index.php';
        }
        else if(data=='EU')
        {
           alert("Username already exists.Please change.");
        } 
        else{
        alert("Some issue");
        }
    }
    // },
    // error: function() {
    //                     console.log(response.status);
    //                 }
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
