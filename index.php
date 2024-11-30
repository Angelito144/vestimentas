<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vestimentas De Juchitan</title>
    <link rel="stylesheet" href="styles.css">  <!-- Enlazamos el CSS -->
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#acerca-de">Acerca de</a></li>
                <li><a href="#comentarios">Comentarios</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="inicio">
            <h1>Bienvenido a mi página</h1>
            <p>Aquí puedes poner una descripción o mensaje introductorio.</p>
        </section>

        <section id="acerca-de">
            <h2>Acerca de</h2>
            <p>Esta es la sección donde describes tu proyecto o tema.</p>
        </section>

        <section id="comentarios">
            <h2>Deja tu comentario</h2>
            <form action="guardar_comentario.php" method="POST">
                <input type="text" name="nombre" placeholder="Tu nombre" required>
                <textarea name="comentario" placeholder="Tu comentario" required></textarea>
                <button type="submit">Enviar</button>
            </form>
        </section>
    </main>

    <footer>
        <p>© 2024 Mi Página Web</p>
    </footer>
</body>
</html>
