<?php
require_once('header.php');
require_once('dbconnect.php');
?>

<?php


    $cat=$_GET['cat_id'];
    $result=$dbh->prepare("SELECT * FROM food WHERE category_id = '$cat'");

  $result->execute();
$row = $result->fetchALL();
echo '<div class="AllMenuItems">';
foreach ($row as $value) {
  echo '<a href="#?cat_id='.$value['id'].'">';
  echo '<div class="MenuItems">';
  
  echo '<div class="title">';
  echo '<span>'.$value['name'].'</span> </div>';
  echo '<img src="'.$value['img'].'"></div>';
 
  echo '</a>';
}
echo '</div>';

?>




<?php
  require_once('footer.php');
?>



