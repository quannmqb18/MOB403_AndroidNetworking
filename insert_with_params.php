<?php
    //khai báo biến

    $sv = "remotemysql.com"; //server
    $u ="GQC4tIySrH";//username
    $p ="XqVYnjL9h1";//password
    $db = "GQC4tIySrH";

    //tạo kết nối
    //cú pháp link?cakjc=asjcna&nca=caksn
    $con = new mysqli($sv,$u,$p,$db);

    //kiểm tra kết nối
    if ($con->connect_error){
        die("Loi ket noi ".$con->connect_error);
    }

    // truyền dữ liệu vào API
    if(isset($_GET['fullname'])&&isset($_GET['username'])&&isset($_GET['password']))
    {
        $fullname = $_GET['fullname']// nhận lien $_GET['truong1'] làm giá trị
        $username = $_GET['username']
        $password = $_GET['password']
        $namedatabase = "UserDemo1"

        $sql = "INSERT INTO UserDemo1 VALUES(0,'$fullname', '$username','$password')";

        if ($con->query($sql)==true){
            echo "ban ghi moi da dc them";
        }else{
            echo "Loi ".con->error;
        }
    }else{
        echo "Loi get method".con->error;
    }

    
    $con->close();
?>