<?php
    echo "<h1>file 测试</h1>";
    print_r($_FILES);
    // Array ( [picture] => Array ( [name] => 预约人次2.jpg 
    // [type] => image/jpeg [tmp_name] => D:\wamp64\tmp\php23AB.tmp 
    // [error] => 0 [size] => 59003 ) )
    echo "<br>";
    echo $_FILES['picture']['tmp_name'];
    move_uploaded_file($_FILES['picture']['tmp_name'],"D:/前端学习/Web/_myCode/img/".$_FILES['picture']['name']);
    //move_uploaded_file($_FILES['picture']['tmp_name'],"D:\前端学习\Web\_myCode\img");
?>