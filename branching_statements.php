<!DOCTYPE>
<html>
    <head>
        <title>Branching Statements</title>
    </head>
    <body>
        <h1>Yo Bio!<h1>
<?php
$Names = array("fred", "flin", "jin", "grin");
for($i=0; $i<=3; $i++){
    if($Names[$i]=="flin"){
        continue; //this means to skip if I replace continue with break it will end the loop
    } else{
        echo $Names[$i]."<br>";
    }
};
?><br>
    </body>
</html>