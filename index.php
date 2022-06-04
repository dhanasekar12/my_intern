<?php
require_once("./connect.php");
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$state= $_POST['state'];
$country= $_POST['country'];
$qry = "INSERT INTO `users`(`name`, `email`, `number`, `state`, `country`) VALUES ('$name', '$email', '$number', '$state', '$country')";
$exec = mysqli_query($con, $qry);

// print_r($exec)."<br>";
if($exec ==1)
{
    echo "success";
}
else
{
    echo "failed";
}
?>