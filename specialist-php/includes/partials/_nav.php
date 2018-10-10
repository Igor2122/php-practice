    <?php
      $leftMenu = [
        ['link'=>'Home', 'href' => 'index.php'],
        ['link'=>'About', 'href' => 'about.php'],
        ['link'=>'Contacts', 'href' => 'contacts.php'],
        ['link'=>'Multiply Table', 'href' => 'table.php'],
        ['link'=>'Functions', 'href' => 'functions.php'],
        ['link'=>'Calculator', 'href' => 'calclator.php'],
        ];  


        function drawMenu ($menuArray, $vertical=true){
          $style = '';
          if(!$vertical)
            $style = " style='display:inline; margin-right: 15px; '";
          echo "<ul>";
          foreach ($menuArray as $li) {
            echo "<li$style>";
            echo "<a href='{$li['href']}'>{$li['link']}</a>";
            echo "</li>";
          }
          echo "</ul>";
        }

    ?> 
    
      