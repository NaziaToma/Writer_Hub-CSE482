<?php

include 'connection.php';

$id = $_GET['id'];
$deletequrey = "delete from registration where id=$id";
echo " deleted ";
$query = mysqli_query($conn,$deletequrey);

header('location:manage_user.php');
?>


<?php

include 'connection.php';
$ID=$_GET['id'];
$sql_1= " DELETE FROM post WHERE ID='$ID' ";

$result_1=mysqli_query($conn,$sql_1);

if($result_1){
echo " Post has been deleted ";
}
else{
echo " Failed to delete ";
}
header('location:delete_post.php');
?>