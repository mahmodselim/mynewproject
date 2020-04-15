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


}else{
    echo 'Server Say Bad Request';
    exit();
}
require_once ('../classes/crud.php');
$crud = new crud();
$result = $crud->edit($id,'*','employees' );


//require_once('../classes/db.php');connection
//$conn = null;
    // make object from database
//$DBObj= new db;
//$conn =  $DBObj->connect();
// make select query on myguests table
//$stmt = $conn->prepare("SELECT * FROM  myguests WHERE id ={$id}");
// execute query statement
//$stmt->execute();
// fetch all data
//$result = $stmt->fetchAll();
//if(count($result) < 1){
 //   echo 'This Data Not Found';
 //   exit();
//}
// close database connection
//$conn = null;
//var_dump($result);

        // include view html here to pass data
//  include "view.php";
?>
