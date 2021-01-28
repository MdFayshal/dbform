<?php include('header.php')?>

<div class="container my-5 ">
    <div class="jumbotron bg-dark py-5 ">
        <h1 class="display-4 text-center text-light bg-info py-3 my-5">OnlineForm</h1>
        <form class="form-horizontal offset-3" action="insert.php" method="POST">
        <div class="row mb-3">
                <label class="col-sm-2 col-form-label ">First Name</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="first_name" placeholder="First Name" required=''>
                </div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="last_name" placeholder="Last Name" required=''>
                </div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-6">
                <input type="email" class="form-control" name="email" placeholder="Email" required=''>
                </div>
            </div>
            <div class="offset-2">
            <button type="submit" class="btn btn-info text-light">Submit</button>
            <button type="reset" class="btn btn-info text-light mx-2 mr-5">Cancel</button>
            <a href="all_info.php"type="submit" class="btn btn-info text-light  ">Show All</a>
            </div>
        </form>
            


    </div>
</div>




<?php include('footer.php')?>