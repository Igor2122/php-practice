<?php 

include 'includes/header.php';

include 'includes/partials/_nav.php';


$cols = 10;
$rows = 10;
$bakcground = 'red';




include 'includes/footer.php';

echo "<div class=\"container \">";
    echo "<table class=\"table table-bordered\">";
        echo "<tbody>";
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




    

