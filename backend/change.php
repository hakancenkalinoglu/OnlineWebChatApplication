<?php
session_start();
include'dbh.php';
$id = $_COOKIE["username"];
$pass = $conn->query("SELECT password from signup where username='$id'");

$row = mysqli_fetch_array($pass);

if($_POST["currentPassword"] == $row["password"] 
                && $_POST["newPassword"] == $_POST["confirmPassword"] ) {
    $sql="UPDATE signup SET password='" . $_POST["newPassword"] . "' WHERE username='" . $id . "'";
    $result=$conn->query($sql);
    $err_message="Password Changed Sucessfully";
    header("Location:../index2.php");
    }
    else{
       $err_message="Password is not correct";
    }


?>