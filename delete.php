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
    $namedatabase = "UserDemo1";
    $sql = "DELETE FROM ${namedatabase} WHERE id = 10";
    //đọc dữ liệu từ csdl
    if ($con->query($sql)===TRUE)
    {
        echo "Đã xóa thành công";
    }
    else{
        echo "Lỗi xóa ".$con->error;
    }
    $con->close();
?>