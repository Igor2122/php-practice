<?php 

$logo = 'img/igdeveloperslogo.png';


$leftMenu = [
        ['link'=>'Home', 'href' => 'index.php'],
        ['link'=>'About', 'href' => 'about.php'],
        ['link'=>'Contacts', 'href' => 'contact.php'],
        ['link'=>'Multiply Table', 'href' => 'table.php'],
        ['link'=>'Forms', 'href' => 'forms.php'],
        ['link'=>'Calculator', 'href' => 'calc.php'],
        ['link'=>'Test', 'href' => 'test/index.php'],
        ['link'=>'Guest Book', 'href' => 'gbook/gbook.php'],
        ];  

    
    function drawMenu ($menuArray, $id=''){
        echo "<div id='$id'>";
            echo "<h2>Навигация по сайту</h2>";
                echo "<ul>";
                foreach($menuArray as $link){
                  echo "<li>";
                    echo "<a href='{$link['href']}'>{$link['link']}</a>";
                  echo "</li>";
                }
            echo "</ul>";
        echo "</div>";
    }   

    
