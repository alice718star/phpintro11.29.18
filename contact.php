<?php session_start();?>
<!doctype html>
<html>

<head>
    <title>contact form</title>
</head>

<body>
    <?php require_once('nav.php');?>
    <h1>Contact Page</h1>
    <!--<form action="process.php" method="post">
        <label>Full name<br>
                <input type="text" name = "fn">
            </label>
        <br>
        <p>Gender</p>
        <label>
                <input type = "radio" name = "gd" value="m">
                Male
        </label>
        <br>
        <label>
                <input type = "radio" name = "gd" value="f">
                Female
        </label>
        <br>
        <label>
                <input type = "radio" name = "gd" value="s">
                Self identify
        </label>
        <br>
        <input type="submit" value="send">
    </form>-->
    <form action="process.php" method="get">
        <label>Full name<br>
                <input type="text" name = "fn">
            </label>
        <br>
        <p>Gender</p>
        <label>
                <input type = "radio" name = "gd" value="m">
                Male
        </label>
        <br>
        <label>
                <input type = "radio" name = "gd" value="f">
                Female
        </label>
        <br>
        <label>
                <input type = "radio" name = "gd" value="s">
                Self identify
        </label>
        <br>
        <input type="submit" value="send">
    </form>
    <!--in url action sends data to process.php ..including male and data. After you submit you will get something like http://localhost/process.php?fn=bob&gd=m in link bar. in GET method, URL is updated with data submitted in the form. in this example this shows bob with gd for gender =male. One limitation of GET method is that it only has 3000 characters cap. Because you can see info in form, that also makes it insecure ex: credit card etc. GET is meant for public info, not sensitive info.-->
    <!--POST doesn't show up in URL ex when you select BOB, male. There is also no cap to data stored-->

</body>

</html>
