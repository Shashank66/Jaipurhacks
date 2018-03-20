<?php// include BarcodeQR class 
include "BarcodeQR.php"; 

// set BarcodeQR object 
$qr = new BarcodeQR(); 

// create URL QR code 
$qr->contact("Select Fname,Mname,Lname from userinfo", "Select Address1, Address2, City, pin, State from userinfo", "Select Mobile from userinfo", "Select email from userinfo"); 

// display new QR code image 
$qr->draw(150, "tmp/qr-code.png");
?>