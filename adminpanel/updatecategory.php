<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('config.php');
$id = $_GET['id'];
// echo $user_id;
$fetch ="SELECT * from `category` where cid = '$id'";
$data = mysqli_query($conn, $fetch);
if(!$data){
    die("query failed");
}
if(mysqli_num_rows($data) > 0){

    while($row = mysqli_fetch_assoc($data)){
?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Modal -->
<div class="modal fade" id="AddUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Category</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      

          

    </div>
  </div>
</div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Updates Details</h1>
          </div>
        
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

        <!-- Main content -->
       
                <div class="modal-body">
                    

        <form action="updatedatacategory.php" class="form-group" method="POST">
        <div>
                <label for="cid"> Cid </label>
                <input type="number" name="catid" class="form-control"value="<?php echo $row['cid']?>">
              </div>
              <div>
                <label for="cname"> CName </label>
                <input type="text" name="catname" class="form-control"value="<?php echo $row['cname']?>">
              </div>

              <div>
                <label for="ctype"> Ctype </label>
                <input type="text" name="cattype" class="form-control"value="<?php echo $row['ctype']?>">
              </div>
              <div class="row">
              <div>
                <label for="cdesc"> Description </label>
                <div class="form-floating">
               <textarea class="form-control" name="catdes" placeholder="Leave a comment here" id="floatingTextarea"value="<?php echo $row['description']?>"></textarea>
               
              </div>
              </div>
              </div>
              <label for="cstatus"> Cstatus </label>
               <div class="col-md-6">
              
               <select class="form-select" aria-label="Default select example" name="catstatus"value="<?php echo $row['cstatus']?>">
                <option selected>Open this select menu</option>
               <option value="1">Active</option>
               <option value="2">Deactivate</option>
               </select>
              </div>
          
            </div>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" name="update" value = "update" class="btn btn-primary">Update </button>
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