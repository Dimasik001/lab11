<h1 align= "center"> МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ОБРАЗОВАНИЯ «САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ»</h1>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<p align= "center">Лабораторная работа №13</p><br><br><br><br><br><br><br><br>
<p align= "right">Выполнил: Андреев Д.В.</p><br><br><br><br><br><br><br><br>
<p align="center">г. Южно-Сахалинск <br> 2023 год</p><br><br><br><br><br><br><br><br>
<h2 style="text-align: center">Введение</h2>
<p align="justify">PHP (рекурсивный акроним словосочетания PHP: Hypertext Preprocessor) - это распространённый язык программирования общего назначения с открытым исходным кодом. PHP специально сконструирован для веб-разработок и его код может внедряться непосредственно в HTML.PHP отличается от JavaScript тем, что PHP-скрипты выполняются на сервере и генерируют HTML, который посылается клиенту. Если бы у вас на сервере был размещён скрипт, подобный вышеприведённому, клиент получил бы только результат его выполнения, но не смог бы выяснить, какой именно код его произвёл. Вы даже можете настроить свой сервер таким образом, чтобы обычные HTML-файлы обрабатывались процессором PHP, так что клиенты даже не смогут узнать, получают ли они обычный HTML-файл или результат выполнения скрипта.</p>
<h2 style="text-align: center">Цели и задачи</h2>
<ol align="justify"> <br>
<h2 align="center">Цели и задачи</h2>
1.	Спросите город пользователя с помощью формы. Результат запишите в переменную $city. Выведите на экран фразу 'Ваш город: %Город%'. <br>
2.	Решите предыдущую задачу так, чтобы пользователь не мог вводить теги и сломать сайт. <br>
3.	Сделайте так, чтобы форма после отправки скрывалась. <br>
4.	Спросите имя пользователя с помощью формы. Результат запишите в переменную $name. Выведите на экран фразу 'Привет, %Имя%'. <br>
5.	Спросите у пользователя имя, возраст, а также попросите его ввести сообщение (его сделайте в textarea). Выведите эти данные на экран в формате, приведенном под данной задачей. Позаботьтесь о том, чтобы пользователь не мог вводить теги (просто удаляйте их) и таким образом сломать сайт. <br>
6.	Спросите возраст пользователя. Если форма была отправлена и введен возраст, то выведите его на экран, а форму уберите. Если же форма не была отправлена (это будет при первом заходе на страницу) - просто покажите ее. <br>
7.	Спросите у пользователя логин и пароль (в браузере должен быть звездочками). Сравните их с логином $login и паролем $pass, хранящихся в файле. Если все верно - выведите 'Доступ разрешен!', в противном случае - 'Доступ запрещен!'. Сделайте так, чтобы скрипт обрезал концевые пробелы в строках, которые ввел пользователь. <br>
8.	Спросите имя пользователя с помощью формы. Результат запишите в переменную $name. Сделайте так, чтобы после отправки формы значения ее полей не пропадали. <br>
9.	Спросите у пользователя имя, а также попросите его ввести сообщение (textarea). Сделайте так, чтобы после отправки формы значения его полей не пропадали. <br>
10.	Дана строка 'ahb acb aeb aeeb adcb axeb'. Напишите регулярку, которая найдет строки ahb, acb, aeb по шаблону: буква 'a', любой символ, буква 'b'. <br>
11.	Дана строка 'aba aca aea abba adca abea'. Напишите регулярку, которая найдет строки abba adca abea по шаблону: буква 'a', 2 любых символа, буква 'a'. <br>
12.	Дана строка 'aba aca aea abba adca abea'. Напишите регулярку, которая найдет строки abba и abea, не захватив adca. Дана строка 'aa aba abba abbba abca abea'. Напишите регулярку, которая найдет строки aba, abba, abbba по шаблону: буква 'a', буква 'b' любое количество раз, буква 'a'.  <br>
13.	 Дана строка 'aa aba abba abbba abca abea'. Напишите регулярку, которая найдет строки aa, aba, abba, abbba по шаблону: буква 'a', буква 'b' любое количество раз (в том числе ниодного раза), буква 'a'.  <br>
14.	 Дана строка 'aa aba abba abbba abca abea'. Напишите регулярку, которая найдет строки aa, aba по шаблону: буква 'a', буква 'b' один раз или ниодного, буква 'a'.  <br>
15.	Дана строка 'ab abab abab abababab abea'. Напишите регулярку, которая найдет строки по шаблону: строка 'ab' повторяется 1 или более раз.  <br>
16.	Дана строка 'a.a aba aea'. Напишите регулярку, которая найдет строку a.a, не захватив остальные.  <br>
17.	 Дана строка '2+3 223 2223'. Напишите регулярку, которая найдет строку 2+3, не захватив остальные.  <br>
18.	 Дана строка '23 2+3 2++3 2+++3 345 567'. Напишите регулярку, которая найдет строки 2+3, 2++3, 2+++3, не захватив остальные (+ может быть любое количество).  <br>
19.	 Дана строка '23 2+3 2++3 2+++3 445 677'. Напишите регулярку, которая найдет строки 23, 2+3, 2++3, 2+++3, не захватив остальные.  <br>
20.	 Дана строка '*+ *q+ *qq+ *qqq+ *qqq qqq+'. Напишите регулярку, которая найдет строки *q+, *qq+, *qqq+, не захватив остальные.  <br> 
21.	 Дана строка '*+ *q+ *qq+ *qqq+ *qqq qqq+'. Напишите регулярку, которая найдет строки *+, *q+, *qq+, *qqq+, не захватив остальные.  <br>
22.	Дана строка 'aba accca azzza wwwwa'. Напишите регулярку, которая найдет все строки по краям которых стоят буквы 'a', и заменит каждую из них на '!'. Между буквами a может быть любой символ (кроме a).  <br>

    <br>
<a href="#">1 задание</a><br>
<?php
if (isset($_REQUEST['city'])) {
    $city = $_REQUEST['city'];
    echo 'Ваш город, ' . $city;
}
?>
<form action="" method="get">
    <input type="text" name="city" placeholder="Введите город">
    <input type="submit">
</form>
<br>

<a href="#">2 задание</a><br>

<?php
if (isset($_REQUEST['input'])) {
    $input = $_POST['input'];
    $clean_input = strip_tags($input);
}
?>
<form action="" method="get">
    <input type="text" name="city" >
    <input type="submit">
</form>

<br>
<a href="#">3 задание</a><br>
<?php
	if (empty($_GET)) {
?>
	<form action="" method="GET">
		<input name="test1">
		<input type="submit">
	</form>
<?php
	} else {
        ?>
		<form action="" method="GET">
		<input type="submit">
	    </form>
        <?php
	}
?>



<br>
<a href="#">4 задание</a><br>
<?php
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
<?php
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
<?php
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

<br>
<a href="#">7 задание</a><br>
<?php
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
<?php
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
<?php
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
<?php
echo preg_replace('#a.b#', 'a-b', 'ahb acb aeb aeeb adcb axeb');
?>
<br>
<a href="#">11 задание</a><br>
<?php
echo preg_replace('#a..a#', 'a--a', 'aba aca aea abba adca abea');
?>
<br>
<a href="#">12 задание</a><br>
<?php
echo preg_replace('#ab.a#', '+', 'aba aca aea abba adca abea') ; 
?>
<br>
<?php
echo preg_replace('#ab+a#', '-', 'aa aba abba abbba abca abea');
?>
<br>
<a href="#">13 задание</a><br>
<?php
 echo preg_replace('#ab*a#', '-', 'aa aba abba abbba abca abea');
?>
<br>
<a href="#">14 задание</a><br>
<?php
 echo preg_replace('#ab?a#', '+', 'aa aba abba abbba abca abea');
?>
<br>
<a href="#">15 задание</a><br>
<?php
 echo preg_replace('#(ab)+#', '+', 'ab abab abab abababab abea');
?>
<br>
<a href="#">16 задание</a><br>
<?php
 echo preg_replace('#a\.a#', '%', 'a.a aba aea');
?>
<br>
<a href="#">17 задание</a><br>
<?php
 echo preg_replace('#2\+3#', 'тут', '2+3 223 2223');
?>
<br>
<a href="#">18 задание</a><br>
<?php
 echo preg_replace('#2\++3#', 'тут', '23 2+3 2++3 2+++3 345 567')
?>
<br>
<a href="#">19 задание</a><br>
<?php
echo preg_replace('#2\+*3#', 'тут', '23 2+3 2++3 2+++3 445 677');
?>
<br>
<a href="#">20 задание</a><br>
<?php
echo preg_replace('#\*q+\+#', 'тут', '*+ *q+ *qq+ *qqq+ *qqq qqq+');
?>
<br>
<a href="#">21 задание</a><br>
<?php
echo preg_replace('#\*q*\+#', 'здесь', '*+ *q+ *qq+ *qqq+ *qqq qqq+');
?>
<br>
<a href="#">22 задание</a><br>
<?php
echo preg_replace('#a.+?a#', '+', 'aba accca azzza wwwwa');
?>



 <div class="heading">
 
</div>


   <h2 style="text-align: center">ВЫВОД</h2>
    PHP крайне прост для освоения, но вместе с тем способен удовлетворить запросы профессиональных программистов. Не пугайтесь длинного списка возможностей PHP. Вы можете быстро начать, и уже в течение нескольких часов сможете создавать простые PHP-скрипты.

Хотя PHP, главным образом, предназначен для работы в среде веб-серверов, область его применения не ограничивается только этим. Читайте дальше и не пропустите главу Возможности PHP либо, начните непосредственно с Вводного руководства, если вас интересует исключительно веб-программирование.
