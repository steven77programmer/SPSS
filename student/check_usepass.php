<?php
session_start();
$con = mysqli_connect('sql112.infinityfree.com','if0_34419009','dCXhuPfmbSMj','if0_34419009_spss_db');
$cid=$_POST['control_id'];
$rno=$_POST['roll_no'];
$email=$_POST['e_mail'];
$use=$_POST['use'];
$_SESSION['USERNAME']=$use;
$pas=$_POST['pas'];
$head = mt_rand(1, 10000);
$headstr = strval($head);
 // Assuming 'rruse' is the name of the input field in a form
$sarr = str_split($headstr);
for ($i = 0; $i < strlen($headstr); $i++) {
    $sarr[$i] = chr(ord($headstr[$i]) + 30);
}
$str = implode('', array_reverse($sarr));
$sarr = str_split($use);
for ($i = 0; $i < strlen($use); $i++) {
    $sarr[$i] = chr(ord($use[$i]) + 5);
}
$str = $str . implode('', array_reverse($sarr));
$str1 = substr($str, 0, strlen($str) / 2);
$str2 = substr($str, strlen($str) / 2);
$str = $str2 . $str1;
$puse=$str;
$res=mysqli_query($con,"SELECT * FROM stud_account WHERE stu_username='$use'");
$count=mysqli_num_rows($res);
if($count>0){
    echo "EU";//existing username
}
else{

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

// Display the encrypted string
//echo "Encrypted String: " . $encryption . "\n";


//$ciphering = "AES-128-CTR";
//$iv_length = openssl_cipher_iv_length($ciphering);
//$options = 0;
// Non-NULL Initialization Vector for decryption
$decryption_iv = '1234567891011121';

// Store the decryption key
$decryption_key = "$puse";

// Use openssl_decrypt() function to decrypt the data
$decryption=openssl_decrypt ($encryption, $ciphering, 
		$decryption_key, $options, $decryption_iv);

// Display the decrypted string
//echo "Decrypted String: " . $decryption;



    
    mysqli_query($con,"INSERT INTO `stud_account`(`stu_username`, `stu_email`, `stu_password`, `public_username`, `stu_controlid`, `stu_rollno`) VALUES ('$use','$email','$encryption','$puse','$cid','$rno')");
    mysqli_query($con,"UPDATE `student` SET `registered_no`='$head' WHERE control_id='$cid'");   
    // mysqli_query($con,"INSERT INTO `session_tb`(`sess_username`, `sess_userstatus`) VALUES ('$use','active')");
    $_SESSION['IS_LOGIN']=$email;
    echo "NU";
}
?>