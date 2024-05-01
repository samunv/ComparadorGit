<?php
interface UsuarioDAO
{
    public function leerUsuario($nombre, $contrasena); 
    public function crearUsuario(Usuarios $usuario);
    public function eliminarUsuario(Usuarios $usuario); 
    public function actualizarNombre($nombre); 
    
}
