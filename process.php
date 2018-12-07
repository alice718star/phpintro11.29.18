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
    
//session vars
    $_SESSION['fn'] = $_GET['fn'];
    $_SESSION['gd'] = $_GET['gd'];
    // echo $_SESSION['fn'];
    // echo '<br>';
    // echo $_SESSION['gd'];
//if you enter bob male, you will get "bobbob"
//users should not have to worry about process.php
//we make request to process.php.which was rendered on server side. User doesnt see process.php in history. looks like user never left the page.

//email
    $t = "aliceli84@gmail.com";

    $s = "New Form Lead from ".$_GET['fn'];
        //here instead of GET  $_SESSION['fn'] also works.
        
    $m = "someone just emailed you";

    $h= 'From: aliceli84@gmail.com \r\n Reply-To: aliceli84@gmail.com \r\n X-Mailer: PHP/'.phpversion();

    mail($t, $s, $m, $h);
//This is $h header info for email. phpversion is validating email came in specific time, etc.
//From and To can be different ex: Reply to is noreply@xx.com
//who is email going to, subject, message, and header info of email (header is what user doesnt see, but email servers read through header info)

//save to json
$d = json_encode($_GET);
//json encode takes php array and converts to json object syntax
file_put_contents('data.json', $d );
//we are calling file and injecting stuff. when you are actually building stuff you can create subfolders for data.json etc ex: assets/datahandlers/data/data.json
//file put contents takes two parameters: file to save to, and stuff to save. $_GET is php array but it isn't format we need.

//redirect
header('location:contact.php');
//header should be at bottom because you want all above stuff to happen before you redirect user.
?>
