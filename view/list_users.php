<?php require_once "../controller/list_users.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Table with database</title>

</head>
<body>
<a href="http://localhost/employees/view/add.php">new record</a>
<table style="border: black 2px;">
    <thead>
    <tr>
        <th>SN</th>
        <th>username</th>
        <th>full_name</th>
        <th>email</th>
        <th>phone</th>
        <th>age</th>
        <th>salary</th>
        <th>Salary after taxes</th>
        <th>status </th>
        <th>edit</th>
        <th>delete</th>

    </tr>
    </thead>
    <tbody>
    <?php  if (count($result) > 0):?>
<!--// output data of each row-->
        <?php $id = 0; ?>
       <?php foreach ($result as $row):?>
            <?php $id++; ?>
        <tr>
            <td><?php echo $id;?></td>
            <td><?php echo $row['username'];?></td>
            <td><?php echo $row['full_name'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['phone'];?></td>

            <td><?php echo $row['age'];?></td>
            <td><?php echo $row['salary'];?></td>
            <td><?php echo $row['salary after taxes'];?></td>
            <td><?php echo $row['status'];?></td>


            <td><a href="../view/edit.php?id=<?php echo $row['id'] ?>">Edit</a></td>
            <td><a href="../controller/delete.php?id=<?php echo $row['id'] ?>">Delete</a></td>
        </tr>
    <?php endforeach;?>
    <?php else:?>
    <p> No Data Found </p>
    <?php endif;?>
    </tbody>
</table>
</body>
</html>

