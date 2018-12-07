<?php session_start();
    //print_r($_GET); this file is only responsible for handling our data, we dont need html
    //echo $_GET['gd']; 
//echo $_POST['fn'];
//print_r($_POST);
//with print_r you will get something like this
//Array ( [fn] => bob [gd] => m )
//with echo you will get actual value "Bob"
    $x = $_GET['fn'];
    //echo $x;
    
    $_SESSION['fn'] = $_GET['fn'];
    $_SESSION['gd'] = $_GET['gd'];
    echo $_SESSION['fn'];
    echo '<br>';
    echo $_SESSION['gd'];
//if you enter bob male, you will get "bobbob"
?>
