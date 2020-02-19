<?php include("../../connection.php"); ?> 
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
    <body>
        <div class="jumbotron">
        <h2 style="text-align:;">Create New Contact:</h2><br>
        <form class="form" method="post" action="/connectionQuery.php">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Add Name Here..." name="name" >
                <input type="hidden" class="form-control"  value="contact_store" name="key">

                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Add Email Here..." name="email" >
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Mobile No.</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Add Mobilr No. Here..." name="mob" >
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Group</label>
                <div class="col-sm-10">
                    <select class="js-example-basic-multiple" name="group" style="width:100%">
                        <option disabled selected>--Select Group--</option>

                            <?php
                            $sql = "SELECT * FROM `group`";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) 
                            {
                            
                                echo '<option value="'.$row["id"].'">'.
                                        $row["name"].  
                                        '</option>'
                                    ;
                            }
                            } else {
                            echo "0 results";
                            }
                            $conn->close();
                            ?>



                    </select> 
                </div>
            </div>   
            <button class="btn btn-primary mb-2">Add Contact</button>
            <a  href="/view/contact/index.php" class="btn btn-info mb-2" style="margin-left:15px;">Show Contacts</a><br>  
        </form>
        </div>  
    </body>
</html>
