/<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=640px" http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>User-Registration</title>
<link href="f.jpg" rel="icon" />
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>
.header{background-color:#FF9933;border-radius:4px;border:2px;width:100%;height:20%}
.box{background-color:#CCCCCC; width:100%; height:auto; padding:20px;}
</style>
</head>
<body>


<div class="header">
<font size="+5" color="#996600" style="text-decoration:underline"><center>Public Identification System</center></font>
</div> 
<span style="display:block; height:30px;"></span>

<font size="+3" color="#996600"><i class="fa fa-home"></i><a href=".php" style="text-decoration:none;" ><font size="+3" color="#996600">Home/Login</font></font></a>
<hr />
<span style="display:block; height:30px;"></span>


<font size="+3" color="#996600"><i class="fa fa-user"></i><u>User Information</u></font>
<hr />
<form action="register2.php" method="post">
<div class="box">
<span style="display:block; height:30px;"></span>
<p>
<label><b>First Name :</b></label>
<input  type="text" style="width:15%" name="Fname" />
<span style="display:inline-block; width: 130px;"></span>
<label><b>Middle Name :</b></label>
<input  type="text" style="width:15%" name="Mname" />
<span style="display:inline-block; width: 150px;"></span>
<label><b>Last Name :</b></label>
<input  type="text" style="width:15%" name="Lname"/>


</p>
<p>
<span style="display:inline-block; width: 38px;"></span>
<label><b>DOB :</b></label>

<input type="date"  style="width:15%" name="dob"  placeholder="YYYY-MM-DD" />
<span style="display:inline-block; width: 130px;"></span>
<label><b>Gender :</b></label>
<input type="radio" value="Male"  name="Gender"/>Male
<input type="radio" value="Female" name="Gender" />Female
<span style="display:inline-block; width: 50px;"></span>
<p>
<span style="display:inline-block; width: 5px;"></span>
<label><b>Mobile No :</b></label>
<input type="text" style="width:15%" name="Mobile" />
<span style="display:inline-block; width: 100px;"></span>


</p>
</p>
</div>

<hr />



<div class="box">
<p>
<label><b>Address Line1 :</b></label>
<input type="text" style="width:90%" name="Address1" />
</p>
<p>
<label><b>Address Line2 :</b></label>
<input type="text" style="width:90%" name="Address2" />
</p>
<p>
<span style="display:inline-block; width: 65px;"></span>
<label><b>City :</b></label>
<input type="text" style="width:15%" name="city"  />
<span style="display:inline-block; width: 100px;"></span>
<label><b>Pincode :</b></label>
<input type="text" style="width:15%" name="pin" />

<span style="display:inline-block; width: 100px;"></span>
<label><b>State :</b></label>
<select name="state" style="width:15%">
  <option value="Choose" selected="selected" disabled="disabled">Choose Your State</option>
  <option value="Andhra Pradesh">Andhra Pradesh</option>
  <option value="Arunachal Pradesh">Arunachal Pradesh</option>
  <option value="Assam">Assam</option>
  <option value="Bihar">Bihar</option>
  <option value="Chhattisgarh">Chhattisgarh</option>
  <option value="Goa">Goa</option>
    <option value="Gujarat">Gujarat</option>
  <option value="Haryana">Haryana</option>
  <option value="Himachal Pradesh">Himachal Pradesh</option>
      <option value="Jammu and Kashmir">Jammu and Kashmir</option>
  <option value="Jharkhand">Jharkhand</option>
  <option value="Karnataka">Karnataka</option>
      <option value="Kerala">Kerala</option>
  <option value="Madhya Pradesh">Madhya Pradesh</option>
  <option value="Maharashtra">Maharashtra</option>
    <option value="Manipur">Manipur</option>
      <option value="Meghalaya">Meghalaya</option>
  <option value="Mizoram">Mizoram</option>
	  <option value="Nagaland">Nagaland</option>
    <option value="Odisha">Odisha</option>
  <option value="Punjab">Punjab</option>
    <option value="Rajasthan">Rajasthan</option>
      <option value="Sikkim">Sikkim</option>
  <option value="Tamil Nadu">Tamil Nadu</option>
  <option value="Telangana">Telangana</option>
      <option value="Tripura">Tripura</option>
      <option value="Uttar Pradesh">Uttar Pradesh</option>
  <option value="Uttarakhand">Uttarakhand</option>
  <option value="West Bengal">West Bengal</option>
</select>


</p>




</div>


<br />
<center><input type="submit" name="submit" value="Submit" style="background-color:#FF6600; width:10%; height:5% "  /></center>
</form>
</body>
</html>
 