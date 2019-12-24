<!-- 
$GLOBALS
$_SERVER
$_REQUEST
$_FILES
$_SESSION
$_ENV


 -->

 <!-- 
MOST IMPORTANT ARE:
$_GET
$_POST
$_COOKIE

  -->

<!DOCTYPE>
<html>
    <head>
        <title>Super Global</title>
    </head>
    <body>
        <h1>Yo Bio!<h1>
<?php
$x = 75;
$y = 25;

function add(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
add();
echo $z;

?><br>
    </body>
</html> 