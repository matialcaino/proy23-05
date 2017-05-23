<?php
class usuario {
    
    var $idusuario;
    var $nombre;
    var $clave;
    
    function VerificaUsuario(){
        $oConn = new conexion();
        
        if($oConn->Conectar())
            $db = $oConn->objoonn;
        else
            return false;
        
        $sql="SELECT + FROM acceso WHERE nomusuario='$this->nombre'";
        
        $resultado = $db->query($sql);
        
        if($resultado->num_rows>=1)
            return true;
        else 
            return false;
        
                
    }
}