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
        <input type="submit" value="ОТпраВИТЬ">
    </form>
    <?php 
        $sql = "SELECT * FROM `zxc`";
        while($row = $result->fetch_array()){
            $qwe = $row["id"];
            $qwe = $row["text1"];
            $qwe = $row["text2"];
        }
    
    ?>
</body>
</html>