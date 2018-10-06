<?php 

    $students =  array(
        array(
            "name" => "Igor Pavlenko",
            "email id" => "igor_pavlneko@yahoo.com",
        ),
        array(
            "name" => "Archie",
            "email id" => "archie@gmail.com",
            ),
        );
        
        echo '<div class="students-div"><p> Student name: ' .$students[0]["name"] . '</p>';
        echo '<p> Student email: ' .$students[0]["email id"] . '</p></div>';
        
        
    


?>