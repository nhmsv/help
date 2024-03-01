<?php $this->view('includes/header', $data) ?>
<?php $this->view('includes/nav', $data) ?>

<!--Main content-->
<main>
        <section class="position-relative">
            <div class="container py-8 py-lg-11 position-relative">
                <h3 class="text-center display-6 mb-0">Platforms</h3>
                <div class="row text-center justify-content-center">
                    <!--column-->
                    <div class="col-lg-4 col-sm-6 mt-5">
                        <!--card-->
                        <a href="<?=ROOT?>/php"
                            class="card hover-lift text-body text-center">
                            <div class="card-body p-4">
                                <div
                                    class="size-4x mx-auto bg-body-secondary rounded-circle mb-3 d-flex align-items-center justify-content-center">
                                    <span class="material-icons align-middle fs-1">php</span>
                                </div>
                                <!--title-->
                                <h5 class="mb-3">PHP</h5>
                                <p class="mb-0 text-body-secondary">Lorem ipsum dolor sit amet adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </a>
                    </div>
                    <!--column-->
                    <div class="col-lg-4 col-sm-6 mt-5">
                        <!--card-->
                        <a href="<?=ROOT?>/javascript" class="card hover-lift text-body">
                            <div class="card-body p-4">
                                <div
                                    class="size-4x mx-auto bg-body-secondary rounded-circle mb-3 d-flex align-items-center justify-content-center">
                                    <span class="material-icons fs-1 align-middle">
                                        list
                                    </span>
                                </div>
                                <!--title-->
                                <h5 class="mb-3">Javascript</h5>
                                <p class="mb-0 text-body-secondary">Lorem ipsum dolor sit amet adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </a>
                    </div>
                    <!--column-->
                    <div class="col-lg-4 col-sm-6 mt-5">
                        <!--card-->
                        <a href="<?=ROOT?>/css" class="card hover-lift text-body">
                            <div class="card-body p-4">
                                <div
                                    class="size-4x mx-auto bg-body-secondary rounded-circle mb-3 d-flex align-items-center justify-content-center">
                                    <span class="material-icons align-middle fs-1">css</span>
                                </div>
                                <!--title-->
                                <h5 class="mb-3">CSS</h5>
                                <p class="mb-0 text-body-secondary">Lorem ipsum dolor sit amet adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </a>
                    </div>
                    <!--column-->
                    <div class="col-lg-4 col-sm-6 mt-5">
                        <!--card-->
                        <a href="<?=ROOT?>/android" class="card hover-lift text-body">
                            <div class="card-body p-4">
                                <div
                                    class="size-4x mx-auto bg-success rounded-circle mb-3 d-flex align-items-center justify-content-center">
                                    <span class="material-icons align-middle fs-1">android</span>
                                </div>
                                <!--title-->
                                <h5 class="mb-3">Android</h5>
                                <p class="mb-0 text-body-secondary">Lorem ipsum dolor sit amet adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </a>
                    </div>
                    <!--column-->
                    <div class="col-lg-4 col-sm-6 mt-5">
                        <!--card-->
                        <a href="<?=ROOT?>/arduino" class="card hover-lift text-body">
                            <div class="card-body p-4">
                                <div
                                    class="size-4x mx-auto bg-body-secondary rounded-circle mb-3 d-flex align-items-center justify-content-center">
                                    <span class="material-icons align-middle fs-1">mic</span>
                                </div>
                                <!--title-->
                                <h5 class="mb-3">Arduino</h5>
                                <p class="mb-0 text-body-secondary">Lorem ipsum dolor sit amet adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </a>
                    </div>
                    <!--column-->
                    <div class="col-lg-4 col-sm-6 mt-5">
                        <!--card-->
                        <a href="<?=ROOT?>/nodejs" class="card hover-lift text-body">
                            <div class="card-body p-4">
                                <div
                                    class="size-4x mx-auto bg-body-secondary rounded-circle mb-3 d-flex align-items-center justify-content-center">
                                    <span class="material-icons align-middle fs-1">NJ</span>
                                </div>
                                <!--title-->
                                <h5 class="mb-3">Node.js</h5>
                                <p class="mb-0 text-body-secondary">Lorem ipsum dolor sit amet adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="position-relative border-top">
            <div class="container py-8 py-lg-11">
                <h3 class="text-center display-6 mb-4">Frequently Asked Questions</h3>
                <div class="row justify-content-around">
                    <!--Column-->
                    <div class="col-lg-5 col-md-6 mt-7" data-aos="fade-up">
                        <!--Faq card-->
                        <div class="d-flex align-items-start">
                            <div class="flex-shrink-0 me-3">
                                <span class="material-icons align-middle fs-4 text-body-secondary">help_outline</span>
                            </div>
                            <div class="flex-grow-1">
                                <!--Faq-->
                                <h5>What is NFT?</h5>
                                <!--Faqs Answer-->
                                <p class="mb-0 text-body-secondary">
                                    Lorem ipsum dolor sit amet adipiscing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--Column-->
                    <div class="col-lg-5 col-md-6 mt-7" data-aos="fade-up" data-aos-delay="100">
                        <!--Faq card-->
                        <div class="d-flex align-items-start">
                            <div class="flex-shrink-0 me-3">
                                <span class="material-icons align-middle fs-4 text-body-secondary">help_outline</span>
                            </div>
                            <div class="flex-grow-1">
                                <!--Faq-->
                                <h5>What is NFT?</h5>
                                <!--Faqs Answer-->
                                <p class="mb-0 text-body-secondary">
                                    Lorem ipsum dolor sit amet adipiscing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--Column-->
                    <div class="col-lg-5 col-md-6 mt-7" data-aos="fade-up" data-aos-delay="150">
                        <!--Faq card-->
                        <div class="d-flex align-items-start">
                            <div class="flex-shrink-0 me-3">
                                <span class="material-icons align-middle fs-4 text-body-secondary">help_outline</span>
                            </div>
                            <div class="flex-grow-1">
                                <!--Faq-->
                                <h5>What is NFT?</h5>
                                <!--Faqs Answer-->
                                <p class="mb-0 text-body-secondary">
                                    Lorem ipsum dolor sit amet adipiscing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--Column-->
                    <div class="col-lg-5 col-md-6 mt-7" data-aos="fade-up" data-aos-delay="200">
                        <!--Faq card-->
                        <div class="d-flex align-items-start">
                            <div class="flex-shrink-0 me-3">
                                <span class="material-icons align-middle fs-4 text-body-secondary">help_outline</span>
                            </div>
                            <div class="flex-grow-1">
                                <!--Faq-->
                                <h5>What is NFT?</h5>
                                <!--Faqs Answer-->
                                <p class="mb-0 text-body-secondary">
                                    Lorem ipsum dolor sit amet adipiscing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--Column-->
                    <div class="col-lg-5 col-md-6 mt-7" data-aos="fade-up" data-aos-delay="250">
                        <!--Faq card-->
                        <div class="d-flex align-items-start">
                            <div class="flex-shrink-0 me-3">
                                <span class="material-icons align-middle fs-4 text-body-secondary">help_outline</span>
                            </div>
                            <div class="flex-grow-1">
                                <!--Faq-->
                                <h5>What is NFT?</h5>
                                <!--Faqs Answer-->
                                <p class="mb-0 text-body-secondary">
                                    Lorem ipsum dolor sit amet adipiscing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--Column-->
                    <div class="col-lg-5 col-md-6 mt-7" data-aos="fade-up" data-aos-delay="300">
                        <!--Faq card-->
                        <div class="d-flex align-items-start">
                            <div class="flex-shrink-0 me-3">
                                <span class="material-icons align-middle fs-4 text-body-secondary">help_outline</span>
                            </div>
                            <div class="flex-grow-1">
                                <!--Faq-->
                                <h5>What is NFT?</h5>
                                <!--Faqs Answer-->
                                <p class="mb-0 text-body-secondary">
                                    Lorem ipsum dolor sit amet adipiscing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

          <!-- Back to Top button -->
          <a data-tippy-placement="left" data-tippy-content="Scroll to Top" href="#" class="toTop btn text-body bg-primary-subtle border-0 p-0 size-3x shadow d-flex align-items-center justify-content-center">
            <span class="material-icons align-middle">
                arrow_upward
                </span>
                </a>

 
</main>

<?php $this->view('includes/footer', $data) ?>