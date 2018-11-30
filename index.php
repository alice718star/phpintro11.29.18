<!doctype html>
<html>
    <head>
        <title>php1</title>
    </head>
    <body>
        <?php
            global $n, $z;
            $n = "jim";
            $f = "smith";
            $x = 3;
            $t = true;
            $a = array('val1', 'val2', "jim");
            $a2 = ['apple', 'grapes','bananas'];
            $a3 = [
                "fn"=>"mark",
                "ln"=>"garcia",
                "city"=>"ny",
                "age"=>20
            ];
        
        function sumof(){
                global $n, $z;
                if( $n == "james" ){
                    $z = "james is in the house";
                } else {
                    $z = "james is home sick";
                };
            };
        
        sumof();
        
       
    
        ?>
        <h1>hello, <?php echo $n.' '.$f;?></h1>
        <h1><?php echo 'my name is '. $n.' '.$f; ?></h1>
        <h1><?php print_r($a2);?></h1>
        <!--print_r is used for arrays-->
        <h1><?php echo $a3 ['age']; ?></h1>
        <h1><?php echo $z ?></h1>
        <h1>
            <?php
                foreach($a3 as $index => $value ){
                    echo $index.'<br>';
                };
         

        ?>
            
            
        </h1>
    </body>

</html>