<?php
        $prod_id  = $_POST['prod_id'];
        $prod_name = $_POST['prod_name'];
        $prod_brand = $_POST['prod_brand'];

        include_once('config.php');

        $conn = new mysqli ($servername, $username, $password, $dbname);

        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO supplies VALUES ($prod_id, '$prod_name', '$prod_brand') ";

        if($conn->query($sql) === TRUE ) {
            $conn->close();
            header("Location: index.php");
        }else{
            echo "Error: " .$sql . "<br>" . $conn->error;
        }

    ?>