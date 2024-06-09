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
   <link id="style-toggle" rel="stylesheet" href="../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lato&family=Sarabun:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,500,0,200" />
<link href="https://unpkg.com/pattern.css" rel="stylesheet">
<script src="../main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updation Page</title>
</head>
<!--<div class="prebg">
    <div class="preloader"></div>
    <div class="preloader"></div>
    <div class="preloader"></div>
    <div class="preloader"></div>
    </div>-->
    <?php include("../prebg.html");?>
<body onload="makeactive(3);addDetails();addDetailss();addDetailsh();addDetailsa();scrolling();change_mode_in();">
<!--<div id="progress">
     <span id="progress-value" class="material-symbols-outlined">
arrow_upward
</span>
</div>-->
<?php include("../progress.html");?>
    <!--<section class="head">
        <div class="header-bg"><h2 style="color:white;">Problem Solver</h2></div>
        <div class="header">
          <div class="logo-bg "> <div class="pattern-cross-dots-md"> <div class="logo"></div></div></div>
            <h2 class="shimmer">Problem Solver</h2></div>
        <div class="header-fake"><h2></h2></div>
    </section>-->
    <?php include("adm_head.html");?>
<section class="main">    
    <div class="container">
       <!-- <div class="container-item side-bar sb-one"><h3>Menu</h3>
        <div class="menu ani"><a href="indexa.php"     class="click-here   " id="m1" >Home</a></div>
        <div class="menu ani"><a href="posta.php"      class="click-here   " id="m2" >Post</a></div>
        <div class="menu ani"><a href="profilea.php"   class="click-here   " id="m4" >Profile</a></div>
        <div class="menu ani"><a href="updateuser.php"   class="click-here   " id="m3" >Update Users</a></div>
        <div class="menu ani"><a href="contactusa.php" class="click-here   " id="m5" >Contact Us</a></div>
        <div class="menu ani"><a href="logout.php"    class="click-here     " id="m6" >Logout</a></div>
        </div>-->
        <?php include("adm_menu.html");?>
    <div class="container-item" id="post-section"><h3>Update Users Details</h3>
    <form action="<?php $_PHP_SELF ?>" method="POST" name="form1" onsubmit="return false;">
    <div class="container">
    
    <div class="container-item tabs" onclick="studentinfo();" >Student account</div>
    <div class="container-item tabs" onclick="handlerinfo();">Handler</div>
    <div class="container-item tabs" onclick="admininfo();">Admin</div>
    <div class="container-item tabs" onclick="studentinfo2();"style="margin-left:33%;">Student database</div>
    </div>
    <div id="no-post" style="display:none;">Currently no details available</div>
  
    <div class="container" id="studcont">
    <div class="container-item " id='ths' >Username</div>
    <div class="container-item " id='ths' >Roll-no</div>
    <div class="container-item " id='ths' >E-mail</div>
    <!--<div class="container-item " id='ths' >Password</div>-->
    <button id="iconssp" class="data-open-modal2" style="margin-left:8%;" >
    <span class="material-symbols-outlined" id="iconsss">
person_add
</span></button>
</div>
<div class="container" id="handcont">
    <div class="container-item " id='thh' >Username</div>
    <div class="container-item " id='thh' >E-mail</div>
  <!--  <div class="container-item " id='thh' >Password</div>-->
    <button id="iconssph" class="data-open-modal3" style="margin-left:10%;" >
    <span class="material-symbols-outlined" id="iconsss">
person_add
</span></button>
</div>
<div class="container" id="admicont" >
    <div class="container-item " id='thh' >Username</div>
    <div class="container-item " id='thh' >E-mail</div>
  <!--  <div class="container-item " id='thh' >Password</div>-->
    <button id="iconsspa" class="data-open-modal4" style="margin-left:10%;" >
    <span class="material-symbols-outlined" id="iconsss">
person_add
</span></button>
</div>
<div class="container" id="studcont2">
    <div class="container-item " id='thss' >Control-id</div>
    <div class="container-item " id='thss' >Roll no</div>
    <div class="container-item " id='thss' >E-mail</div>
    <div class="container-item " id='thss' >Registered no</div>
    <button id="iconssps" class="data-open-modal5" style="margin-left:8%;" >
    <span class="material-symbols-outlined" id="iconsss">
person_add
</span></button>
</div>

<!-- edit details admin -->
<div class="modala" id="modala">
<div class="modal-header">
    <div class="modal-title">Edit Details</div>
    <button id="data-close-buttona" class="close-button" class="close-button">&times;</button>
</div>
<div class="modal-body">
<div id="post-usernamee"  class="post-con-itm">Username
    <p id="aemcontentHolderusee"></p> 
</div>
<div id="post-mail"  class="post-con-itm" >E-mail<br/>
   
    <input type="text" id="aemcontentHoldermai" placeholder=""/>
</div> 
<!--<div id="post-password"  class="post-con-itm">Password<br/> 
    <input type="text" id="aemcontentHolderpas" placeholder=""/>
</div>-->
<button id="updatefa" class="inpu submi" onclick="changedDetailsa();"><span class="material-symbols-outlined" style="font-size: 1.2em;">
    edit_square
    </span>&nbsp; Edit</button>
</div>
</div>
<div id="overlay"></div>

<!-- edit details handler -->
<div class="modalh" id="modalh">
<div class="modal-header">
    <div class="modal-title">Edit Details</div>
    <button id="data-close-buttonh" class="close-button" class="close-button">&times;</button>
</div>
<div class="modal-body">
<div id="post-usernamee"  class="post-con-itm">Username
    <p id="hemcontentHolderusee"></p> 
</div>
<div id="post-mail"  class="post-con-itm" >E-mail<br/>
   
    <input type="text" id="hemcontentHoldermai" placeholder=""/>
</div> 
<!--
<div id="post-password"  class="post-con-itm">Password<br/> 
    <input type="text" id="hemcontentHolderpas" placeholder=""/>
</div>-->
<button id="updatefh" class="inpu submi" onclick="changedDetailsh();"><span class="material-symbols-outlined" style="font-size: 1.2em;">
    edit_square
    </span>&nbsp; Edit</button>
</div>
</div>
<div id="overlay"></div>

<!-- edit details -->
<div class="modal" id="modal">
<div class="modal-header">
    <div class="modal-title">Edit Details</div>
    <button id='data-close-buttons' class="close-button" class="close-button">&times;</button>
</div>
<div class="modal-body">
<div id="post-usernamee"  class="post-con-itm">Username
    <p id="semcontentHolderusee" ></p> 
</div>
<div id="post-controlid"  class="post-con-itm">Control-Id
    <p id="semcontentHoldercid" ></p> 
</div>
<div id="post-rollno"  class="post-con-itm">Roll-no<br/>
    <input type="text" id="semcontentHolderrno" placeholder=""/>
</div>
<div id="post-mail"  class="post-con-itm" >E-mail<br/>
    <input type="text" id="semcontentHoldermai" placeholder=""/>
</div>
<!--<div id="post-password"  class="post-con-itm">Password<br/> 
    <input type="text" id="semcontentHolderpas" placeholder=""/>
</div>-->
<button id="updatef" class="inpu submi" onclick="changedDetails();"><span class="material-symbols-outlined" style="font-size: 1.2em;">
    edit_square
    </span>&nbsp; Edit</button>
</div>
</div>
<div id="overlay"></div>

<!-- edit details student tb-->
<div class="modals" id="modals">
<div class="modal-header">
    <div class="modal-title">Edit Details</div>
    <button id='data-close-buttonss' class="close-button" class="close-button">&times;</button>
</div>
<div class="modal-body">

<div id="post-controlid"  class="post-con-itm">Control-Id
    <p id="ssemcontentHoldercid" ></p> 
</div>
<div id="post-rollno"  class="post-con-itm">Roll-no<br/>
    <input type="text" id="ssemcontentHolderrno" placeholder=""/>
</div>
<div id="post-mail"  class="post-con-itm" >E-mail<br/>
    <input type="text" id="ssemcontentHoldermai" placeholder=""/>
</div>
<div id="post-password"  class="post-con-itm">Registered no<br/> 
    <input type="text" id="ssemcontentHolderreg" placeholder=""/>
</div>
<button id="updatefs" class="inpu submi" onclick="changedDetailss();"><span class="material-symbols-outlined" style="font-size: 1.2em;">
    edit_square
    </span>&nbsp; Edit</button>
</div>
</div>
<div id="overlay"></div>

<!-- add details student -->
<div class="modal2" id="modal2">
<div class="modal-header">
    <div class="modal-title">Add Users</div>
    <button id="data-close-modal2" class="close-button" class="close-button" >&times;</button>
</div>
<div class="modal-body">

<div id="post-usernamee"  class="post-con-itm" style="width:fit-content;">Username<br/>
  
    <input type="text" id="mcontentHolderusee" placeholder="" />
</div>
<div id="post-controlid"  class="post-con-itm" style="width:fit-content;">Control-Id<br/>
 
    <input type="text" id="mcontentHoldercid" placeholder="" />
</div>
<div id="post-rollno"  class="post-con-itm" style="width:fit-content;">Roll-no<br/>
    <input type="text" id="mcontentHolderrno" placeholder=""/>
</div>
<div id="post-mail"  class="post-con-itm" style="width:fit-content;">E-mail<br/>
  
    <input type="text" id="mcontentHoldermai" placeholder=""/>
</div>
<div id="post-password"  class="post-con-itm" style="width:fit-content;" >Password<br/> 
    <input type="text" id="mcontentHolderpas" placeholder=""/>
</div>
<button id="addf" class="inpu submi" ><span class="material-symbols-outlined" style="font-size: 1.2em;">
    add
    </span>&nbsp;Add</button>
</div>
</div>
<div id="overlay"></div> 

<!-- add details handler -->
<div class="modal3" id="modal3">
<div class="modal-header">
    <div class="modal-title">Add Users</div>
    <button id="data-close-modal3" class="close-button" class="close-button" >&times;</button>
</div>
<div class="modal-body">

<div id="post-usernamee"  class="post-con-itm" style="width:fit-content;">Username<br/>
  
    <input type="text" id="mcontentHolderusee" placeholder="" />
</div>

<div id="post-mail"  class="post-con-itm" style="width:fit-content;">E-mail<br/>
  
    <input type="text" id="mcontentHoldermai" placeholder=""/>
</div>
<div id="post-password"  class="post-con-itm" style="width:fit-content;" >Password<br/> 
    <input type="text" id="mcontentHolderpas" placeholder=""/>
</div>
<button id="addfh" class="inpu submi" ><span class="material-symbols-outlined" style="font-size: 1.2em;">
    add
    </span>&nbsp;Add</button>
</div>
</div>
<div id="overlay"></div> 

<!-- add details admin -->
<div class="modal4" id="modal4">
<div class="modal-header">
    <div class="modal-title">Add Users</div>
    <button id="data-close-modal4" class="close-button" class="close-button" >&times;</button>
</div>
<div class="modal-body">

<div id="post-usernamee"  class="post-con-itm" style="width:fit-content;">Username<br/>
  
    <input type="text" id="mcontentHolderusee" placeholder="" />
</div>

<div id="post-mail"  class="post-con-itm" style="width:fit-content;">E-mail<br/>
  
    <input type="text" id="mcontentHoldermai" placeholder=""/>
</div>
<div id="post-password"  class="post-con-itm" style="width:fit-content;" >Password<br/> 
    <input type="text" id="mcontentHolderpas" placeholder=""/>
</div>
<button id="addfa" class="inpu submi" ><span class="material-symbols-outlined" style="font-size: 1.2em;">
    add
    </span>&nbsp;Add</button>
</div>
</div>
<div id="overlay"></div> 


<!-- add details student tb -->
<div class="modal5" id="modal5">
<div class="modal-header">
    <div class="modal-title">Add Users</div>
    <button id="data-close-modal5" class="close-button" class="close-button" >&times;</button>
</div>
<div class="modal-body">

<div id="post-usernamee"  class="post-con-itm" style="width:fit-content;">Control-Id<br/>
  
    <input type="text" id="mcontentHoldercid" placeholder="" />
</div>

<div id="post-mail"  class="post-con-itm" style="width:fit-content;">E-mail<br/>
  
    <input type="text" id="mcontentHoldermai" placeholder=""/>
</div>
<div id="post-password"  class="post-con-itm" style="width:fit-content;" >Roll-no<br/> 
    <input type="text" id="mcontentHolderrno" placeholder=""/>
</div>
<button id="addfs" class="inpu submi" ><span class="material-symbols-outlined" style="font-size: 1.2em;">
    add
    </span>&nbsp;Add</button>
</div>
</div>
<div id="overlay"></div> 

    </form>
 </div>
</div>
</div>      
        </div>    
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
     </script>   
</body>
</html>
<script>
var dataa;
function addDetailsphpa(e){
    console.log("deatils added a");
  //  console.log(e.target.parentNode.childNodes[1].childNodes[3].value);
let use=e.target.parentNode.childNodes[1].childNodes[3].value;
let mai=e.target.parentNode.childNodes[3].childNodes[3].value;
let pas=e.target.parentNode.childNodes[5].childNodes[3].value;
// if(pas!=""){
// if(use!=""){
 var regexu=/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d_]{10,20}$/;
var regexp=/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
if(use.length!=0 && regexu.test(use))
{
if(pas.length!=0 && regexp.test(pas))
{
            if(mai!="")
            {
                $.ajax({
                    type: 'POST',
                    url: 'adad_add.php',
                    data: {use:use,e_mail:mai,pas:pas},
                    success: function(data) {
                       // console.log(data);
                        if(data=="NU")
                        {
                            console.log("Existing user");
                            alert("User created successfully");
                            window.location.reload();
                        }
                        else if(data=="EUEU"){
                           alert("Already registered");
                           }                      
                        else if(data=="MU")
                        {
                            alert("email already exist");
                        }
                        else{
                            alert("something went wrong");
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
    alert("invalid password");
}
}
else{
    alert("invalid username");
}

}

function addDetailsphph(e){
    console.log("deatils added h");
let use=e.target.parentNode.childNodes[1].childNodes[3].value;
let mai=e.target.parentNode.childNodes[3].childNodes[3].value;
let pas=e.target.parentNode.childNodes[5].childNodes[3].value;
// if(pas!=""){
// if(use!=""){
    var regexu=/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d_]{10,20}$/;
var regexp=/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
if(use.length!=0 && regexu.test(use))
{
if(pas.length!=0 && regexp.test(pas))
{
            if(mai!="")
            {
                $.ajax({
                    type: 'POST',
                    url: 'adha_add.php',
                    data: {use:use,e_mail:mai,pas:pas},
                    success: function(data) {
                        //console.log(data);
                        if(data=="NU")
                        {
                            console.log("Existing user");
                            alert("User created successfully");
                            window.location.reload();
                        }
                        else if(data=="EUEU"){
                           alert("Already registered");
                           }
                            else if(data=="MU")
                        {
                            alert("email already exist");
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
    alert("invalid password");
}
}
else{
    alert("invalid username");
}
}
function addDetailsphp(e){
//console.log(e.target.parentNode.childNodes);
let use=e.target.parentNode.childNodes[1].childNodes[3].value;
let cid=e.target.parentNode.childNodes[3].childNodes[3].value;
let rno=e.target.parentNode.childNodes[5].childNodes[3].value;
let mai=e.target.parentNode.childNodes[7].childNodes[3].value;
let pas=e.target.parentNode.childNodes[9].childNodes[3].value;
//console.log(use,cid, rno,mai,pas);
var regexu=/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d_]{10,20}$/;
var regexp=/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
if(use.length!=0 && regexu.test(use))
{
if(pas.length!=0 && regexp.test(pas))
{
// if(pas!=""){
// if(use!=""){
if(cid!="")
    {
        if(rno!="")
        {
            if(mai!="")
            {
                $.ajax({
                    type: 'POST',
                    url: 'adst_add.php',
                    data: {use:use,control_id:cid,roll_no:rno,e_mail:mai,pas:pas},
                    success: function(data) {
                       // console.log(data);
                        if(data=="NU")
                        {
                           // console.log("Existing user");
                            alert("User created successfully");
                            window.location.reload();
                        }
                        else if(data=="EUEU"){
                           alert("Already registered");
                           }
                       
                        else if(data=="CU")
                        {
                            alert("control id already exist");
                        }
                        else if(data=="RU")
                        {
                            alert("roll no already exist");
                        }
                        else if(data=="MU")
                        {
                            alert("email already exist");
                        }
                        else if(data=="invalidc")
                        {
                            alert("invalid Control Id");
                        }
                        else if(data=="invalidr")
                        {
                            alert("invalid roll no");
                        }
                        else if(data=="invalide")
                        {
                            alert("invalid email");
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
else{
    alert("invalid password");
}
}
else{
    alert("invalid username");
}

}


///chnages to be done
function addDetailssphp(e){
//console.log(e.target.parentNode.childNodes[1].childNodes[3].value);
//let use=e.target.parentNode.childNodes[1].childNodes[3].value;
let cid=e.target.parentNode.childNodes[1].childNodes[3].value;
let mai=e.target.parentNode.childNodes[3].childNodes[3].value;
let rno=e.target.parentNode.childNodes[5].childNodes[3].value;//here 5th is password but at client side in roll no
//let pas=e.target.parentNode.childNodes[9].childNodes[3].value;
//console.log("cid:",cid,"rno:",rno,"mai:",mai);
//if(pas!=""){
//if(use!=""){
    // if(mai!="")
    //         {
    //     console.log(cid);
    if(cid!=="")
    {
        
            if(mai!=="")
             {
                if(rno!=="")
        {
                $.ajax({
                    type: 'POST',
                    url: 'adsts_add.php',
                    data: {control_id:cid,roll_no:rno,e_mail:mai},
                    success: function(data) {
                       // console.log(data);
                        if(data=="NU")
                        {
                           // console.log("Existing user");
                            alert("User created successfully");
                            window.location.reload();
                        }
                        else if(data=="EUEU"){
                           alert("Already registered");
                           }
                       
                        else if(data=="CU")
                        {
                            alert("control id already exist");
                        }
                        else if(data=="RU")
                        {
                            alert("roll no already exist");
                        }
                        else if(data=="MU")
                        {
                            alert("email already exist");
                        }
                        else{
                            alert("something went wrong");
                            alert(data);
                        }                       
                    },
                    error: function() {
                        console.log(response.status);
                    },
                })
            }
            else{
        alert("fill roll no");
     }
      
       }
        else{
        alert("fill email");
        }
    }
    else{
        alert("fill control id");
    }
 
//     else{
//         alert("fill email");
//     }
// }
// else{
//     alert("fill username");
// }
// }
// else{
//     alert("fill password");
// }
}

function addDetailsa(){
console.log("modal for admin created");
const openModalButtons = document.querySelector('.data-open-modal4');
const closeModalButtons = document.querySelector('#data-close-modal4');
const overlay= document.getElementById('overlay');
 openModalButtons.addEventListener('click',()=>{
    const modal = document.querySelector('.modal4');
    openModall4(modal);
   });

overlay.addEventListener('click',()=>{
  const modal = document.querySelector('.modal4.active4');
    closeModall4(modal);
});
closeModalButtons.addEventListener('click',()=>{
  const modal = document.querySelector('.modal4');
  closeModall4(modal);
  });

let addf=document.querySelector('#addfa');
if(addf!=null)
addf.addEventListener('click',e=>{
    addDetailsphpa(e);
});
function openModall4(modal){
  if(modal==null) return
  modal.classList.add('active4');
  overlay.classList.add('active4');
}
function closeModall4(modal){
  if(modal==null) return
  modal.classList.remove('active4');
  overlay.classList.remove('active4');
}
}

function addDetailsh(){
console.log("modal for handler created");
const openModalButtons = document.querySelector('.data-open-modal3');
const closeModalButtons = document.querySelector('#data-close-modal3');
const overlay= document.getElementById('overlay');
 openModalButtons.addEventListener('click',()=>{
    const modal = document.querySelector('.modal3');
    openModall3(modal);
   });

overlay.addEventListener('click',()=>{
  const modal = document.querySelector('.modal3.active3');
    closeModall3(modal);
});
closeModalButtons.addEventListener('click',()=>{
  const modal = document.querySelector('.modal3');
  closeModall3(modal);
  });

let addf=document.querySelector('#addfh');
if(addf!=null)
addf.addEventListener('click',e=>{
    addDetailsphph(e);
});
function openModall3(modal){
  if(modal==null) return
  modal.classList.add('active3');
  overlay.classList.add('active3');
}
function closeModall3(modal){
  if(modal==null) return
  modal.classList.remove('active3');
  overlay.classList.remove('active3');
}
}

 function addDetails(){
const openModalButtons = document.querySelector('.data-open-modal2');
const closeModalButtons = document.querySelector('#data-close-modal2');
const overlay= document.getElementById('overlay');
 openModalButtons.addEventListener('click',()=>{
    const modal = document.querySelector('.modal2');
    openModall(modal);
   });
overlay.addEventListener('click',()=>{
  const modal = document.querySelector('.modal2.active2');
    closeModall(modal);
});
closeModalButtons.addEventListener('click',()=>{
  const modal = document.querySelector('.modal2');
  closeModall(modal);
  });
let addf=document.querySelector('#addf');
if(addf!=null){
addf.addEventListener('click',e=>{
    addDetailsphp(e);
});
}

function openModall(modal){
  if(modal==null) return
  modal.classList.add('active2');
  overlay.classList.add('active2');
}
function closeModall(modal){
  if(modal==null) return
  modal.classList.remove('active2');
  overlay.classList.remove('active2');
}
 }
 function addDetailss(){
const openModalButtons = document.querySelector('.data-open-modal5');
const closeModalButtons = document.querySelector('#data-close-modal5');
const overlay= document.getElementById('overlay');
 openModalButtons.addEventListener('click',()=>{
    const modal = document.querySelector('.modal5');
    
    openModalls(modal);
   });
// openModalButtons.addEventListener('click',()=>cosole.log("clcikedd"));
overlay.addEventListener('click',()=>{
  const modal = document.querySelector('.modal5.active5');
    closeModalls(modal);
});
closeModalButtons.addEventListener('click',()=>{
  const modal = document.querySelector('.modal5');
  closeModalls(modal);
  });
let addf=document.querySelector('#addfs');
if(addf!=null){
addf.addEventListener('click',e=>{
    addDetailssphp(e);
});
}

function openModalls(modal){
  if(modal==null) return
  modal.classList.add('active5');
  overlay.classList.add('active5');
  
}
function closeModalls(modal){
  if(modal==null) return
  modal.classList.remove('active5');
  overlay.classList.remove('active5');
}
 }
 function changedDetailsa(){
    console.log("changeda");
    let  mail = document.querySelector('#aemcontentHoldermai');
   let  user = document.querySelector('#aemcontentHolderusee');
 //  let  password = document.querySelector('#aemcontentHolderpas');
    var regexu=/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d_]{10,20}$/;
var regexp=/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
if(user.innerText.length!=0 && regexu.test(user.innerText))
{
// if(password.value.length!=0 && regexp.test(password.value))
// {
     $.ajax({
   
                              type: 'POST',
                              url: 'adad_change.php',
                              data: {use:user.innerText,mai:mail.value},
                              success:function(data){
                              // console.log(data);
                               if(data=="P"){
                                   alert("Details have been updated. Please close and refresh once.");
                                  window.location.reload();
                               }
                               else if(data=="NF"){
                                   alert("Could not update details");
                               }
                               else{
                                   alert("Some issue");
                               }
                              }
                              })
//                                }
// else{
//     alert("invalid password");
// }
}
else{
    alert("invalid username");
}
}

function changedDetailsh(){
    console.log("changedh");
    let  mail = document.querySelector('#hemcontentHoldermai');
   let  user = document.querySelector('#hemcontentHolderusee');
 //  let  password = document.querySelector('#hemcontentHolderpas'); 
    var regexu=/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d_]{10,20}$/;
var regexp=/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
if(user.innerText.length!=0 && regexu.test(user.innerText))
{
// if(password.value.length!=0 && regexp.test(password.value))
// {
     $.ajax({
   
                              type: 'POST',
                              url: 'adha_change.php',
                              data: {use:user.innerText,mai:mail.value},
                              success:function(data){
                              // console.log(data);
                               if(data=="P"){
                                   alert("Details have been updated. Please close and refresh once.");
                                  window.location.reload();
                               }
                              
                               else if(data=="NF"){
                                   alert("Could not update details");
                               }
                               else{
                                   alert("Some issue");
                               }
                              }
                              })
//                               }
// else{
//     alert("invalid password");
// }
}
else{
    alert("invalid username");
}

}
function changedDetails(){
    let  cid = document.querySelector('#semcontentHoldercid');
   let  maill = document.querySelector('#semcontentHoldermai');
   let  rno = document.querySelector('#semcontentHolderrno');
   let  user = document.querySelector('#semcontentHolderusee');
  // let  password = document.querySelector('#semcontentHolderpas');

   var regexu=/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d_]{10,20}$/;
//var regexp=/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
if(user.innerText.length!=0 && regexu.test(user.innerText))
{
// if(password.value.length!=0 && regexp.test(password.value))
// {
// if(pas!=""){
// if(use!=""){

        if(rno.value!="")
        {
            if(maill.value!="")
            {
               $.ajax({
                              type: 'POST',
                              url: 'adst_change.php',
                              data: {cid:cid.innerText,use:user.innerText,pas:password.value,mai:maill.value,rno:rno.value},
                              success:function(data){
                               console.log(data);
                               if(data=="P"){                             
                                   alert("Details have been updated. Please close and refresh once.");
                                  window.location.reload();
                               }
                        //         else if(data=="EUEU"){
                        //    alert("Already registered");
                        //    }
                       
                       
                        // else if(data=="RU")
                        // {
                        //     alert("roll no already exist");
                        // }
                        // else if(data=="MU")
                        // {
                        //     alert("email already exist");
                        // }
                       
                        else if(data=="invalidr")
                        {
                            alert("invalid roll no");
                        }
                        else if(data=="invalide")
                        {
                            alert("invalid email");
                        }
                        else{
                            alert("something went wrong");
                            //alert(data);
                        }                
                              
            }})
            }
            else{
        alert("fill email");
    }
        }
        else{
        alert("fill roll no");
    }
    

//  }
// else{
//     alert("invalid password");
// }
}
else{
    alert("invalid username");
}


    //  $.ajax({
    //                           type: 'POST',
    //                           url: 'adst_change.php',
    //                           data: {use:user.innerText,pas:password.value,mai:mail.value,rno:rno.value},
    //                           success:function(data){
    //                          //  console.log(data);
    //                            if(data=="P"){                             
    //                                alert("Details have been updated. Please close and refresh once.");
    //                               window.location.reload();
    //                            }
    //                            else if(data=="NF"){
    //                                alert("Could not update details");
    //                            }
    //                            else{
    //                                alert("Some issue");
    //                            }
    //                           }
    //                           }) 
   }

   function changedDetailss(){
   let  mail = document.querySelector('#ssemcontentHoldermai');
   let  rno = document.querySelector('#ssemcontentHolderrno');
   let  cid = document.querySelector('#ssemcontentHoldercid');
   let regno = document.querySelector('#ssemcontentHolderreg');
     $.ajax({
                              type: 'POST',
                              url: 'adsts_change.php',
                              data: {cid:cid.innerText,reg:regno.value,mai:mail.value,rno:rno.value},
                              success:function(data){
                              // console.log(data);
                               if(data=="P"){                             
                                   alert("Details have been updated. Please close and refresh once.");
                                  window.location.reload();
                               }
                               else if(data=="NF"){
                                   alert("Could not update details");
                               }
                               else{
                                   alert("Some issue");
                               }
                              }
                              }) 
   }

   function deleteDetailsa(e){
    console.log('deleteDetailsa');
    let user=e.target.parentNode.parentNode.parentNode.childNodes[0].innerText;
if(confirm('Are you sure you want to delete')){
    $.ajax({
   type: 'POST',
   url: 'adad_delete.php',
   data: {use:user},
   success:function(data){
   // console.log(data);
    if(data=="P"){     
        alert("Details have been deleted. Please close and refresh once if changes not visisble.");
       window.location.reload();
        
    }
    else if(data=="NF"){
        alert("Could not delete details");
    }
    else{
        alert("Some issue");
    }
   }
   })
   }
   }
   function deleteDetailsh(e){
    console.log('deleteDetailsh');
    let user=e.target.parentNode.parentNode.parentNode.childNodes[0].innerText;
if(confirm('Are you sure you want to delete')){
    $.ajax({
   type: 'POST',
   url: 'adha_delete.php',
   data: {use:user},
   success:function(data){
    //console.log(data);
    if(data=="P"){       
        alert("Details have been deleted. Please close and refresh once if changes not visisble.");
       window.location.reload();
    }
    else if(data=="NF"){
        alert("Could not delete details");
    }
    else{
        alert("Some issue");
    }
   }
   })
   }
   }
   function deleteDetails(e){
    console.log('deleteDetails');
let user=e.target.parentNode.parentNode.parentNode.childNodes[0].innerText;
if(confirm('Are you sure you want to delete')){
    $.ajax({
   type: 'POST',
   url: 'adst_delete.php',
   data: {use:user},
   success:function(data){
    //console.log(data);
    if(data=="P"){
        alert("Details have been deleted. Please close and refresh once if changes not visisble.");
       window.location.reload();
    }
    else if(data=="NF"){
        alert("Could not delete details");
    }
    else{
        alert("Some issue");
    }
   }
   })
   }
}
function deleteDetailss(e){
   
let cid=e.target.parentNode.parentNode.parentNode.childNodes[0].innerText;
//console.log('deleteDetails',cid);
if(confirm('Are you sure you want to delete')){
    $.ajax({
   type: 'POST',
   url: 'adsts_delete.php',
   data: {cid:cid},
   success:function(data){
    //console.log(data);
    if(data=="P"){
        alert("Details have been deleted. Please close and refresh once if changes not visisble.");
       window.location.reload();
    }
    else if(data=="NF"){
        alert("Could not delete details");
    }
    else{
        alert("Some issue");
    }
   }
   })
   }
}
function studentinfo()
{
   // console.log("studentinfo");
let st=document.querySelector("#studcont");
let ha=document.querySelector("#handcont");
let ad=document.querySelector("#admicont");
let st2=document.querySelector("#studcont2");
st2.style.display="none";
st.style.display="flex";
ha.style.display="none";
ad.style.display="none";
let trr=document.querySelectorAll('.tr');
if(trr.length!=0){
    let tdcon=document.querySelector('.tdcont');
    tdcon.remove();
}
 let tempp="";let n=[];  var sess_use = "<?php echo $_SESSION['USERNAME']?>";
$.ajax({
type: 'POST',
url: 'adst_fetch.php',
data: {use:sess_use},
success:function(data){
if(data=="zero"){
    alert('No student data available');
    let y = document.getElementById("no-post");
    y.style.display = "block";

}
 else if(data=="NF"){
     alert("some issue");
 }
 else{
     console.log("data alert");
dataa=JSON.parse(data);
//console.log(dataa);
let ppid=0;
let tdcontt=document.createElement("div");
tdcontt.classList.add('tdcont');
    for(let ii=0;ii<dataa.length;ii++) {
        ppid=ppid+1;
        let s='#posttt'+ppid.toString();
        let tr=document.createElement("div");
    tr.setAttribute("class","tr");
    tr.setAttribute('id',s);
    let th=document.createElement("div");
    th.setAttribute("id","tds");
   st.appendChild(tdcontt);
    tr.appendChild(th);
    th.innerText=dataa[ii].stu_username;
     th=document.createElement("div");
    th.setAttribute("id","tds");
    tr.appendChild(th);
    th.innerText=dataa[ii].stu_controlid;
    th.style.display='none';
     th=document.createElement("div");
    th.setAttribute("id","tds");
    tr.appendChild(th);
    th.innerText=dataa[ii].stu_rollno;
    th=document.createElement("div");
    th.setAttribute("id","tds");
    tr.appendChild(th);
    th.innerText=dataa[ii].stu_email;
    //  th=document.createElement("div");
    // th.setAttribute("id","tds");
    // tr.appendChild(th);
    // th.innerText=dataa[ii].stu_password;
    th=document.createElement("div");
    th.setAttribute("id","tds");
    tdcontt.appendChild(tr);
    tr.appendChild(th);
   let ebtn=document.createElement("button");
   let edit=document.createElement("span");
    edit.setAttribute("class","material-symbols-outlined");
    ebtn.setAttribute("class","data-modal-targets");
    ebtn.addEventListener("click",e=>{
        editProfile(e);}
    );
    ebtn.setAttribute("id","iconss");
    edit.setAttribute("id","iconsss");
    edit.innerHTML="edit";
    ebtn.appendChild(edit);
    th.appendChild(ebtn);
    ebtn.style.marginLeft="1px";
    ebtn.style.marginRight="8px";
    let dbtn=document.createElement("button");
    let deletee=document.createElement("span");
    deletee.setAttribute("class","material-symbols-outlined");
    dbtn.addEventListener("click",e=>{
        deleteDetails(e);}
    );
    deletee.setAttribute("id","iconsss");
    dbtn.setAttribute("id","iconss");
    deletee.innerHTML="delete";
    dbtn.appendChild(deletee);
    th.appendChild(dbtn);
    }
 }
}
})
 }


 //changes to be made here
 function studentinfo2()
{
   // console.log("studentinfo");
let st=document.querySelector("#studcont");
let ha=document.querySelector("#handcont");
let ad=document.querySelector("#admicont");
let st2=document.querySelector("#studcont2");
st2.style.display="flex";
st.style.display="none";
ha.style.display="none";
ad.style.display="none";
let trr=document.querySelectorAll('.tr');
if(trr.length!=0){
    let tdcon=document.querySelector('.tdcont');
    tdcon.remove();
}
 let tempp="";let n=[];  var sess_use = "<?php echo $_SESSION['USERNAME']?>";
$.ajax({
type: 'POST',
url: 'adsts_fetch.php',
data: {use:sess_use},
success:function(data){
if(data=="zero"){
    alert('No student data available');
    let y = document.getElementById("no-post");
    y.style.display = "block";

}
 else if(data=="NF"){
     alert("some issue");
 }
 else{
     console.log("data alert");
dataa=JSON.parse(data);
//console.log(dataa);
let ppid=0;
let tdcontt=document.createElement("div");
tdcontt.classList.add('tdcont');
    for(let ii=0;ii<dataa.length;ii++) {
        ppid=ppid+1;
        let s='#posttt'+ppid.toString();
        let tr=document.createElement("div");
    tr.setAttribute("class","tr");
    tr.setAttribute('id',s);
    let th=document.createElement("div");
    th.setAttribute("id","tdss");
   st2.appendChild(tdcontt);
    tr.appendChild(th);
    th.innerText=dataa[ii].control_id;
     th=document.createElement("div");
    th.setAttribute("id","tdss");
    tr.appendChild(th);
    th.innerText=dataa[ii].roll_no;
    // th.style.display='none';
     th=document.createElement("div");
    th.setAttribute("id","tdss");
    tr.appendChild(th);
    th.innerText=dataa[ii].email;
    th=document.createElement("div");
    th.setAttribute("id","tdss");
    tr.appendChild(th);
    th.innerText=dataa[ii].registered_no;
    //  th=document.createElement("div");
    // th.setAttribute("id","tds");
    // tr.appendChild(th);
    // th.innerText=dataa[ii].stu_password;
    th=document.createElement("div");
    th.setAttribute("id","tdss");
    tdcontt.appendChild(tr);
    tr.appendChild(th);
   let ebtn=document.createElement("button");
   let edit=document.createElement("span");
    edit.setAttribute("class","material-symbols-outlined");
    ebtn.setAttribute("class","data-modal-targetss");
    ebtn.addEventListener("click",e=>{
        editProfiles(e);}
    );
    ebtn.setAttribute("id","iconss");
    edit.setAttribute("id","iconsss");
    edit.innerHTML="edit";
    ebtn.appendChild(edit);
    th.appendChild(ebtn);
    ebtn.style.marginLeft="1px";
    ebtn.style.marginRight="8px";
    let dbtn=document.createElement("button");
    let deletee=document.createElement("span");
    deletee.setAttribute("class","material-symbols-outlined");
    dbtn.addEventListener("click",e=>{
        deleteDetailss(e);}
    );
    deletee.setAttribute("id","iconsss");
    dbtn.setAttribute("id","iconss");
    deletee.innerHTML="delete";
    dbtn.appendChild(deletee);
    th.appendChild(dbtn);
    }
 }
}
})
 }

function handlerinfo()
{
    console.log("handlerinfo");
    let st=document.querySelector("#studcont");
let ha=document.querySelector("#handcont");
let ad=document.querySelector("#admicont");
let st2=document.querySelector("#studcont2");
st2.style.display="none";
st.style.display="none";
ha.style.display="flex";
ad.style.display="none";
let trr=document.querySelectorAll('.trh');
if(trr.length!=0){
    let tdcon=document.querySelector('.tdconth');
    tdcon.remove();
}
 let tempp="";let n=[];  var sess_use = "<?php echo $_SESSION['USERNAME']?>";
$.ajax({
type: 'POST',
url: 'adha_fetch.php',
data: {use:sess_use},
success:function(data){
if(data=="zero"){
    alert('No handler data available');
    let y = document.getElementById("no-post");
    y.style.display = "block";
}
 else if(data=="NF"){
     alert("some issue");
 }
 else{
dataa=JSON.parse(data);
//console.log(dataa);
let ppid=0;
let tdcontt=document.createElement("div");
tdcontt.classList.add('tdconth');
    for(let ii=0;ii<dataa.length;ii++) {
        ppid=ppid+1;
        let s='#posttt'+ppid.toString();
        let tr=document.createElement("div");
    tr.setAttribute("class","trh");
    tr.setAttribute('id',s);
    let th=document.createElement("div");
    th.setAttribute("id","tdh");
   ha.appendChild(tdcontt);
    tr.appendChild(th);
    th.innerText=dataa[ii].hand_username;
    th=document.createElement("div");
    th.setAttribute("id","tdh");
    tr.appendChild(th);
    th.innerText=dataa[ii].hand_email;
    //  th=document.createElement("div");
    // th.setAttribute("id","tdh");
    // tr.appendChild(th);
    // th.innerText=dataa[ii].hand_password;
    th=document.createElement("div");
    th.setAttribute("id","tdh");
    tdcontt.appendChild(tr);
    tr.appendChild(th);
   let ebtn=document.createElement("button");
   let edit=document.createElement("span");
    edit.setAttribute("class","material-symbols-outlined");
    ebtn.setAttribute("class","data-open-targeth");
    ebtn.addEventListener("click",e=>{
        editProfileh(e);}
    );
    ebtn.setAttribute("id","iconss");
    edit.setAttribute("id","iconsss");
    edit.innerHTML="edit";
    ebtn.appendChild(edit);
    th.appendChild(ebtn);
    ebtn.style.marginLeft="1px";
    ebtn.style.marginRight="8px";
    let dbtn=document.createElement("button");
    let deletee=document.createElement("span");
    deletee.setAttribute("class","material-symbols-outlined");
    dbtn.addEventListener("click",e=>{
        deleteDetailsh(e);}
    );
    deletee.setAttribute("id","iconsss");
    dbtn.setAttribute("id","iconss");
    deletee.innerHTML="delete";
    dbtn.appendChild(deletee);
    th.appendChild(dbtn);
    }
 }
}
})
}
function admininfo()
{
    //console.log("admininfo");
    let st=document.querySelector("#studcont");
let ha=document.querySelector("#handcont");
let ad=document.querySelector("#admicont");
let st2=document.querySelector("#studcont2");
st2.style.display="none";
st.style.display="none";
ha.style.display="none";
ad.style.display="flex";
let trr=document.querySelectorAll('.tra');
if(trr.length!=0){
    let tdcon=document.querySelector('.tdconta');
    tdcon.remove();
}
 let tempp="";let n=[];  var sess_use = "<?php echo $_SESSION['USERNAME']?>";
$.ajax({
type: 'POST',
url: 'adad_fetch.php',
data: {use:sess_use},
success:function(data){
if(data=="zero"){
    alert('No admin data available');
    let y = document.getElementById("no-post");
    y.style.display = "block";
}
 else if(data=="NF"){
     alert("some issue");
 }
 else{
     console.log("data alert");
dataa=JSON.parse(data);
//console.log(dataa);
let ppid=0;
let tdcontt=document.createElement("div");
tdcontt.classList.add('tdconta');
    for(let ii=0;ii<dataa.length;ii++) {
        ppid=ppid+1;
        let s='#posttt'+ppid.toString();
        let tr=document.createElement("div");
    tr.setAttribute("class","tra");
    tr.setAttribute('id',s);
    let th=document.createElement("div");
    th.setAttribute("id","tda");
   ad.appendChild(tdcontt);
    tr.appendChild(th);
    th.innerText=dataa[ii].admin_username;
    th=document.createElement("div");
    th.setAttribute("id","tda");
    tr.appendChild(th);
    th.innerText=dataa[ii].admin_email;
    //  th=document.createElement("div");
    // th.setAttribute("id","tda");
    // tr.appendChild(th);
    // th.innerText=dataa[ii].admin_password;
    th=document.createElement("div");
    th.setAttribute("id","tda");
    tdcontt.appendChild(tr);
    tr.appendChild(th);
   let ebtn=document.createElement("button");
   let edit=document.createElement("span");
    edit.setAttribute("class","material-symbols-outlined");
    ebtn.setAttribute("class","data-open-targeta");
    ebtn.addEventListener("click",e=>{
        editProfilea(e);}
    );
    ebtn.setAttribute("id","iconss");
    edit.setAttribute("id","iconsss");
    edit.innerHTML="edit";
    ebtn.appendChild(edit);
    th.appendChild(ebtn);
    ebtn.style.marginLeft="1px";
    ebtn.style.marginRight="8px";
    let dbtn=document.createElement("button");
    let deletee=document.createElement("span");
    deletee.setAttribute("class","material-symbols-outlined");
    dbtn.addEventListener("click",e=>{
        deleteDetailsa(e);}
    );
    deletee.setAttribute("id","iconsss");
    dbtn.setAttribute("id","iconss");
    deletee.innerHTML="delete";
    dbtn.appendChild(deletee);
    th.appendChild(dbtn);
    }
 }
}
})
}

function editProfilea(e){
    console.log("editprofilea");
   // console.log(e.target.parentNode.parentNode.parentNode.childNodes[0].innerText);
    const openModalButtons = document.querySelectorAll('.data-open-targeta');
const closeModalButtons = document.querySelectorAll('#data-close-buttona');
const overlay= document.getElementById('overlay');
openModalButtons.forEach(button => 
  button.addEventListener('click',()=>{
    const modala = document.querySelectorAll('.modala');
    openModala(modala);
}))
overlay.addEventListener('click',()=>{
  const modalsa = document.querySelectorAll('.modala.activea');
  modals.forEach(modala => {
    closeModala(modalsa)
})
})
closeModalButtons.forEach(button => 
  button.addEventListener('click',()=>{
  const modala = button.closest('.modala');
  closeModala(modala)
  }))
function openModala(){
  if(modala==null) return

  modala.classList.add('activea');
  overlay.classList.add('activea');
}
function closeModala(){
  if(modala==null) return
  modala.classList.remove('activea');
  overlay.classList.remove('activea');
}
//putting details in modal
let  username = document.querySelector('#aemcontentHolderusee');
username.innerText = e.target.parentNode.parentNode.parentNode.childNodes[0].innerText ;
let email = document.querySelector('#aemcontentHoldermai');
email.value = e.target.parentNode.parentNode.parentNode.childNodes[1].innerText;
//  let password = document.querySelector('#aemcontentHolderpas');
//  password.value =e.target.parentNode.parentNode.parentNode.childNodes[2].innerText;
}

function editProfileh(e){
    //console.log("editprofileh");
    //console.log(e.target.parentNode.parentNode.parentNode.childNodes[0].innerText);
    const openModalButtons = document.querySelectorAll('.data-open-targeth');
const closeModalButtons = document.querySelectorAll('#data-close-buttonh');
const overlay= document.getElementById('overlay');
openModalButtons.forEach(button => 
  button.addEventListener('click',()=>{
    const modalh = document.querySelectorAll('.modalh');
    openModalh(modalh);
}))
overlay.addEventListener('click',()=>{
  const modalsh = document.querySelectorAll('.modalh.activeh');
  modals.forEach(modalh => {
    closeModalh(modalsh)
})
})
closeModalButtons.forEach(button => 
  button.addEventListener('click',()=>{
  const modalh = button.closest('.modalh');
  closeModalh(modalh)
  }))
function openModalh(){
  if(modalh==null) return
  modalh.classList.add('activeh');
  overlay.classList.add('activeh');
}
function closeModalh(){
  if(modalh==null) return
  modalh.classList.remove('activeh');
  overlay.classList.remove('activeh');
}
//putting details in modal
let  username = document.querySelector('#hemcontentHolderusee');
username.innerText = e.target.parentNode.parentNode.parentNode.childNodes[0].innerText ;
let email = document.querySelector('#hemcontentHoldermai');
email.value = e.target.parentNode.parentNode.parentNode.childNodes[1].innerText;
//  let password = document.querySelector('#hemcontentHolderpas');
//  password.value =e.target.parentNode.parentNode.parentNode.childNodes[2].innerText;
}
function editProfile(e){
  //console.log(e.target.parentNode.parentNode.parentNode.childNodes[0].innerText);
const openModalButtons = document.querySelectorAll('.data-modal-targets');
const closeModalButtons = document.querySelectorAll('#data-close-buttons');
const overlay= document.getElementById('overlay');
openModalButtons.forEach(button => 
  button.addEventListener('click',()=>{
    const modal = document.querySelectorAll('.modal');
    openModal(modal);
  }))
overlay.addEventListener('click',()=>{
  const modals = document.querySelectorAll('.modal.active');
  modals.forEach(modal => {
    closeModal(modal)
})
})
closeModalButtons.forEach(button => 
  button.addEventListener('click',()=>{
  const modal = button.closest('.modal');
  closeModal(modal)
  }))
function openModal(){
  if(modal==null) return
  modal.classList.add('active');
  overlay.classList.add('active');
}
function closeModal(){
  if(modal==null) return
  modal.classList.remove('active');
  overlay.classList.remove('active');
}

//putting details in modal
let  username = document.querySelector('#semcontentHolderusee');
username.innerText = e.target.parentNode.parentNode.parentNode.childNodes[0].innerText;
let  controlid = document.querySelector('#semcontentHoldercid');
controlid.innerText = e.target.parentNode.parentNode.parentNode.childNodes[1].innerText;
let  rno = document.querySelector('#semcontentHolderrno');
rno.value = e.target.parentNode.parentNode.parentNode.childNodes[2].innerText;
//  phoneno = document.querySelector('#mcontentHolderpno');
// phoneno.innerText = stu_user.phone_no;
let email = document.querySelector('#semcontentHoldermai');
email.value = e.target.parentNode.parentNode.parentNode.childNodes[3].innerText;
//  let password = document.querySelector('#semcontentHolderpas');
//  password.value =e.target.parentNode.parentNode.parentNode.childNodes[4].innerText;
 }
 function editProfiles(e){
    //let modal;
  //console.log(e.target.parentNode.parentNode.parentNode.childNodes[0].innerText,"reached");
const openModalButtonss = document.querySelectorAll('.data-modal-targetss');
//console.log(openModalButtonss);
const closeModalButtonss = document.querySelectorAll('#data-close-buttonss');
const overlay= document.getElementById('overlay');
openModalButtonss.forEach(button => 
  button.addEventListener('click',()=>{
    
    const modals = document.querySelectorAll('.modals');
   
    openModalss(modals);
  }))
//openModalButtonss.addEventListener('click',()=>console.log("beforeclose"));
overlay.addEventListener('click',()=>{
  const modalss = document.querySelectorAll('.modals.actives');
  modalss.forEach(modals => {
    closeModalss(modals)
})
})
closeModalButtonss.forEach(button => 
  button.addEventListener('click',()=>{
  const modal = button.closest('.modals');
  closeModalss(modals)
  }))
function openModalss(){
   
  if(modals==null) return
  modals.classList.add('actives');
  //console.log("open");
  overlay.classList.add('actives');
}
function closeModalss(){
  if(modals==null) return
  modals.classList.remove('actives');
  //console.log("close");
  overlay.classList.remove('actives');
}

//putting details in modal
// let  username = document.querySelector('#semcontentHolderusee');
// username.innerText = e.target.parentNode.parentNode.parentNode.childNodes[0].innerText;
let  controlid = document.querySelector('#ssemcontentHoldercid');
controlid.innerText = e.target.parentNode.parentNode.parentNode.childNodes[0].innerText;
let  rno = document.querySelector('#ssemcontentHolderrno');
rno.value = e.target.parentNode.parentNode.parentNode.childNodes[1].innerText;
//  phoneno = document.querySelector('#mcontentHolderpno');
// phoneno.innerText = stu_user.phone_no;
let email = document.querySelector('#ssemcontentHoldermai');
email.value = e.target.parentNode.parentNode.parentNode.childNodes[2].innerText;
 let password = document.querySelector('#ssemcontentHolderreg');
 password.value =e.target.parentNode.parentNode.parentNode.childNodes[3].innerText;
 }
</script>