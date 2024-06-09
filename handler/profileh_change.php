<?php
session_start();
$con = mysqli_connect('sql112.infinityfree.com','if0_34419009','dCXhuPfmbSMj','if0_34419009_spss_db');
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
    mysqli_query($con,"UPDATE `handler` SET `hand_password`='$encryption' WHERE hand_username='$use'");
   echo("P");//existing username
}
else{
    echo "NF";
}
?>