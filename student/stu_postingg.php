<?php
session_start();
$con = mysqli_connect('sql112.infinityfree.com','if0_34419009','dCXhuPfmbSMj','if0_34419009_spss_db');
$titt=strtolower($_POST['tit']);
$dess=strtolower($_POST['des']);
$tit = mysqli_real_escape_string($con, $titt);
$des = mysqli_real_escape_string($con, $dess);
$use=$_POST['use'];
$ptit='%'.$tit.'%';
$votes=0;
// Process input through basic NLP
$intent1 = processNLP($tit);
$intent2 = processNLP($des);

$status="to be verified";
//$pd=CURRENT_TIMESTAMP;
$pdd=null;
$vd=null;
$res=mysqli_query($con,"SELECT * FROM post WHERE post_username='$use' and post_status!='removed'");
$count=mysqli_num_rows($res);
$res2=mysqli_query($con,"SELECT * FROM post WHERE post_status='verified' and post_title LIKE '$ptit'");
$count2=mysqli_num_rows($res2);
if($intent1 && $intent2)
{
if($count2>0)
{
 echo("Alr");
}
else if($count>=0){
    if($count<3)
 {
   $sql=mysqli_query($con,"SELECT public_username FROM stud_account WHERE stu_username='$use'");
$puse= implode("",(mysqli_fetch_row($sql)));
   // mysqli_query($con,"INSERT INTO `post`(`post_votes`, `post_status`, `post_title`, `post_desc`, `post_date`, `posted_date`, `verified_date`, `post_username`,`post_pusername`) VALUES ('$votes','$status','$tit','$des',CURRENT_TIMESTAMP,'$pdd','$vd','$use','$puse')");
   mysqli_query($con,"INSERT INTO `post`(`post_votes`, `post_status`, `post_title`, `post_desc`, `post_date`, `verified_date`, `post_username`,`post_pusername`) VALUES ('$votes','$status','$tit','$des',CURRENT_TIMESTAMP,'$vd','$use','$puse')");
    echo("A");
 }
 else{
    echo("NAP");
 }
}
else{
    echo "NA";
}
}
else{
    echo "explicit";
}

function processNLP($input) {
    // Basic keyword-based intent detection
   $keywords = array(
    'abuse', 'attack', 'hate', 'harassment', 'threat', 'violence',
    'spam', 'scam', 'fraud', 'phishing', 'malware', 'virus','shit','*',
    'illegal', 'contraband', 'explicit', 'porn', 'nudity', 'sexual',
    'racist', 'sexist', 'discrimination', 'bullying', 'intimidation',
    'drugs', 'weapons', 'terrorism', 'extremism', 'radicalization',
    'idiot', 'moron', 'stupid', 'fool', 'dummy', 'dumb', 'ignorant',
    'hate', 'hateful', 'bigotry', 'prejudice', 'xenophobia', 'homophobia',
    'antisemitism', 'Islamophobia', 'discriminate', 'intolerance', 'hostility',
    'violence', 'violent', 'assault', 'attack', 'aggression', 'combat',
    'warfare', 'harm', 'injury', 'kill', 'murder', 'bloodshed', 'gun', 'knife',
    'bomb', 'explosion', 'threaten', 'brutal', 'death', 'strangle', 'shoot', 'slaughter',
    'sexual', 'sex', 'pornography', 'erotic', 'adult', 'intimate', 'sensual','rape',
    'explicit', 'nude', 'seduce', 'pleasure', 'kinky', 'orgasm', 'intercourse',
    'warning', 'alert', 'caution', 'advisory', 'danger', 'attention', 'note', 'hazard', 'forewarn', 'forealert', 'alarm', 'threat', 'imminent'
);

    
    foreach ($keywords as $keyword) {
        if (stripos($input, $keyword) !== false) {
            return false;
        }
    }

    // Default to the entire input if no keyword is found
    return $input;
}
?>