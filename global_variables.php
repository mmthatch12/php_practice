<!DOCTYPE>
<html>
    <head>
        <title>Global Variables</title>
    </head>
    <body>
        <h1>Yo Bio!<h1>
<?php
$outside = 20; 
function inOut($a){
    global $outside;
    return $a + $outside; 
}
echo inOut(2);
?><br>
<?php  echo 2+3?>
    </body>
</html>