<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS -->
        <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- CSS Normalized -->
    <link rel="stylesheet" href="css/normalized.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/serv.css" />

    <title>Job Finder</title>
  </head>
  <body>
    <!-- Start Navbar -->
    <nav
      class="navbar navbar-expand-lg navbar-light bd-blue-800 fixed-top shadow"
    >
      <div class="container">
        <a class="navbar-brand logo" href="#">Jobhunt</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse ms-5" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 mt-2">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="jobs">Jobs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about_us">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact_us">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="membership">Members</a>
            </li>
          </ul>
          <div class="acount">
            <a href="login" class="me-2"
              ><i class="fas fa-sign-in-alt me-2"></i>Login</a
            >
            <a href="sign_up"><i class="fas fa-user"></i> Signup</a>
          </div>
          <!-- profile -->
          <div class="dropdown mt-4 mx-2 pb-4">
            <a
              href="#"
              class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
              id="dropdownUser1"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              <img
                src="/images/personal.png"
                alt="hugenerd"
                width="30"
                height="30"
                class="rounded-circle"
              />
            </a>
            <ul
              class="dropdown-menu dropdown-menu-dark text-small main-color text-white shadow"
            >
              <li>
                <a class="dropdown-item" href="dashboard"
                  >Dashboard</a
                >
              </li>
              <li><a class="dropdown-item" href="cv">Profile</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li><a class="dropdown-item" href="index">Sign out</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
<!-- End  Navbar-->


       @yield('content')     

<!-- start footer -->
    <footer class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-3">
            <a class="logo" href="#">Jobhunt</a>
            <p>The most trusted source for jobs.</p>
            <div class="icon">
              <i class="fab fa-facebook-f" style="color: white"></i>
              <i class="fab fa-twitter"></i>
              <i
                class="fab fa-instagram"
                style="background-color: #db2f6a; border-radius: 7px"
              ></i>
              <i class="fab fa-linkedin-in"></i>
              <i class="fab fa-snapchat-ghost"></i>
              <i class="fab fa-tiktok"></i>
            </div>
          </div>

          <div class="boxes col-md-9">
            <div class="row">
              <div class="box col-sm-5 col-md-5 col-lg-3 py-2">
                <h5>TOP CATEGORIES</h5>
                <ul class="list-group list-group-flush">
                  <li class="list-group">
                    <a>Development <span>(67)</span></a>
                  </li>
                  <li class="list-group">
                    <a>Healthcare <span>(18)</span></a>
                  </li>
                  <li class="list-group">
                    <a>Finance/Accounting <span>(8)</span></a>
                  </li>
                  <li class="list-group">
                    <a>Computers/IT <span>(9)</span></a>
                  </li>
                </ul>
              </div>
              <div class="box col-sm-5 col-md-5 col-lg-3 py-2">
                <h5>TOP LOCATIONS</h5>
                <ul class="list-group list-group-flush">
                  <li class="list-group">
                    <a>Aden <span>(51)</span></a>
                  </li>
                  <li class="list-group">
                    <a>Sana'a <span>(36)</span></a>
                  </li>
                  <li class="list-group">
                    <a>Ibb <span>(21)</span></a>
                  </li>
                  <li class="list-group">
                    <a>Taiz <span>(11)</span></a>
                  </li>
                  <li class="list-group">
                    <a>Hodiedah <span>(10)</span></a>
                  </li>
                </ul>
              </div>
              <div class="box col-sm-5 col-md-5 col-lg-3 py-2">
                <h5>TOP EMPLOYERS</h5>
                <ul class="list-group list-group-flush">
                  <li class="list-group">
                    <a>MSF <span>(17)</span></a>
                  </li>
                  <li class="list-group">
                    <a>Confidential <span>(14)</span></a>
                  </li>
                  <li class="list-group">
                    <a>INTERSOS <span>(14)</span></a>
                  </li>
                  <li class="list-group">
                    <a>Al-Awn Foundation for Development <span>(9)</span></a>
                  </li>
                  <li class="list-group">
                    <a>SOUL for Development <span>(6)</span></a>
                  </li>
                </ul>
              </div>
              <div class="box col-sm-5 col-md-5 col-lg-3 py-2">
                <h5>Job Finder</h5>
                <ul class="list-group list-group-flush">
                  <li class="list-group">
                    <a>Home </a>
                  </li>
                  <li class="list-group">
                    <a>Jobs </a>
                  </li>
                  <li class="list-group">
                    <a>Services </a>
                  </li>
                  <li class="list-group">
                    <a>Contact Us </a>
                  </li>
                  <li class="list-group">
                    <a>About Us </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
