<?php
   $con=mysqli_connect("localhost","root","")or die("Couldnt connect to server".mysqli_connect_error());
   $db="create database bill";
   mysqli_query($db);
   $tb="create table item(item_name varchar(30),type varchar(10),available varchar(10),expiary_date varchar(10))";
   mysqli_query($tb);
   mysqli_close($con);

?>