<?php


$conn = mysqli_connect('localhost', 'root', '', 'win');

error_reporting(0);
if(!$conn){
echo 'Error: ' . mysqli_connect_errno();
}
