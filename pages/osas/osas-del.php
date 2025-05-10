<?php
require '../../includes/conn.php';
session_start();

$osas_id = $_GET['osas_id'];

mysqli_query($db, "DELETE FROM tbl_osas  WHERE osas_id = '$osas_id' ") or die(mysqli_error($db));
$_SESSION['successDel'] = true;
header("location: osas-lists.php");