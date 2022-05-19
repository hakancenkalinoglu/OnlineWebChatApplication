<?php

$conn=mysqli_connect("localhost","root","me123","mydatabase");

if(!$conn){

    die("connection failed".mysqli_connect_error());
}

        $lastmessage = "SELECT name FROM posts ORDER BY id DESC LIMIT 1";

        $lastMessageStatus = mysqli_query($conn,$lastMessage);

            if(mysqli_num_rows($lastMessageStatus) < 1) {
              while($lastMessageRow = mysqli_fetch_assoc($lastMessageStatus)) {
                $sent_by = $lastMessageRow['name'];
                echo $sent_by;
                echo 2;

                }
            }
?>