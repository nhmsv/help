<?php $this->view('includes/header', $data) ?>
<?php $this->view('includes/nav', $data) ?>

<!--Main content-->
<main>
    <section class="position-relative">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12 col-xl-12 h-100 pt-lg-5 pb-5">
                    <h4>MVC Model</h4>
               
                    <pre>
                    
  <code>
  <?= $print_code ?>
  </code>
</pre>
                </div>
            </div>
        </div>
    </section>
</main>

<?php $this->view('includes/footer', $data) ?>