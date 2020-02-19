<?php include("../../connection.php"); ?> 
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="jumbotron">
    <h2 style="text-align:;">Create New Group:</h2><br>
        <form class="form-inline" method="post" action="/connectionQuery.php">
      
            <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control"  placeholder=" Enter New Group" name="name">
                <input type="hidden" class="form-control"  value="group_store" name="key">
            </div>
            <button class="btn btn-primary mb-2">Add Group</button>
            <a  href="/view/group/index.php" class="btn btn-info mb-2" style="margin-left:15px;">Show Groups</a><br>  
        </form>
    </div>  
</body>
</html>
