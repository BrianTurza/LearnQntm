<?php
require_once('../includes/connect.php');


if (isset($_POST['submit_problem'])) {
    $title = mysqli_real_escape_string($db, $_POST['problem_name']);
    $dif = mysqli_real_escape_string($db, $_POST['problem_dif']);
    $description = mysqli_real_escape_string($db, $_POST['problem_description']);
    date_default_timezone_set("Europe/Bratislava");
    $time = date("Y-m-d h:i:sa");
    $sql = "INSERT INTO problems(problem_title, problem_description, problem_cat, problem_date) VALUES('$title', '$description', '$dif', '$time')";
    if (mysqli_query($db, $sql)) {
        $msg = "New question '$title' added suscessfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
        die();
    }
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post problems</title>
    <link rel="stylesheet" href="../vendors/AdminLTE-master/dist/css/adminlte.min.css">
</head>
<body>
<main>
<div>
    <form class="text-center border border-light p-5" action="" method="post">
    <?php  if (isset($msg)) : ?>
      <div class="alert alert-success"><?php echo $msg ?></div>
          <?php endif ?> 
    <div class="form-label-group">
        <input name="problem_name" type="text" class="form-control" placeholder="Title" required autofocus>
    </div><br>
    <div class="form-label-group">
        <select name="problem_dif" class="form-control" required>
            <option value="">Select Difficulty</option>
            <option value="1">Easy</option>
            <option value="2">Medium</option>
            <option value="3">Hard</option>
        </select><br>
    </div>
    <div class="form-label-group">
        <textarea name="problem_description" class="form-control" placeholder="Description" id="" cols="30" rows="10" required autofocus></textarea>
    </div><br>
        <button name="submit_problem" class="btn btn-lg btn-primary btn-block" type="submit">Submit problem</button>
    </form>
    </div>
</main>
</body>
</html>