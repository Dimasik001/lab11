<h1 align= "center"> МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ОБРАЗОВАНИЯ «САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ»</h1>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<p align= "center">Лабораторная работа №2</p><br><br><br><br><br><br><br><br>
<p align= "right">Выполнил: Андреев Д.В.</p><br><br><br><br><br><br><br><br>
<p align="center">г. Южно-Сахалинск <br> 2023 год</p><br><br><br><br><br><br><br><br>
<h2 style="text-align: center">Введение</h2>
<p align="justify">JavaScript ("JS" для краткости) — это полноценный динамический язык программирования, который применяется к HTML документу, и может обеспечить динамическую интерактивность на веб-сайтах. Его разработал Brendan Eich, сооснователь проекта Mozilla, Mozilla Foundation и Mozilla Corporation. JavaScript сам по себе довольно компактный, но очень гибкий. Разработчиками написано большое количество инструментов поверх основного языка JavaScript, которые разблокируют огромное количество дополнительных функций с очень небольшим усилием. JavaScript невероятно универсален и дружелюбен к новичкам. Обладая большим опытом, вы сможете создавать игры, анимированную 2D и 3D графику, полномасштабные приложения с базами данных и многое другое!</p>
<h2 style="text-align: center">Цели и задачи</h2>
<ol align="justify"> <br>
<h2 align="center">Цели и задачи</h2>
1.Что выведет этот скрипт?

let name = "Ilya";

alert( `hello ${1}` ); // ?

alert( `hello ${"name"}` ); // ?

alert( `hello ${name}` ); // ?
<br>
2. Создайте страницу, которая спрашивает имя у пользователя и выводит его.
<br>
3.Чему будут равны переменные a, b, c и d в примере ниже?

let a = 1, b = 1;
let c = ++a; // ?
let d = b++; // ?
<br>
4. Чему будут равны переменные a и x после исполнения кода в примере ниже?

let a = 2;
let x = 1 + (a *= 2);
<br>
5. Какой результат будет у выражений ниже?

"" + 1 + 0
"" - 1 + 0
true + false
6 / "3"
"2" * "3"
4 + 5 + "px"
"$" + 4 + 5
"4" - 2
"4px" - 2
7 / 0
"  -9  " + 5
"  -9  " - 5
null + 1
undefined + 1
" \t \n" – 2
<br>
6. Ниже приведён код, который запрашивает у пользователя два числа и показывает их сумму. Он работает неправильно. Код в примере выводит 12 (для значения полей по умолчанию). В чём ошибка? Исправьте её. Результат должен быть 3.

let a = prompt("Первое число?", 1);
let b = prompt("Второе число?", 2);
alert(a + b); // 12
<br>
7.  Вывести на экран число Пи с точностью до сотых.
<br>
8. Составить программу вывода на экран числа, вводимого с клавиатуры. Выводимому числу должно предшествовать сообщение "Вы ввели число".
<br>
9. Составить программу вывода на экран числа, вводимого с клавиатуры. После выводимого числа должно следовать сообщение " - вот какое число Вы ввели".
<br>
10. Дана сторона квадрата. Найти его периметр.
<br>
11. Дан радиус окружности. Найти ее диаметр.
<br>
12. Считая, что Земля — идеальная сфера с радиусом
R 6350 км, определить расстояние до линии горизонта от точки с заданной высотой над Землей.
<br>
13. Дана длина ребра куба. Найти объем куба и площадь его боковой поверхности.
<br>
14. Дан радиус окружности. Найти длину окружности и площадь круга.
<br>
15. Поменять местами значения двух переменных без использования дополнительной переменной.
<br>
16. Даны два целых числа. Найти: а) их среднее арифметическое; б) их среднее геометрическое.
<br>
17. Известны объем и масса тела. Определить плотность материала этого тела. 
<br>
18. Известны количество жителей в государстве и площадь его территории. Определить плотность населения в этом государстве.
<br>
19. Даны катеты прямоугольного треугольника. Найти его гипотенузу. 
<br>
20. Найти площадь кольца по заданным внешнему и внутреннему радиусам.
<br>
21. Даны катеты прямоугольного треугольника. Найти его периметр. 
<br>
22. Даны основания и высота равнобедренной трапеции. Найти ее периметр.


    <br>
<a href="#">1 задание</a><br>
<
if (isset($_REQUEST['city'])) {
    $city = $_REQUEST['city'];
    echo 'Ваш город, ' . $city;
}
>
<form action="" method="get">
    <input type="text" name="city" placeholder="Введите город">
    <input type="submit">
</form>


<a href="#">2 задание</a><br>

<
if (isset($_REQUEST['input'])) {
    $input = $_POST['input'];
    $clean_input = strip_tags($input);
}
>
<form action="" method="get">
    <input type="text" name="city" >
    <input type="submit">
</form>


<a href="#">3 задание</a><br>
<
	if (empty($_GET)) {
>
	<form action="" method="GET">
		<input name="test1">
		<input type="submit">
	</form>
<
	} else {
        ?>
		<form action="" method="GET">
		<input type="submit">
	    </form>
        <?php
	}
?>




<a href="#">4 задание</a><br>
<
if (isset($_REQUEST['name'])) {
    $name = $_REQUEST['name'];
    echo 'Привет, ' . $name;
}
?>
<form action="" method="get">
    <input type="text" name="name" placeholder="Введите имя">
    <input type="submit">
</form>
<br>
<a href="#">5 задание</a><br>
<
if (isset($_REQUEST['name']) and isset($_REQUEST['age']) and isset($_REQUEST['text'])) {
    $name = strip_tags($_REQUEST['name']);
    $age = strip_tags($_REQUEST['age']);
    $text = strip_tags($_REQUEST['text']);
    echo 'Имя - ' . $name .'<br>' . 'Возраст - ' . $age . '<br>Сообщение: ' . $text;
}
?>
<form action="" method="get">
    <input type="text" name="name" placeholder="Введите имя">
    <input type="text" name="age" placeholder="Введите возраст">
    <textarea name="text" id="" cols="10" rows="2" placeholder="Введите сообщение"></textarea>
    <input type="submit">
</form>
<br>
<a href="#">6 задание</a><br>
<
if (isset($_REQUEST['age'])) {
    $age = $_REQUEST['age'];
    echo $age;
}

if (!isset($_REQUEST['age'])):
    ?>
    <form action="" method="get">
        <input name="age" placeholder="Введите ваш возраст">
        <input type="submit">
    </form>
<?php endif; ?>


<a href="#">7 задание</a><br>
<
$loginFile = 'dimas';
$passwordFile = 1928;
if (isset($_REQUEST['login']) and isset($_REQUEST['password'])) {
    $login = trim($_REQUEST['login']);
    $password = trim($_REQUEST['password']);
    if ($login == $loginFile and $password == $passwordFile) {
        echo 'введено верно';
    } else {
        echo 'неверный логин или пароль';
    }
}
?>
<form action="" method="post">
    <input type="text" name="login" placeholder="Введите логин">
    <input type="password" name="password" placeholder="Введите пароль">
    <input type="submit">
</form>
<br>
<a href="#">8 задание</a><br>
<
$name = '';
if (isset($_REQUEST['name'])) {
    $name = $_REQUEST['name'];
    echo $name;
}
?>
<form action="" method="post">
    <input type="text" name="name" placeholder="Введите имя" value="<?=$name;?>">
    <input type="submit">
</form>
<br>
<a href="#">9 задание</a><br>
<
$message = '';
$name = '';
if (isset($_REQUEST['name']) and isset($_REQUEST['message'])) {
    $name = $_REQUEST['name'];
    $message = $_REQUEST['message'];
    echo 'Имя- ' . $name . '<br>' . $message;
}
?>
<form action="" method="post">
    <input type="text" name="name" placeholder="Имя" value="<?=$name;?>">
    <textarea name="message" id="" cols="10" rows="2" placeholder="сообщ"><?=$message;?></textarea>
    <input type="submit">
</form>
<br>
<a href="#">10 задание</a><br>
<
echo preg_replace('#a.b#', 'a-b', 'ahb acb aeb aeeb adcb axeb');
?>
<br>
<a href="#">11 задание</a><br>
<
echo preg_replace('#a..a#', 'a--a', 'aba aca aea abba adca abea');
?>
<br>
<a href="#">12 задание</a><br>
<
echo preg_replace('#ab.a#', '+', 'aba aca aea abba adca abea') ; 
?>
<br>
<
echo preg_replace('#ab+a#', '-', 'aa aba abba abbba abca abea');
?>
<br>
<a href="#">13 задание</a><br>
<
 echo preg_replace('#ab*a#', '-', 'aa aba abba abbba abca abea');
?>
<br>
<a href="#">14 задание</a><br>
<
 echo preg_replace('#ab?a#', '+', 'aa aba abba abbba abca abea');
?>
<br>
<a href="#">15 задание</a><br>
<
 echo preg_replace('#(ab)+#', '+', 'ab abab abab abababab abea');
?>
<br>
<a href="#">16 задание</a><br>
<
 echo preg_replace('#a\.a#', '%', 'a.a aba aea');
?>
<br>
<a href="#">17 задание</a><br>
<
 echo preg_replace('#2\+3#', 'тут', '2+3 223 2223');
?>
<br>
<a href="#">18 задание</a><br>
<
 echo preg_replace('#2\++3#', 'тут', '23 2+3 2++3 2+++3 345 567')
?>
<br>
<a href="#">19 задание</a><br>
<
echo preg_replace('#2\+*3#', 'тут', '23 2+3 2++3 2+++3 445 677');
?>
<br>
<a href="#">20 задание</a><br>
<
echo preg_replace('#\*q+\+#', 'тут', '*+ *q+ *qq+ *qqq+ *qqq qqq+');
?>
<br>
<a href="#">21 задание</a><br>
<
echo preg_replace('#\*q*\+#', 'здесь', '*+ *q+ *qq+ *qqq+ *qqq qqq+');
?>
<br>
<a href="#">22 задание</a><br>
<
echo preg_replace('#a.+?a#', '+', 'aba accca azzza wwwwa');
?>



 <div class="heading">
 
</div>


   <h2 style="text-align: center">ВЫВОД</h2>
    PHP крайне прост для освоения, но вместе с тем способен удовлетворить запросы профессиональных программистов. Не пугайтесь длинного списка возможностей PHP. Вы можете быстро начать, и уже в течение нескольких часов сможете создавать простые PHP-скрипты.

Хотя PHP, главным образом, предназначен для работы в среде веб-серверов, область его применения не ограничивается только этим. Читайте дальше и не пропустите главу Возможности PHP либо, начните непосредственно с Вводного руководства, если вас интересует исключительно веб-программирование.
