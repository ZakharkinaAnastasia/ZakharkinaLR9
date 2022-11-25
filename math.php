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
            <h1 class="h">Домашняя страница</h1>
            
                <a class="nav-item" href="index.php">Главная</a>
                <a class="nav-item" href="#contact">Контакты</a>
                <a class="nav-item" href="math.php">Математика</a>
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
    <script>
        alert("Возведение в степень");
        let enter_x = prompt("Введите x", "");
        let enter_n = prompt("Введите n", "");
        function pow(x, n) {
  			let answer = x;
  			for (let i = 1; i < n; i++) {
    				answer *= x;
  			}
  		    return answer;
		}
		let answer_1 = pow(enter_x, enter_n);
		alert(`Возведение ${enter_x} в степень ${enter_n}: ${answer_1}`);

        alert("Наибольший общий делитель");
        let enter_a = prompt("Введите a", "");
        let enter_b = prompt("Введите b", "");
        function gcd(a, b){
            let answer = 1;
            for (let i = 2; i <= a; i ++){
                if ((a % i == 0) & (b % i == 0)){
                    answer = i;
                }
            }
            return answer;
        }
        let answer2 = gcd(enter_a, enter_b);
        alert(`Наибольший общий делитель ${enter_a} и ${enter_b}: ${answer2}`);

        alert("Минимальная цифра числа");
        let enter_number = prompt("Введите x", "");
        function minDigit (x){
            let answer = 9;
            while (x > 0){
                if ((x % 10) < answer){
                    answer = x % 10;
                }
                x = Math.floor(x/10);
            }
            return answer;
        }
        let answer3 = minDigit(enter_number);
        alert(`Наименьшая цифра ${enter_number}: ${answer3}`); 

        alert("Количество записей");
        let number = prompt("Введите n", "");

        function pluralizeRecords(n, was){
                    n = Math.abs(n) % 100; 
                    let n1 = n % 10;
                    if ((n != 11) && (n1 == 1)) {
                        return was[1];
                    }
                    return was[0];
                }
        answerRecord = pluralizeRecords(number, ['было найдено', 'была найдена']);

        function pluralization (n, words){
            n = Math.abs(n) % 100; 
    		var n1 = n % 10;
    		if (n > 10 && n < 20) { 
                return words[2]; 
            }
    		if (n1 > 1 && n1 < 5) { 
                return words[1]; 
            }
    		if (n1 == 1) { 
                return words[0]; 
            }
    		return words[2];
        }
        answer4 = pluralization(number, ['запись', 'записи', 'записей']);
        alert(`В результате выполнения запроса ${answerRecord} ${number} ${answer4}`);

        alert("Элемент ряда Фибоначчи");
        let last_number = prompt("Введите n", "");
        function fibb(n){
			let last = 0, next = 1;
  			for(let i = 0; i < n; i++){
    			let current = next;
    			next = last + next;
    			last = current;
  			}
  		return last;
		}
		answer5 = fibb(last_number);
		alert(`Число Фибоначчи ${last_number}: ${answer5}`);	
    </script>
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