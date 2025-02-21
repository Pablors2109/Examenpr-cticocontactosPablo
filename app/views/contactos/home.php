<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Contactos</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">
</head>

<body>
    <header>
        <h1>Agenda de contactos</h1>
    </header>
    <section>
        <main>
            <div class="container">
                <a href="<?= BASE_URL ?>contactos/nuevo">Agregar Nuevo Contacto</a>
                <table cellpadding="5">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Teléfono</th>
                            <th>Email</th>
                            <th>Dirección</th>
                            <th>Fecha de Creación</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $contacto): ?>
                            <tr>
                                <td><?= htmlspecialchars($contacto->id) ?></td>
                                <td><?= htmlspecialchars($contacto->nombre) ?></td>
                                <td><?= htmlspecialchars($contacto->telefono) ?></td>
                                <td><?= htmlspecialchars($contacto->email) ?></td>
                                <td><?= htmlspecialchars($contacto->direccion) ?></td>
                                <td><?= htmlspecialchars($contacto->fecha_creacion) ?></td>
                                <td>
                                    <a href="<?= BASE_URL ?>contactos/editar/<?= $contacto->id ?>">✏️</a>
                                    <a href="<?= BASE_URL ?>contactos/eliminar/<?= $contacto->id ?>">🗑️</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </section>
</body>

</html>