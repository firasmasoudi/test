<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "livraison");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt delete query execution
$id = $_GET['id'];
$sql = "DELETE FROM livraison WHERE id='$id'";
if(mysqli_query($link, $sql)){
    echo "Records were deleted successfully.";
      header('Location: livraison.php?msg=delSuccess');

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>