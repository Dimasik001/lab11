<!DOCTYPE html>
<html> 
<head> 
    <link rel="stylesheet" href="index.css">
<title>1</title>
</head>
<style>
body {
        background-image: url('q.jpg'); 
        background-repeat: no-repeat;
		text-align:center;
      }
</style>
   
   <div class="menu" >

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




</div>
<hr>
 <div class="heading">
 
</div>
</body>

</html> 