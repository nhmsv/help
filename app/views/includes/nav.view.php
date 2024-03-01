<?php

use \Model\Auth;
?>
<!--Header Start-->
<header class="z-fixed header-transparent header-absolute-top pt-lg-3">
  <nav class="navbar navbar-expand-lg navbar-transparent navbar-sticky navbar-light">
    <div class="container">
      <a class="navbar-brand" href="<?= ROOT ?>">
        <?= APP_NAME ?>
      </a>
      <div class="d-flex align-items-center order-last order-lg-1 ms-lg-5">
        <div class="position-relative">
          <button type="button" data-bs-toggle="modal" data-bs-target="#modal_search" class="form-control d-none d-lg-flex position-relative d-flex align-items-center">
            <span class="material-icons align-middle fs-4 opacity-25 me-sm-2">search</span>
            <span class="d-none d-sm-block align-items-center small opacity-75">Search NFTs...</span>
          </button>
        </div>
        <!--Navbar toggler button-->
        <button class="navbar-toggler px-0 border-0 shadow-none ms-3 ms-lg-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
          <span class="material-icons align-middle">menu</span>
        </button>
      </div>

      <ul class="d-flex order-lg-last ms-auto ms-lg-4 me-1 me-lg-0 flex-row navbar-nav align-items-center">
        <li class="nav-item">
          <a href="add-wallet.html" class="nav-link ">
            <span class="material-icons align-middle">
              account_balance_wallet
            </span>
          </a>
        </li>
        <li class="nav-item ms-3 dropdown">
          <a href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" class="nav-link dropdown-toggle">
            <span class="material-icons align-middle">
              account_circle
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-end position-absolute">
            <a href="#!" class="dropdown-item">
              <span class="material-icons align-middle me-2">
                account_circle
              </span> Profile
            </a>
            <a href="#!" class="dropdown-item">
              <span class="material-icons align-middle me-2">
                favorite
              </span> Favorites
            </a>
            <a href="#!" class="dropdown-item">
              <span class="material-icons align-middle me-2">
                visibility
              </span> Watchlist
            </a>
            <a href="#!" class="dropdown-item">
              <span class="material-icons align-middle me-2">
                category
              </span> My collection
            </a>
            <a href="#!" class="dropdown-item">
              <span class="material-icons align-middle me-2">
                manage_accounts
              </span> Settings
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <span class="material-icons align-middle me-2">
                logout
              </span> Logout
            </a>
          </div>
        </li>
        <li class="ms-3 d-lg-none">
          <a href="#modal_search" data-bs-toggle="modal" class="nav-link">
            <span class="material-icons align-middle">search</span>
          </a>
        </li>
      </ul>
      <div class="offcanvas order-lg-2 offcanvas-start" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
        <div class="offcanvas-header justify-content-end">
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link " href="<?= ROOT ?>">Home</a>
            </li>

            <!--:Dark Mode:-->
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle d-flex align-items-center" id="bs-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static">
                <span class="theme-icon-active d-flex align-items-center">
                  <span class="material-icons align-middle"></span>
                </span>
              </a>
              <!--:Dark Mode Options:-->
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bs-theme" style="--bs-dropdown-min-width: 9rem;">
                <li class="mb-1">
                  <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light">
                    <span class="theme-icon d-flex align-items-center">
                      <span class="material-icons align-middle me-2">
                        lightbulb
                      </span>
                    </span>
                    Light
                  </button>
                </li>
                <li class="mb-1">
                  <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
                    <span class="theme-icon d-flex align-items-center">
                      <span class="material-icons align-middle me-2">
                        dark_mode
                      </span>
                    </span>
                    Dark
                  </button>
                </li>
                <li>
                  <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto">
                    <span class="theme-icon d-flex align-items-center">
                      <span class="material-icons align-middle me-2">
                        invert_colors
                      </span>
                    </span>
                    Auto
                  </button>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!--Search Offcanvas start-->
  <div class="modal fade" id="modal_search" tabindex="-1" aria-labelledby="modal_searchLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content overflow-hidden">

        <div class="modal-body p-3">
          <form>
            <div class="position-relative">
              <span class="material-icons d-flex align-items-center opacity-25 justify-content-center width-4x h-100 position-absolute start-0 top-0">search</span>
              <input type="text" class="form-control py-3 ps-6 pe-6 form-control-lg" autofocus placeholder="Search Web3">
              <div class="position-absolute end-0 top-0 h-100 me-2 d-flex align-items-center">
                <div role="button" class="p-0 size-3x d-flex align-items-center justify-content-center z-index-1 position-relative" data-bs-dismiss="modal" aria-label="Close">
                  <span class="material-icons">close</span>
                </div>
              </div>
            </div>
          </form>
          <div class="pt-4 px-2">
            <h6 class="mb-3">
              <span class="material-icons align-middle me-2 opacity-50">sell</span>
              Tags
            </h6>
            <div class="d-flex flex-wrap gap-2">
              <a href="#!" class="btn btn-sm text-body bg-body-secondary hover-lift-sm">Art</a>
              <a href="#!" class="btn btn-sm text-body bg-body-secondary hover-lift-sm">Sports</a>
              <a href="#!" class="btn btn-sm text-body bg-body-secondary hover-lift-sm">Music</a>
              <a href="#!" class="btn btn-sm text-body bg-body-secondary hover-lift-sm">Photography</a>
              <a href="#!" class="btn btn-sm text-body bg-body-secondary hover-lift-sm">Premium</a>
              <a href="#!" class="btn btn-sm text-body bg-body-secondary hover-lift-sm">Domain names</a>
              <a href="#!" class="btn btn-sm text-body bg-body-secondary hover-lift-sm">Collectibles</a>
              <a href="#!" class="btn btn-sm text-body bg-body-secondary hover-lift-sm">Trending cards</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</header>


<section class="position-relative pt-9 pt-lg-12">
  <div class="container position-relative">
    <div class="row" <?= (isset($action) ? '' : 'hidden') ?>>

      <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item"><a href="<?= ROOT ?>">Home</a></li>


        <?PHP if ($platform && !$db_name) { ?>
          <li class="breadcrumb-item active"><?= getUcwords($platform) ?></li>
        <?PHP } else if ($platform && $db_name) { ?>
          <li class="breadcrumb-item"><a href="<?= ROOT ?>/<?= $platform ?>"><?= getUcwords($platform) ?></a></li>
        <?PHP } ?>


        <?PHP if ($db_name && !$table_name) { ?>
          <li class="breadcrumb-item active"><?= getUcwords($db_name) ?> </li>
        <?PHP } else if ($db_name && $table_name) { ?>
          <li class="breadcrumb-item "><a href="<?= ROOT ?>/<?= $platform ?>/?db_name=<?= $db_name ?>"><?= getUcwords($db_name) ?></a></li>
        <?PHP } ?>


        <?PHP if ($table_name) { ?>
          <li class="breadcrumb-item active"><?= getUcwords($table_name) ?> </li>
        <?PHP } ?>





      </ol>

      <div class="col-lg-12 col-xl-12">
        <div class="row">


          <div class="col-lg-3 col-xl-3">
            <h5 class="offcanvas-title" id="offcanvasFilterLabel"> Databases <a href="<?= ROOT ?>/project?back=<?= $platform ?>" class="float-end">

                <!--Uses-->
                <i class="bx bx-plus"></i>
                <i class="bi bi-cloud-plus-fill"></i>
              </a></h5>
            <select class="form-select" name="db_name" id="db_name" onchange="window.location='<?= ROOT ?>/<?= $platform ?>/?db_name='+this.value">
              <option value=""></option>
              <?PHP foreach ($dbs as $row) { ?>
                <option value="<?= $row->project_db ?>" <?= getSelected($row->project_db, $db_name) ?>><?= ToCamelCase($row->project_db, true) ?></option>
              <?PHP } ?>
            </select>
          </div>

          <div class="col-lg-3 col-xl-3">
            <h5 class="offcanvas-title " id="offcanvasFilterLabel"> Tables</h5>
            <select class="form-select" name="table_name" id="table_name" onchange="window.location='<?= ROOT ?>/<?= $platform ?>/?db_name=<?= $db_name ?>&table_name='+this.value">
              <option value=""></option>
              <?PHP
              if ($tables) {
                foreach ($tables as $table) { ?>
                  <option value="<?= $table->TABLE_NAME ?>" <?= getSelected($table->TABLE_NAME, $table_name) ?>><?= getUcwords($table->TABLE_NAME, true) ?></option>
              <?PHP }
              } ?>
            </select>
          </div>


          <div class="col-lg-3 col-xl-3">
            <h5 class="offcanvas-title " id="offcanvasFilterLabel"> Action</h5>
            <select class="form-select" onchange="window.location='<?= ROOT . '/' . $platform ?>/'+this.value+'/?db_name=<?= $db_name ?>&table_name=<?= $table_name ?>'">
              <?PHP
              if ($table_name) {
                foreach ($actions as $id => $text) { ?>
                  <option value="<?= $id ?>" <?= getSelected($id, $action) ?>><?= $text ?></option>
              <?PHP }
              } ?>
            </select>
          </div>

          <div class="col-lg-3 col-xl-3">
            <h5 class="offcanvas-title " id="offcanvasFilterLabel"> Columns</h5>

            <select class="form-select" onchange="window.location='<?= ROOT . '/' . $platform ?>/<?= $action ?>/?db_name=<?= $db_name ?>&table_name=<?= $table_name ?>&column_name='+this.value">
              <option value=""></option>
              <?PHP
              if ($table_name) {
                foreach ($columns as $column) { ?>
                  <option value="<?= $column->COLUMN_NAME ?>" <?= getSelected($column->COLUMN_NAME, $column_name) ?>><?= getUcwords($column->COLUMN_NAME) ?></option>
              <?PHP }
              } ?>
            </select>
          </div>
          <form method="post">
            <input type="hidden" value="<?=$project->project_path?>" name="path" id="path"/>
          <?PHP 
             if($db_name){
              
             echo '<h4 class="mt-3">Create Full Project to path : '.$project->project_path . '</h4>';
              echo '<button type="button" id="createFullProject" class="btn btn-danger mx-2 col-lg-2 text-start mb-3" name="doCreateFullFile" value="1">Create</button>';
             }

          ?>
          <?PHP if ($table_name) { ?>
            <div class="col-lg-3 col-xl-3 mt-3">
              <div id="result"></div>

         
                <?PHP
              
                if($action == 'index'){
                  echo '<button type="button" id="saveMemory" class="btn btn-success mx-2" name="doCreateFullFile" value="1">Create Full Files</button>';
                }else{
                  echo '<button class="btn btn-info" name="doCreateFile" value="1">Create '.getUcwords($table_name).' </button>';
                }
                ?>

            
             
            </div>
          <?PHP } ?>
          </form>

        </div>

      </div>

    </div>
  </div>
</section>

<script>
                  $(document).ready(function() {
                 
                    $('#saveMemory').click(function(e) {
                      e.preventDefault();
                      $.ajax({
                        type: 'POST',
                        url: '<?= ROOT ?>/php/ajax',
                        data: {
                          db_name: $('#db_name').val(),
                          table_name: $('#table_name').val(),
                        }
                      }).done(
                        function(data) {
                          console.log(data);
                        }
                      );
                    });
              
                    $('#createFullProject').click(function(e) {
               
                      e.preventDefault();
                      $.ajax({
                        type: 'POST',
                        url: '<?= ROOT ?>/php/createFullProject',
                        data: {
                          db_name: $('#db_name').val(), path: $('#path').val()
                        }
                      }).done(
                        function(data) {
                      
                          console.log(data);
                        }
                      );
                    });

                    

                  });
                </script>