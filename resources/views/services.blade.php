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
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../Design-Folder/css/all.min.css" />
    <!-- CSS Normalized -->
    <link rel="stylesheet" href="../Design-Folder/css/normalized.css" />
    <link rel="stylesheet" href="../Design-Folder/css/style.css" />
    <link rel="stylesheet" href="../Design-Folder/css/serv.css" />

    <title>Job Finder</title>
  </head>
  <body>
    <!-- start navbar -->
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
              <a class="nav-link" aria-current="page" href="../index.html"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="job.html">Jobs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about-us.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact-us.html">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="membership.html">Members</a>
            </li>
          </ul>
        </div>
        <div class="acount text-end">
          <a href="login.html" class="me-2"
            ><i class="fas fa-sign-in-alt me-2"></i>Login</a
          >
          <a href="sign-up.html"><i class="fas fa-user"></i> Signout</a>
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
              src="../Design-Folder/images/personal.png"
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
              <a class="dropdown-item" href="dashboard.html">Dashboard</a>
            </li>
            <li><a class="dropdown-item" href="cv.html">Profile</a></li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li><a class="dropdown-item" href="../index.html">Sign out</a></li>
          </ul>
        </div>
        <!-- end -->
      </div>
    </nav>
    <!-- End  Navbar-->

    <!-- Start Services Upper Part -->
    <div class="srv-upper-part">
      <div class="container px-md-5">
        <div class="row align-items-center justify-content-evenly">
          <div class="col text-left">
            <h3 class="mb-5 fs-1">Services we offer</h3>
            <p>
              We truly care about our users and our product. We are dedicated to
              providing you with the best experience possible.
            </p>
            <p>
              Focus is having the unwavering attention to complete what you set
              out to do.
            </p>
          </div>
          <div class="col image">
            <img
              src="../Design-Folder/images/services.jpg"
              class="w-75"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>
    <!-- End Services Upper Part -->

    <!-- Start services Part -->
    <div class="part-middel">
      <div class="container mt-5 text-center">
        <h1 class="fw-bold">Our Services</h1>
        <div class="cards mx-auto w-md-75 p-1">
          <div class="d-flex justify-content-between flex-wrap mx-lg-5">
            <!--  start  card 1 -->
            <div
              class="box shadow rounded-3 col-md bg-light main-color mx-3 p-5 my-2 text-center img-rounded"
            >
              <a>
                <i
                  class="far text-primary fa-file-alt p-4 mb-4 bg-white fs-1"
                ></i>
                <h4>Advertise A Job</h4>
                <p class="mt-3 text-black-75">
                  Focus is having the unwavering attention to complete what you
                  set out to do. There are a million distractions in every facet
                  of our lives.
                </p>
              </a>
            </div>
            <!--  end  card 1 -->

            <!--  start  card 2 -->
            <div
              class="box col-md shadow rounded-3 bg-light main-color p-5 my-2 text-center mx-3 img-rounded"
            >
              <a>
                <i
                  class="far text-primary fa-file-alt mb-4 p-4 bg-white fs-1"
                ></i>
                <h4>Recruiter Profiles</h4>
                <p class="mt-3 text-black-75">
                  So, how can we stay on course with all the distractions in our
                  lives? Willpower is a good start, but it’s very difficult to
                  stay on track.
                </p>
              </a>
            </div>
            <!--  end  card 2 -->

            <!--  start  card 3 -->
            <div
              class="box col-md shadow rounded-3 bg-light main-color p-5 my-2 text-center mx-3 img-rounded"
            >
              <a>
                <i
                  class="far text-primary fa-file-alt mb-4 p-4 bg-white fs-1"
                ></i>
                <h4>Find Your dream Job</h4>
                <p class="mt-3 text-black-75">
                  The price is something not necessarily defined as financial.
                  It could be time, effort, sacrifice, money or perhaps,
                  something else.
                </p>
              </a>
            </div>
          </div>
        </div>
        <!--  End  card 3 -->

        <div class="cards mx-auto mt-3 w-md-75 p-1">
          <div class="d-flex justify-content-between flex-wrap mx-lg-5">
            <!-- Start Card 4 -->
            <div
              class="box shadow rounded-3 col-md bg-light main-color mx-3 p-5 my-2 text-center img-rounded"
            >
              <a>
                <i
                  class="far text-primary fa-file-alt p-4 mb-4 bg-white fs-1"
                ></i>
                <h4>Advertise A Job</h4>
                <p class="mt-3 text-black-75">
                  Focus is having the unwavering attention to complete what you
                  set out to do. There are a million distractions in every facet
                  of our lives.
                </p>
              </a>
            </div>
            <!-- end Card 4 -->

            <!-- Start Card 5 -->
            <div
              class="box col-md shadow rounded-3 bg-light main-color p-5 my-2 mx-2 text-center img-rounded"
            >
              <a>
                <i
                  class="far text-primary fa-file-alt mb-4 p-4 mx-2 bg-white fs-1"
                ></i>
                <h4>Recruiter Profiles</h4>
                <p class="mt-3 text-black-75">
                  So, how can we stay on course with all the distractions in our
                  lives? Willpower is a good start, but it’s very difficult to
                  stay on track.
                </p>
              </a>
            </div>
            <!-- Start Card 5 -->

            <!-- Start Card 6 -->
            <div
              class="box col-md shadow rounded-3 bg-light main-color p-5 my-2 text-center mx-3 img-rounded"
            >
              <a>
                <i
                  class="far text-primary fa-file-alt mb-4 p-4 bg-white fs-1"
                ></i>
                <h4>Find Your dream Job</h4>
                <p class="mt-3 text-black-75">
                  The price is something not necessarily defined as financial.
                  It could be time, effort, sacrifice, money or perhaps,
                  something else.
                </p>
              </a>
            </div>
            <!-- End Card 4 -->
          </div>
        </div>
      </div>
    </div>
    <!-- end services part -->

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
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
