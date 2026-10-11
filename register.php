<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Register</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="Styles.css" />
  </head>

  <body class="auth-page">
    <main class="container">
      <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6">
          <div class="auth-card">
            <div class="text-center">
              <a href="index.html" class="brand-name"> Smart Salon </a>
            </div>

            <div class="text-center auth-heading">
              <h1>Create an Account</h1>
              <p>Register for your Smart Salon account.</p>
            </div>

            <form id="registerForm">
              <div class="row g-3">
                <!--para sa Firstname-->
                <div class="col-md-6">
                  <label for="firstName" class="form-label"> First Name </label>
                  <input
                    type="text"
                    class="form-control"
                    id="firstName"
                    name="firstName"
                    placeholder="First name"
                  />
                </div>

                <!--then last name-->
                <div class="col-md-6">
                  <label for="lastName" class="form-label"> Last Name </label>
                  <input
                    type="text"
                    class="form-control"
                    id="lastName"
                    name="lastName"
                    placeholder="Last name"
                  />
                </div>

                <div class="col-12">
                  <label for="registerEmail" class="form-label">
                    Email Address
                  </label>
                  <input
                    type="email"
                    class="form-control"
                    id="registerEmail"
                    name="email"
                    placeholder="Enter your email"
                  />
                </div>

                <div class="col-md-6">
                  <label for="registerPassword" class="form-label">
                    Password
                  </label>

                  <input
                    type="password"
                    class="form-control"
                    id="registerPassword"
                    name="password"
                    placeholder="Create password"
                  />
                </div>

                <!--password ulit-->
                <div class="col-md-6">
                  <label for="confirmPassword" class="form-label">
                    Confirm Password
                  </label>
                  <input
                    type="password"
                    class="form-control"
                    id="confirmPassword"
                    name="confirmPassword"
                    placeholder="Confirm password"
                  />
                </div>

                <div class="col-12">
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      id="terms"
                      name="terms"
                    />

                    <label class="form-check-label" for="terms">
                      I agree to the Terms and Privacy Policy.
                    </label>
                  </div>
                </div>

                <!--btm-->
                <div class="col-12">
                  <button type="submit" class="btn login-btn w-100">
                    Create Account
                  </button>
                </div>
              </div>
            </form>

            <div class="register-text">
              Already have an account?

              <a href="login.html"> Login </a>
            </div>

            <div class="back-container">
              <a href="index.html" class="back-link"> Back to Home </a>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!--para naman jquery-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>

    <!--jvascript bootstrp-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      $(document).ready(function () {
        $("#registerForm").validate({
          rules: {
            firstName: {
              required: true,
              minlength: 2,
              maxlength: 20,
            },

            lastName: {
              required: true,
              minlength: 2,
              maxlength: 20,
            },

            email: {
              required: true,
              email: true,
            },

            password: {
              required: true,
              minlength: 6,
            },

            confirmPassword: {
              required: true,
              equalTo: "#registerPassword",
            },

            terms: {
              required: true,
            },
          },

          messages: {
            firstName: {
              required: "First name is required.",
              minlength: "First name must be at least 2 characters.",
              maxlength: "First name must not exceed 20 characters.",
            },

            lastName: {
              required: "Last name is required.",
              minlength: "Last name must be at least 2 characters.",
              maxlength: "Last name must not exceed 20 characters.",
            },

            email: {
              required: "Email is required.",
              email: "Please enter a valid email address.",
            },

            password: {
              required: "Password is required.",
              minlength: "Password must be at least 6 characters.",
            },

            confirmPassword: {
              required: "Please confirm your password.",
              equalTo: "Passwords do not match.",
            },

            terms: {
              required: "You must agree to the terms.",
            },
          },

          submitHandler: function (form) {
            alert("Registration successful!");
          },
        });
      });
    </script>
  </body>
</html>
