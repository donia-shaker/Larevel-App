@extends('front.master')
@section('content')

    <!-- start sidebar -->
    <div class="job-page-sidebar">
      <div class="container-fluid position-relative">
        <div class="row">
          <div
            class="col-2 main-color d-lg-block sidebar px-3 position-fixed position-absolute"
            id="sidebar"
          >
            <div class="sidebar-left col-fixed">
              <form action="">
                <div id="cities" class="my-3">
                  <h5 class="text-white">Choose A City:</h5>
                  <select
                    id="city"
                    class="form-select"
                    aria-label="Default select example w-50"
                  >
                    <option selected>All</option>
                    <option value="Sanaa">Sanaa</option>
                    <option value="Taiz">Taiz</option>
                    <option value="Aden">Aden</option>
                  </select>
                </div>
                <div id="companies" class="my-5">
                  <h5 class="text-white">Choose A Company:</h5>
                  <select
                    id="company"
                    class="form-select"
                    aria-label="Default select example w-50"
                  >
                    <option selected>All</option>
                    <option value="Microsoft">Microsoft</option>
                    <option value="NonStop">NonStop</option>
                    <option value="Mencap">Mencap</option>
                  </select>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End sidebar -->

    <!-- Start Search Job -->
    <div class="job-page-content">
      <div
        class="container d-flex flex-column mx-auto mb-1 text-center"
        style="margin-top: 100px"
      >
        <h2 class="card-title">Start Search For Your Job</h2>
        <form class="d-flex">
          <input
            id="search"
            class="form-control me-2 w-75"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <button class="btn btn-primary" type="submit">Search</button>
        </form>
        <button
          type="button"
          id="sidebarCollapse"
          class="btn mx-auto my-4 btn-info main-color text-white"
        >
          <i class="fas fa-align-left"></i>
          <span>Toggle Sidebar</span>
        </button>
      </div>
      <!-- End Search Job -->

      <!-- Start Jobs Cards -->
      <div class="jobs-cards">
        <div class="container">
          <!-- start card one -->
          <div class="one w-100 my-4 w-lg-75">
            <a href="../Pages/details.html" class="text-decoration-none">
              <div class="card mb-3 shadow">
                <div class="row g-0">
                  <div class="col-md-3">
                    <img
                      src="/images/job-3.jpg"
                      class="img-fluid rounded-start img-thumbnail"
                      data-name=""
                    />
                  </div>
                  <div class="col-md-5">
                    <div class="card-body">
                      <span class="text-warning">Part Time</span>
                      <h5 class="card-title">
                        Junior Digital Graphic Designer
                      </h5>
                      <p class="card-text">
                        Posted 3 years ago by
                        <span class="text-success">Mencap Co</span>
                      </p>
                      <small class="text-muted"
                        ><i class="fas fa-map-marker-alt"></i>
                        <span class="working-city">Sanaa</span></small
                      >
                    </div>
                  </div>
                  <div class="col-md-3 mt-4 px-2">
                    <span class="text-danger fw-bold fs-md-5"
                      >Application ends:</span
                    >
                    <p class="fs-5">December 15, 2022</p>
                  </div>
                </div>
              </div></a
            >
          </div>
          <!-- End card one -->

          <!-- start card Two -->
          <div class="one my-4 w-100 w-75">
            <a href="../Pages/details.html" class="text-decoration-none">
              <div class="card mb-3 shadow">
                <div class="row g-0">
                  <div class="col-md-3">
                    <img
                      src="/images/job-4.png"
                      class="img-fluid rounded-start img-thumbnail"
                      data-name="Microsoft"
                    />
                  </div>
                  <div class="col-md-5">
                    <div class="card-body">
                      <span class="text-warning">Part Time</span>
                      <h5 class="card-title">Finance Manager & Health</h5>
                      <i class="fas fa-star text-warning"></i>
                      <p class="card-text">
                        Posted 3 years ago by
                        <span class="text-success">Mencap Co</span>
                      </p>
                      <small class="text-muted"
                        ><i class="fas fa-map-marker-alt"></i>
                        <span class="working-city">Aden</span></small
                      >
                    </div>
                  </div>
                  <div class="col-md-3 mt-4 px-2">
                    <span class="text-danger fw-bold fs-md-5"
                      >Application ends:</span
                    >
                    <p class="fs-5">December 30, 2022</p>
                  </div>
                </div>
              </div></a
            >
          </div>
          <!-- End card Two -->

          <!-- start card Three -->
          <div class="one my-4 w-100 w-75">
            <a href="../Pages/details.html" class="text-decoration-none">
              <div class="card mb-3 shadow">
                <div class="row g-0">
                  <div class="col-md-3">
                    <img
                      src="/images/job-1.jpg"
                      class="img-fluid rounded-start img-thumbnail"
                      data-name="NonStop"
                    />
                  </div>
                  <div class="col-md-5">
                    <div class="card-body">
                      <span class="text-warning">Freelancer</span>
                      <h5 class="card-title">General Ledger Accountant</h5>
                      <i class="fas fa-star text-warning"></i>
                      <p class="card-text">
                        Posted 3 years ago by
                        <span class="text-success">Mencap Co</span>
                      </p>
                      <small class="text-muted"
                        ><i class="fas fa-map-marker-alt"></i
                        ><span class="working-city">Taiz</span>
                      </small>
                    </div>
                  </div>
                  <div class="col-md-3 mt-4 px-2">
                    <span class="text-danger fw-bold fs-md-5"
                      >Application ends:</span
                    >
                    <p class="fs-5">December 30, 2022</p>
                  </div>
                </div>
              </div></a
            >
          </div>
          <!-- End card Three -->

          <!-- start card Four -->
          <div class="one my-4 w-100 w-75">
            <a href="../Pages/details.html" class="text-decoration-none">
              <div class="card mb-3 shadow">
                <div class="row g-0">
                  <div class="col-md-3">
                    <img
                      src="/images/job-2.jpg"
                      class="img-fluid rounded-start img-thumbnail"
                      data-name="Mencap"
                    />
                  </div>
                  <div class="col-md-5">
                    <div class="card-body">
                      <span class="text-warning">Freelancer</span>
                      <h5 class="card-title">ACB Product Sales Specialist</h5>
                      <p class="card-text">
                        Posted 3 years ago by
                        <span class="text-success">Mencap Co</span>
                      </p>
                      <small class="text-muted"
                        ><i class="fas fa-map-marker-alt"></i
                        ><span class="working-city">Sanaa</span>
                      </small>
                    </div>
                  </div>
                  <div class="col-md-3 mt-4 px-2">
                    <span class="text-danger fw-bold fs-md-5"
                      >Application ends:</span
                    >
                    <p class="fs-5">December 22, 2022</p>
                  </div>
                </div>
              </div></a
            >
          </div>
          <!-- End card Four -->

          <!-- start card Five -->
          <div class="one my-4 w-100 w-lg-75">
            <a href="../Pages/details.html" class="text-decoration-none">
              <div class="card mb-3 shadow">
                <div class="row g-0">
                  <div class="col-md-3">
                    <img
                      src="/images/job-3.jpg"
                      class="img-fluid rounded-start img-thumbnail"
                    />
                  </div>
                  <div class="col-md-5">
                    <div class="card-body">
                      <span class="text-warning">Part Time</span>
                      <h5 class="card-title">
                        Junior Digital Graphic Designer
                      </h5>
                      <p class="card-text">
                        Posted 3 years ago by
                        <span class="text-success">Mencap Co</span>
                      </p>
                      <small class="text-muted"
                        ><i class="fas fa-map-marker-alt"></i
                        ><span class="working-city">Sanaa</span>
                      </small>
                    </div>
                  </div>
                  <div class="col-md-3 mt-4 px-2">
                    <span class="text-danger fw-bold fs-md-5"
                      >Application ends:</span
                    >
                    <p class="fs-5">December 15, 2022</p>
                  </div>
                </div>
              </div></a
            >
          </div>
          <!-- End card Five -->

          <!-- start card Six -->
          <div class="one my-4 w-100 w-75">
            <a href="../Pages/details.html" class="text-decoration-none">
              <div class="card mb-3 shadow">
                <div class="row g-0">
                  <div class="col-md-3">
                    <img
                      src="/images/job-4.png"
                      class="img-fluid rounded-start img-thumbnail"
                      data-name="Microsoft"
                    />
                  </div>
                  <div class="col-md-5">
                    <div class="card-body">
                      <span class="text-warning">Part Time</span>
                      <h5 class="card-title">Finance Manager & Health</h5>
                      <i class="fas fa-star text-warning"></i>
                      <p class="card-text">
                        Posted 3 years ago by
                        <span class="text-success">Mencap Co</span>
                      </p>
                      <small class="text-muted"
                        ><i class="fas fa-map-marker-alt"></i
                        ><span class="working-city">Aden</span>
                      </small>
                    </div>
                  </div>
                  <div class="col-md-3 mt-4 px-2">
                    <span class="text-danger fw-bold fs-md-5"
                      >Application ends:</span
                    >
                    <p class="fs-5">December 30, 2022</p>
                  </div>
                </div>
              </div></a
            >
          </div>
          <!-- End card Six -->

          <!-- start card Seven -->
          <div class="one my-4 w-100 w-75">
            <a href="../Pages/details.html" class="text-decoration-none">
              <div class="card mb-3 shadow">
                <div class="row g-0">
                  <div class="col-md-3">
                    <img
                      src="/images/job-1.jpg"
                      class="img-fluid rounded-start img-thumbnail"
                      data-name="NonStop"
                    />
                  </div>
                  <div class="col-md-5">
                    <div class="card-body">
                      <span class="text-warning">Freelancer</span>
                      <h5 class="card-title">General Ledger Accountant</h5>
                      <i class="fas fa-star text-warning"></i>
                      <p class="card-text">
                        Posted 3 years ago by
                        <span class="text-success">Mencap Co</span>
                      </p>
                      <small class="text-muted"
                        ><i class="fas fa-map-marker-alt"></i
                        ><span class="working-city">Taiz</span>
                      </small>
                    </div>
                  </div>
                  <div class="col-md-3 mt-4 px-2">
                    <span class="text-danger fw-bold fs-md-5"
                      >Application ends:</span
                    >
                    <p class="fs-5">December 30, 2022</p>
                  </div>
                </div>
              </div></a
            >
          </div>
          <!-- End card Seven -->

          <!-- start card Eight -->
          <div class="one my-4">
            <a href="../Pages/details.html" class="text-decoration-none">
              <div class="card mb-3 shadow">
                <div class="row g-0">
                  <div class="col-md-3">
                    <img
                      src="/images/job-2.jpg"
                      class="img-fluid rounded-start img-thumbnail"
                      data-name="Mencap"
                    />
                  </div>
                  <div class="col-md-5">
                    <div class="card-body">
                      <span class="text-warning">Freelancer</span>
                      <h5 class="card-title">ACB Product Sales Specialist</h5>
                      <p class="card-text">
                        Posted 3 years ago by
                        <span class="text-success">Mencap Co</span>
                      </p>
                      <small class="text-muted"
                        ><i class="fas fa-map-marker-alt"></i
                        ><span class="working-city">Sanaa</span>
                      </small>
                    </div>
                  </div>
                  <div class="col-md-3 mt-4 px-2">
                    <span class="text-danger fw-bold fs-md-5"
                      >Application ends:</span
                    >
                    <p class="fs-5">December 22, 2022</p>
                  </div>
                </div>
              </div></a
            >
          </div>
          <!-- End card Eight -->
        </div>
      </div>
    </div>

    <!-- End Jobs Cards -->

 @endsection