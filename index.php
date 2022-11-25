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
                <a class="nav-item" href="#body">Главная</a>
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
    <div class="table">
    <table bordercolor="black" style="background-color:beige" border="3" align="center" cellpadding="10">
    <tr>
     <th>ФИО</th>
     <th>Университет</th>
     <th>Направление</th>
     <th>Курс</th>
     <th>Группа</th>
    </tr>
    <tr><td align="center">Захаркина Анастасия Денисовна</td>
        <td align="center">Московский политехнический университет</td>
        <td align="center">Корпоративные информационные системы</td>
        <td align="center">2</td>
        <td align="center">211-361</td>
    </tr>
    </table>
    </div>
    <div class="logo">
        <?php 
            $s = date('s');
            $os = $s % 2;

            if ($os === 0)
            $name = 'logo.png';
            else
            $name = 'logo1.png';

            echo '<img src = "'.$name.'" alt="Меняющаяся фотография" id = "body" height = 100px>';
        ?>
    </div>

    <div class = "list">
        <?php require "list.php"?>
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