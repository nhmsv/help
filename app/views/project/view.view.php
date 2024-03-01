<?php $this->view('includes/header', $data) ?>
<?php $this->view('includes/nav', $data) ?>

<!--Main content-->
<main class="main-content" id="main-content">


  <section class="position-relative">
    <div class="container position-relative">
      <div class="">
        <!--Profile info header-->
        <div class="position-relative pt-9 pb-9 pb-lg-11">
          <div class="row">
            <div class="col-lg-12">
              <div class="d-flex flex-column">
                <form method="post" action="<?= ROOT ?>/project/add">

                  <section id="project" class="project">
                    <div class="container" data-aos="fade-up">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th width="100">#</th>
                            <td><a href='<?= ROOT ?>/tb_projects/<?= $row->id ?>'><?= $row->id ?></a></td>

                          </tr>
                          <tr>
                            <th>ProjectName</th>
                            <td><?= $row->project_name ?></td>
                          </tr>
                          <tr>
                            <th>ProjectSlug</th>
                            <td><?= $row->project_slug ?></td>
                          </tr>
                          <tr>
                            <th>ProjectDb</th>
                            <td><?= $row->project_db ?></td>
                          </tr>
                          <tr>
                            <th>ProjectPath</th>
                            <td><?= $row->project_path ?></td>
                          </tr>
                        </thead>
                      </table>
                      <a href="<?=ROOT?>/project" class="btn btn-dark ">Back</a>
                    </div>
                  </section>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  </section> <!-- End Project Section -->
</main>
<?php $this->view('includes/footer', $data) ?>