<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/css/all.min.css" />
    <!-- CSS Normalized -->
    <link rel="stylesheet" href="/css/normalized.css" />
    <!-- Bootstrap Link -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <!-- Css File -->
    <link rel="stylesheet" href="/css/style.css" />
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
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Pages/job.html">Jobs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Pages/services.html">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Pages/about-us.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Pages/membership.html">Members</a>
            </li>
          </ul>
          <div class="acount">
            <a href="Pages/login.html" class="me-2"
              ><i class="fas fa-sign-in-alt me-2"></i>Login</a
            >
            <a href="Pages/sign-up.html"><i class="fas fa-user"></i> Signup</a>
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
                <a class="dropdown-item" href="Pages/dashboard.html"
                  >Dashboard</a
                >
              </li>
              <li><a class="dropdown-item" href="Pages/cv.html">Profile</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- End  Navbar-->

    <!-- start slider -->
    <div
      id="carouselExampleDark"
      class="carousel carousel-dark slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleDark"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleDark"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleDark"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img
            src="/images/slide-1.jpeg"
            class="d-block w-100"
            alt="..."
          />
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="/images/slide-2.jpeg" class="d-block" />
        </div>
        <div class="carousel-item">
          <img src="/images/slide-3.jpeg" class="d-block" />
        </div>
      </div>
      <div class="overlay"></div>
      <div class="carousel-caption d-none d-md-block">
        <h2>The Easiest Way to Get Your New Job</h2>
        <p>Find Jobs, Employment & Career Opportunities.</p>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleDark"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleDark"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- End Slider -->

    <!-- start lastest Job -->
    <div class="jobs">
      <div class="container my-5 bg-light">
        <h2
          class="my-5 bg-primary p-3 w-25 text-center mx-auto rounded-pill text-white shadow"
        >
          Last Jobs
        </h2>
        <div class="row row-cols-1 row-cols-md-3 g-md-5">
          <a href="Pages/details.html">
            <div class="col">
              <div
                class="card h-57 shadow my-3 py-3 d-flex flex-column align-items-center"
              >
                <img
                  src="/images/job-1.jpg"
                  class="card-img-top w-50 py-3"
                  alt="..."
                />
                <div class="card-body text-center">
                  <span class="text-warning mb-2">Freelance</span>
                  <h5 class="card-title">Assistant / Store Keeper</h5>
                  <p class="card-text fw-light">Los Angeles, CA</p>
                </div>
                <div class="card-footer bg-white border-0">
                  <button type="button" class="btn btn-primary">
                    Browse Job
                  </button>
                </div>
              </div>
            </div></a
          >
          <a href="Pages/details.html">
            <div class="col">
              <div
                class="card h-75 shadow my-3 py-3 d-flex flex-column align-items-center"
              >
                <img
                  src="/images/job-2.jpg"
                  class="card-img-top w-50 py-3"
                  alt="..."
                />
                <div class="card-body text-center">
                  <span class="text-warning mb-2">Freelance</span>

                  <h5 class="card-title">Finance Manager & Health</h5>
                  <p class="card-text fw-light">Los Angeles, CA</p>
                </div>
                <div class="card-footer bg-white border-0">
                  <button type="button" class="btn btn-primary">
                    Browse Job
                  </button>
                </div>
              </div>
            </div></a
          >
          <a href="Pages/details.html">
            <div class="col">
              <div
                class="card h-57 shadow my-3 py-3 d-flex flex-column align-items-center"
              >
                <img
                  src="/images/job-3.jpg"
                  class="card-img-top w-50 py-3"
                  alt="..."
                />
                <div class="card-body text-center">
                  <span class="text-warning mb-2">Freelance</span>
                  <h5 class="card-title">General Ledger Accountant</h5>
                  <p class="card-text fw-light">Los Angeles, CA</p>
                </div>
                <div class="card-footer bg-white border-0">
                  <button type="button" class="btn btn-primary">
                    Browse Job
                  </button>
                </div>
              </div>
            </div></a
          >
          <a href="Pages/details.html">
            <div class="col">
              <div
                class="card h-57 shadow my-3 py-3 d-flex flex-column align-items-center"
              >
                <img
                  src="/images/job-1.jpg"
                  class="card-img-top w-50 py-3"
                  alt="..."
                />
                <div class="card-body text-center">
                  <span class="text-warning mb-2">Freelance</span>
                  <h5 class="card-title">Assistant / Store Keeper</h5>
                  <p class="card-text fw-light">Los Angeles, CA</p>
                </div>
                <div class="card-footer bg-white border-0">
                  <button type="button" class="btn btn-primary">
                    Browse Job
                  </button>
                </div>
              </div>
            </div></a
          >
          <a href="Pages/details.html">
            <div class="col">
              <div
                class="card h-57 shadow my-3 py-3 d-flex flex-column align-items-center"
              >
                <img
                  src="/images/job-2.jpg"
                  class="card-img-top w-50 py-3"
                  alt="..."
                />
                <div class="card-body text-center">
                  <span class="text-warning mb-2">Freelance</span>
                  <h5 class="card-title">ACB Product Sales Specialist</h5>
                  <p class="card-text fw-light">Los Angeles, CA</p>
                </div>
                <div class="card-footer bg-white border-0">
                  <button type="button" class="btn btn-primary">
                    Browse Job
                  </button>
                </div>
              </div>
            </div></a
          >
          <a href="Pages/details.html">
            <div class="col">
              <div
                class="card h-57 shadow my-3 py-3 d-flex flex-column align-items-center"
              >
                <img
                  src="/images/job-3.jpg"
                  class="card-img-top w-50 py-3"
                  alt="..."
                />
                <div class="card-body text-center">
                  <span class="text-warning mb-2">Freelance</span>
                  <h5 class="card-title">Senior/ Staff Nurse</h5>
                  <p class="card-text fw-light">Los Angeles, CA</p>
                </div>
                <div class="card-footer bg-white border-0">
                  <button type="button" class="btn btn-primary">
                    Browse Job
                  </button>
                </div>
              </div>
            </div></a
          >
        </div>
        <a href="Pages/job.html" class="">
          <button
            class="my-1 bg-primary p-2 w-25 fs-4 rounded-pill text-white shadow border-0 mt-5 position-relative top-50 start-50 translate-middle"
          >
            More
          </button></a
        >
      </div>
    </div>
    <!-- End lastest Job -->
    <div class="container my-5">
      <div
        class="row d-flex justify-content-md-between justify-content-center flex-wrap align-items-center"
      >
        <div class="col">
          <img class="mx-auto" src="/images/job-1.jpg" alt="" />
        </div>
        <div class="col">
          <img src="/images/job-2.jpg" alt="" />
        </div>
        <div class="col">
          <img src="/images/job-3.jpg" alt="" />
        </div>
        <div class="col">
          <img
            src="/images/job-4.png"
            style="width: 150px"
            alt=""
          />
        </div>
        <div class="col">
          <img src="/images/job-3.jpg" alt="" />
        </div>
      </div>
    </div>
    <!-- Start Footer -->
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
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
