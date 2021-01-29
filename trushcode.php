<?php 
include('header.php');
require_once('database.php');

$id = $_GET['id'];
$n1 = $_GET['fn'];
$n2 = $_GET['ln'];
$e  = $_GET['em'];
$show = "SELECT * FROM information WHERE id = $id";
$result = mysqli_query($connection,$show); 

?>

<div class="container my-5 ">
    <div class="jumbotron bg-dark py-5 ">
        <h1 class="display-4 text-center text-light bg-info py-3 my-5">EditForm</h1>
        <form class="form-horizontal offset-3" action="editinfo.php" method="GET" name="form">
        <?php
                while ($sh=mysqli_fetch_assoc($result)){
            ?>
        <div class="row mb-3">
                <label class="col-sm-2 col-form-label ">ID-Number</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="ufirst_name" value="<?php echo $id;?>">
                </div>
            </div>       
        <div class="row mb-3">
                <label class="col-sm-2 col-form-label ">First Name</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="ufirst_name" value="<?php echo $sh['first_name'];?>">
                </div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="ulast_name" value="<?php echo $sh['last_name'];?>">
                </div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-6">
                <input type="email" class="form-control" name="uemail" placeholder="<?php echo $sh['email'];?>">
                </div>
            </div>
            <div class="offset-2">
            <button type="submit" name="submit" class="btn btn-info text-light mr-2">Update</button>
            <button type="reset" class="btn btn-info text-light ">Cancel</button>
            <a href="all_info.php"type="submit"  class="btn btn-info text-light">Show All</a>
            </div>
        <?php }?>
        </form>
            


    </div>
</div>

<?php
if($_GET['submit']){
    $id = $_GET['id'];
    $n1  = $_GET['ufirst_name'];
    $n2  = $_GET['ulast_name'];
    $e   = $_GET['uemail'];

    $query = "UPDATE information SET first_name = '$n1', last_name = '$n2', email = '$e' WHERE id = $id";
    $updated = mysqli_query($connection,$query);

    if($updated){
        echo "--------------------------------- Updated";
    }else{
        echo "--------------------------------File To Updated";
    }
}

?>


<?php include('footer.php')?>