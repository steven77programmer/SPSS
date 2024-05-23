<?php
$con = mysqli_connect('sql112.infinityfree.com','if0_34419009','dCXhuPfmbSMj','if0_34419009_spss_db');
$use=$_POST['use'];
$ema=$_POST['ema'];
$count=0;
$count2=0;
$count3=0;
$count4=0;
$count5=0;
$count6=0;

if($use!=''){
$res=mysqli_query($con,"SELECT * FROM stud_account WHERE stu_username='$use'");
$count=mysqli_num_rows($res);
$res2=mysqli_query($con,"SELECT * FROM handler WHERE hand_username='$use'");
$count3=mysqli_num_rows($res2);
$res3=mysqli_query($con,"SELECT * FROM admin WHERE admin_username='$use'");
$count4=mysqli_num_rows($res3);
}
else{
    $res2=mysqli_query($con,"SELECT * FROM stud_account WHERE stu_email='$ema'");
$count2=mysqli_num_rows($res2);
$res3=mysqli_query($con,"SELECT * FROM handler WHERE hand_email='$ema'");
$count5=mysqli_num_rows($res3);
$res4=mysqli_query($con,"SELECT * FROM admin WHERE admin_email='$ema'");
$count6=mysqli_num_rows($res4);

}
if($count>0){
//$statuss=implode('',mysqli_fetch_row($res4));
$res=mysqli_query($con,"SELECT stu_email FROM stud_account WHERE stu_username='$use'");
$res3=mysqli_query($con,"SELECT stu_password FROM stud_account WHERE stu_username='$use'");
$resema= implode("",(mysqli_fetch_row($res)));
$respas= implode("",(mysqli_fetch_row($res3)));
$res2=mysqli_query($con,"SELECT public_username FROM stud_account WHERE stu_username='$use'");
$puse= implode("",(mysqli_fetch_row($res2)));
$ciphering = "AES-128-CTR";
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
// Non-NULL Initialization Vector for decryption
$decryption_iv = '1234567891011121';

// Store the decryption key
$decryption_key = "$puse";

// Use openssl_decrypt() function to decrypt the data
$mypass=openssl_decrypt ($respas, $ciphering, 
		$decryption_key, $options, $decryption_iv);
$data1=array($resema,$mypass);
echo json_encode($data1);
// echo $respas;
}

else if($count3>0){
//$statuss=implode('',mysqli_fetch_row($res4));
$res=mysqli_query($con,"SELECT hand_email FROM handler WHERE hand_username='$use'");
$res3=mysqli_query($con,"SELECT hand_password FROM handler WHERE hand_username='$use'");
$resema= implode("",(mysqli_fetch_row($res)));
$respas= implode("",(mysqli_fetch_row($res3)));
$puse=  "spss_adminhandler";
$ciphering = "AES-128-CTR";
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
// Non-NULL Initialization Vector for decryption
$decryption_iv = '1234567891011121';

// Store the decryption key
$decryption_key = "$puse";

// Use openssl_decrypt() function to decrypt the data
$mypass=openssl_decrypt ($respas, $ciphering, 
		$decryption_key, $options, $decryption_iv);
$data1=array($resema,$mypass);
echo json_encode($data1);
// echo $respas;
}

else if($count4>0){
//$statuss=implode('',mysqli_fetch_row($res4));
$res=mysqli_query($con,"SELECT admin_email FROM admin WHERE admin_username='$use'");
$res3=mysqli_query($con,"SELECT admin_password FROM admin WHERE admin_username='$use'");
$resema= implode("",(mysqli_fetch_row($res)));
$respas= implode("",(mysqli_fetch_row($res3)));
$puse=  "spss_adminhandler";
$ciphering = "AES-128-CTR";
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
// Non-NULL Initialization Vector for decryption
$decryption_iv = '1234567891011121';

// Store the decryption key
$decryption_key = "$puse";

// Use openssl_decrypt() function to decrypt the data
$mypass=openssl_decrypt ($respas, $ciphering, 
		$decryption_key, $options, $decryption_iv);
$data1=array($resema,$mypass);
echo json_encode($data1);
// echo $respas;
}

else if($count2>0){

$res3=mysqli_query($con,"SELECT stu_password FROM stud_account WHERE stu_email='$ema'");
$respas= implode("",(mysqli_fetch_row($res3)));
$res2=mysqli_query($con,"SELECT public_username FROM stud_account WHERE stu_email='$ema'");
$puse= implode("",(mysqli_fetch_row($res2)));
$ciphering = "AES-128-CTR";
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
// Non-NULL Initialization Vector for decryption
$decryption_iv = '1234567891011121';

// Store the decryption key
$decryption_key = "$puse";

// Use openssl_decrypt() function to decrypt the data
$mypass=openssl_decrypt ($respas, $ciphering, 
		$decryption_key, $options, $decryption_iv);
$data1=array($ema,$mypass);
echo json_encode($data1);
}
else if($count5>0){

$res3=mysqli_query($con,"SELECT hand_password FROM handler WHERE hand_email='$ema'");
$respas= implode("",(mysqli_fetch_row($res3)));
$puse= "spss_adminhandler";
$ciphering = "AES-128-CTR";
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
// Non-NULL Initialization Vector for decryption
$decryption_iv = '1234567891011121';

// Store the decryption key
$decryption_key = "$puse";

// Use openssl_decrypt() function to decrypt the data
$mypass=openssl_decrypt ($respas, $ciphering, 
		$decryption_key, $options, $decryption_iv);
$data1=array($ema,$mypass);
echo json_encode($data1);
}

else if($count6>0){

$res3=mysqli_query($con,"SELECT admin_password FROM admin WHERE admin_email='$ema'");
$respas= implode("",(mysqli_fetch_row($res3)));
$puse= "spss_adminhandler";
$ciphering = "AES-128-CTR";
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
// Non-NULL Initialization Vector for decryption
$decryption_iv = '1234567891011121';

// Store the decryption key
$decryption_key = "$puse";

// Use openssl_decrypt() function to decrypt the data
$mypass=openssl_decrypt ($respas, $ciphering, 
		$decryption_key, $options, $decryption_iv);
$data1=array($ema,$mypass);
echo json_encode($data1);
}

else{
   echo json_encode("NU");
}
?>