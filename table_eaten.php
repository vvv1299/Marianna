<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="style.css">
<meta charset="utf-8" />
<script src="script.js"></script>
<?php    
    include "function.php";
?>
</head>

<body>
    <?php    
        include "header.html";
        require_once "function.php";
        $conn=dataBase();
    ?>

    <?php
        openTableEaten($conn);
    ?>

    <form>
        <table class="newElement">
            <td><input type="date" name="Datta"></input></td>
            <td><input type="float" name="Smes"></input></td>
            <td><input type="float" name="Ovoschi"></input></td>
            <td><input type="float" name="Kasha"></input></td>
            <td><input type="float" name="Fruit"></input></td>
            <td><input type="float" name="RastMaslo"></input></td>
            <td><input type="float" name="SlivMaslo"></input></td>
            <td><input type="float" name="Meat"></input></td>
            <td><input type="float" name="Pechenie"></input></td>
            <td><input type="float" name="Zeltok"></input></td>
            <td><input type="float" name="Fish"></input></td>
            <td><input type="float" name="Tvorog"></input></td>
            <td><input type="float" name="Sok"></input></td>
            <td><input type="float" name="Milk"></input></td>
            <td><input type="float" name="Hleb"></input></td>
            <td><input type="float" name="Kompot"></input></td>
            <td><input type="float" name="Tea"></input></td>
        </table>

        <br>
        <input onclick="addLineToTableEaten($datta, $smes, $ovoschi, $kasha, $fruit, $rastMaslo, $slivMaslo,
        $meat, $pechenie, $zeltok, $fish, $tvorog, $sok, $milk, $hleb, $kompot, $tea); return false;"
        type="submit" name="add" value="Добавить" />
    </form>

    <?php    
        include "footer.php";
    ?>
</body>
</html>