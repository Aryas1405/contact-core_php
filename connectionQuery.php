<?php include("connection.php"); 
 
$key=$_POST['key'];




if($key=='group_store')
{
    $name=$_POST['name'];
    $sql = "INSERT INTO `group` (name) VALUES ('$name')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}


elseif($key=='contact_store')
{
$name=$_POST['name'];
$email=$_POST['email'];
$mob=$_POST['mob'];
$group=$_POST['group'];
echo $group;

$sql ="INSERT INTO `contact_corephp`.`contact` (`name` ,`email` ,`mob` ,`group_id`) VALUES('$name', '$email', '$mob', '$group')";

if ($conn->query($sql) === TRUE) 
{
    return;
} 
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
}
elseif($key=='group_update')
{
    $name=$_POST['name'];   
    $id=$_POST['group_id'];
    $sql = "UPDATE `group` SET name='$name' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $conn->error;
    }
    $conn->close();
}

elseif($key=='contact_update')
{
    $name=$_POST['name'];  
    
    $email=$_POST['email'];   
    $mob=$_POST['mob'];   
    $group=$_POST['group'];   
    $id=$_POST['id'];
    $sql = "UPDATE `contact` SET name = '$name',
    email = '$email',
    mob = '$mob',
    group_id = '$group' WHERE id ='$id'";
    if ($conn->query($sql) === TRUE) 
    {
    echo "Record updated successfully";
    }
     else 
    {
    echo "Error updating record: " . $conn->error;
    }
    $conn->close();
   
}
elseif($key=="contact_delete")
{
    echo $id=$_POST['delete_id'];
  
    $sql = "DELETE FROM `contact` WHERE `id`=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
elseif($key=="group_delete")
{
    echo $id=$_POST['delete_id'];
  
    $sql = "DELETE FROM `group` WHERE `id`=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>