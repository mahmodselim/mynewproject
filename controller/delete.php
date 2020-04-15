<?php
 //check if method get id name
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // collect value of input field
    if (empty($_GET['id'])) {
        echo "Id is empty";
        exit();
    }
    if(filter_var($_GET['id'], FILTER_VALIDATE_INT) === FALSE){
        echo 'Wrong Data Entry ';
        exit();
    }
    $id = $_GET['id'];


}
else{
    echo 'Server Say Bad Request';
    exit();
}

 require_once ('../classes/crud.php');

      $crud = new crud();
     $delete = $crud->delete($id,'employees' );
    if ($delete === true) {
        echo "Record DELETED successfully";
        header("location:http://localhost/employees/view/list_users.php");
    }
 else
{
    echo "Error  delete record: ";

}
?>