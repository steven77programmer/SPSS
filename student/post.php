<?php
session_start();
$con = mysqli_connect('sql112.infinityfree.com','if0_34419009','dCXhuPfmbSMj','if0_34419009_spss_db');
if(isset($_SESSION['IS_LOGIN'])){
    $use=$_SESSION['USERNAME'];
    $sql=mysqli_query($con,"SELECT * FROM stud_account WHERE stu_username='$use'");
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
    <title>Posting Page</title>
</head>
<!--<div class="prebg">
    <div class="preloader"></div>
    <div class="preloader"></div>
    <div class="preloader"></div>
    <div class="preloader"></div>
    </div>-->
     <?php include("prebg.html");?>
<body onload="makeactive(2);change_mode_in();">
<!--<div id="progress">
    <!--<span id="progress-value">&#x1F815;</span>
    <span id="progress-value" class="material-symbols-outlined">
arrow_upward
</span>
</div>-->
 <?php include("progress.html");?>

    <section class="head">
       <!-- <div class="header-bg"><h2 style="color:white;">Problem Solver</h2></div>
        <div class="header">
          <div class="logo-bg "> <div class="pattern-cross-dots-md"> <div class="logo"></div></div></div>
            <h2 class="shimmer">Problem Solver</h2></div>
        <div class="header-fake"><h2></h2></div>
    </section>-->
     <?php include("stu_head.html");?>
<section class="main">    
    <div class="container">
       <!-- <div class="container-item side-bar sb-one"><h3>Menu</h3>
        <div class="menu ani"><a href="index.php"     class="click-here   " id="m1" >Home</a></div>
        <div class="menu ani"><a href="post.php"      class="click-here   " id="m2" >Post</a></div>
        <div class="menu ani"><a href="profile.php"   class="click-here   " id="m4" >Profile</a></div>
        <div class="menu ani"><a href="contactus.php" class="click-here   " id="m5" >Contact Us</a></div>
        <div class="menu ani"><a href="home.php"    class="click-here     " id="m6" >Logout</a></div>
        </div>-->
         <?php include("stu_menu.html");?>
    <div class="container-item" id="post-section"><h3>Post</h3>
    
        <div class="form-cont">
            <h4>Fill the below Fields appropriately</h4>
            <div id="helppara" style="font-size: 1.2em;color:whitesmoke;margin-bottom:1%;">In this page you can post your problems. A student cannot post more than 3 post a week unless it is deleted. A validity of a post is 3 days after which it gets removed.</div>
            <form action="<?php $_PHP_SELF ?>" method="POST" name="form1" onsubmit="return false;">
                <div class="container">
                            <input id="titp" class="posting-input " required placeholder="Title" />  
                              <textarea id="desp" class="posting-input " style="height:53px;" required placeholder="Description" ></textarea> 
                          <div class="container-item  post-con-itm">                       
<button type="submit"  id="send" class="inpu submi" onclick="PostValidate()">Send</button>
</div>
 </div>
</div>
</form>
</div>     
        </div>
    </div>
</section>
<!--
<section class="foot">
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
     </script>
</body>
</html>
<script>
    var sess_use = "<?php echo $_SESSION['USERNAME']?>";
    function PostValidate(){
        console.log("Validation reached");
  let ptitle= document.getElementById("titp").value;
  let pdes= document.getElementById("desp").value;
    if(ptitle==""){
      alert("Please enter the title");
    }
   if(pdes==""){
      alert("Please enter the description");
    }
    else{
        let intent1 = processNLP(ptitle);
 let intent2 = processNLP(pdes);
if(intent1 && intent2)
{
  if(confirm("Are you sure you want to post"))
  {
    $.ajax({
                    type: 'POST',
                    url: 'stu_postingg.php',
                    data: {tit:ptitle,des:pdes,use:sess_use},
                    success: function(data) {
                       // console.log(data);
                        if(data=="A")
                        {
                            alert("This will be posted after it gets verified");
                            document.getElementById("titp").value="";
                            document.getElementById("desp").value="";
                        }
                        else if(data=="Alr"){
                            alert("Similar post available already.")
                        }
                        else if(data=="NAP")
                        {
                            alert("Too many posts. Only three most allowed per week to a user.");
                        }
                        else if(data=="explicit"){
                            alert("You are posting post against our guidelines. Please use right language and valid content");
                        }
                        else{
                            alert("Some issue");
                        }
                    }
                });
  }
    }
     else{
                            alert("You are posting post against our guidelines. Please use right language and valid content");
                        }
    }
  }
  function processNLP(input) {
    // Basic keyword-based intent detection
   let keywords = ['abuse', 'attack', 'hate', 'harassment', 'threat', 'violence',
    'spam', 'scam', 'fraud', 'phishing', 'malware', 'virus','shit','*',
    'illegal', 'contraband', 'explicit', 'porn', 'nudity', 'sexual',
    'racist', 'sexist', 'discrimination', 'bullying', 'intimidation',
    'drugs', 'weapons', 'terrorism', 'extremism', 'radicalization',
    'idiot', 'moron', 'stupid', 'fool', 'dummy', 'dumb', 'ignorant','fuck','fucking',
    'hate', 'hateful', 'bigotry', 'prejudice', 'xenophobia', 'homophobia','bitch',
    'antisemitism', 'Islamophobia', 'discriminate', 'intolerance', 'hostility',
    'violence', 'violent', 'assault', 'attack', 'aggression', 'combat',
    'warfare', 'harm', 'injury', 'kill', 'murder', 'bloodshed', 'gun', 'knife',
    'bomb', 'explosion', 'threaten', 'brutal', 'death', 'strangle', 'shoot', 'slaughter',
    'sexual', 'sex', 'pornography', 'erotic', 'adult', 'intimate', 'sensual','rape',
    'explicit', 'nude', 'seduce', 'pleasure', 'kinky', 'orgasm', 'intercourse',
    'warning', 'alert', 'caution', 'advisory', 'danger', 'attention', 'note', 'hazard', 'forewarn', 'forealert', 'alarm', 'threat', 'imminent'];
  


    
    for (let keyword of keywords) {
    if (input.toLowerCase().includes(keyword.toLowerCase())) { // Convert keyword to lowercase for case-insensitive comparison
        // Handle the presence of an abusive word (e.g., reject the input)
        console.log('Content contains abusive language. Please revise your input.');
        return false;
    }
}
     return true;
        }
</script>