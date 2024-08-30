<?php
    //what this does is basically set a connection to the data base it then puts the info
    //into the data base (saves it :D)
    //for warren college
    function setComments($conn){
        if(isset($_POST['commentSubmit'])){
            $uid = $_POST['uid'];
            $date = $_POST['date'];
            $message = $_POST['message'];

            $sql = "INSERT INTO comments (uid, date, message) VALUES ('$uid', '$date', '$message')";
            $result = $conn->query($sql);
        }
    }

    //What it does here is try to put
    function getComments($conn) {
        $sql = "SELECT * FROM comments ORDER BY date DESC";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
            echo"<div class='comment-box'><p>";
                echo $row['uid']."<br>";
                echo $row['date']."<br>";
                echo $row['message']."<br>";
            echo"</p><div>";
        }

    }

    //for eigth college
    function setComments1($conn){
        if(isset($_POST['commentSubmit'])){
            $uid1 = $_POST['uid1'];
            $date1 = $_POST['date'];
            $message1 = $_POST['message1'];

            $sql = "INSERT INTO comments2 (uid1, date, message1) VALUES ('$uid1', '$date1', '$message1')";
            $result = $conn->query($sql);
        }
    }

    //What it does here is show the comments
    function getComments1($conn) {
        $sql = "SELECT * FROM comments2 ORDER BY date DESC";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
            echo"<div class='comment-box'><p>";
                echo $row['uid1']."<br>";
                echo $row['date']."<br>";
                echo $row['message1']."<br>";
            echo"</p><div>";
        }

    }

    //muir college
    function setComments2($conn){
        if(isset($_POST['commentSubmit'])){
            $uid3 = $_POST['uid3'];
            $date = $_POST['date'];
            $message3 = $_POST['message3'];

            $sql = "INSERT INTO comments3 (uid3, date, message3) VALUES ('$uid3', '$date', '$message3')";
            $result = $conn->query($sql);
        }
    }

    //What it does here is show the comments
    function getComments2($conn) {
        $sql = "SELECT * FROM comments3 ORDER BY date DESC";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
            echo"<div class='comment-box'><p>";
                echo $row['uid3']."<br>";
                echo $row['date']."<br>";
                echo $row['message3']."<br>";
            echo"</p><div>";
        }

    }

    //sixth college
    function setComments3($conn){
        if(isset($_POST['commentSubmit'])){
            $uid3 = $_POST['uid3'];
            $date3 = $_POST['date'];
            $message3 = $_POST['message3'];

            $sql = "INSERT INTO comments4 (uid3, date, message3) VALUES ('$uid3', '$date3', '$message3')";
            $result = $conn->query($sql);
        }
    }

    //What it does here is show the comments
    function getComments3($conn) {
        $sql = "SELECT * FROM comments4 ORDER BY date DESC";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
            echo"<div class='comment-box'><p>";
                echo $row['uid3']."<br>";
                echo $row['date']."<br>";
                echo $row['message3']."<br>";
            echo"</p><div>";
        }

    }

    //seventh
    function setComments4($conn){
        if(isset($_POST['commentSubmit'])){
            $uid1 = $_POST['uid1'];
            $date1 = $_POST['date'];
            $message1 = $_POST['message1'];

            $sql = "INSERT INTO comments2 (uid1, date, message1) VALUES ('$uid1', '$date1', '$message1')";
            $result = $conn->query($sql);
        }
    }

    //What it does here is show the comments
    function getComments4($conn) {
        $sql = "SELECT * FROM comments2 ORDER BY date DESC";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
            echo"<div class='comment-box'><p>";
                echo $row['uid1']."<br>";
                echo $row['date']."<br>";
                echo $row['message1']."<br>";
            echo"</p><div>";
        }

    }