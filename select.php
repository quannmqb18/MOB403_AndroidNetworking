<?php
    //khai báo biến

    $sv = "remotemysql.com"; //server
    $u ="GQC4tIySrH";//username
    $p ="XqVYnjL9h1";//password
    $db = "GQC4tIySrH";

    //tạo kết nối

    $con = new mysqli($sv,$u,$p,$dp);

    //kiểm tra kết nối
    if ($con->connect_error){
        die("Loi ket noi ".$con->connect_error);
    }
    $namedatabase = "UserDemo1"
    $sql = "SELECT * FROM  ${namedatabase}";
    //đọc dữ liệu từ csdl
    $result = $conn->query($sql);

    if ($result->num_rows>0){
        while ($row = $result->fetch_assoc()){//đọc từng dòng
            echo "id: "+row["id"]." - fullname: "
            .$row["fullname"]."<br/>";
        }
    }else{
        echo "Khong co du lieu"
    }
    $con->close();
?>