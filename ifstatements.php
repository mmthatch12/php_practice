<!DOCTYPE>
<html>
    <head>
        <title>If Statement</title>
    </head>
    <body>
        <h1>Yo Bio!<h1>
<?php
$Weather = "Cloudy";
if($Weather=="Sunny"){
    echo "Weather is pleasant<br>";
} elseif($Weather =="Cloudy"){
    echo "Weather is Cloudy<br>";
} else{
    echo "Weather is NEITHER PLESANT NOR CLOUDY!<br>";
}
?><br>
<?php  $bought_product=false;
if($bought_product){
    echo "Thank you for your purchase<br>";
} else{
    echo "We will ship you product once we recieve your payment!<br>";
}
?>
    </body>
</html>