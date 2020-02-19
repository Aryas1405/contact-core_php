<?php include("../../connection.php"); ?> 
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<div class="jumbotron" style="background-color:white;">
<h1 style="text-align:center;">-Groups-</h1>
    <a  href="/view/group/create.php" class="btn btn-info" style="margin-left:900px;margin-top:-48px;">Create Group</a>
    <table class="table table-striped">
   
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Action</th>
    </tr>
    
<?php
$sql = "SELECT * FROM `group`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        echo '<tr>
             <td>'.
              $row["id"].
             '</td>
             <td>'.
             $row["name"].  
             '</td>
             <td>
             <form action="/view/group/edit.php" method="post">
             <button type="submit" value="'.$row["id"].'" name="edit_id" class="btn btn-warning"style="margin-left:10px;">Edit</button>
             </form>
             <form action="../../connectionQuery.php" method="post">
            <input type="hidden" value="group_delete" name="key">
             <button type="submit" value="'.$row["id"].'" name="delete_id" class="btn btn-danger"style="margin-left:10px;">Delete</button>
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