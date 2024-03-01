<?php $this->view('includes/header', $data) ?>
<?php $this->view('includes/nav', $data) ?>

<!--Main content-->
<main>
<section class="position-relative">
        <div class="container position-relative">
            <div class="row">
                <h4>MVC Controller</h4>

                <pre>
  <code>
  <?= $print_code ?>
  </code>
</pre>

            </div>
        </div>
</section>

</main>

<?php $this->view('includes/footer', $data) ?>