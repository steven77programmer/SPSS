<?php
session_start();
$con = mysqli_connect('sql112.infinityfree.com','if0_34419009','dCXhuPfmbSMj','if0_34419009_spss_db');
$use=$_POST['use'];
$pas=$_POST['pas'];
$res=mysqli_query($con,"SELECT * FROM stud_account WHERE stu_username='$use'");
$count=mysqli_num_rows($res);

$res2=mysqli_query($con,"SELECT public_username FROM stud_account WHERE stu_username='$use'");
$puse= implode("",(mysqli_fetch_row($res2)));

$simple_string = "$pas";

//echo "Original String: " . $simple_string;

// Store the cipher method
$ciphering = "AES-128-CTR";

// Use OpenSSl Encryption method
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;

// Non-NULL Initialization Vector for encryption
$encryption_iv = '1234567891011121';

// Store the encryption key
$encryption_key = "$puse";

// Use openssl_encrypt() function to encrypt the data

$encryption = openssl_encrypt($simple_string, $ciphering,
			$encryption_key, $options, $encryption_iv);
if($count>0){
    mysqli_query($con,"UPDATE `stud_account` SET `stu_password`='$encryption' WHERE stu_username='$use'");
   echo("P");//existing username
}
else{
    echo "NF";
}
?>