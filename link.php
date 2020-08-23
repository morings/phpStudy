<?php
$con = mysqli_connect("localhost","root","123456");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }

if (mysqli_query($con,"CREATE DATABASE my_db"))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysqli_error($con);
  }
mysqli_close($con);
?>