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
<script src="../main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
</head>
<!-- <div class="prebg">
<div class="preloader"></div>
<div class="preloader"></div>
<div class="preloader"></div>
<div class="preloader"></div>
</div> -->
<?php include("../prebg.html");?>
<body onload="makeactive(4);fetchinfo();editProfile();change_mode_in();">
    <!-- <section class="head">
        <div class="header-bg"><h2 style="color:white;">Problem Solver</h2></div>
        <div class="header">
          <div class="logo-bg "> <div class="pattern-cross-dots-md"> <div class="logo"></div></div></div>
            <h2 class="shimmer">Problem Solver</h2></div>
        <div class="header-fake"><h2></h2></div>
    </section> --><?php include("hand_head.html");?>
<section class="main">    
    <div class="container">
       <!-- <div class="container-item side-bar sb-one"><h3>Menu</h3>
             <div class="menu ani"><a href="indexh.php"     class="click-here   " id="m1" >Home</a></div>
            <!-- <div class="menu ani"><a href="post.html"      class="click-here   " id="m2" >Post</a></div> 
            <div class="menu ani"><a href="posth.php"      class="click-here  " id="m3" >Post</a></div>
            <div class="menu ani"><a href="profileh.php"   class="click-here   " id="m4" >Profile</a></div>
            <div class="menu ani"><a href="contactush.php" class="click-here   " id="m5" >Contact Us</a></div>
            <div class="menu ani"><a href="logout.php"    class="click-here     " id="m6" >Logout</a></div>
        </div> --><?php include("hand_menu.html");?>
    <div class="container-item" id="post-section"><h3>Profile</h3>
    <div id="helppara" style="font-size: 1.2em;color:whitesmoke;margin-bottom:1%;">In this page you can view your details and edit your password.</div>
        <div class="form-cont">
            <h4>Personal Information</h4>
            <form action="<?php $_PHP_SELF ?>" method="POST" name="form1" onsubmit="return false;">
                <div class="container">
                   
                        <div class="post" style="background: none;width:100%;">
                        
                            <div id="post-usernamee"  class="post-con-itm">Username
                                <p id="contentHolderusee" ></p> 
                            </div>
                            <div id="post-mail"  class="post-con-itm" >E-mail
                                <p id="contentHoldermai" ></p> 
                            </div>
                            <div id="post-password"  class="post-con-itm">Password 
                                <p id="contentHolderpas" ></p><button id="eye1" style="background: none;color:aliceblue;border:none;" onclick="hidechange();"><span class="material-symbols-outlined " >
                                    visibility
                                    </span> </button>
                                    <button id="eye2" style="display:none;background: none;color:aliceblue;border:none;" onclick="hidechange();" ><span class="material-symbols-outlined eye" >
                                        visibility_off
                                        </span></button>
                            </div>                                   
<button type="submit" data-modal-target="#modal" id="update" class="inpu submi" ><span class="material-symbols-outlined" style="font-size: 1.2em;">
    edit_square
    </span>&nbsp; Edit</button>
</div>
<!-- pop-up -->
<div class="modal" id="modal">
<div class="modal-header">
    <div class="modal-title">Edit Details</div>
    <button data-close-button class="close-button" class="close-button">&times;</button>
</div>
<div class="modal-body">
<div id="post-usernamee"  class="post-con-itm">Username
    <p id="mcontentHolderusee" ></p> 
</div>
</div>
        <!-- <div id="post-phoneno"  class="post-con-itm">E-mail
                                <p id="contentHolderpno" ></p> 
                            </div> -->
                            <div id="post-mail"  class="post-con-itm" >E-mail
                                <p id="mcontentHoldermai" ></p> 
</div>
<div id="post-password"  class="post-con-itm">Password<br /> 
    <input type="text" id="mcontentHolderpas" placeholder="" />
</div>
<button type="submit"  id="updatef" class="inpu submi" onclick="changedDetails();"><span class="material-symbols-outlined" style="font-size: 1.2em;">
    edit_square
    </span>&nbsp; Edit</button>
</div>
</div>
</form>
<div id="overlay"></div>
 </div>
</div>
</div>          
        </div>       
    </div>
</section>
<!-- <section class="foot">
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
let tempp="";let n=[];  var sess_use = "<?php echo $_SESSION['USERNAME']?>";
function changedDetails(){
let  password = document.querySelector('#mcontentHolderpas');
var regex=/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
if(password.value.length!=0 && regex.test(password.value))
{
  $.ajax({
                           type: 'POST',
                           url: 'profileh_change.php',
                           data: {use:sess_use,pas:password.value},
                           success:function(data){
                            //console.log(data);
                            if(data=="P"){                       
                                alert("Details have been updated. Please close and refresh once if not refreshed.");
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
else{
    alert("Invalid password");
}
}
function fetchinfo(){
    // var sess_use = "<?php echo $_SESSION['USERNAME']?>";
      $.ajax({
                           type: 'POST',
                           url: 'profileh_fetch.php',
                           data: {use:sess_use},
                           success:function(data){
                          //  console.log(data);
                            if(data=='NF'){
                           alert("could not fetch");
                           }
                           else{
                         console.log("data fetched successfully");
                         let dataa=data+" ";let temp="";let f=0;
                     let pcid="";let prno="";let pmai="";let ppas="";
                          for(let a=0;a<dataa.length;a++){
                            ch=dataa.charAt(a);
                            if(ch==' '){
                            n[f]=temp;
                            temp="";
                            f=f+1;
                            }
                            else{
                                temp=temp+ch;
                            }
                          }
                         // console.log(n);
              let  username = document.querySelector('#contentHolderusee');
       username.innerText = sess_use;
        let mail = document.querySelector('#contentHoldermai');
       mail.innerText = n[0];
       let  musername = document.querySelector('#mcontentHolderusee');
musername.innerText = sess_use ;
//  phoneno = document.querySelector('#mcontentHolderpno');
// phoneno.innerText = stu_user.phone_no;
let memail = document.querySelector('#mcontentHoldermai');
memail.innerText = n[0];
 let mpassword = document.querySelector('#mcontentHolderpas');
 mpassword.value = n[1];
       for(let i1=0; i1<n[1].length; i1++)
       {
        tempp=tempp+"●";
       }
       let  password = document.querySelector('#contentHolderpas');
     password.innerText = tempp;
                           }
                           }
                           }) 
}

function hidechange(){
//   console.log("reachedhc");
  let password = document.querySelector('#contentHolderpas');
  let btn= document.querySelector('#eye1');
  let btn2 = document.querySelector('#eye2');
  if(btn.style.display != 'none'){
btn.style.display = 'none';
btn2.style.display = 'block';
password.innerText = n[1];
  }
  else 
    {
    password.innerText = tempp;
    btn.style.display = 'block';   
    btn2.style.display = 'none';
      }
}


function editProfile(){
const openModalButtons = document.querySelectorAll('[data-modal-target]');
const closeModalButtons = document.querySelectorAll('[data-close-button]');
const overlay= document.getElementById('overlay');
openModalButtons.forEach(button => 
  button.addEventListener('click',()=>{
    const modal = document.querySelector(button.dataset.modalTarget);
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
}
</script>