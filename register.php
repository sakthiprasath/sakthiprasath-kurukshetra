
this is reg.php
<?php 



if(isset($_POST['submit']))
  {
    session_start();
    $user=$_POST['user'];
    $_SESSION['user']=$user; 
	$pass=$_POST['pass'];
    $pass1 =md5($pass);
	 $dept=$_POST['dept'];
    $year=$_POST['year'];
    $colg=$_POST['colg'];
    if($pass==$pass1 && $user!=NULL &&$dept!=NULL && $colg!=NULL  && year!=NULL)
	{
		
	
	mysql_connect("localhost","root","") or die(mysql_error()) ; 
    mysql_select_db("kurukshetra")  or die(mysql_error()); 
    $q=mysql_query("insert into users values('$user','$pass1','$colg','$dept','$year')") or die (mysql_error());
     	if($q)
	    {
  		    echo "successfully  registered";
            header("Location:retrieval.php");
            exit;		 
        }
 	
	}
	else
	{   
        echo "complete in all the fields ";
		header("Location:main.php");
	}
	 }	
  ?>
