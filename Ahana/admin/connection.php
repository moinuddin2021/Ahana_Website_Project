<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php


$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'ahanayoga';

$conn = mysqli_connect($servername,$username,$password,$db);

if ($conn) 
{
	?>
	<script>
    //swal("Connection Successfully", "", "success");
    </script>
	<?php
}
else
{
	?>
    <script>
    swal("Something Went Wrong", "Connection fail!", "error");
    </script>
    <?php
}

?>