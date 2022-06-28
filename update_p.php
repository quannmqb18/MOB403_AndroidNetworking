<?php
    //khai báo biến

    $sv = "remotemysql.com"; //server
    $u ="GQC4tIySrH";//username
    $p ="XqVYnjL9h1";//password
    $db = "GQC4tIySrH";

    //tạo kết nối

    $con = new mysqli($sv,$u,$p,$db);

    //kiểm tra kết nối
    if ($con->connect_error){
        die("Lỗi kết nối".$con->connect_error);
    }
    if(isset($_GET['username'])&&isset($_GET['fullname']))
    {
        $namedatabase = "UserDemo1";
        $username = $_GET['username'];// nhận lien $_GET['truong1'] làm giá trị
        $fullname = $_GET['fullname'];// nhận lien $_GET['truong1'] làm giá trị

        $sql = "UPDATE $namedatabase
                        SET fullname = $fullname
                        WHERE username = $username";
        if ($con->query($sql)==true){
            echo "Đã update";
        }else{
            echo "Lỗi update ".con->error;
        }
    }else{
        echo "Lỗi get params".con->error;
    }
    $con->close();
?>