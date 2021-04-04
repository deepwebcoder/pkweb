<?php session_start(); /* Starts the session */
	
	/* Check Login form submitted */	
	if(isset($_POST['Submit'])){
		/* Define username and associated password array */
		$logins = array('gpb' => '123','username1' => 'password1','username2' => 'password2');
		
		/* Check and assign submitted Username and Password to new variable */
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		/* Check Username and Password existence in defined array */		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:index1.php");
			exit;
		} else {
			/*Unsuccessful attempt: Set error message */
			$msg="<span style='color:red'>Invalid Login Details</span>";
		}
	}
?>
<style>
body {
  /* The image used */
  background-image: url("Images/bg3.jpg");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
 
}
Table {
	background-color:black;
	border: 5px solid white;
	border-radius:10px;
	width:400px;
}

h1{
	pedding:0px;
	margin:0px;
	color:Black;
	text-align:center;
	
}
h3{
	align:center;
}
th,td{
	color:white;
	align:center;
}
#Frame{
	background-color:pink;
	display:block;
	width:100%;
	height:40px;
	border-radius:20px;
	
}
</style>

  
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>LoginForm</title>
<button> <a href="index.html" > Home Page </a> </button>
</head>
<br><br>
        
<body background="Images/bgi.jpg" class="bg3" width="800" height="600">
<div id="Frame">

  <h1>Panchayat Seceratary login Form</h1>
  
</div>
<br>
<form action="" method="post" name="Login_Form">
  <table    align= "center" border="5px" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2"  valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="0" valign="top"><h3>Login</h3></td>
	  <td> <img src="Images/L5.png" width="40%" </td>
	  
    </tr>
    <tr>
      <td align="right" valign="top">Username</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
    </tr>
  </table>
</form>
</body>
</html>