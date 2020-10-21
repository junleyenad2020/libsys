<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbase ="midterm_db";

// Create connection
$conn = new mysqli($servername,$username,$password,$dbase);

// function message(message){
//     echo('message');
// }

if($conn->error) {
    echo "Connection Error".mysqli_connect_errno();
    exit;
} else {
    echo "Connection Success";
}

?>