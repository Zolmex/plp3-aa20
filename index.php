<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startup - Landing Page</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="shortcut icon" href="imgs/logo.png" type="image/x-icon">
</head>
<body>

    <header class="header">
        <div class="container">
            <div class="header__content">
                <div class="brand">
                    <img src="imgs/logo.png" alt="Logo Startup" class="brand__logo">
                    <span class="brand__name">Startup</span>
                </div>

                <div class="header__actions">
                    <button class="btn btn--secondary">Ingresar</button>
                    <button class="btn btn--primary">Registrarse</button>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="hero">
        <?php
$num = rand(1, 100);
echo "Número generado: " . $num;
echo "<br>";
if ($num <= 50) {
    echo "Es menor o igual a 50";
} else {
    echo "Es mayor a 50";
}
?>
        </section>
    </main>

    <footer>
        <div class="footer-column">

            <div class="footer-marca">

                <a class="footer-logo">
                    <img src="imgs/logo.png" alt="Logo" width="32" height="32">
                    <h3>Startup</h3>
                </a>
                <p>Nuestra startup web se dedica a desarrollar soluciones digitales innovadoras que conectan personas y empresas a través de experiencias simples, rápidas y seguras.</p>

            </div>

        </div>

        <div class="footer-column">

            <div class="footer-menu">
                <nav class="Nav-menu-footer" aria-label="Enlaces de pie de página">
                    <h3>Menu</h3>
                    <ul>
                        <li><a href="/about">Acerca</a></li>
                        <li><a href="/privacy">Privacidad</a></li>
                        <li><a href="/terms">Términos</a></li>
                    </ul>
                </nav>
            <div class="copyright">
                <p class="footer__copy">© 2025 Startup. Todos los derechos reservados.</p>
                </div>
            </div>

        </div>

        <div class="footer-column">

            <div class="footer-contact">
                <h3>Contactanos</h3>
                <address class="contact" aria-label="Información de contacto">
                    <ul>
                        <li>Soporte: <a href="mailto:soporte@startup.com">soporte@startup.com</a></li>
                        <li>Tel: +54 9 11 1234 5678</li>
                    </ul>
                </address>
            </div>

        </div>
    </footer>

    <script src="scripts/main.js"></script>
</body>
</html>
