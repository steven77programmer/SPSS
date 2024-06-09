<?php
session_start();
$con = mysqli_connect('sql112.infinityfree.com','if0_34419009','dCXhuPfmbSMj','if0_34419009_spss_db');
$email=$_POST['e_mail'];
$use=$_POST['use'];
$pas=$_POST['pas'];

$simple_string = "$pas";


// Store the cipher method
$ciphering = "AES-128-CTR";

// Use OpenSSl Encryption method
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;

// Non-NULL Initialization Vector for encryption
$encryption_iv = '1234567891011121';

// Store the encryption key
$encryption_key = "spss_adminhandler";

// Use openssl_encrypt() function to encrypt the data
$encryption = openssl_encrypt($simple_string, $ciphering,
			$encryption_key, $options, $encryption_iv);


$res=mysqli_query($con,"SELECT * FROM handler WHERE hand_username='$use'");
$count=mysqli_num_rows($res);
if($count>0){
    echo "EUEU";//existing username
}
else{
    $ress3=mysqli_query($con,"SELECT * FROM handler WHERE hand_email='$email'");
    $countt3=mysqli_num_rows($ress3); 
   if($countt3>0){
    echo "MU"; 
  }
   else{
    mysqli_query($con,"INSERT INTO `handler`(`hand_username`, `hand_email`, `hand_password`) VALUES ('$use','$email','$encryption')");
        mysqli_query($con,"INSERT INTO `session_tb`(`sess_username`, `sess_userstatus`) VALUES ('$use','inactive')");
    echo "NU";
   }
}
?>