
<!--https://formsubmit.co/el/xisizo  //form link-->
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Page</title>
</head>
<!--<div class="prebg">
<div class="preloader"></div>
<div class="preloader"></div>
<div class="preloader"></div>
<div class="preloader"></div>
</div>-->
<?php include("../prebg.html");?>
<body onload="makeactive(5);cnt();change_mode_in();" unload="refresh();">
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
   <!--     <div class="container-item side-bar sb-one"><h3>Menu</h3>
        <div class="menu ani"><a href="indexa.php"     class="click-here   " id="m1" >Home</a></div>
        <div class="menu ani"><a href="posta.php"      class="click-here   " id="m2" >Post</a></div>
        <div class="menu ani"><a href="profilea.php"   class="click-here   " id="m4" >Profile</a></div>
        <div class="menu ani"><a href="updateuser.php"   class="click-here   " id="m3" >Update Users</a></div>
        <div class="menu ani"><a href="contactusa.php" class="click-here   " id="m5" >Contact Us</a></div>
        <div class="menu ani"><a href="logout.php"    class="click-here     " id="m6" >Logout</a></div>
        </div>-->
        <?php include("adm_menu.html");?>
    <div class="container-item" id="post-section"><h3>Contact Us</h3>
        <div class="form-cont">
            <h4>Form</h4>
            <form action="https://formsubmit.co/3590064c7f2a10ec9531853bf4f76851" id="form_id" method="POST">
                <div class="container contact-con">
                    <div class="container-item contact-con-itm">
<input type="text" class="inpu" id="cnt" name="Name" placeholder="Username" required disabled/></div>
<div class="container-item contact-con-itm"><input type="email" class="inpu" name="Email" placeholder="Email" required></div>
<div class="container-item contact-con-itm">
<select name="Subject" class="inpu" required>
<option>Login Issue</option>
<option>Account Disable</option>
<option>Posting Issue</option>
<option>Vote Issue</option>
<option>Handler Issue</option>
<option>Other</option>
</select>
</div>
<div class="container-item contact-con-itm">
<textarea name="Description" class="inpu" placeholder="Description" required></textarea></div>
<div class="container-item contact-con-itm">
<button type="submit" class="inpu submi">Send</button></div>
</div>
            </form>
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
        <script>
            function cnt()
            {
              //  console.log("hello");
                var sess_use = "<?php echo $_SESSION['USERNAME']?>";
            let cnt= document.querySelector('#cnt');
            cnt.value=sess_use;
            }           
        </script>
</body>
</html>