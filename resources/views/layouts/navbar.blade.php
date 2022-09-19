<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mx-2 mt-lg-0 fw-bold" href="#">
          Fance
        </a>

        <!-- Alamat -->
        <button style="width: 10rem; font-size: 12px;" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-transparent shadow-none text-white-50 text-start fw-semibold">
          <i class="fa-solid fa-location-dot fs-6 me-2 text-white"></i>Deliver to <span class="fw-bold text-white" style="font-size: 12px;">Malang 6023</span>
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header bg-light">
                <h5 class="modal-title text-black" id="staticBackdropLabel">Choose your location</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Done</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Search -->
        <div class="input-group ms-3">
          <input style="height: 40px;" type="text" class="form-control" placeholder="Search">
          <a style="height: 40px;" class="input-group-text bg-primary text-white border-0" href="">
            <span>
              <i class="fa fa-search"></i>
            </span>
          </a>
        </div>
        <!-- Search -->
  
      <!-- Right elements -->
      <div class="d-flex align-items-center">
  
        <!-- Account -->
        <div class="dropdown hover ms-3" style="z-index: 2;">
          <a class="bg-transparent text-white" href="#">Hello, user <br><span class="fw-bold">Account Settings</span>
            <i class="fa-solid fa-caret-down"></i>
          </a>
          <ul class="menu-dropdown" style="width: 190px;">
            <li>
              <a style="color: black;" href="/signin">
                <button style="margin-top: 10px; margin-bottom: 10px;" type="button" class="btn btn-primary btn-sm shadow-none w-100 fw-semibold">
                  Sign in
                </button>
              </a>
            </li>
            <li><hr class="dropdown-divider text-white-50 bg-dark"></li>
            <li><a style="padding-top: 7px;" href="#">Account</a></li>
            <li><a style="padding-top: 2.5px;" href="#">Become a seller</a></li>
            <li><a style="padding-top: 2.5px; padding-bottom: 7px;" href="#">Sign out</a></li>
          </ul>
        </div>

      <!-- Cart -->
      <button type="button" class="btn btn-transparent align-self-center shadow-none">
        <a class="text-white fs-5" href="#">
          <i class="fas fa-shopping-cart"></i>
        </a>
      </button>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->