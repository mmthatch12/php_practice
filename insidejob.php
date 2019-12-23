<!DOCTYPE>
<html>
    <head>
        <title>Inside Job</title>
    </head>
    <body>
        <h1>Yo Bio!<h1>
<?php
// hello
echo "Do you see this?"; 
?><br>
<?php 
$numbers = array(2,6,7,20,85)
?>
<?php echo $numbers[3]?><br>
<hr>
curr0: <?php echo current($numbers) ."<br>";
next($numbers);
echo current($numbers) ."<br>";
next($numbers);
next($numbers);
echo current($numbers) ."<br>";
reset($numbers);
echo current($numbers) ."<br>";
end($numbers);
echo current($numbers) ."<br>";

?>
    </body>
</html>