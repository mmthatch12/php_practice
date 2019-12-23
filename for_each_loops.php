<!DOCTYPE>
<html>
    <head>
        <title>For Each Loops</title>
    </head>
    <body>
<?php
 $newarr = array("jack", "jill", "fred", "lenny", "jenny");
 foreach($newarr as $name){
     echo $name."<br>";
 }

?><br>
<?php  
$food = array(
    "key_1"=>"hello",
    "key_2"=>"my",
    "key_3"=>"is",
    "key_4"=>"Jean",
    "key_5"=>"Val-Jean",
);
foreach($food as $key=>$value){
    $data=str_replace("_", " ", $key);
    echo"$data : $value<br>";
}
?>
    </body>
</html>