<?php

use \Model\Auth;
?>
<!--Header Start-->
<header class="z-fixed header-transparent header-absolute-top pt-lg-3">
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container position-relative">
      <!--:Brand Logo:-->
      <a class="navbar-brand" href="<?= ROOT ?>/">
       <h1 class="text-white"><?=APP_NAME?></h1>
      </a>

      <div class="d-flex align-items-center navbar-no-collapse-items order-lg-last">
        <button class="navbar-toggler order-last" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbarTheme" aria-controls="mainNavbarTheme" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            <i></i>
          </span>
        </button>


        <?php if (!Auth::logged_in()) : ?>

          <!--:Sign In Dropdown:-->
          <div class="nav-item me-3 me-lg-0 ms-lg-4 ms-xl-5 dropdown">
            <a href="#" class="btn btn-outline-primary px-4 btm-sm rounded-pill py-1" data-bs-auto-close="outside" data-bs-toggle="dropdown">
              Sign In
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs p-4">
              <!--:Sign In Form:-->
              <form class="needs-validation" method="post" action="<?= ROOT ?>/login" novalidate>
                <div>
                  <h3 class="mb-1">
                    Welcome back!
                  </h3>
                  <p class="mb-4 text-body-secondary">
                    Please Sign In with details...
                  </p>
                </div>
                <div class="input-icon-group mb-3">
                  <span class="input-icon">
                    <i class="bx bx-envelope"></i>
                  </span>
                  <input type="text" name="username" id="username" required class="form-control" autofocus="" placeholder="Username">
                </div>
                <div class="input-icon-group mb-3">
                  <span class="input-icon">
                    <i class="bx bx-key"></i>
                  </span>
                  <input type="password" name="password" id="password" required class="form-control" placeholder="Password">
                </div>
                <div class="mb-3 d-flex justify-content-between">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Remember me
                    </label>
                  </div>
                  <div>
                    <label class="text-end d-block small mb-0"><a href="page-account-forget-password.html" class="link-decoration">Forget Password?</a></label>
                  </div>
                </div>

                <div class="d-grid">
                  <button class="btn btn-primary btn-hover-arrow" type="submit">
                    <span>Sign in</span>
                  </button>
                </div>
                <p class="pt-4 mb-0 text-body-secondary">
                  Don’t have an account yet? <a href="page-account-signup.html" class="ms-2 pb-0 fw-semibold link-underline">Sign Up</a>
                </p>
              </form>
            </div>
          </div>


        <?php else : ?>


          <div class="nav-item me-3 me-lg-0 dropdown">
            <!--:User:-->
            <a href="#" class="btn btn-outline-primary dropdown-toggle rounded-pill py-0 ps-0 pe-2" data-bs-auto-close="outside" data-bs-toggle="dropdown">
              <img src="<?= ROOT ?>/assets/img/avatar/12.jpg" alt="" class="avatar sm rounded-circle me-1">
              <small><?= Auth::getUsername() ?></small>
            </a>
            <!--:User dropdown:-->
            <div class="dropdown-menu shadow-lg dropdown-menu-end dropdown-menu-xs p-0">
              <a href="#!" class="dropdown-header border-bottom p-4">
                <div class="d-flex align-items-center">
                  <div>
                    <img src="<?= ROOT ?>/assets/img/avatar/12.jpg" alt="" class="avatar xl rounded-pill me-3">
                  </div>
                  <div>
                    <h5 class="mb-0 text-body"><?= Auth::getFname() ?></h5>
                    <span class="d-block mb-2 text-lowercase"><?= Auth::getEmail() ?></span>

                    <div class="small d-inline-block link-underline fw-semibold">View
                      account</div>
                  </div>
                </div>
              </a>

              <a href="<?= ROOT ?>/logout" class="dropdown-item rounded-top-0 p-3">
                <span class="d-block text-end">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bx bx-box-arrow-right me-2" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                  </svg>
                  Sign Out
                </span>
              </a>
            </div>
          </div>


          <!--begin:demos-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hi, <?= Auth::getFirstname() ?>
            </a>
            <div class="dropdown-menu p-lg-3 dropdown-menu-end dropdown-menu-xs">
              <a class="dropdown-item" href="<?= ROOT ?>/admin/dashboard">
                <i class="bx bxs-dashboard"></i> Dashboard
              </a>
              <a class="dropdown-item" href="<?= ROOT ?>/logout">
                <i class="bx bx-log-out"></i> Logout
              </a>

              <!--footer-->

            </div>
          </li>
          <!--end:Pages-->

        <?php endif; ?>



      </div>
      <div class="collapse navbar-collapse" id="mainNavbarTheme">
        <!--Navbar items-->
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?= ROOT ?>/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= ROOT ?>/about">About</a>
          </li>

          <!--begin:outage-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle " href="<?= ROOT ?>/outage" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside">Outages
            </a>
            <div class="dropdown-menu">
              <div class="dropend">
                <a class="dropdown-item" href="<?= ROOT ?>/outage">  Home</a>
              </div>
              <div class="dropend">
                <a class="dropdown-item" href="<?= ROOT ?>/outage/add">  Add</a>
              </div>
              <div class="dropend">
                <a class="dropdown-item" href="<?= ROOT ?>/outage/report">  Report</a>
              </div>
            </div>
          </li>
          <!--end:outage-->

          <!--begin:sample-->
          <li class="nav-item dropdown">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle " href="<?= ROOT ?>/sample" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside">Samples
            </a>
            <div class="dropdown-menu">
              <div class="dropend">
                <a class="dropdown-item" href="<?= ROOT ?>/sample">  Home</a>
              </div>
              <div class="dropend">
                <a class="dropdown-item" href="<?= ROOT ?>/sample/add">  Add</a>
              </div>
              <div class="dropend">
                <a class="dropdown-item" href="<?= ROOT ?>/sample/report">  Report</a>
              </div>
            </div>
          </li>
          </li>
          <!--end:sample-->


              <!--begin:dho-->
              <li class="nav-item dropdown">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle " href="<?= ROOT ?>/dho" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside">DHO
            </a>
            <div class="dropdown-menu">
              <div class="dropend">
                <a class="dropdown-item" href="<?= ROOT ?>/dho">  Home</a>
              </div>
              <div class="dropend">
                <a class="dropdown-item" href="<?= ROOT ?>/dho/add">  Add</a>
              </div>
              <div class="dropend">
                <a class="dropdown-item" href="<?= ROOT ?>/dho/report">  Report</a>
              </div>
            </div>
          </li>
          </li>
          <!--end:sample-->




        </ul>
      </div>
    </div>
  </nav>
</header>