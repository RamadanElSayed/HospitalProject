<?php
class PatientData
{

    public $id;
    public $fullName;
    public $address;
    public $city;
    public $gender;
    public $email;
    public $password;
    public $connection;


    function create()
    {
        $fullName = $this->fullName;
        $address = $this->address;
        $city = $this->city;;
        $gender = $this->gender;
        $email = $this->email;
        $password = $this->password;
        $connection=$this->connection;
//        $connection = mysqli_connect('localhost', 'root', '', "hms");
//        if (!$connection) {
//            die("error : " . $connection);
//        }
//        //mysqli_select_db("test");
        $query = "insert into users (fullName,address,city,gender,email,password)
        values ('$fullName','$address','$city','$gender','$email','$password')";
        $result = mysqli_query($connection, $query);
        if($result)
        {

            echo "<script>alert('Successfully Registered. You can login now');</script>";

        }
    }
    function getAll()
    {
        $connection = mysqli_connect('localhost' ,'root' , '' , "company");
        $query = "select * from employee";
        $result = mysqli_query($connection , $query);
        $connection->close();
        return $result;
    }


    function delete($id)
    {

        $connection = mysqli_connect('localhost' ,'root' , '' , "company");
        if (!$connection){
            die("error : ".$connection);
        }
        $query = "delete  from employee where id =$id";
        $result = mysqli_query($connection , $query);
        if(!$result)
        {
            die("error : ".$result);

        }
        $connection->close();


        header("location: Employee.php");
    }
    function details($id)
    {

        $connection = mysqli_connect('localhost' ,'root' , '' , "company");
        if (!$connection){
            die("error : ".$connection);
        }
        $query = "select * from employee where id =$id";
        $result = mysqli_query($connection , $query);
        if(!$result)
        {
            die("error : ".$result);

        }
        $connection->close();
        return $result;

    }

    function update($id)
    {
        $name=$this->name;

        $connection = mysqli_connect('localhost', 'root', '', "company");
        if (!$connection) {
            die("error : " . $connection);
        }
        $query = "update employee set name ='$name' where id =$id";
        $result = mysqli_query($connection, $query);

        header("location: Employee.php");
    }
}