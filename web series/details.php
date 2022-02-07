<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "employee";
if(isset($_POST['submit']))
{
$connection = mysqli_connect($host,$username,$password,$database);
if(!$connection)
{
    die("failed to connect".mysqli_connect_error());
}
else{
    $sql = "select employeename,salary from empdetails where salary > 35000;";
    $query = mysqli_query($connection,$sql);
    if($query)
    {
      if(mysqli_num_rows($query)>0)
      {
          echo "<center><table border=2><tr><th>employee name</th><th>salary</th></tr>";
          while($row = mysqli_fetch_assoc($query))
          {
            echo "<tr><td>".$row['employeename']."</td><td>".$row['salary']."</td></tr>";
          }
      }     
    }
    
}
}
