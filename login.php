<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Login</title>

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
        <div class="col-12 col-sm-10 col-md-7 col-lg-5">
          <div class="auth-card">
            <!-- BRAND -->

            <div class="text-center">
              <a href="index.html" class="brand-name"> Smart Salon </a>
            </div>

            <div class="text-center auth-heading">
              <h1>Welcome Back</h1>
              <p>Login to your Smart Salon account.</p>
            </div>

            <form id="loginForm">
              <div class="mb-3">
                <label for="email" class="form-label"> Email Address </label>

                <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                  placeholder="Enter your email"
                />
              </div>

              <div class="mb-2">
                <label for="password" class="form-label"> Password </label>

                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                  placeholder="Enter your password"
                />
              </div>

              <!-- yung sa attempts=3 -->
              <div class="attempts">
                <span id="attemptsText"> Attempts left: 3 </span>
              </div>

              <div class="login-options">
                <!--remember me-->
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="remember"
                  />

                  <label class="form-check-label" for="remember">
                    Remember me
                  </label>
                </div>

                <a href="#" class="forgot-link"> Forgot password? </a>
              </div>

              <!--login btn-->
              <button
                type="submit"
                id="loginButton"
                class="btn login-btn w-100"
              >
                Login
              </button>

              <div id="loginMessage" class="text-center"></div>
            </form>

            <div class="register-text">
              Don't have an account?

              <a href="register.html"> Register </a>
            </div>

            <div class="back-container">
              <a href="index.html" class="back-link"> Back to Home</a>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!--para sa jquery-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <!--javscript bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      $(document).ready(function () {
        // Number of attempts

        let attempts = 3;

        //--/////////////////////////////////////////////////////////////--//
        //Test login account
        const correctEmail = "admin@smartsalon.com";
        const correctPassword = "salon123";
        //--///////////////////////////////////////////////////////////---///

        $("#loginForm").validate({
          rules: {
            email: {
              required: true,
              email: true,
            },

            password: {
              required: true,
              minlength: 8,
            },
          },

          messages: {
            email: {
              required: "Email is required.",
              email: "Please enter a valid email address.",
            },

            password: {
              required: "Password is required.",
              minlength: "Password must be at least 8 characters.",
            },
          },

          //para sa attempts, checking
          submitHandler: function (form) {
            if (attempts <= 0) {
              $("#loginMessage")
                .removeClass("success-message")
                .addClass("error-message")
                .text("No attempts left. Login is disabled.");

              return false;
            }

            let email = $("#email").val().trim();
            let password = $("#password").val();

            if (email === correctEmail && password === correctPassword) {
              $("#loginMessage")
                .removeClass("error-message")
                .addClass("success-message")
                .text("Login successful!");

              $("#attemptsText").text("Login successful.");

              // if hindi nag success yung attempts ay yung login btn ay id-disable
              $("#loginButton").prop("disabled", true);
            } else {
              attempts--;
              $("#attemptsText").text("Attempts left: " + attempts);

              $("#loginMessage")
                .removeClass("success-message")
                .addClass("error-message")
                .text("Incorrect email or password.");

              $("#password").val("");

              if (attempts === 0) {
                $("#loginMessage").text("No attempts left. Login is disabled.");

                // same kanina, if hindi nag success yung attempts ay yung login btn ay id-disable
                $("#loginButton").prop("disabled", true);

                $("#email").prop("disabled", true);
                $("#password").prop("disabled", true);
                $("#remember").prop("disabled", true);
              }
            }
          },
        });
      });
    </script>
  </body>
</html>
