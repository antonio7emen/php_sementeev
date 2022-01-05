<?php
 session_start(); //Инициализируем сессию

 mysql_connect("localhost", "root") or die ("Невозможно подключиться к серверу!"); //Подключаемся к базе данных
 mysql_query('SET NAMES cp1251');
 mysql_select_db("os") or die("База данных отсутствует!");

 if($_SERVER["REQUEST_METHOD"] == "POST") { //Если запрос был выполнен через форму(POST), то проверяем корректность имени пользователя и пароля
  $query=mysql_query("SELECT username, type FROM users WHERE username='".$_POST["username"]."' AND password='".md5($_POST["password"])."'");
  if($fetch = mysql_fetch_array($query)) { //Если имя пользователя и пароль есть в базе данных, то добавляем переменные сессии
   $_SESSION["username"] = $fetch["username"];
   $_SESSION["type"] = $fetch["type"];
   $_SESSION["count"] = 0;
  }
  else { //Если имя пользователя и пароль не найдены в базе данных, то сообщаем 
   echo "<html><head><title>Авторизация</title></head><body>";
   echo "Неверное имя пользователя или пароль!<br>";
   echo "<p><a href='.'> Вернуться </a>";
  }
 }
 elseif(!$_SESSION["username"]) { //Если запрос был выполнен через ссылку(GET) и переменная сессии пуста, значит выводим форму авторизации 
  echo "<html><head><title>Авторизация</title></head><body>";
  echo "<h1 align='center'>Операционные системы</h1>";
  echo "<div align='center'><form method='post' action='". $PHP_SELF ."'>";
  echo "<p>Пользователь:</p><input type='text' name='username' size='16'>";
  echo "<p>Пароль:</p><input type='password' name='password' size='16'><br><br>";
  echo "<input type='submit' name='submit' value='Войти'></form></div>";
 }

 if($_SESSION["username"]) { //Если сессия активна, выводим интерфейс базы данных
  $query=mysql_query("SELECT type FROM users WHERE username='" . $_SESSION["username"] . "'");
  if($fetch = mysql_fetch_array($query)) $_SESSION["type"] = $fetch["type"];

  echo "<html><head><title>" . $_SESSION["username"] . "</title></head><body>"; //Меняем название вкладки на имя пользователя
  echo "<h2>Операционные системы:</h2>";
  echo "<table border='1'>";
  echo "<tr><th>id</th><th>Название</th><th>Оборудование</th><th>Разрядность</th>";
  echo "<th>Разработчик</th><th>Пользователей, млн.</th><th>Редактировать</th>";
  if($_SESSION["type"] == 2) echo "<th>Уничтожить</th>";
  echo "</tr>";
  $query=mysql_query("SELECT * FROM os");
  while($fetch=mysql_fetch_array($query)) {
   echo "<tr><td>" . $fetch["id"] . "</td>";
   echo "<td>" . $fetch["name"] . "</td>";
   echo "<td>" . $fetch["equipment"] . "</td>";
   echo "<td>" . $fetch["bitness"] . "</td>";
   echo "<td>" . $fetch["developer"] . "</td>";
   echo "<td>" . $fetch["population"] . "</td>";
   echo "<td><a href='edit_os.php?&id=" . $fetch["id"] . "'>Редактировать</a></td>";
   if($_SESSION["type"] == 2) echo "<td><a href='delete_os.php?id=" . $fetch["id"]. "'>Удалить</a></td>";
   echo "</tr>";
  }
  echo "</table><br>";
  $num_rows = mysql_num_rows($query);
  echo "Всего записей: " . $num_rows . " ";
  echo "<a href='new_os.php'>Добавить запись</a>";

  echo "<h2>Цифровые магазины:</h2>";
  echo "<table border='1'>";
  echo "<tr><th>id</th><th>Название</th><th>URL</th><th>Редактировать</th>";
  if($_SESSION["type"] == 2) echo "<th>Уничтожить</th>";
  echo "</tr>";
  $query=mysql_query("SELECT * FROM ds");
  while($fetch=mysql_fetch_array($query)) {
   echo "<tr><td>" . $fetch["id"] . "</td>";
   echo "<td>" . $fetch["name"] . "</td>";
   echo "<td>" . $fetch["url"] . "</td>";
   echo "<td><a href='edit_ds.php?&id=" . $fetch["id"] . "'>Редактировать</a></td>";
   if($_SESSION["type"] == 2) echo "<td><a href='delete_ds.php?id=" . $fetch["id"]. "'>Удалить</a></td>";
   echo "</tr>";
  }
  echo "</table><br>";
  $num_rows = mysql_num_rows($query);
  echo "Всего записей: " . $num_rows . " ";
  echo "<a href='new_ds.php'>Добавить запись</a>";

  echo "<h2>Цифровые ключи:</h2>";
  echo "<table border='1'>";
  echo "<tr><th>id</th><th>Дата приобретения</th><th>Дата окончания</th>";
  echo "<th>id ОС</th><th>id Цифрового магазина</th><th>Стоимость, $";
  echo "</th><th>Ключ</th><th>Редактировать</th>";
  if($_SESSION["type"] == 2) echo "<th>Уничтожить</th>";
  echo "</tr>";
  $query=mysql_query("SELECT * FROM dk");
  while($fetch=mysql_fetch_array($query)) {
   echo "<tr><td>" . $fetch["id"] . "</td>";
   echo "<td>" . $fetch["date_in"] . "</td>";
   echo "<td>" . $fetch["date_out"] . "</td>";
   echo "<td>" . $fetch["id_os"] . "</td>";
   echo "<td>" . $fetch["id_ds"] . "</td>";
   echo "<td>" . $fetch["price"] . "</td>";
   echo "<td>" . $fetch["key"] . "</td>";
   echo "<td><a href='edit_dk.php?&id=" . $fetch["id"] . "'>Редактировать</a></td>";
   if($_SESSION["type"] == 2) echo "<td><a href='delete_dk.php?id=" . $fetch["id"]. "'>Удалить</a></td>";
   echo "</tr>";
  }
  echo "</table><br>";
  $num_rows = mysql_num_rows($query);
  echo "Всего записей: " . $num_rows . " ";
  echo "<a href='new_dk.php'>Добавить запись</a>";
  

  if($_SESSION["type"] == 2) {
   echo "<h2>Пользователи:</h2>";
   echo "<table border='1'>";
   echo "<tr><th>Имя пользователя</th><th>Пароль</th><th>Права доступа</th>";
   echo "<th>Редактировать</th><th>Уничтожить</th></tr>";
   $query=mysql_query("SELECT username, password, type FROM users");
   while($fetch=mysql_fetch_array($query)) {
    echo "<tr><td>" . $fetch["username"] . "</td>";
    echo "<td>" . $fetch["password"] . "</td>";
    echo "<td>" . $fetch["type"] . "</td>";
    echo "<td><a href='edit_users.php?username=" . $fetch["username"] . "'>Редактировать</a></td>";
    echo "<td><a href='delete_users.php?username=" . $fetch["username"]. "'>Удалить</a></td></tr>";
   }
   echo "</table><br>";
   
   $num_rows = mysql_num_rows($query);
   echo "Всего записей: " . $num_rows . " ";
   echo "<a href='new_users.php'>Добавить запись</a>";
  }

  echo "<br><br>";
  echo "<a href='gen_pdf.php'> Сохранить PDF </a><br>";
  echo "<a href='gen_xls.php'> Сохранить Excel </a><br>";
  
  $_SESSION["count"]++;
  echo "<br><br><br><br>Количество подключений за сессию: " . $_SESSION["count"];
  echo "<br><a href='exit.php'>Выход</a>"; //Запуск скрипта удаления сессии
 }
?>