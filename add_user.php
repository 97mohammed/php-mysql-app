<?php 
include_once('db.php');

$title = 'Add';
$name = "";
$email = "";
$mobile = "";
$password = "";
$btn_title = "Save";

// Edit action: Fetch user data for update
if (isset($_GET['action']) && $_GET['action'] == 'edit') {
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = $id";
    $user = mysqli_query($con, $sql);
    if ($user) {
        $title = "Update";
        $current_user = $user->fetch_assoc();
        $name = $current_user['name'];
        $email = $current_user['email'];
        $mobile = $current_user['mobile'];
        $password = $current_user['password'];
        $btn_title = "Update";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Add User</title>
</head>
<body>
<div class="container">
    <div class="wrapper p-5 m-5">
        <div class="d-flex p-2 justify-content-between">
            <h2><?php echo $title; ?> user</h2>
            <div><a href="index.php"><i data-feather="corner-down-left"></i></a></div>
        </div>
        <form action="index.php" method="post">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" value="<?php echo $name; ?>" placeholder="Enter your name" name="name" autocomplete="off">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" value="<?php echo $email; ?>" placeholder="Enter your email" name="email" autocomplete="off">
            </div>

            <div class="mb-3">
                <label class="form-label">Mobile</label>
                <input type="tel" class="form-control" value="<?php echo $mobile; ?>" placeholder="Enter your number" name="mobile" autocomplete="off">
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" value="<?php echo $password; ?>" placeholder="Password" name="password" autocomplete="off">
            </div>

            <?php if (isset($_GET['id'])) { ?>
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            <?php } ?>

            <input type="submit" class="btn btn-primary" value="<?php echo $btn_title; ?>" name="save">
        </form>
    </div>
</div>

<script src="js/bootstrap.min.js"></script>
<script src="js/icons.js"></script>
<script>
    feather.replace();
</script>

</body>
</html>
