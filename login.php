<?php

$user = $_POST['un'];
$pass = $_POST['psaa'];

$result = QUERY: SELECT * FROM users WHERE username='$user' AND password='$pass'
  if( $result IS NOT BLANK ) {
    echo "login successful";  }
  else {
    echo "login failed";  }

?>
