<!DOCTYPE html>
<html>
<head>
    <title>register form</title>
</head>
<body>
<form  method="post" action="../controller/insert.php" >
     username : <input type="text" name="username">
<!--    --><?php //if(isset($usernameErr)):php echo $full_nameErr;?><!--</span>-->

    <br><br>
    Full_name :  <input type="text" name="full_name">
    <br><br>

         Email :  <input type="email" name="email">

    <br><br>
        Phone :  <input type="tel" name="phone">

    <br><br>
          Age : <input type="number" min="1" max="120" name="age">

    <br><br>
       Salary :  <input type="number" min="1" name="salary" >

    <br><br>

      <input type="submit">

</form>


</body>
</html>