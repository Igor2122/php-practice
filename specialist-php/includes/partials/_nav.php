    <?php
    error_reporting(0);
      $leftMenu = [
        ['link'=>'Home', 'href' => 'index.php'],
        ['link'=>'About', 'href' => 'about.php'],
        ['link'=>'Contacts', 'href' => 'contacts.php'],
        ['link'=>'Multiply Table', 'href' => 'table.php'],
        ['link'=>'Functions', 'href' => 'functions.php'],
        ['link'=>'Forms', 'href' => 'forms.php'],
        ['link'=>'Calculator', 'href' => 'calclator.php'],
        ];  


        function drawMenu ($menuArray, $vertical=true){
          
          if (!is_array($menuArray)) 
            return false;
          
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

          return true;
        }

    
    ?> 
    
      