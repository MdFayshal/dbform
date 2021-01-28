<?php 
include('header.php');
require_once('database.php');
$info = "SELECT * FROM information";
$result = mysqli_query($connection,$info); 
?>



<div class=" container-fluid bg-secondary">
<div class="container p-5">
    <div class="jumbotron">
    <h1 class="display-4 text-center text-info pb-3 bg-dark">All Information</h1>
    
        <table class="table table-dark table-striped text-info">
        <thead>
            <tr>
            <th scope="col"class="text-info">Id</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
        while ($lop=mysqli_fetch_assoc($result)){

        
        ?>
            <tr>
            <th scope="row"class="text-info"><?php echo $lop['id'];?></th>
            <td class="text-info "><?php echo $lop['first_name'];?></td>
            <td class="text-info "><?php echo $lop['last_name'];?></td>
            <td class="text-info "><?php echo $lop['email'];?></td>
            <td class="text-info ">
            <a href="edit.php?id=<?php echo $lop['id'];?>&fn=<?php echo $lop['first_name'];?>&ln=<?php echo $lop['last_name'];?>&em=<?php echo $lop['email'];?>" class="btn btn-sm btn-warning">Edit</a> ||
            <a href="delete.php?id=<?php echo $lop['id']?>" class="btn btn-sm btn-danger text-light">Delete</a> ||
            <a href="show.php?id=<?php echo $lop['id'];?>" class="btn btn-sm btn-success">Show</a>
            </td>
            </tr>
        <?php }?>
        </tbody>
        </table>
    
    <div class="text-end">
    <a href="index.php"class="btn  btn-primary text-light">GoBack</a>
    </div>
    </div>
</div>
</div>


<?php include('footer.php')?>