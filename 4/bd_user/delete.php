<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<?php
 $conn = mysqli_connect("eu-cdbr-west-01.cleardb.com","b82a476b3b9e9d","0de723ba", "heroku_3e0e4fe3001638d") or die ("?????????? ???????????? ? ???????");
 $zapros="DELETE FROM user WHERE id_user=" . $_GET['id_user'];
 mysqli_query($conn, $zapros);
 header("Location: index.php");
 exit;
?>