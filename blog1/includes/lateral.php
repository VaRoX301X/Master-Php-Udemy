

<aside id="sidebar">
    <?php if(isset($_SESSION['usuario'])): ?>
        <div id="usuario-logueado" class="bloque">
            <h3>Bienvenido, <?= $_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos']; ?></h3>
            <!-- botones -->
            <a href="cerrar.php" class="boton boton-rojo">Cerrar sesión</a>
            <a href="#" class="boton boton-naranja">Mis datos</a>
            <a href="crear-entradas.php" class="boton boton-verde">Crear entradas</a>
            <a href="crear-categoria.php" class="boton boton-verde">Crear categoría</a>
        </div>
    <?php endif ?>


    <?php if(!isset($_SESSION['usuario'])): ?>
        <div id="login" class="bloque">
            <h3>Identificate</h3>
            <?php if(isset($_SESSION['error_login'])): ?>
                <div class="alerta alerta-error">
                    <?= $_SESSION['error_login']; ?>
                </div>        
            <?php endif ?>        
            <form action="login.php" method="POST">
                <label for="email">Email</label>
                <input type="text" name="email">

                <label for="password">Contraseña</label>
                <input type="password" name="password">

                <input type="submit" value="Entrar">
            </form>
            
        </div>
    <?php endif ?>
    <div id="register" class="bloque">


        <h3>Registrate</h3>
        <?php if (isset($_SESSION['completado'])): ?>
            <div class="alerta alerta-exito">
                <?=$_SESSION['completado']?>
            </div>
        <?php elseif(isset($_SESSION['errores']['general'])): ?>
            <div class="alerta alerta-error">
                <?=$_SESSION['errores']['general']?>
            </div>
        <?php endif;?>
        <form action="registro.php" method="POST">
            <label for="nombre">nombre</label>
            <input type="text" name="nombre">
            <?php if (isset($_SESSION['errores'])): ?>
            <?php echo mostrarError($_SESSION['errores'], 'nombre'); ?>
            <?php endif;?>
            <label for="apellidos">apellidos</label>
            <input type="text" name="apellidos">
            <?php if (isset($_SESSION['errores'])): ?>
            <?php echo mostrarError($_SESSION['errores'], 'apellidos'); ?>
            <?php endif;?>
            <label for="email">Email</label>
            <input type="text" name="email">
            <?php if (isset($_SESSION['errores'])): ?>
            <?php echo mostrarError($_SESSION['errores'], 'email'); ?>
            <?php endif;?>
            <label for="password">Contraseña</label>
            <input type="password" name="password">
            <?php if (isset($_SESSION['errores'])): ?>
            <?php echo mostrarError($_SESSION['errores'], 'password'); ?>
            <?php endif;?>
            <input type="submit" name="submit" value="Registrar">
        </form>
        <?php borrarErrores();?>
    </div>
</aside>