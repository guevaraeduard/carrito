<?php

require_once 'models/usuario.php';

class usuarioController {

    public function index() {
        echo 'Controlador de usuarios, Accion index';
    }

    public function registro() {

        require_once 'views/usuario/registro.php';
    }

    public function save() {

        if (isset($_POST)) {

            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;
            //ejerciicio de validar todo como el proyecto anterior
            if ($nombre && $apellido && $password && $email) {

                $usuario = new Usuario();
                $errores = array();
    
                if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
             
                    $usuario->setNombre($nombre);
                
                } else {
                    $errores['nombre'] = "El nombre no es valido";
                }
                //validar apellido
                if (!empty($apellido) && !is_numeric($apellido) && !preg_match("/[0-9]/", $apellido)) {
                    
                    $usuario->setApellido($apellido);
                    
                } else {
                    $errores['apellido'] = "El apellido no es valido";
                }
                //validar email
                if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    
                    $usuario->setEmail($email);
                    
                } else {
                    $email_validado = false;
                    $errores['email'] = "El email no es valido";
                }

                //validar password
                if (!empty($password)) {
                    
                    $usuario->setPassword($password);
                    
                } else {
                    $errores['password'] = "La contraseña esta vacia";
                }

                if(count($errores) == 0){
                
                    $save = $usuario->save();

                    if ($save) {
                    $_SESSION['register'] = 'complete';
                    } else {
                        $_SESSION['register'] = 'failed';
                    }
                }else{
                    $_SESSION['errores'] = $errores;
                    
                }       
            }else {
                $_SESSION['register'] = 'failed';
            }
        }else {
            $_SESSION['register'] = 'failed';
        }

        header("Location:" . base_url . "usuario/registro");
    }

    
    public function login(){
        
        if(isset($_POST)){
            
            //Identificar el usuario
            
            //Consulta a la base de datos
            $usuario = new Usuario();
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);
            
            $identity = $usuario->login();
            
            
            if($identity && is_object($identity)){
                
                $_SESSION['identity'] = $identity;
                
                if($identity->rol == 'admin'){
                    $_SESSION['admin'] = true;
                }
            }else{
                $_SESSION['error_login'] = 'Identificacion fallida';
            }
            
            //Crear una session
            
        }
        header("Location:".base_url);
    }
    
    public function logout(){
         
        if(isset($_SESSION['identity'])){
        
            $_SESSION['identity'] = null;
            unset($_SESSION['identity']);
    
        }
        if(isset($_SESSION['admin'])){
        
            $_SESSION['admin'] = null;
            unset($_SESSION['admin']);
    
        }
        
        header("Location:".base_url);
    }
    
}
