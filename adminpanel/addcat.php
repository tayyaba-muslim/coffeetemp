<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('config.php');


if (isset($_POST["addcat"])) {
    $cid = $_POST["cid"];
    $cname = $_POST["cname"];
    $ctype = $_POST["ctype"];
    $cdes = $_POST["cdes"];
    $cstatus = $_POST["cstatus"];

        $cat_check = "SELECT * from category where cname = '$cname'";
        $result = mysqli_query($conn, $cat_check);
        if (mysqli_num_rows($result) > 0) {
            echo "<script> alert('Category already exist'); </script>";
        } else {
            $insert_cat = "INSERT INTO `category` (`cid`,`cname`, `ctype`, `cdes`, `cstatus`) VALUES ('$cid','$cname', '$ctype', '$cdes','$cstatus')";
            $connection_insert = mysqli_query($conn, $insert_cat);
            if($connection_insert){
                echo "<script> alert('Category successfully added'); </script>";
            }
            // header('location:registeredusers.php');
        }
    
}







?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Modal -->
  <div class="modal fade" id="AddUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Category Form</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="form-group">
            <div>
              <label for="cid"> Cid </label>
              <input type="number" name="cid" class="form-control">
            </div>
            <div>
              <label for="cname"> Cname </label>
              <input type="text" name="cname" class="form-control">
            </div>

            <div>
              <label for="ctype"> Ctype </label>
              <input type="text" name="ctype" class="form-control">
            </div>
            <div class="row">
                <label for="floatingTextarea">Description</label>
            <div class="form-floating">
                <textarea class="form-control" name="cdes" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            </div>
            <label for="floatingTextarea">Select  Status</label>

              <select class="form-select" aria-label="Default select example" name="cstatus">
                    <option selected>Open this select menu</option>
                    <option value="1">Active</option>
                    <option value="0">Deactivate</option>
                    
              </select>
             
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="addcat" class="btn btn-primary">Add Category</button>
        </div>
        </form>



      </div>
    </div>
  </div>
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"> CAtegory Page</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Category</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title" style="
    color: black;
    font-size: 25px;
    font-family: 'Times New Roman', Times, serif;
    font-style: italic;
    font-weight: bold;">Registered Users Table</h3>
      <a href="" class="btn btn-primary float-right btn-sm" data-bs-toggle="modal" data-bs-target="#AddUserModal"> Add
        User</a>
    </div>

    <!-- /.card-header -->
    
  </div>
</div>

<?php
include('includes/footer.php');
?>