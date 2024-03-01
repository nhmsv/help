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
                            <th>#</th>
                            <th>ProjectName</th>
                            <th>ProjectSlug</th>
                            <th>ProjectDb</th>
                            <th>ProjectPath</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?PHP if (!empty($result)) {
                            foreach ($result as $row) { ?>
                              <td><a href='<?= ROOT ?>/tb_projects/<?= $row->id ?>'><?= $row->id ?></a></td>
                              <td><?= $row->project_name ?></td>
                              <td><?= $row->project_slug ?></td>
                              <td><?= $row->project_db ?></td>
                              <td><?= $row->project_path ?></td>
                              </tr>
                          <?PHP }
                          } ?>
                        </tbody>
                        <tfoot>
                          <tr>
                            <td><button class="btn btn-success">Submit</button></td>
                            <td><input type="text" class="form-control" name="project_name" id="project_name" placeholder="Project Name" /></td>
                            <td> <input type="text" class="form-control" name="project_slug" id="project_slug" placeholder="Project Slug" />
                            </td>
                            <td> <select class="form-select" name="project_db" id="project_db">
                                <?PHP foreach ($dbs as $db) { ?>
                                  <option value="<?= $db; ?>"><?= getUcwords($db); ?></option>
                                <?PHP } ?>
                              </select>
                            </td>
                            <td> <input type="text" class="form-control" name="project_path" id="project_path" placeholder="Project Path" />
                            </td>

                          </tr>
                        </tfoot>
                      </table>
                      <a href="<?=ROOT . '/' .get('back')?>" class="btn btn-dark ">Back</a>
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