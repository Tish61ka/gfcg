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
    <a href="./del.php"><button>Kick him</button></a>
    <div>
        <?php
        require('connect.php'); 
        $output = "SELECT * FROM `zxc`";
        $result = mysqli_query($connect,$output);
        while($row = mysqli_fetch_array($result)){
            ?>
            <p><?=$row["id"]. ".";?>
            <?="Содержание работ: " . $row["text1"];?>
            <?="Длительность работ: " . $row["text2"];?> <?='</br>'?></p>
            <?php
        }    
    ?>
    </div>
    
</body>
</html>