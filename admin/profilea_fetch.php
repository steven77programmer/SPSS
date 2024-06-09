<?php
session_start();
$con = mysqli_connect('sql112.infinityfree.com','if0_34419009','dCXhuPfmbSMj','if0_34419009_spss_db');
$use=$_POST['use'];
$res=mysqli_query($con,"SELECT * FROM admin WHERE admin_username='$use'");
$count=mysqli_num_rows($res);
if($count>0){
    $res=mysqli_query($con,"SELECT admin_email FROM admin WHERE admin_username='$use'");
    $mymai= implode("",(mysqli_fetch_row($res)));
    $res=mysqli_query($con,"SELECT admin_password FROM admin WHERE admin_username='$use'");
    $mypas= implode("",(mysqli_fetch_row($res)));
    $ciphering = "AES-128-CTR";

// Use OpenSSl Encryption method
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;

// Non-NULL Initialization Vector for decryption
$decryption_iv = '1234567891011121';

// Store the decryption key
$decryption_key = "spss_adminhandler";

// Use openssl_decrypt() function to decrypt the data
$decryption=openssl_decrypt ($mypas, $ciphering, 
		$decryption_key, $options, $decryption_iv);
$data=implode(" ",array($mymai,$decryption));
    echo $data;//existing username
}
else{
    echo "NF";
}
?>