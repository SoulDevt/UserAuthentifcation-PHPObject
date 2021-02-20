<?php

require('user_validator.php');

if(isset($_POST['submit'])) {
    
    $validation = new UserValidator($_POST);
    $errors = $validation->validateForm();

    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Soul's Project</title>
</head>
<body>
    <div class="new-user">
        <h2>Create new user</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <label>Username: </label>
            <div class="error">
                <?php echo $errors['username'] ?? ''; ?>
            </div>
            <input type="text" name="username" value="<?php echo htmlspecialchars($_POST['username'] ?? ''); ?>">

            <label>Email:</label>
            <div class="error">
                <?php echo $errors['email'] ?? ''; ?>
            </div>
            <input type="text" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
            <input type="submit" value="submit" name="submit">
        </form>
    </div>
</body>
</html>