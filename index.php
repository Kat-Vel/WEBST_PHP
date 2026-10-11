<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>HOME|Home Salon</title>

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

  <body>
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.html"> Smart Salon </a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto align-items-lg-center">
            <li class="nav-item">
              <a class="nav-link" href="#home"> Home </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#services"> Services </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#about"> About </a>
            </li>

            <li class="nav-item ms-lg-3">
              <a class="btn btn-outline-salon" href="login.html"> Login </a>
            </li>

            <li class="nav-item ms-lg-2">
              <a class="btn btn-salon" href="register.html"> Register </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section id="home" class="hero-section">
      <div class="container">
        <div class="row align-items-center">
          <!--sa left side-->

          <div class="col-lg-6">
            <p class="hero-small">WELCOME TO SMART SALON</p>

            <h1>
              Your beauty,
              <span>our passion.</span>
            </h1>

            <p class="hero-description">
              Experience a simple and convenient way to discover salon services,
              manage your account, and enjoy a better salon experience.
            </p>

            <div class="hero-buttons">
              <a href="register.html" class="btn btn-salon btn-lg">
                Get Started
              </a>

              <a href="#services" class="btn btn-outline-salon btn-lg">
                View Services
              </a>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="salon-card">
              <div class="salon-card-icon">
                <i class="bi bi-scissors"></i>
              </div>

              <h3>Beauty & Care</h3>

              <p>
                Professional salon services designed to help you look and feel
                your best.
              </p>

              <div class="salon-info">
                <div>
                  <i class="bi bi-check-circle-fill"></i>
                  Quality Services
                </div>

                <div>
                  <i class="bi bi-check-circle-fill"></i>
                  Friendly Staff
                </div>

                <div>
                  <i class="bi bi-check-circle-fill"></i>
                  Comfortable Experience
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="section-padding">
      <!-- para sa services -->
      <div class="container">
        <div class="section-heading text-center">
          <p>OUR SERVICES</p>
          <h2>What We Offer</h2>
          <span>
            Choose from our range of salon services designed for you.
          </span>
        </div>

        <div class="row g-4">
          <div class="col-md-4">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-scissors"></i>
              </div>
              <h4>Hair Styling</h4>
              <p>
                Professional haircuts, styling, and treatments for your desired
                look.
              </p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-stars"></i>
              </div>

              <h4>Beauty Care</h4>
              <p>
                Relax and enjoy beauty services that help you feel refreshed and
                confident.
              </p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-heart"></i>
              </div>

              <h4>Personal Care</h4>
              <p>
                Personalized services created to match your needs and
                preferences.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--!!!About!!!-->
    <section id="about" class="about-section">
      <div class="container">
        <div class="row align-items-center g-5">
          <div class="col-lg-6">
            <div class="about-box">
              <div
                id="salonCarousel"
                class="carousel slide"
                data-bs-ride="carousel"
                data-bs-interval="3000"
              >
                <div class="carousel-indicators">
                  <button
                    type="button"
                    data-bs-target="#salonCarousel"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="Slide 1"
                  ></button>

                  <button
                    type="button"
                    data-bs-target="#salonCarousel"
                    data-bs-slide-to="1"
                    aria-label="Slide 2"
                  ></button>

                  <button
                    type="button"
                    data-bs-target="#salonCarousel"
                    data-bs-slide-to="2"
                    aria-label="Slide 3"
                  ></button>
                </div>

                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img
                      src="Images/salon1.jpg"
                      class="d-block w-100"
                      alt="Smart Salon"
                    />
                  </div>

                  <div class="carousel-item">
                    <img
                      src="Images/salon2.jpg"
                      class="d-block w-100"
                      alt="Smart Salon"
                    />
                  </div>

                  <div class="carousel-item">
                    <img
                      src="Images/salon3.jpg"
                      class="d-block w-100"
                      alt="Smart Salon"
                    />
                  </div>
                </div>

                <button
                  class="carousel-control-prev"
                  type="button"
                  data-bs-target="#salonCarousel"
                  data-bs-slide="prev"
                >
                  <span class="carousel-control-prev-icon"></span>
                  <span class="visually-hidden">Previous</span>
                </button>

                <button
                  class="carousel-control-next"
                  type="button"
                  data-bs-target="#salonCarousel"
                  data-bs-slide="next"
                >
                  <span class="carousel-control-next-icon"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <p class="section-label">ABOUT SMART SALON</p>
            <h2>A better salon experience starts here.</h2>
            <p>
              Our goal is to provide customers with an easy-to-use platform
              where they can explore salon services and manage their account.
              Designed to make salon services easier and more convenient for
              customers.
            </p>
            <a href="register.html" class="btn btn-salon">
              Create an Account
            </a>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container text-center">
        <h5>Smart Salon</h5>

        <p>Beauty, care, and convenience in one place.</p>

        <small> © 2026 Smart Salon. All rights reserved. </small>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
