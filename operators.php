<!DOCTYPE>
<html>
    <head>
        <title>Operators</title>
    </head>
    <body>
        <h1>Yo Bio!<h1>
<?php
$v1=false;
$v2=true;
if($v1 && $v2){
    echo "Both v1 and v2 are true<br>";
} elseif($v1 && !$v2){
    echo "v1 is true but v2 is not<br>";
} elseif($v1 || $v2){
    echo "one of the two is true<br>";
} else {
    echo "final condition<br>";
}

?><br>
<?php  echo 2+3?>
    </body>
</html>