<?php 
    $conn = mysqli_connect("localhost", "root", "", "chat");
    if($conn) {
       echo"Database connected <br>" .mysqli_connect_error();
    }
?>