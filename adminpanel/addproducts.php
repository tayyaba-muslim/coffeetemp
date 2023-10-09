<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('config.php');


if (isset($_POST["addproduct"])) {
    
    $ptitle = $_POST["ptitle"];
    $pcat = $_POST["pcat"];
    $pdes = $_POST["pdes"];
    $pimg_name = $_FILES["pimage"]['name'];
    $pimg_tmp = $_FILES["pimage"]['tmp_name'];
    $pimg_size = $_FILES["pimage"]['size'];
    $pstatus = $_POST["pstatus"];

        $proimg_check = "SELECT * from products where pimage = '$pimg_name'";
        $result = mysqli_query($conn, $proimg_check);
        if (mysqli_num_rows($result) > 0) {
            echo "<script> alert('Product already exist'); </script>";
        } else {
            $insert_pro = "INSERT INTO `products` (`title`, `category`, `pdescription`, `pimage`) VALUES ('$ptitle', '$pcat', '$pdes', '$pimg_name')
            ";
            $connection_insertpro = mysqli_query($conn, $insert_pro);
            move_uploaded_file($pimg_tmp, 'images/' . $pimg_name);
            if($connection_insertpro){
                echo "<script> alert('Product successfully added'); </script>";
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
          <h1 class="modal-title fs-5" id="exampleModalLabel">Product Form</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data" class="form-group">
            
            <div>
              <label for="ptitle"> Title </label>
              <input type="text" name="ptitle" class="form-control">
            </div>
            <label for="category"> Select category </label>
            <select class="form-select" name="pcat" aria-label="Default select example">
                <option selected>Select Category </option>
            <?php
            $category_fetch = "SELECT * from category";
            $cat_result = mysqli_query($conn, $category_fetch);
            if(mysqli_num_rows($cat_result) > 0) {
              while($catdata = mysqli_fetch_assoc($cat_result)){
                ?>

                <option value="<?php echo $catdata['cid']?>"><?php echo $catdata['cname']?></option>

            <?php
              }  
            }
            ?>
            </select>

            <div class="row">
                <label for="floatingTextarea">Description</label>
                <div class="form-floating">
                    <textarea class="form-control" name="pdes" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                </div>
                <div>
                  <label for="pimage"> Image </label>
                  <input type="file" name="pimage" class="form-control">
                </div>
            <label for="floatingTextarea">Select  Status</label>

              <select class="form-select" aria-label="Default select example" name="pstatus">
                    <option selected>Open this select menu</option>
                    <option value="1">Active</option>
                    <option value="0">Deactivate</option>
                    
              </select>
             
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="addproduct" class="btn btn-primary">Add Product</button>
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
          <h1 class="m-0"> Products Page</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Product</li>
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
        Product</a>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-dark table-bordered text-center table-striped">
        <thead>
          <tr>
            
            <th>Category</th>
            <th>Name</th>
            <th>Description</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $products_data = "SELECT * from products as p INNER JOIN category as c on p.category = c.cid";
          $pro_result = mysqli_query($conn, $products_data);
          if (mysqli_num_rows($pro_result) > 0) {

          while ($row1 = mysqli_fetch_assoc($pro_result)){ 

            ?>
            <tr>
              <td>
                <?php echo $row1['title'] ?>
              </td>
              <td>
                <?php echo $row1['cname'] ?>
              </td>
              <td>
                <?php echo $row1['pdescription'] ?>
              </td>
              <td>
                <img src="<?php echo 'images/' . $row1['pimage']; ?>" alt="" height="50px" width="50px">
              </td>
              <?php
              if( $row1['pstatus'] == 1){

                  ?>
              <td>
                <?php echo "Active" ?>
              </td>
                <?php
                }
                ?>
              <td>
             
            </tr>
            <?php
          }
        }
        
          ?>
        </tbody>
      </table>
    </div>
    
  </div>
    
  </div>
</div>

<?php
include('includes/footer.php');
?>