<!DOCTYPE>
<html>
    <head>
        <title>For Loops</title>
    </head>
    <body>
        <h1>Yo Bio!<h1>
<?php
 for($i=1; $i<=10; $i++){
    echo "this is $i<br>";
 }

?><br>
<?php  
 $times2 = 2;
 for($i=1; $i<=10; $i++){
     $result = $times2*$i;
     echo $times2." * ".$i." = ".$result."<br>";
 }
?>
    </body>
</html>