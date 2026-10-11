
<?php
$errors = [];
$success = false;

$firstName = '';
$lastName = '';
$email = '';
$password = '';
$confirmPassword = '';

if (isset($_POST['submit'])) {

    $firstName = trim($_POST['firstName'] ?? '');
    $lastName = trim($_POST['lastName'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirmPassword'] ?? '';

    
    if (empty($firstName)) {
        $errors['firstName'] = "First name is required.";
    } elseif (!preg_match("/^[a-zA-Z ]+$/", $firstName)) {
        $errors['firstName'] = "First name must contain letters only.";
    }

    if (empty($lastName)) {
        $errors['lastName'] = "Last name is required.";
    } elseif (!preg_match("/^[a-zA-Z ]+$/", $lastName)) {
        $errors['lastName'] = "Last name must contain letters only.";
    }

    if (empty($email)) {
        $errors['email'] = "Email is required.";
    } elseif (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
        $errors['email'] = "Invalid email format.";
    }


    if (empty($password)) {
        $errors['password'] = "Password is required.";
    } elseif (strlen($password) < 8) {
        $errors['password'] = "Password must be at least 8 characters.";
    } elseif (!preg_match("/[A-Za-z]/", $password) ||
              !preg_match("/[0-9]/", $password)) {
        $errors['password'] = "Password must contain a letter and a number.";
    }

    if (empty($confirmPassword)) {
        $errors['confirmPassword'] = "Please confirm your password.";
    } elseif ($password != $confirmPassword) {
        $errors['confirmPassword'] = "Passwords do not match.";
    }

    if (!isset($_POST['terms'])) {
        $errors['terms'] = "You must agree to the terms.";
    }

    if (empty($errors)) {
        $success = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register - Smart Salon</title>

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="Styles.css">
</head>

<body class="auth-page">

    <div class="auth-card">

        <div class="brand-name">Smart Salon</div>

        <h2 class="auth-heading">Create an Account</h2>

        <?php if ($success) { ?>
            <div class="success-message">
                Registration successful!
            </div>
        <?php } ?>

        <form method="POST" action="">

            <div class="mb-3">
                <label for="firstName" class="form-label">
                    First Name
                </label>

                <input
                    type="text"
                    id="firstName"
                    name="firstName"
                    class="form-control"
                    value="<?php echo htmlspecialchars($firstName); ?>"
                >

                <?php if (isset($errors['firstName'])) { ?>
                    <small class="text-danger">
                        <?php echo $errors['firstName']; ?>
                    </small>
                <?php } ?>
            </div>

            <div class="mb-3">
                <label for="lastName" class="form-label">
                    Last Name
                </label>

                <input
                    type="text"
                    id="lastName"
                    name="lastName"
                    class="form-control"
                    value="<?php echo htmlspecialchars($lastName); ?>"
                >

                <?php if (isset($errors['lastName'])) { ?>
                    <small class="text-danger">
                        <?php echo $errors['lastName']; ?>
                    </small>
                <?php } ?>
            </div>

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


            <div class="mb-3">
                <label for="confirmPassword" class="form-label">
                    Confirm Password
                </label>

                <input
                    type="password"
                    id="confirmPassword"
                    name="confirmPassword"
                    class="form-control"
                >

                <?php if (isset($errors['confirmPassword'])) { ?>
                    <small class="text-danger">
                        <?php echo $errors['confirmPassword']; ?>
                    </small>
                <?php } ?>
            </div>

            <div class="mb-3">

                <div class="form-check">
                    <input
                        type="checkbox"
                        id="terms"
                        name="terms"
                        class="form-check-input"
                        value="yes"
                        <?php if (isset($_POST['terms'])) echo 'checked'; ?>
                    >

                    <label for="terms" class="form-check-label">
                        I agree to the Terms and Conditions
                    </label>
                </div>

                <?php if (isset($errors['terms'])) { ?>
                    <small class="text-danger">
                        <?php echo $errors['terms']; ?>
                    </small>
                <?php } ?>

            </div>

            <button
                type="submit"
                name="submit"
                class="btn login-btn w-100"
            >
                Register
            </button>

        </form>

        <p class="register-text mt-3">
            Already have an account?
            <a href="login.php">Login here</a>
        </p>

        <div class="back-container">
            <a href="index.php" class="back-link">Back to Home</a>
        </div>

    </div>

</body>
</html>
