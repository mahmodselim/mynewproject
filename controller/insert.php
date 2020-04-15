<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $usernameErr = $full_nameErr = $emailErr = $phoneErr = $ageErr = $salaryErr = "";
    $username = $full_name = $email = $phone = $age = $salary = "";

    if (empty($_POST["username"])) {
        $usernameErr = "Name is required";
    } else {
        $username = test_input($_POST["username"]);

    }

    if (empty($_POST["full_name"])) {
        $full_nameErr = "full_name is required";
    } else {
        $full_name = test_input($_POST["full_name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "email is required";
    } else {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["phone"])) {
        $phoneErr = "phone is required";
    } else {
        $phone = test_input($_POST["phone"]);
    }

    if (empty($_POST["age"])) {
        $ageErr = "age is required";
    } else {
        $age = test_input($_POST["age"]);
    }

    if (empty($_POST["salary"])) {
        $salaryErr = "salary is required";
    } else {
        $salary = test_input($_POST["salary"]);

    }
    //if ((empty($_POST['username'])) || (empty($_POST['full_name'])) || (empty($_POST['email'])) || (empty($_POST['phone'])) || (empty($_POST['age'])) || (empty($_POST['salary'])))
    //     return false;
    // exit();


    // if (empty($_POST['id'])) {
    //    echo "Id is empty";
    //  exit();
    //  }


    //  if (filter_var($_POST['id'], FILTER_VALIDATE_INT) === FALSE) {
    //     echo 'Wrong Data Entry ';
    //  exit();
    // }

//
//
//    if (empty($_POST["username"])) {
//        $nameErr = "Name is required";
//    }
//
//
//        $full_name = $_POST['full_name'];
//
//        if (empty($_POST["full_name"])) {
//            $nameErr = "FullName is required";
//
//        }
//
//        // $email = $_POST['email'];
//
//
//        if (empty($_POST["email"])) {
//            $emailErr = "email is required";
//
//        }
//
//        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === FALSE) {
//            echo 'Wrong Data Entry ';
//            exit();
//        }
//        $phone = $_POST['phone'];
//
//        if (empty($_POST['phone'])) {
//            $phoneErr = "phone is required";
//
//
//        }
//        $opt = array('options' => array('min_range' => 01, 'max_range' => 14));
//        if (filter_var($_POST['phone'], FILTER_VALIDATE_INT, $opt) === FALSE) {
//         echo 'Wrong Data Entry ';
//            exit();
//        }
//
//        if (empty($_POST["age"])) {
//            $nameErr = "age is required";
//        } else {
//            $age = test_input($_POST["age"]);
//
//            exit();
//        }
//
//        if (filter_var($_POST['age'], FILTER_VALIDATE_INT) === FALSE) {
//            echo 'Wrong Data Entry ';
//            exit();
//        }
//
//        if (empty($_POST["salary"])) {
//            $nameErr = "FullName is required";
//        } else {
//            $salary = test_input($_POST["salary"]);
//            exit();
//
//        }
//
//        if (filter_var($_GET['salary'], FILTER_VALIDATE_INT) === FALSE) {
//            echo 'Wrong Data Entry ';
//            exit();
//        }


    //check if username or phone or email not found.
    // require_once('../classes/crud.php');

    //  if (!isset($_POST['username']) || (!isset($_POST['email'])) || (!isset($_POST['phone']))) {
    //   die('emali or phone or username not found');
    //  }

//
//        $username = $_POST['username'];
//        $full_name = $_POST['full_name'];
//        $email = $_POST['email'];
        $password = null;
        $created_by = null;
//        $age = $_POST['age'];
//        $salary = $_POST['salary'];
//        $phone = $_POST['phone'];
    $status = '1';
    $created_at = date('Y-m-d H:i:s');
    $updated_at = null;
//   echo $salary;

    require_once('../classes/crud.php');

    $crud = new crud();
    // check is email found before
    $checkEmail =  $crud->checkEmail($email,'employees');
if(count($checkEmail) > 0){
    echo 'This Email Already Exists';
    exit();
}
    $insert = $crud->insert($username, $full_name, $email, $password, $created_by, $age, $salary, $phone, $status, $created_at, $updated_at, 'employees');

    if ($insert === true) {
////
////
        echo "New records created successfully";
        header("location:http://localhost/employees/view/list_users.php");
    } else {
        echo 'something went wrong';
    }
}else {
    echo 'Server say bad request';
}



function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}
  //  echo "New records created successfully";
//   header("location:http://localhost/employees/view/list_users.php");
//  }
//    else {
//        echo 'something went wrong';
//    }

?>
