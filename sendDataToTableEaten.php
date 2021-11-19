<?php
    $datta = $_GET['Datta'];
    $smes = $_GET['Smes'];
    $ovoschi = $_GET['Ovoschi'];
    $kasha = $_GET['Kasha'];
    $fruit = $_GET['Fruit'];
    $rastMaslo = $_GET['RastMaslo'];
    $slivMaslo = $_GET['SlivMaslo'];
    $meat = $_GET['Meat'];
    $pechenie = $_GET['Pechenie'];
    $zeltok = $_GET['Zeltok'];
    $fish = $_GET['Fish'];
    $tvorog = $_GET['Tvorog'];
    $sok = $_GET['Sok'];
    $milk = $_GET['Milk'];
    $hleb = $_GET['Hleb'];
    $kompot = $_GET['Kompot'];
    $tea = $_GET['Tea'];
    $sql = "INSERT INTO 'eaten' ('Datta', 'Smes', 'Ovoschi', 'Kasha', 'Fruit', 'RastMaslo', 'SlivMaslo', 'Meat', 'Pechenie', 'Zeltok', 'Fish', 'Tvorog', 'Sok', 'Milk', 'Hleb', 'Kompot', 'Tea') VALUES ("'{$_GET['Datta']}'", "'{$_GET['Smes']}'", "'{$_GET['Ovoschi']}'", "'{$_GET['Kasha']}'", "'{$_GET['Fruit']}'", "'{$_GET['RastMaslo']}'", "'{$_GET['SlivMaslo']}'", "'{$_GET['Meat']}'", "'{$_GET['Pechenie']}'", "'{$_GET['Zeltok']}'", "'{$_GET['Fish']}'", "'{$_GET['Tvorog']}'", "'{$_GET['Sok']}'", "'{$_GET['Milk']}'", "'{$_GET['Hleb']}'", "'{$_GET['Kompot']}'", "'{$_GET['Tea']}'")";
    $conn->query($sql);
?>
