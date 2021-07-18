<?php

$host="host.address";
$user="3426248_dummy";
$password="";
$db="3426248_dummy";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['username'])) {
  $username=$_POST['username'];
  $password=$_POST['password'];
  
  $sql="select * from loginformdb where user='".$username."' and pass='".$password."' limit 1";
  $result=mysql_query($sql);
  
  if(mysql_num_row($result)==1) {
    echo " You have successfully logged in ";
    exit();
  }
  
  else {
    echo "You have Entered Incorrect Password";
    exit();
  }
  
}

?>
