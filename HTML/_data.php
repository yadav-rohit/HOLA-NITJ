<?php 
$servername ="localhost";
$username ="root";
$password="";
$d="qaforum";
mysqli_connect($servername ,$username ,$password);
mysqli_select_db($d);
if(isset(['uname'])){
    $username=$_POST['uname'];
    $password=$_POST['psw'];
}
?>