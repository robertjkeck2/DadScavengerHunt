<?php
$pass = $_POST['psw'];
if($pass == 'Marion') {
  include('stage3.html');
} else {
	include('index.html');
}

?>