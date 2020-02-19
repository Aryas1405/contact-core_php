<?php include("connection.php"); ?>
<?php
$name=$_POST['name'];
$id=$_POST['id'];
$sql = "UPDATE `group` SET name='$name' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>