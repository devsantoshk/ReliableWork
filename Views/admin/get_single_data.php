<?php $conn = DbConfig();
$id = $_POST['id'];
$sql = "SELECT * FROM users WHERE id='$id' LIMIT 1";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($query);
echo json_encode($row);
?>
