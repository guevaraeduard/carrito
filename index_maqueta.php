<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Tienda de Camisetas</title>
        <link rel="stylesheet" href="assets/css/styles.scss"/>
    </head>
    <body>
        <div id="container">
            <!-- CABECERA -->
            <header id="header">
                <div id="logo">
                    <img src="assets/img/camiseta.png" alt="camiseta"/>
                    <a href="index.php">
                        Tienda de camisetas
                    </a>
                </div>
            </header>

            <!-- MENU -->
            <nav id="menu">
                <ul>
                    <li>
                        <a href="#">Inicio</a>
                    </li>
                    <li>
                        <a href="#">Categoria 1</a>
                    </li>
                    <li>
                        <a href="#">Categoria 2</a>
                    </li>
                    <li>
                        <a href="#">Categoria 3</a>
                    </li>
                    <li>
                        <a href="#">Categoria 4</a>
                    </li>
                </ul>
            </nav>

            <div id="content">

                <!-- BARRA LATERAL -->
                <aside id="lateral">
                    <div id="login" class="block_aside">
                        <h3>Entrar a la web</h3>
                        <form action="#" method="POST">
                            <label for="email" name="email">Email</label>
                            <input type="email" name="email"/>
                            <label for="password" name="email">Contraseña</label>
                            <input type="password" name="password"/>
                            <input type="submit" value="Enviar"/>
                        </form>
                        <ul>
                            <li><a href="#">Mis pedidos</a></li>
                            <li><a href="#">Gestionar pedidos</a></li>
                            <li><a href="#">Gestionar categorias</a></li>
                        </ul>
                    </div>
                </aside>


                <!-- CONTENIDO CENTRAL -->
                <div id="central">
                    <h1>Productos destacados</h1>
                    <div class="product">
                        <img src="assets/img/camiseta.png"/>
                        <h2>Camiseta Azul Ancha</h2>
                        <p>30 Euros</p>
                        <a href="#" class="button">Comprar</a>
                    </div>
                    <div class="product">
                        <img src="assets/img/camiseta.png"/>
                        <h2>Camiseta Azul Ancha</h2>
                        <p>30 Euros</p>
                        <a href="#" class="button">Comprar</a>
                    </div>
                    <div class="product">
                        <img src="assets/img/camiseta.png"/>
                        <h2>Camiseta Azul Ancha</h2>
                        <p>30 Euros</p>
                        <a href="#" class="button">Comprar</a>
                    </div>
                    <div class="product">
                        <img src="assets/img/camiseta.png"/>
                        <h2>Camiseta Azul Ancha</h2>
                        <p>30 Euros</p>
                        <a href="#" class="button">Comprar</a>
                    </div>
                </div>     

            </div>     
        </div>
        <!-- PIE DE PAGINA -->
        <footer id="footer">
            <p>Desarrollado por Eduard Guevara WEB &COPY; <?= date('Y') ?></p>
        </footer>
    </div>
</body>
</html>

