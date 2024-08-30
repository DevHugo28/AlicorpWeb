    <?php include 'navbar_footer\navbar.php'; ?>

    <!-- Aquí va el contenido de la página -->
    <main>
        <section class="position-relative py-4 py-xl-5">
            <div class="container position-relative">
                <div class="row mb-5">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <h2>Contáctenos</h2>
                    </div>
                </div>

                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="d-flex flex-column justify-content-center align-items-start h-100">
                            <?php 
                            $contactos = [
                                ['icon' => 'telephone', 'titulo' => 'Oficina central', 'detalle' => '+511 01 315 0800'],
                                ['icon' => 'telephone', 'titulo' => 'Atención al cliente', 'detalle' => '+511 01 708 9300'],
                                ['icon' => 'envelope', 'titulo' => 'Correo', 'detalle' => 'alicorp@alicorp.com'],
                                ['icon' => 'pin', 'titulo' => 'Ubicación', 'detalle' => 'Lima']
                            ];

                            foreach ($contactos as $contacto) {
                                echo '
                                <div class="d-flex align-items-center p-3">
                                    <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon">';
                                
                                // Determina qué icono SVG mostrar basado en el tipo de contacto
                                if ($contacto['icon'] == 'telephone') {
                                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-telephone">
                                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                                            </svg>';
                                } elseif ($contacto['icon'] == 'envelope') {
                                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope">
                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                                            </svg>';
                                } elseif ($contacto['icon'] == 'pin') {
                                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-pin">
                                            <path d="M4.146.146A.5.5 0 0 1 4.5 0h7a.5.5 0 0 1 .5.5c0 .68-.342 1.174-.646 1.479-.126.125-.25.224-.354.298v4.431l.078.048c.203.127.476.314.751.555C12.36 7.775 13 8.527 13 9.5a.5.5 0 0 1-.5.5h-4v4.5c0 .276-.224 1.5-.5 1.5s-.5-1.224-.5-1.5V10h-4a.5.5 0 0 1-.5-.5c0-.973.64-1.725 1.17-2.189A5.921 5.921 0 0 1 5 6.708V2.277a2.77 2.77 0 0 1-.354-.298C4.342 1.674 4 1.179 4 .5a.5.5 0 0 1 .146-.354zm1.58 1.408-.002-.001.002.001m-.002-.001.002.001A.5.5 0 0 1 6 2v5a.5.5 0 0 1-.276.447h-.002l-.012.007-.054.03a4.922 4.922 0 0 0-.827.58c-.318.278-.585.596-.725.936h7.792c-.14-.34-.407-.658-.725-.936a4.915 4.915 0 0 0-.881-.61l-.012-.006h-.002A.5.5 0 0 1 10 7V2a.5.5 0 0 1 .295-.458 1.775 1.775 0 0 0 .351-.271c.08-.08.155-.17.214-.271H5.14c.06.1.133.191.214.271a1.78 1.78 0 0 0 .37.282"></path>
                                            </svg>';
                                }
                                
                                echo '</div>
                                    <div class="px-2">
                                        <h6 class="mb-0">'.$contacto['titulo'].'</h6>
                                        <p class="mb-0">'.$contacto['detalle'].'</p>
                                    </div>
                                </div>';
                            }
                            ?>
                        </div>
                    </div>

                    <?php
                    // Inicializar variables para almacenar datos del formulario y errores
                    $nombre = $apellidos = $celular = $correo = $motivo = $comentario = $politica = $consentimiento = "";
                    $nombreErr = $apellidosErr = $celularErr = $correoErr = $motivoErr = $comentarioErr = $policyErr = $consentimientoErr = "";
                    $success = false;

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Validar Nombre
                        if (empty($_POST["nombre"])) {
                            $nombreErr = "El nombre es obligatorio";
                        } elseif (!preg_match("/^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/", $_POST["nombre"])) {
                            $nombreErr = "Solo se permiten letras y espacios.";
                        } else {
                            $nombre = htmlspecialchars($_POST["nombre"]);
                        }

                        // Validar Apellidos
                        if (empty($_POST["apellidos"])) {
                            $apellidosErr = "Los apellidos son obligatorios";
                        } elseif (!preg_match("/^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/", $_POST["apellidos"])) {
                            $apellidosErr = "Solo se permiten letras y espacios.";
                        } else {
                            $apellidos = htmlspecialchars($_POST["apellidos"]);
                        }

                        // Validar Celular
                        if (empty($_POST["celular"])) {
                            $celularErr = "El celular es obligatorio";
                        } elseif (!preg_match("/^[0-9]{9}$/", $_POST["celular"])) {
                            $celularErr = "Debe contener 9 dígitos numéricos.";
                        } else {
                            $celular = htmlspecialchars($_POST["celular"]);
                        }

                        // Validar Correo
                        if (empty($_POST["correo"])) {
                            $correoErr = "El correo es obligatorio";
                        } elseif (!preg_match("/^[a-z0-9._%+-]+@gmail\.com$/", $_POST["correo"])) {
                            $correoErr = "El correo debe ser una dirección válida de Gmail, por ejemplo: nombre@gmail.com";
                        } else {
                            $correo = htmlspecialchars($_POST["correo"]);
                        }

                        // Validar Motivo
                        if (empty($_POST["motivo"])) {
                            $motivoErr = "El motivo es obligatorio";
                        } else {
                            $motivo = htmlspecialchars($_POST["motivo"]);
                        }

                        // Validar Comentario
                        if (empty($_POST["comentario"])) {
                            $comentarioErr = "El comentario es obligatorio";
                        } else {
                            $comentario = htmlspecialchars($_POST["comentario"]);
                        }

                        // Validar Política
                        if (empty($_POST["politica"])) {
                            $policyErr = "Debe aceptar la política de privacidad";
                        } else {
                            $politica = $_POST["politica"];
                        }

                        // Validar Consentimiento
                        if (empty($_POST["consentimiento"])) {
                            $consentimientoErr = "Debe aceptar el consentimiento para usos adicionales";
                        } else {
                            $consentimiento = $_POST["consentimiento"];
                        }

                        // Verifique si todos los campos son válidos antes de procesar
                        if (empty($nombreErr) && empty($apellidosErr) && empty($celularErr) && empty($correoErr) && empty($motivoErr) && empty($comentarioErr) && empty($policyErr) && empty($consentimientoErr)) {
                            // Aquí puede gestionar el envío del formulario (por ejemplo, enviar un correo electrónico, almacenarlo en una base de datos)
                            $success = true;
                        }
                    }
                    ?>

                    <!-- Form and Modal Code -->
                    <div class="col-md-6 col-lg-5 col-xl-4">
                        <form class="p-3 p-xl-4" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <div class="mb-3">
                                <input class="form-control" type="text" id="name" name="nombre" placeholder="Nombre" value="<?php echo $nombre; ?>" required pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+" title="Solo se permiten letras y espacios.">
                                <span class="error"><?php echo $nombreErr; ?></span>
                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="text" id="last-name" name="apellidos" placeholder="Apellidos" value="<?php echo $apellidos; ?>" required pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+" title="Solo se permiten letras y espacios.">
                                <span class="error"><?php echo $apellidosErr; ?></span>
                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="tel" id="cell-phone" name="celular" placeholder="Celular" value="<?php echo $celular; ?>" required maxlength="9" minlength="9" inputmode="tel" pattern="[0-9]{9}" title="Debe contener 9 dígitos numéricos.">
                                <span class="error"><?php echo $celularErr; ?></span>
                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="email" id="email" name="correo" placeholder="Correo" value="<?php echo $correo; ?>" inputmode="email" required pattern="[a-z0-9._%+-]+@gmail\.com$" title="El correo debe ser una dirección válida de Gmail, por ejemplo: nombre@gmail.com">
                                <span class="error"><?php echo $correoErr; ?></span>
                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="text" id="reason" name="motivo" placeholder="Motivo" value="<?php echo $motivo; ?>" required>
                                <span class="error"><?php echo $motivoErr; ?></span>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" id="comment" name="comentario" rows="6" placeholder="Comentario" required><?php echo $comentario; ?></textarea>
                                <span class="error"><?php echo $comentarioErr; ?></span>
                            </div>
                            <div>
                                <p>
                                    <input type="checkbox" id="policy" class="form-check-input" name="politica" style="margin-right: 4px;" required <?php echo isset($politica) ? 'checked' : ''; ?>>He leído y aceptado la&nbsp;
                                    <a class="link-body-emphasis" href="https://www.alicorp.com.pe/pe/en/privacy-policies/" target="_blank"><strong>Política de Privacidad de Alicorp</strong></a>
                                </p>
                                <span class="error"><?php echo $policyErr; ?></span>
                            </div>
                            <div>
                                <p>
                                    <input type="checkbox" id="policy-1" class="form-check-input" name="consentimiento" style="margin-right: 4px;" required <?php echo isset($consentimiento) ? 'checked' : ''; ?>>He leído y aceptado el&nbsp;
                                    <a class="link-body-emphasis" href="https://www.alicorp.com.pe/pe/en/consent-to-use-additional/" target="_blank"><strong>Consentimiento para Usos Adicionales</strong></a>
                                </p>
                                <span class="error"><?php echo $consentimientoErr; ?></span>
                            </div>
                            <div>
                                <button class="btn btn-primary bg-danger d-block w-100" type="submit">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Success Modal -->
                <?php if ($success): ?>
                <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="successModalLabel">¡Éxito!</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            El formulario ha sido enviado con éxito.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                        </div>
                    </div>
                </div>
                <script>
                document.addEventListener('DOMContentLoaded', function () {
                    var successModal = new bootstrap.Modal(document.getElementById('successModal'));
                    successModal.show();
                });
                </script>
                <?php endif; ?>
            </div>
        </section>
    </main>

    <?php include 'navbar_footer\footer.php'; ?>