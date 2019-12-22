<!DOCTYPE>
<html>
    <head>
        <title>browser?</title>
    </head>
    <body>
        <h1>Yo Bio!<h1>
<?php
// hello
echo "Do you see this?"; 
$name = array('cam', 'fam', 'blam');
array_pop($name);
array_push($name, 'xam');
print_r($name);

?><br>
<?php  $nums = array(1,20,3,5,80,10);?><br>
count <?php  echo count($nums)?><br>
maxi <?php  echo max($nums)?><br>
mini <?php  echo min($nums)?><br>
In? <?php  echo in_array(20, $nums)?><br>
<?php  sort($nums)?><br>
sorted <?php print_r($nums)?><br>
<?php  rsort($nums)?><br>
back sorted <?php print_r($nums)?><br>
Implode = join:
<?php $sent = array("I", "want", "to", "get", "good", "at", "coding!") ?>
Implode? <?php echo implode(" ", $sent)?><br>
<?php $strinin = "What is my name?"?>
Explode <?php print_r(explode(" ", $strinin))?><br>

    </body>
</html>