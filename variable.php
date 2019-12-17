
<!-- // variables
start with $ $name
can have dashes(-)
underscore(_)
letters
numbers
case sensitive
cannot have spaces
can't start with numbers
bad practice to start variable with - or _ -->

<html>
    <head>
        <title>browser?</title>
    </head>
    <body>
        <h1>Yo Bio!<h1>
<?php
// hello
echo "Do you see this?"; 
// variable
$first_name = "Matty";
$last_name = "Thaty";
$first_name = "ma??";
// constant
define("const_fn", "matthew");
echo "<br>";
echo const_fn;
echo "<br>";
echo $first_name;

?><br>
<?php  echo 2+3?>
<?php  echo $first_name?>
    </body>
</html>