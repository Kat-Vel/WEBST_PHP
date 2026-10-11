
<?php
$errors = [];
$email = '';
$success = false;

if (isset($_POST['submit'])) {

    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($email)) {
        $errors['email'] = "Email is required.";
    } elseif ($email != "admin@smartsalon" &&
              !preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
        $errors['email'] = "Invalid email format.";
    }

    if (empty($password)) {
        $errors['password'] = "Password is required.";
    }

    if (empty($errors)) {

        if ($email == "admin@smartsalon" &&
            $password == "salon123") {

            $success = true;

        } else {
            $errors['login'] = "Incorrect email or password.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Smart Salon</title>

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="Styles.css">
</head>

<body class="auth-page">

    <div class="auth-card">

        <div class="brand-name">Smart Salon</div>

        <h2 class="auth-heading">Login to Your Account</h2>

        <?php if ($success) { ?>
            <div class="success-message">
                Login successful!
            </div>
        <?php } ?>

        <form method="POST" action="">

            <div class="mb-3">
                <label for="email" class="form-label">
                    Email Address
                </label>

                <input
                    type="text"
                    id="email"
                    name="email"
                    class="form-control"
                    value="<?php echo htmlspecialchars($email); ?>"
                >

                <?php if (isset($errors['email'])) { ?>
                    <small class="text-danger">
                        <?php echo $errors['email']; ?>
                    </small>
                <?php } ?>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">
                    Password
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    class="form-control"
                >

                <?php if (isset($errors['password'])) { ?>
                    <small class="text-danger">
                        <?php echo $errors['password']; ?>
                    </small>
                <?php } ?>
            </div>


            <?php if (isset($errors['login'])) { ?>
                <div class="error-message mb-3">
                    <?php echo $errors['login']; ?>
                </div>
            <?php } ?>

            <div class="login-options mb-3">
                <a href="#" class="forgot-link">Forgot Password?</a>
            </div>

            <button
                type="submit"
                name="submit"
                class="btn login-btn w-100"
            >
                Login
            </button>

        </form>

        <p class="register-text mt-3">
            Don't have an account?
            <a href="register.php">Register here</a>
        </p>

        <div class="back-container">
            <a href="index.php" class="back-link">Back to Home</a>
        </div>

    </div>

</body>
</html>
