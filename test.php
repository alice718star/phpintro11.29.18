<?php session_start();
//<?php
    
//print_r($_GET);
//echo $x this would not work you need to equate session with GET fn;
//echo $_SESSION['fn'];
//if you close out whole browswer and reload you will get error instead of "bob"
//Notice: Undefined index: fn in C:\Users\430user08\Desktop\php1\test.php on line 6
 echo $_SESSION['fn'];
    echo '<br>';
    echo $_SESSION['gd'];
?>