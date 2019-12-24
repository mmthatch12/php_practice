<!DOCTYPE>
<html>
    <head>
        <title>browser?</title>
    </head>
    <body>
        <h1>Yo Bio!<h1>
<?php
$outside = 20; //this variable cannot be accessed inside of the function different from JS
function inOut($a){
    $outside = 20;
    return $a + $outside; 
}
echo inOut(2);
?><br>
<?php  echo 2+3?>
    </body>
</html>