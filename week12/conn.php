<?php
  $severname = 'localhost';
  $username = 'group3';
  $password = 'dr3puorg30rtm';
  $dbname = 'mtr03group3';
  $conn = new mysqli($severname, $username, $password, $dbname);
  $conn->query("SET NAMES UTF8");
  $conn->query("SET time_zone = '+8:00'");
  if ($conn->connect_error){
    die('connection failed:' . $conn->connect_error);
  }
?>