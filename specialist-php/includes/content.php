
<?php setlocale(LC_ALL, "russian");
    $day = strftime('%d');
    $mon = strftime('%B');
    $mon = iconv('windows-1251', 'utf-8', $mon);
    $year = strftime('%Y');
    
    $dob = " My date of birth is ". ($year - 1986) . " \n\t  years away from today";
    $hi = "Здравствуй";
    $len = mb_strlen($hi);
    
    $x = '10 Hello true';
    
    // added if logic 
    include 'if.php';
    
?>



    <h1>Hello, world!</h1>
    
    
    <h2>This is <?= $mon?></h2>
    <h2><?= $dob?></h2>
    <h3><?= $len ?></h3>
    <h3>Rerurn the # from the string: '(int)$x': <?= (int)$x .' from var ' . $x ?></h3>
    <h3>Rerurn the # from the string: '(str)$x': <?= (string)$x .' from var ' . $x ?></h3>
    <h3>Rerurn the # from the string: '(str)$x': <?= (bool)$x .' from var ' . $x ?></h3>
    <h2><?= $welcome?>, Guest</h2>