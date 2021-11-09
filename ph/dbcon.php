

<?php
// database passward variable 
$password = "localH@01test";
// for those that doest have password at their localhost 
// Xampp should leves the place empty as ""
$con = mysqli_connect("localhost","root","$password","medi_new");

if (mysqli_connect_errno())
  {
  echo "MySQLi Connection was not established: " . mysqli_connect_error();
  }
  ?>