<!DOCTYPE>
<html>
    <head>
        <title>Switch Statement</title>
    </head>
    <body>
        <h1>Yo Bio!<h1>
<?php
$Weather = "Sunny";
switch($Weather){
    case "Sunny":
        echo "It's sunny!<br>";
    break;
    case "Cloudy":
        echo "It's cloudy<br>";
    break;
    case "Rainy":
        echo "It's raining out there!<br>";
    break;
    default:
        echo "It's hard to say what the weather is like outside in this dungeon.<br>";
break;
}
?>
<hr>
<?php 
$greeting = "holow";
switch($greeting){
    case "hello":
        echo "english";
    break;
    case "hola":
    case "guten":
    case "konich":
        echo "not english";
    break;
    default:
        echo "I don't think that is a word";
break;
}
?>
    </body>
</html>