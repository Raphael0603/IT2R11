<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="save.php" method="POST">
        <div class="prod_id">Product ID: <input type="text" id="prod_id" name="prod_id" placeholder="Product ID"required><br></div>
        <div class="prod_name">Product Name: <input type="text" id="prod_name" name="prod_name" placeholder="Product Name"required><br></div>
        <div class="prod_brand">Product Brand: <input type="text" id="prod_brand" name="prod_brand" placeholder="Product Brand"required><br></div>
        <div class="subBtn"><input type="submit" id="AddBtn" name="submit" value="ADD DATA"></div>
    </form>
        <?php
            include ("config.php");
            $sql = "SELECT * FROM supplies ";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                echo "<table border = '1'>";
                echo "<tr>";
                echo "<th> Product ID </th><th> Product Name </th><th> Product Brand </th>";
                echo "</tr>";
                while($row  = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>". $row['prod_id'] ."</td>";
                    echo "<td>". $row['prod_name'] ."</td>";
                    echo "<td>". $row['prod_brand'] ."</td>";
                    echo "</tr>";
                }

                echo "</table>";
            }
?>
     
     </div>
</body>
</html>