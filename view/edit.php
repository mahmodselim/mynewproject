
<?php
require_once('../controller/edit.php');
?>

<!DOCTYPE HTML>
<html>
<body>
<?php foreach ($result as $row):?>

<form action="../controller/update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']?>">
    username: <input type="text" name="name" value="<?php echo $row['username']?>">
    <br>
    full_name : <input type="text" name="full_name" value="<?php echo $row['full_name']?>">
    <br>
    email: <input type="text" name="email" value="<?php echo $row['email']?>">
    <br>

    phone: <input type="tel" name="phone" value="<?php echo $row['phone']?>">
<br>
    age: <input type="number" name="age" value="<?php echo $row['age']?>">
    <br>
    salary: <input type="number" name="salary" value="<?php echo $row['salary']?>">

    <br>
    <input type="submit" value="update">
</form>
<?php endforeach;?>
</body>
</html>


