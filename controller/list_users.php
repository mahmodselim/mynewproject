<?php
require_once('../classes/crud.php');
    // make object from database
$crud= new crud();
$result =  $crud->select('*','employees');

?>
