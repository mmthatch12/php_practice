<html>
    <head>
        <title>browser?</title>
    </head>
    <body>
        <h1>Yo Bio!<h1>
<?php
// hello
$color = "blue";
$shorts = "short";
$combo = $color." ".$shorts;
//if you use "" it will read the variables placed inside, if you use '' it will make them into strings
echo $combo; 

?>
<?php
$phrase1 = "students who come late";
$phrase2="in class sit in last with Rock";
$combine = $phrase1;
$combine .=$phrase2;
echo "Original full string: $combine <br>";
?>
<hr>
Uppercase first: <?php echo ucfirst($combine); ?> <br>
Uppercase words: <?php echo ucwords($combine); ?> <br>
Lowercase: <?php echo strtolower($combine); ?> <br>
Uppercase: <?php echo strtoupper($combine); ?> <br>
    </body>
</html>