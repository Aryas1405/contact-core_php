<?php include("../../connection.php"); ?> 
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<?php
    
$edit=$_POST['contact_id'];
$sql = "SELECT * FROM `contact` WHERE `id` =$edit";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
    $id=$row["id"];
    $name=$row["name"];
    $email=$row['email'];
    $mob=$row['mob'];
    $group=$row['group_id'];
    
?>


    <body>
        <div class="jumbotron">
        <h2 style="text-align:;">Edit Contact:</h2><br>
        <form class="form" method="post" action="../../connectionQuery.php">
        <div class="form-group row">
                <label class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                    <input type="text" hidden class="form-control" value="<?php echo $id ?>" name="id" >
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $name ?>" name="name" >
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $email ?>" name="email" >
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Mobile No.</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $mob ?>" name="mob" >
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Group</label>
                <div class="col-sm-10">
                <select selected class="js-example-basic-multiple" name="group" style="width:100%">
                   
                            <?php
                            $sql = "SELECT * FROM `group`";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) 
                            {
                            // output data of each row
                                while($row = $result->fetch_assoc()) 
                                {
                                    echo '<option  value="'.$row["id"].'">'.
                                            $row["name"].  
                                            '</option>'
                                        ;
                                }
                            } 
                            else  
                            {
                            echo "0 results";
                            }
                            $conn->close();
                            ?>



                    </select> 
                </div>
            </div>   
            <button class="btn btn-primary mb-2" value="contact_update" name="key">Update Contact</button>
            <a  href="index.php" class="btn btn-info mb-2" style="margin-left:15px;">Show Contacts</a><br>  
        </form>
        </div>  
    </body>
</html>
