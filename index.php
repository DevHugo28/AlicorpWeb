    <?php include 'navbar_footer\navbar.php'; ?>

    <!-- Aquí va el contenido principal de tu página -->
    <main>
        <section>
            <div class="carousel slide" data-bs-ride="carousel" id="carousel-1" style="height: 600px;">
                <div class="carousel-inner h-100" style="color: var(--bs-body-bg);">
                    <div class="carousel-item active h-100"><img class="w-100 d-block position-absolute h-100 fit-cover" alt="Slide Image" src="assets/img/photo-1628191140023-d3b347041e2c.jpg" style="z-index: -1;">
                        <div class="container d-flex flex-column justify-content-center h-100">
                            <div class="row">
                                <div class="col-md-6 col-xl-4 offset-md-2">
                                    <div style="max-width: 350px;">
                                        <h1 class="text-uppercase fw-bold"><span style="color: rgb(0, 0, 0); background-color: rgb(255, 255, 255);">Aqui ira una frase con referencia a la empresa</span></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item h-100"><img class="w-100 d-block position-absolute h-100 fit-cover" alt="Slide Image" src="assets/img/photo-1627662168223-7df99068099a-1.jpg" style="z-index: -1;">
                        <div class="container d-flex flex-column justify-content-center h-100">
                            <div class="row">
                                <div class="col-md-6 col-xl-4 offset-md-2">
                                    <div style="max-width: 350px;">
                                        <h1 class="text-uppercase fw-bold"><span style="color: rgb(0, 0, 0); background-color: rgb(255, 255, 255);">Aqui ira una frase con referencia a la empresa</span></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item h-100"><img class="w-100 d-block position-absolute h-100 fit-cover" alt="Slide Image" src="assets/img/photo-1628191078376-f31a36c9f2cf.jpg" style="z-index: -1;">
                        <div class="container d-flex flex-column justify-content-center h-100">
                            <div class="row">
                                <div class="col-md-6 col-xl-4 offset-md-2">
                                    <div style="max-width: 350px;">
                                        <h1 class="text-uppercase fw-bold"><span style="color: rgb(0, 0, 0); background-color: rgb(255, 255, 255);">Aqui ira una frase con referencia a la empresa</span></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span>
                    </a>
                </div>

                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#carousel-1" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#carousel-1" data-bs-slide-to="2"></button>
                </div>
            </div>
        </section>
    </main>

    <?php include 'navbar_footer\footer.php'; ?>
