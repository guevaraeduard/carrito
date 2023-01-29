<?php

class Utils{
    public static function deleteSession($name){
        
        if(isset($_SESSION[$name])){
        
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
    
        }
        
        return $name;
    }
    
    public static function mostrarError($errores, $campo){
        $alerta = '';
        if(isset($errores[$campo]) && !empty($campo)){
            $alerta = "<div class='alert_red'>".$errores[$campo]."</div>";
        }
        return $alerta;
    }
    
    public static function borrarErrores(){
        $borrado = false;
    
        if(isset($_SESSION['errores'])){
            $_SESSION['errores'] = null;
            $borrado = true;
        }
    
        return $borrado;
    }
    
    public static function isAdmin(){
        if(!isset($_SESSION['admin'])){
            header("Location:".base_url);
        } else {
            return true;
        }
    }
    
    public static function isIndentity(){
        if(!isset($_SESSION['identity'])){
            header("Location:".base_url);
        } else {
            return true;
        }
    }
    
    public static function showCategorias(){
        
        require_once 'models/categoria.php';
        $categoria = new Categoria();
        $categorias = $categoria->getAll();
        return $categorias;
    } 
    
    public static function statsCarrito(){
        
        $stats = array(
            'count' =>0,
            'total' =>0
        );
        
        if(isset($_SESSION['carrito'])){
          $stats['count'] = count($_SESSION['carrito']); 
          
          foreach ($_SESSION['carrito'] as $producto){
              $stats['total'] += $producto['precio']*$producto['unidades'];
          }
        }
        return $stats;
    }
    
    public static function showStatus($status){
        $value = 'Pendiente';
        if($status == 'confirm'){
            $value = 'Pendiente';
        }else if($status == 'preparation'){
            $value = 'En preparacion';
        }else if($status == 'ready'){
            $value = 'Preparado para enviar';
            
        }else if($status == 'sended'){
            $value = 'Enviado';
        }
        return $value;
    }
    
}