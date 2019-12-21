<!DOCTYPE>
<html>
    <head>
        <title>Arrays</title>
    </head>
    <body>
        <h1>Yo Bio!<h1>
<?php
// hello
$color=array("A"=>"40", "B"=>"Pizza");
$name =array('Jazeb', 'akram', 'matt');
$food =array('Pizza', 10, 15, array("greg", "holland", "fred"), 'akram', 'matt');
$fred=array("key1"=>40, "key2"=>60)

?><br>
<?php  echo $name[2];?><br>
<?php  echo $food[3][0];?><br>
<?php  echo $food[2]="updated";?><br>
key1: <?php  echo $fred["key1"];?><br>
<pre><?php  echo print_r($food);?><br><pre>
    </body>
</html>