<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('config.php');
$fetch = "SELECT * FROM `category` where cstatus = '0'";

$data = mysqli_query($connection, $fetch);

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Modal -->
  
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">View Category</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">View Category</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">View Category</h3>
      <a href="" class="btn btn-primary float-right btn-sm" data-bs-toggle="modal" data-bs-target="#AddUserModal"> Add
        User</a>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th> Name</th>
            <th>Type</th>
            <th>Description</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($row = mysqli_fetch_assoc($data)) {

            ?>
            <tr>
              <td>
                <?php echo $row['cid'] ?>
              </td>
              <td>
                <?php echo $row['cname'] ?>
              </td>
              <td>
                <?php echo $row['ctype'] ?>
              </td>
              <td>
                <?php echo $row['description'] ?>
              </td>
                <?php
                if($row['cstatus'] ==0){
                ?>
                
              <td>
                <?php echo "deactivate" ?>
             
              </td>
                 <?php
                }else{
                  echo "active";
                }
                 ?> 

            

              <td><a href="updatecategory.php?id=<?php echo $row['cid']?>" class="btn btn-warning"> UPDATE </a></td>
            <td><a href="delete.php?id=<?php echo $row['cid']?>" class="btn btn-success"> TRASH </a></td>
          
            </tr>
            <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php
include('includes/footer.php');
?>