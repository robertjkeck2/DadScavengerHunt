<?php
$pass = $_POST['psw'];
if($pass == '1991') {
  include('stage2.html');
} else {
	include('index.html');
}

?>