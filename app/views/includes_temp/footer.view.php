<!--Footer Start-->

<!--begin:Footer-->
<footer id="footer" class="bg-body footer position-relative">
  <div class="container pt-9 pt-lg-11 pb-5 position-relative z-1">

    <hr class="mb-5 mt-0">
    <div class="row">
      <div class="col-sm-7 mb-3 mb-sm-0">
 

        
      <div class="d-inline-flex width-13x align-items-center dropup  ">
                                <button class="btn border text-body py-2 px-2 d-flex align-items-center" id="assan-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static">
                                    <span class="theme-icon-active d-flex align-items-center">
                                        <i class="bx align-middle" href="null"></i>
                                    </span>
                                </button>
                                <!--:Dark Mode Options:-->
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="assan-theme" style="--bs-dropdown-min-width: 9rem;">
                                    <li class="mb-1">
                                        <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light">
                                            <span class="theme-icon d-flex align-items-center">
                                                <i class="bx bx-sun align-middle me-2"> </i>
                                            </span>
                                            Light
                                        </button>
                                    </li>
                                    <li class="mb-1">
                                        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
                                            <span class="theme-icon d-flex align-items-center">
                                                <i class="bx bx-moon align-middle me-2"></i>
                                            </span>
                                            Dark
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto">
                                            <span class="theme-icon d-flex align-items-center">
                                                <i class="bx bx-color-fill align-middle me-2"></i>
                                            </span>
                                            Auto
                                        </button>
                                    </li>
                                </ul>
                            </div>

      </div>
      <div class="col-sm-5 small text-md-end">
        <span class="d-block lh-sm text-body-secondary">&copy; Copyright  <?=date('Y')?>. <?=APP_NAME?>
        </span>
      </div>
    </div>
  </div>
  <!--container-->
</footer>
<!--end:Footer-->


<!-- begin Back to Top button -->
<a href="#" class="toTop"><svg class="progress-circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
    <circle cx="50" cy="50" r="40" fill="none" stroke="currentColor" stroke-width="4" stroke-dasharray="0, 251.2"></circle>
  </svg>
  <i class="bx bxs-up-arrow"></i>
</a>
<!-- scripts -->
<script src="<?= ROOT ?>/assets/js/theme.bundle.min.js"></script>
</body>

</html>