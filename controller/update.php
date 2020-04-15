<?php
//require_once("../classes/crud.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'];
    $username = $_POST['username'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];

    $password = null;
    $created_by = null;
    $age = $_POST['age'];
    $salary = $_POST['salary'];
    $phone = $_POST['phone'];
    $status = '1';
    $created_at = date("Y-m-d H:i:s");
    $updated_at = null;


//    $user = $_POST['id'];
//    $first_name = $_POST['first_name'];
//    $last_name = $_POST['last_name'];
//    $email = $_POST['email'];
}
else{
    echo 'Server Say Bad Request';
    exit();
}
require_once ('../classes/crud.php');
$crud = new crud();
$update = $crud->update('employees' ,$id,$username,$full_name,$email,$password,$created_by,$age,$salary,$phone,$status,$created_at,$updated_at);
if ($update === true) {
    echo "Record Updated successfully";
    header("location:http://localhost/employees/view/list_users.php");
}
else
{
    header("location:http://localhost/employees/view/list_users.php");
     echo "Error updating record: ";

}
?>