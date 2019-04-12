<?php 
session_start();
$_SESSION['npm'] = '';
$data = $_GET['name'];

// echo $data.'/'.$_SESSION['npm'];
header('location:'.$data.'');
?>