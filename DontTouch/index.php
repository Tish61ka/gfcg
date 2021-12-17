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
    <form>
        <label for="a"></label>
        <input id="a" name="text1" type="text" required placeholder="Введите содержание работы">
        <label for="b"></label>
        <input id="b" name="text2" type="text" required placeholder="Введите длительность">
        <label class="button" for="c">Submit</label>
        <input id="c" class="btn" type="submit" value="ОТпраВИТЬ">
    </form>
    <a href="./del.php"><button>Удалить всё</button></a>
    <a href="#"><button class="btn_2">Построить график</button></a>
    <a href="#"><button class="btn_3">Создать таблицу</button></a>
    <div class="div">
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
            <td id='0'></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>1</td>
            <td id='1'></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>2</td>
            <td id='2'></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>3</td>
            <td id='3'></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>4</td>
            <td id='4'></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>5</td>
            <td id='5'></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>6</td>
            <td id='6'></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <script src="script.js"></script>
</body>
</html>