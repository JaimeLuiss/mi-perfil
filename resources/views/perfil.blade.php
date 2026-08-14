<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>

    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>

<body>

    <header>
        <h1>Mi Perfil</h1>

        <nav>
            <a href="/">Inicio</a>
            <a href="/perfil">Perfil</a>
            <a href="/perfil/intereses">Intereses</a>
            <a href="/perfil/habilidades">Habilidades</a>
            <a href="/perfil/metas">Metas</a>
        </nav>
    </header>

    <main>

        <section class="card profile-intro">
            <h2>¡Hola! Soy estudiante de Ingeniería de Sistemas</h2>

            <p>
                Este sitio presenta información sobre mi perfil,
                mis intereses, mis habilidades y mis objetivos
                académicos y profesionales.
            </p>
        </section>

        <section class="card">
            <h2>Información personal</h2>

            <p>
                Me interesa el desarrollo de software y la creación
                de soluciones tecnológicas. Actualmente estoy
                fortaleciendo mis conocimientos en programación,
                desarrollo web y herramientas de control de versiones.
            </p>
        </section>

    </main>

    <footer>
        <p>Mi Perfil - Desarrollo Backend</p>
    </footer>

</body>
</html>