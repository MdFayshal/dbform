<?php 
include('header.php');
require_once('database.php');

$id = $_GET['id'];
$n1 = $_GET['fn'];
$n2 = $_GET['ln'];
$e  = $_GET['em'];
 
?>


<div class="container my-5 ">
    <div class="jumbotron bg-dark py-5 ">
        <h1 class="display-4 text-center text-light bg-info py-3 my-5">EditForm</h1>
        <form class="form-horizontal offset-3" action="" method="POST" name="form">
        <div class="row mb-3">
                <label class="col-sm-2 col-form-label ">ID-Number</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="id" value="<?php echo $id;?>">
                </div>
            </div>       
        <div class="row mb-3">
                <label class="col-sm-2 col-form-label ">First Name</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="first_name" value="<?php echo $n1;?>">
                </div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="last_name" value="<?php echo $n2;?>">
                </div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-6">
                <input type="email" class="form-control" name="email" placeholder="<?php echo $e;?>">
                </div>
            </div>
            <div class="offset-2">
            <a href=""type="submit" name="submit" class="btn btn-info text-light mr-2">Update</a>
            <button type="reset" class="btn btn-info text-light ">Cancel</button>
            <a href="all_info.php"type="submit"  class="btn btn-info text-light">Show All</a>
            </div>
        </form>
            


    </div>
</div>

<?php
if($_GET["submit"]){

    echo $name1  = $_GET['ufirst_name'];
    echo $name2  = $_GET['ulast_name'];
    echo $email   = $_GET['uemail'];

    $query = "UPDATE information SET first_name = '$name1', last_name = '$name2', email = '$email' WHERE id = $id";
    $updated = mysqli_query($connection,$query);

    if($updated){
        echo "--------------------------------- Updated";
    }else{
        echo "--------------------------------File To Updated";
    }
}

?>


<?php include('footer.php')?>