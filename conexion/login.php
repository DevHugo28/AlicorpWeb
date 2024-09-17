    <?php include 'navbar_footer\navbar.php'; ?>

    <!-- Aquí va el contenido de la página -->
    <main>
        <section>
            <?php
                include 'db.php'; // Incluimos la conexión a la base de datos

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    // Recoger datos del formulario
                    $username = $_POST['usuario'];
                    $password = $_POST['contraseña'];

                    // Preparar la consulta
                    $sql = "SELECT * FROM usuario WHERE username = ?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param('s', $username);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    // Verificar si el usuario existe
                    if ($result->num_rows > 0) {
                        $user = $result->fetch_assoc();
                        
                        // Verificar la contraseña
                        if (password_verify($password, $user['password'])) {
                            echo "Login exitoso. ¡Bienvenido " . $user['username'] . "!";
                        } else {
                            echo "Contraseña incorrecta.";
                        }
                    } else {
                        echo "Usuario no encontrado.";
                    }
                }
            ?>
        </section>
    </main>

    <?php include 'navbar_footer\footer.php'; ?>