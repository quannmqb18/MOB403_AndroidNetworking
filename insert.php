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
//     $namedatabase = "UserDemo1"
    $sql = "INSERT INTO UserDemo1 VALUES (0,'Ngo Minh Quan', 'Quannm','18092002') ";

    if ($con->query($sql)==true){
        echo "ban ghi moi da dc them";
    }else{
        echo "Loi ".con->error;
    }
    $con->close();
?>