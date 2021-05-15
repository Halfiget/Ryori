<?php
$dsn = 'mysql:dbname=userbd;host=localhost'; $user = 'root'; $pass = 'root';
$dbh = null; $sth = null; $query = '';

    $dbh = new PDO(
        $dsn,
        $user,
        $pass,
        array( PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'" )
    );
    $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );


$result=$dbh->query("SELECT * FROM menu"); 
    foreach ($result as $value) {
  echo '<a href="SelectedMenu.php?cat_id='.$value['id'].'">';
  echo '<div class="MenuPHP">';
  echo '<div class="Elemet">';
  echo '<div class="title">';
  echo '<span>'.$value['title'].'</span> </div>';
  echo '<img src="'.$value['img'].'/'.$value['name'].'" alt=""></div>';
  echo '</div>';
  echo '</a>';

} 
$dbh='';
?>
