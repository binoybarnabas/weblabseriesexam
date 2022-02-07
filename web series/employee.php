<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "employee";

if(isset($_POST['submit']))
{
$connect = mysqli_connect($host,$username,$password,$database);
$empid = $_POST['empid'];
$empname = $_POST['empname'];
$jobname = $_POST['jobname'];
$managerid = $_POST['managerid'];
$salary = $_POST['salary'];

if(!$connect)
{
    die("connection error occured".mysqli_connect_error());
}
else
{
    $sql = "insert into empdetails(employeeid,employeename,jobname,managerid,salary) values('$empid','$empname','$jobname','$managerid','$salary');";
    
    if(mysqli_query($connect,$sql))
    {
        echo "data inserted successfully...";

    }
    else
    {
        echo "insertion failed";
    }
}

}

?>