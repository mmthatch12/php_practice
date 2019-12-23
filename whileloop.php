<!DOCTYPE>
<html>
    <head>
        <title>While Loop</title>
    </head>
    <body>
<?php
$federer = true;
$gs = 15;
while($federer){
    if($gs<20){
        $gs++;
        echo $gs."<br>";
    } else{
        $federer = false;
    }
}

?><br>
    </body>
</html>