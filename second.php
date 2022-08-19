<!DOCTYPE html>
<html>
<head>
<title>Rojam kirana pasal</title>
</head>
<body>
<?php
    function evaluate($name,$attendance,$hygiene,$rating) {
        if($attendance<80 || $hygiene<50 || $rating<2){
        echo("...>".$name." , Are you fired  from rojan kirana pasal!");
        br();

    }
    else if ($hygiene<50 && $rating<2){
            echo($name.",Are you fired from rojan kirana pasal!");
            br();
    }
    else {
        echo("...>".$name. ,"Not fired.");
    }
}

echo("condition 1 ");
evaluate("kusal karki",90,60,3);
evaluate("rojan panta",30,20,1);


echo("condition 2 ");
evaluate("sohan shrestha",70,40,1);
evaluate("vijan shrestha",70,90,6);


echo("condition 3 ");
evaluate("Amrit gurung",30,60,1);
evaluate("sohan shrestha",70,80,3);

echo("condition 4 ");
evaluate("dhiraj karki",30,40,1);
evaluate("dohan shrestha",70,60,5);
br();

echo("condition 5 ");
evaluate("anup shresth",80,60,5);
evaluate("rohan shrestha",70,40,1);
br();

function br(){
    echo("<br>");
}

?>
</body>
</html>
