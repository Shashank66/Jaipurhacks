<?php     
 

mysql_connect("localhost","root","");
mysql_select_db("login");

     if(isset($_POST['submit']))
	 {
		 
		
		 $Firstname = $_POST['Firstname'];
		 $Middlename = $_POST['Middlename'];
		 $Lastname = $_POST['Lastname'];
		 
		 $Gender = $_POST['Gender'];
		 $Mobile = $_POST['Mobile'];
		
		 $Address1 = $_POST['Address1'];
		 $Address2 = $_POST['Address2'];
		 $city = $_POST['city'];
		 $pin = $_POST['pin'];
		 $state = $_POST['state'];
		
		  
		
		 
		 
	 
     
	 
	
	 $query =  "INSERT INTO `userinfo` (`FirstName`, 'Middlename' `LastName`, `DOB`, `Gender`, `Mobile No`, 'Address1', 'Address2', 'city', 'pin', 'state') VALUES 
			   ( '$Firstname', '$Middlename', '$Lastname', '$Gender', '$Mobile', '$Address1', '$Address2', '$pin', '$City', '$state' )";
			   
			   
			   
			   
if(mysql_query($query)){
	echo 'registration successful';
}
else {
	echo mysql_error();
}
header('LOCATION:registration.php');


}
else
   echo "wrong entries"
	
	
?>