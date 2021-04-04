


<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?> 
<style>
table{
	border:2px solid black;
	margin:20px;
	width: 40%;
	 border-collapse: separate;
    text-indent: initial;
    white-space: normal;
    line-height: 20px;
    font-weight: normal;
    font-size: 20px;
    font-style: normal;
    color: -internal-quirk-inherit;
    text-align: start;
    border-spacing: 20px;
    font-variant: normal;

	
}

tr{
	background-color:pink;
	margin:10px;

}


</style>

<button> <a href="index.html" > Home Page </a> </button> <br>



<!--Password Successfull. <a href="Dataentryform.php">Click here </a> to go Data entry form. -->
<!--Password Successfull.<br>-->
<br>
<table>
<tbody>
<tr><td><a href="#">Click here </a> </td></tr>
 
 
 
 </tr>
 </tbody>
 </table>