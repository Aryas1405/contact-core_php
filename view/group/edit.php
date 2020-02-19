<?php include("../../connection.php"); ?> 
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<?php
$name=$_POST['name'];
$edit=$_POST['edit_id'];

$sql = "SELECT * FROM `group` WHERE `id` =$edit";
$result = $conn->query($sql);
    $row = $result->fetch_assoc();
        $a=$row["id"];
        $b=$row["name"];
    $conn->close();
?>




    <div class="jumbotron">
    <h2 style="text-align:center;">Edit Group:</h2><br>
    <form action="../../connectionQuery.php" class="form-inline" method="post">
        
            <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control" value="<?php echo $b ?>" name="name">
                <input type="hidden" value="group_update" name="key">
            </div>
            <button type="submit" class="btn btn-primary mb-2" name="group_id" value="<?php echo $a ?>">Update Group</button>
            <a  href="/view/group/index.php" class="btn btn-info mb-2" style="margin-left:15px;">Show Groups</a><br>  
        </form>
    </div>  
</body>
</html>
