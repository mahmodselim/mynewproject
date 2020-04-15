<?php
require_once ('db.php');


class crud extends db
{

    public function __construct()
    {
        $this->conn = parent::connect();

    }


    public function select($data, $table)
    {
        // make select query on employees table
        $stmt = $this->conn->prepare("SELECT  {$data} FROM  {$table} ");
// execute query statement
        $stmt->execute();
// fetch all data
        return $result = $stmt->fetchAll();
        $conn = null;
    }
    public function checkEmail($email, $table)
    {
        // make select query on employees table
        $stmt = $this->conn->prepare("SELECT  `email` FROM  {$table} WHERE `email`= '$email'");
// execute query statement
        $stmt->execute();
// fetch all data
        return $result = $stmt->fetchAll();
        $conn = null;
    }

//    public function insert($id, $username, $full_name, $email, $password, $created_by, $age, $salary, $phone, $status, $created_at, $updated_at, $table)
//  {
//
//$sql = "INSERT INTO employees (username, full_name, email, phone, age, salary)
//VALUES ('John', 'Doe', 'john@example.com');";
// $sql .= "INSERT INTO employees (username, full_name, email, phone, age, salary)
//VALUES ('John', 'Doe', 'john@example.com');";
//
//$sql .= "INSERT INTO employees (username, full_name, email,phone,age,salary)
//VALUES ('John', 'Doe', 'john@example.com');";
//
//if ($conn->multi_query($sql) === TRUE) {
//    echo "New records created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}
//
//$conn->close();


    public function insert ($username,$full_name,$email,$password,$created_by,$age,$salary,$phone,$status,$created_at,$updated_at,$table)
    {
        // prepare sql and bind parameters to insert new data
        $stmt = $this->conn->prepare("INSERT INTO {$table} (`username`,`full_name`,`email`,`password`,`created_by`,`age`,`salary`,`phone`,`status`,`created_at`,`updated_at`)
    VALUES (:username,:full_name,:email,:password,:created_by,:age,:salary,:phone,:ststus,:created_at,:updated_at)");

        //$stmt->bindParam(':id', $id);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':created_by', $created_by);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':salary', $salary);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':full_name', $full_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':ststus', $status);
        $stmt->bindParam(':created_at', $created_at);
        $stmt->bindParam(':updated_at', $updated_at);

        // insert a row
        // insert a row
        return $stmt->execute();


/// Close Database Connection
        $conn = null;
}
    public function delete ($id,$table)
    {

    // prepare connection to delete
         $stmt = $this->conn->prepare("DELETE FROM {$table}  WHERE id={$id}");

     //     delete a row
        return  $stmt->execute();
 //    close database connection

       // $conn = null;


    }
public function edit ($id,$data,$table)
{

    $stmt = $this->conn->prepare("SELECT  {$data} FROM  {$table} WHERE id={$id}");
    $stmt->execute();
    $result = $stmt->fetchAll();

    if(count($result) < 1){
        echo 'This Data Not Found';
        exit();
    }
    return $result;
// close database connection
    $conn = null;
}

    public function update ($table,$id,$username,$full_name,$email,$phone,$age,$salary)
    {

        $stmt = $this->conn->prepare("UPDATE {$table} SET username= '$username', full_name='$full_name', email='$email',phone='$phone',age='$age',salary='$salary' WHERE id={$id}");
        return $stmt->execute();
        $conn = null;
    }

}
?>