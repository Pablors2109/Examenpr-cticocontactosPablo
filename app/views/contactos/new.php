<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Contacto</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">
</head>

<body>
    <header>
        <h1>Añadir contacto</h1>
    </header>
    <section>
        <main>
            <div class="container">
                <a href="<?= BASE_URL ?>">Volver a la lista</a>
                <form method="POST" action="">
                    <div>
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" required>
                    </div>
                    <div>
                        <label for="telefono">Teléfono:</label>
                        <input type="text" name="telefono" required>
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" name="email" required>
                    </div>
                    <div>
                        <label for="direccion">Dirección:</label>
                        <input type="text" name="direccion">
                    </div>
                    <button type="submit">Guardar Contacto</button>
                </form>
            </div>
        </main>
    </section>
</body>
</html>