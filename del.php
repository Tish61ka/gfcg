<?php
    require('connect.php');

    $del = mysqli_query($connect, "DELETE * FROM  `zxc`");
    header("Location: index.php");