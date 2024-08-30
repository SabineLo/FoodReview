<?php
//it is setting the connection to the databse :D
$conn = mysqli_connect('localhost','root','', 'commentsection');
if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error()) ;
}