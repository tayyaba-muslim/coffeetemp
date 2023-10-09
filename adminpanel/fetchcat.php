<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('config.php');

$fetch = "SELECT * FROM `category` where cstatus = '1'";

$data = mysqli_query($conn, $fetch);
if(mysqli_num_rows($data) > 0){

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Modal -->
  
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
    <div class="card-body">
      <table id="example1" class="table table-dark table-bordered text-center table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Type</th>
            <th>Description</th>
            <th>Action</th>
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
                <?php echo $row['cdes'] ?>
              </td>
              <?php
              if( $row['cstatus'] == 1){

                  ?>
              <td>
                <?php echo "Active" ?>
              </td>
                <?php
                }
                ?>
              <td>

                <a href="Updatecategory.php?id=<?php echo $row['cid']; ?>" class="btn btn-warning"><?php echo 'Update' ?></a>
                <a href="Trash.php?id=<?php echo $row['cid']; ?>" class="btn btn-danger"><?php echo 'Trash' ?></a>
              </td>
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

<?php
include('includes/footer.php');
?>