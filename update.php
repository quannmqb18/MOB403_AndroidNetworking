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
        die("Loi ket noi ".$con->connect_error);
    }
    $namedatabase = "UserDemo1";
    $sql = "UPDATE $namedatabase SET fullname = 'ABC Van ABC' WHERE id = 1";
    //đọc dữ liệu từ csdl
    if ($con->query($sql)===TRUE)
    {
        echo "da update xong";
    }
    else{
        echo "Loi ".$con->error;
    }
    $con->close();
?>