<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('config.php');
$fetch = "SELECT * FROM `Syed` where status = '0'";

$data = mysqli_query($conn, $fetch);

?>
<div class="content-wrapper">
<div class="card">
<div class="card-header">
      <h3 style="
    text-align:center;
    text-align: center;
    color: red;
    font-size: 50px;
    margin-top: 20px;
    font-family: 'Times New Roman', Times, serif;
    font-style: italic;
    font-weight: bold;">Trash Table</h3>
        </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-dark text-center table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($data)) {

                    ?>
                    <tr>
                        <td>
                            <?php echo $row['id'] ?>
                        </td>
                        <td>
                            <?php echo $row['name'] ?>
                        </td>
                        <td>
                            <?php echo $row['email'] ?>
                        </td>
                        <td>
                            <?php echo $row['phone'] ?>
                        </td>

                        <td>
                            <a href="Delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><?php echo 'Delete' ?></a>
                            <a href="Restore.php?id=<?php echo $row['id']; ?>" class="btn btn-success"><?php echo 'Restore' ?></a>
                        </td>
                    </tr>
                    <?php
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