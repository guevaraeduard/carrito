<h1>Registrarse</h1>

<?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete'): ?>
<strong class="alert_green">Registro completado correctamente</strong>
<?php elseif((isset($_SESSION['register']) && $_SESSION['register'] == 'failed') || (isset($_SESSION['errores']))): ?>
<strong class="alert_red">Registro fallido, Introduce bien los datos</strong>
<?php endif; ?>

<?php Utils::deleteSession('register'); ?>

<form action="<?=base_url?>usuario/save" method="POST">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" required/>
    <?php echo isset($_SESSION['errores']) ? Utils::mostrarError($_SESSION['errores'], 'nombre') : ''; ?>
            
    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" required/>
    <?php echo isset($_SESSION['errores']) ? Utils::mostrarError($_SESSION['errores'], 'apellido') : ''; ?>
            
    <label for="email">Email</label>
    <input type="email" name="email" required/>
    <?php echo isset($_SESSION['errores']) ? Utils::mostrarError($_SESSION['errores'], 'email') : ''; ?>
            
    <label for="password">Contraseña</label>
    <input type="password" name="password" required/>
     <?php echo isset($_SESSION['errores']) ? Utils::mostrarError($_SESSION['errores'], 'password') : ''; ?>
           
    <input type="submit" value="Registrarse"/>
</form>
<?php Utils::borrarErrores(); ?>

