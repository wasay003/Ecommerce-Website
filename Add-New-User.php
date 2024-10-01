<?php require('session_include.php'); ?>
<?php include('header.php'); ?>
<div class="container">
    <h2>Add New User</h2>
    <form action="Add-New-User-Process.php" method="post">
        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="text" class="form-control" id="Email" name="Email" required>
        </div>
        <div class="mb-3">
            <label for="Password" class="form-label">Password</label>
            <input type="text" class="form-control" id="Password" name="Password" required>
        </div>
        <div class="form-check">
  <input class="form-check-input" type="radio" name="Admin" value="1" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault"> Admin </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="Admin" value="0" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked"> Not Admin </label>
</div>
        <button type="submit" class="btn btn-primary" name="Add-New-User">Add New User</button>
    </form>
</div>
<?php
if (isset($_GET['error'])) {
    $error_message = $_GET['error'];
    echo($error_message);
}
?>
<?php 
include('footer.php'); 
?>