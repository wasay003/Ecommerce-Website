<?php include("dbcon.php"); ?>
<?php include("header.php"); ?>
<?php require('session_include.php'); ?>

<div class="container"> 
    <div class="box1">
        <h1>Currently Listed Users</h1>
    </div>

    

    <table class="table table-hover table-bordered table-striped rounded">
        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Password</th>
                
            </tr>
        </thead>
        <tbody>
            <?php


            $query = "select * from `users`";

            $result = mysqli_query($connection, $query);

            if (!$result) {
                die("query failed");
            } else {

                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td><a href="Admin-User-Order-Process.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Order</a></td>
                       
                    </tr>

            <?php



                }
            }
            ?>



        </tbody>
    </table>



<?php include("footer.php"); ?>