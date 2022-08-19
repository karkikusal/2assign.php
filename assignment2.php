<?php
    function evaluate($name,$attendance,$hygiene,$rating) {
        if($attendance<80 || $hygiene<50 || $rating<2){
        echo("...>".$name." , fire from rojan kirana pasal!");
        br();

    }
    else {
        echo("...>".$name. ,"Not fired.");
    }
}

echo("condition 1 <br>");
evaluate("kusal karki",90,60,3);

echo("condition 2 <br>");
evaluate("sohan shrestha",70,40,1);

echo("condition 3 <br>");
evaluate("Amrit gurung",30,60,3);

echo("condition 4 <br>");
evaluate("dhiraj karki",30,40,1);

echo("condition 5 <br>");
evaluate("anup shresth",80,60,5);

function br(){
    echo("<br>");
}

?>

