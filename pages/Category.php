<?php
require_once('dbconnect.php');


$result=$dbh->query("SELECT * FROM bestgoods"); 
    foreach ($result as $value) {
  echo '<a href="SelectedMenu.php?cat_id='.$value['id'].'">';
  echo '<div class="GalleryFacePHP">';
  echo '<div class="Elemet">';
  echo '<div class="title">';
  echo '<span>'.$value['title'].'</span> </div>';
  echo '<img src="'.$value['img'].'/'.$value['name'].'" alt=""></div>';
  echo '</div>';
  echo '</a>';

} 
$dbh='';
?>
