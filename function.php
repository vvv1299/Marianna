<?php
function dataBase(){
    try {
        $conn = mysqli_connect("localhost", "root","","marianna");
      //  echo "Database connection established";
        return $conn;
    }
    catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

function openTableEaten($conn){
    $sql = "SELECT * FROM eaten";
    if($result = mysqli_query($conn, $sql)){
        echo "<table><tr><th>Дата</th><th>Смесь</th><th>Овощи</th><th>Каша</th><th>Фрукты</th>
        <th>Растительное масло</th><th>Сливочное масло</th><th>Мясо</th><th>Печенье</th><th>Желток</th>
        <th>Рыба</th><th>Творог</th><th>Сок</th><th>Кисломолочка</th><th>Хлеб, сухари</th><th>Компот</th>
        <th>Чай</th></tr>";
        foreach($result as $row){
            echo "<tr>";
                echo "<td>" . $row["Datta"] . "</td>";
                echo "<td>" . $row["Smes"] . "</td>";
                echo "<td>" . $row["Ovoschi"] . "</td>";
                echo "<td>" . $row["Kasha"] . "</td>";
                echo "<td>" . $row["Fruit"] . "</td>";
                echo "<td>" . $row["RastMaslo"] . "</td>";
                echo "<td>" . $row["SlivMaslo"] . "</td>";
                echo "<td>" . $row["Meat"] . "</td>";
                echo "<td>" . $row["Pechenie"] . "</td>";
                echo "<td>" . $row["Zeltok"] . "</td>";
                echo "<td>" . $row["Fish"] . "</td>";
                echo "<td>" . $row["Tvorog"] . "</td>";
                echo "<td>" . $row["Sok"] . "</td>";
                echo "<td>" . $row["Milk"] . "</td>";
                echo "<td>" . $row["Hleb"] . "</td>";
                echo "<td>" . $row["Kompot"] . "</td>";
                echo "<td>" . $row["Tea"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    } else{
        echo "Ошибка: " . mysqli_error($conn);
    }
}
?>