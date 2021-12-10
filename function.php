<?php
require('connect.php');
    $text1 = $_POST['text1'];
    $text2 = $_POST['text2'];

    $insert = mysqli_query($connect,"INSERT INTO `zxc`(`id`, `text1`, `text2`) VALUES (NULL,'$text1','$text2')");
    header("Location: ./index.php");