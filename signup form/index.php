<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pwd = "";
    $db_name = "form_db";
    $db_port = 3306;

    $conn = new mysqli($db_host, $db_user, $db_pwd, $db_name, $db_port);

    if(isset($_POST['sb'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $query = "INSERT INTO table2(name, age) VALUES ('$name', '$age')";
        $run = mysqli_query($conn, $query);
    }
?>