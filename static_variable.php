<!DOCTYPE>
<html>
    <head>
        <title>Static Variable</title>
    </head>
    <body>
        <h1>Yo Bio!<h1>
<?php
function normV(){
    $value = 1;
    echo "normV: ".$value."<br>";
    $value++;
}
normV();
normV();
normV();
normV();

function staticV(){
    static $value = 1;
    echo "staticV: ".$value."<br>";
    $value++;
}

staticV();
staticV();
staticV();
staticV();
?><br>
    </body>
</html>