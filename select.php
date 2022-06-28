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
    $sql = "SELECT * FROM  UserDemo1";
    //đọc dữ liệu từ csdl

    $result = $con->query($sql);
    if($result->num_rows >0)//neu so dong >0
    {
        while($row = $result->fetch_assoc())//doc tung dong
        {
            echo "id: ".$row["id"]." - FirstName: ".$row["username"]."<br>";
        }
        echo json_encode($result);
    }
    else
    {
        echo "Khong co du lieu";
    }
    $con->close();
?>