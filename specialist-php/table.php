<?php 

include 'includes/header.php';

$cols = 10;
$rows = 10;
$bakcground = 'red';





function multiplyTable ($cols=10, $rows=10, $bakcground='red'){

echo "<div class=\"container mt-5\">";
    echo "<table class=\"table table-bordered\">";
        echo "<tbody>";
            static $x = 0;// here we use static just to see how many times we called the function 
            $x++;
            echo "<h2>The table was drawn $x number of times</h2>";
            for($tr=1; $tr <= $rows; $tr++){
                echo "<tr>";
                    for($td=1; $td <= $cols; $td++){
                        if($tr == 1 || $td == 1)
                            echo "<th style='background:$bakcground;'>" . $tr * $td . "</th>";
                        else
                            echo "<td>" . $tr * $td . "</td>";
                    }
                echo "</tr>";
            }
        echo "</tbody>";
    echo "</table>";

echo "<div>";
}

multiplyTable();
multiplyTable(5,5,'red');


    

include 'includes/footer.php';
