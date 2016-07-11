<?php
    session_start();
	$user=$_SESSION['user'];
	mysql_connect("localhost","root","") or die(mysql_error()) ; 
    mysql_select_db("kurukshetra")  or die(mysql_error()); 
    $rec=mysql_query("select * from users where username='$user' ") or die(mysql_error());
	$record=mysql_fetch_assoc($rec);
	$username=$record['username'];
    $colg=$record['colg'];
    $year=$record['year'];
    $dept=$record['dept'];	 
?>


<!DOCTYPE html>
<html>
<head>
<style>
body{
background-color:lightgery;
}
#div1{
border:2px solid red;
width:400px;
padding:50px;
text-align:left;
margin:auto;
margin-top:50px;
color:black;
font-family:verdana;
background-color:#f1f1f1;

box-shadow:0px 0px 0px 0px black;
}
</style>
<body>
  <div id="div1">
    <?php  
    echo "User_Name :$user</br>"; 
    ?>
	<hr>
	<?php
	echo "College : $colg</br>";  
    ?>
	 <hr>
	 <?php
	 echo "Year :  $year</br>"; 
    ?>
	 <hr>
	 <?php
	 echo "Department : $dept</br>"; 
	?>
	<hr>
	</label>
	</div>
	
</body>
