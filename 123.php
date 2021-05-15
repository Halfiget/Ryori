<h1>Добавить элемент меню</h1>

<form action="pages/New-Goods.php" method="post" enctype="multipart/form-data">
<input type="text" name="name">
        <input type="text" name="desckription">
        <input type="number" name="price" min="1">
        <input type="file" name="file">
        
    <select class="" name="category">
        
    <?php
    
    $result=$dbh->query("SELECT * FROM category");
    foreach ($result as $value){
        echo '<option name="cat1" value="'.$value['id'].'">'.$value['name'].'</option>';
    }
    ?>
    </select>
       
        


</form>