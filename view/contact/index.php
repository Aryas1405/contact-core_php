<?php include("../../connection.php"); ?> 
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<div class="jumbotron" style="background-color:white;">
    <h1 style="text-align:center;">-Contacts List-</h1>
    <a  href="/view/contact/create.php" class="btn btn-info" style="margin-left:900px;margin-top:-48px;">Create Contacts</a>
    <table class="table table-striped">
   
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Cantact No.</th>
    <th>Group</th>
    <th>Action</th>
    </tr>
    
    <?php
$sql = "SELECT `contact`.`name`,`contact`.`email`,`contact`.`mob`,`group`.`name` FROM `contact` 
        INNER JOIN ``contact`` ON `contact`.`group_id`=`group`.`id`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        $id=$row["id"];
        echo '<tr>
             <td>'.
              $row["name"].
             '</td>
             <td>'.
             $row["email"].  
             '</td>
             <td>'.
              $row["mob"].
             '</td>
             <td>'.
              $row["group_id"].
             '</td>
             
             <td>
            <form action="/view/contact/edit.php" method="POST">
            <button type="submit" value="'.$row["id"].'" name="contact_id" class="btn btn-warning"style="margin-left:10px;">Edit</button>
             </form>
             <form method="post" action="../../connectionQuery.php">
             <button type="submit" value="'.$row["id"].'" name="delete_id" class="btn btn-danger"style="margin-left:10px;">Delete</button>
             <input type="hidden" value="contact_delete" name="key">
             </form>
             </td>
        </tr>';
       
    }
} else {
    echo "0 results";
}
$conn->close();
?>

    </table>
    
    </div>

</body>
</html>