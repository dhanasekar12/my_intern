<?php
require_once("./connect.php");
$result = [];
$query = "SELECT * FROM `users` ";
$exec = mysqli_query($con, $query);
while($rs = mysqli_fetch_object($exec))
{
$obj = new stdClass();
$obj->name = $rs->name;
$obj->email = $rs->email;
$obj->number = $rs->number;
$obj->state = $rs->state;
$obj->country = $rs->country;
array_push($result, $obj);


foreach($result as $v)
{
    echo $v->name."<br>";
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php demo</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assests/validation/css/validationEngine.jquery.css">
</head>
<body>
    
    <div class="container bg-light">
        <div class="row">
            <div class="col-lg-4 offset-md-4 mt-lg-5">
                <div class="card">
                <div class="card-header text-center bg-warning">DEMO FORM</div>
                    <div class="card-body bg-info">
                        <form id="myform" method="post" action="./index.php">
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" class="form-control validate[required]" placeholder="Enter Your Name" id="name" name="name"/>
                            </div>
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="email" class="form-control validate[required,custom[email]]" placeholder="Enter Email Id" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="">Mob Num</label> 
                                <input type="number" class="form-control validate[required,maxSize[10]]" placeholder="Enter Mobile Number" id="number" name="number">
                            </div>
                            <div class="mb-3">
                                <label for="">State</label>
                                <select class="form-select validate[required]" id="state" name="state">
                                <option selected>select state</option>
                                <option value="TN">TN</option>
                                <option value="KL">KL</option>
                                <option value="KA">KA</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="">Country</label>
                                <input type="text" class="form-control validate[required]" placeholder="Type Your Country" id="country" name="country">
                            </div>
                            <div class="d-grid gap-2 col-6 mb-3 mx-auto">
                                <button class="btn btn-primary">save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./assests/js/jquery-3.6.0.min.js"></script>
   <script src="./assests/validation/js/languages/jquery.validationEngine-en.js"></script>
   <script src="./assests/validation/js/jquery.validationEngine.min.js"></script>
   <script>
      $("#myform").validationEngine();
   </script>
</body>
</html>