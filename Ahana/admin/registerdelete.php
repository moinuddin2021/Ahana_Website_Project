<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php 

include'connection.php';

$id = $_GET['id'];

$delete = "DELETE FROM register WHERE id=$id ";

$result = mysqli_query($conn,$delete);

if ($result) 
{
	?>
	<script>
    swal("Delete Successfully", "", "success");
    </script>
	<?php
}
else
{
	?>
    <script>
    swal("Delete Fail!", "", "error");
    </script>
    <?php
}

  header('location:register.php');
?>