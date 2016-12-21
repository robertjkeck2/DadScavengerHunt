<?php
$pass = $_POST['psw'];
if($pass == '56') {
  include('stage5.html');
} else {
	include('index.html');
}

?>