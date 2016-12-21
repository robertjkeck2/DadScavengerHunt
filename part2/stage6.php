<?php
$pass = $_POST['psw'];
if($pass == 'Winter Park') {
  include('stage7.html');
} else {
	include('index.html');
}

?>