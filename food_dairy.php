<!DOCTYPE html>
<html>

<head>
<title>Марианна</title>
<!--<link rel="stylesheet" href="style.css">-->
<meta charset="utf-8" />
</head>

<body>
    <?php    
        include "header.html";
    ?>

<?php
if(isset($_POST['click']))
{  
echo "<a href='table_dairy.html'>текст ссылки</a>";
}
?>
    <form action="" method="POST">
        <button name="click" class="click">Добавить день</button>
        
    </form>

    <?php    
        include "footer.php";
    ?>
</body>
</html>