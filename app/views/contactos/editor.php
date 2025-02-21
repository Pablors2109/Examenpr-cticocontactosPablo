<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Contacto</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">
</head>

<body>
    <header>
        <h1>Editar contacto</h1>
    </header>
    <section>
        <main>
            <div class="container">
                <a href="<?= BASE_URL ?>">Volver a la lista</a>
                <form method="POST" action="">
                    <input type="hidden" name="id" value="<?= htmlspecialchars($data->id) ?>">

                    <div>
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" value="<?= htmlspecialchars($data->nombre) ?>" required>
                    </div>
                    <div>
                        <label for="telefono">Teléfono:</label>
                        <input type="text" name="telefono" value="<?= htmlspecialchars($data->telefono) ?>" required>
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" name="email" value="<?= htmlspecialchars($data->email) ?>" required>
                    </div>
                    <div>
                        <label for="direccion">Dirección:</label>
                        <input type="text" name="direccion" value="<?= htmlspecialchars($data->direccion) ?>">
                    </div>
                    <button type="submit">Actualizar Contacto</button>
                </form>
            </div>
        </main>
    </section>
</body>

</html>