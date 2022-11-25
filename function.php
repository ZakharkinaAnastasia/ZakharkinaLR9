<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset = "UTF-8">
    <link rel = 'stylesheet' href = 'style.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nabla&family=Open+Sans:ital,wght@0,400;0,500;1,400;1,500&family=Poppins&display=swap" rel="stylesheet">
    <?php require "name.php"; ?>
</head>

<body>
<div class="header">
    <div class="container">
        <div class="header-line">
            
                <img src="logo.png" alt="a photo" id="logo-poly" height="50" margin-right="35px">
                <a class="nav-item" href="index.php">Главная</a>
                <a class="nav-item" href="#contact">Контакты</a>
                <!--<a class="nav-item" href="math.php">Математика</a>-->
                <a class="nav-item" href="function.php">Функция</a>
                <!--<a class="autorization" href="authorization.php">Авторизация</a>-->
                <a class="nav" href="<?php 

                    $name='Авторизация'; 
                    $link='authorization.php'; 
                    $current_page=true; 

                    echo $link; 

                ?>"><?php 

                    if( $current_page ) 
                        echo $name;
            
                ?></a>
           
        </div>
    </div>    
</div>

    <div class="header-down">
        <section>
        <div class="content">
            <img src="img/function.png" alt=""><br>
        

        <?php 
            $x = 25;
            $encounting = 10;
            $step = 2;
            $type = 'C';
            
            $min_value = 10;
            $max_value = 20;
            $sum = 0;
            $max_value_func = -200;
            $min_value_func = 200;


            if ($type == 'B') {
                echo '<ul>';
            }
            if ($type == 'C') {
                echo '<ol>';
            }
            if ($type == 'D') {
                echo '<table class="func_table" border=1"><tr><th>N</th><th>Аргумент</th><th>Значение функции</th></tr>';
            }
            if ($type == 'E') {
                echo '<div class="block_func">';
            }
            

            
            $i = 0;
            $f = 0;
            while ($i < $encounting && ($f >= $max_value || $f <= $min_value)) {

                if ($x <= 10){
                    $f = 10*$x - 5;
                }
                else if ($x < 20){
                    $f = ($x + 3) * $x*$x;
                }
                else {
                    if ($x - 25 == 0){ 
                        $f = 'error';
                    }
                    else {
                        $f = 3 / ($x - 25);
                    }
                }

                if ($f > $max_value_func & $f != 'error') {
                    $max_value_func = $f;
                }

                if ($f < $min_value_func & $f != 'error') {
                    $min_value_func = $f;
                }

                if ($type == 'A') { 
                    if ($f == 'error') {
                        echo 'f('.$x.')='.$f.'<br>';
                    }
                    else {
                        echo 'f('.$x.')='.round($f, 3).'<br>';
                    }
                }        
                else if ($type == 'B' || $type == 'C') {
                    if ( $f == 'error'){
                        echo '<li>f('. $x.')='.$f.'</li>';
                    }
                    else{
                    echo '<li>f('. $x.')='.round($f, 3).'</li>';
                    }
                }  
                else if ($type == 'D') {
                    if ($f != 'error') {
                        echo '<tr><td>'.$i + 1 .'</td><td>'.$x.'</td><td>'.round($f, 3).'</td></tr>';
                    }
                    else {
                        echo '<tr><td>'.$i + 1 .'</td><td>'.$x.'</td><td>'.$f.'</td></tr>';

                    }
                } 
                else if ($type == 'E') {
                    if ($f == 'error') {
                        echo '<div class="block_func-item">f('. $x.')='.$f.'</div>';
                    }
                    else {
                        echo '<div class="block_func-item">f('. $x.')='.round($f, 3).'</div>';
                    }
                }

                if ($f != 'error'){
                    $sum += round($f, 3);
                }
                $i++; $x += $step;

            }

            if ($type == 'B') {
                echo '</ul>';
            }

            if ($type == 'С') {
                echo '</ol>';
            }

            if ($type == 'D') {
                echo '</table>';
            }
            if ($type == 'E') {
                echo '</div>';
            }

            echo '<div class="func_const">Максимальное значение: '.round($max_value_func, 3).'<br>';
            echo 'Минимальное значение: '. round($min_value_func, 3).'<br>';

            echo 'Сумма всех значений f: '. round($sum, 3).'<br>';
            echo 'Среднее значение: '.round($sum / $i, 3). '</div>';
            echo 'Тип верстки: '.$type;

        ?>
        </div>
        </div>

    <div class="footer">
    <div class="header-line">
        <p class="foot" id = "email">Почта: nastzah03@inbox.ru</p>
        <p class="foot" id = "contact">Телефон: 89160775180</p>
        <!--<a class="nav" href="communication.php">Обратная связь</a>-->
        <a class="nav" href="<?php 

                    $name='Обратная связь'; 
                    $link='communication.php'; 
                    $current_page=true; 

                    echo $link; 

                ?>"><?php 

                    if( $current_page ) 
                        echo $name;
            
                ?></a>
        <p class = "foot" id = "date"><?php require "date.php" ?></p>
    </div>   
</div>
</body>  
</html>