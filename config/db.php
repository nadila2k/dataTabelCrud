<?php 
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "dashbourd";

$conn = new mysqli($severname,$username,$password,$dbname);
if ($conn ->connect_errno) {

    die("connection error".$conn ->connect_errno);

} else {

   

}


?>