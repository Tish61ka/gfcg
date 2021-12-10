<?php
    $i = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/main.css">
    <title>Document</title>
</head>
<body>
    <form method="post" action="./function.php" enctype="multipart/form-data">
        <label for="a"></label>
        <input id="a" name="text1" type="text" required placeholder="Введите содержание работы">
        <label for="b"></label>
        <input id="b" name="text2" type="text" required placeholder="Введите длительность">
        <label class="button" for="c">Submit</label>
        <input id="c" class="btn" type="submit" value="ОТпраВИТЬ">
    </form>
    <a href="./del.php"><button>Удалить всё</button></a>
    <a href="#"><button class="btn-2">Построить график</button></a>
    <a href="#"><button class="btn-3">Создать таблицу</button></a>
    <div class="div">
        <?php
        require('connect.php'); 
        $output = "SELECT * FROM `zxc`";
        $result = mysqli_query($connect,$output);
        while($row = mysqli_fetch_array($result)){
            ?>  
            <div class="p">
            <?="<b>"."Содержание работ: " . "</b>" . $row["text1"];?><?='</br>'?>
     
            <?="<b>" ."Длительность работ: " . "</b>" .'<span id="giveNumber">' . $row["text2"] ."</span>";?>

            </div>
            <?php
        }    
    ?>
    <script>
        let i = <?php $i?>
        alert(i);
    </script>
    </div>
    <table>
        <tr>
            <td>Событие</td>
            <td>Тр</td>
            <td>Тn</td>
            <td>R = Tn - Tp</td>
        </tr>   
        <tr>
            <td>0</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>1</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>2</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>3</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>4</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>5</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>6</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <script src="script.js"></script>
</body>
</html>