<?php
interface UsuarioDAO
{
    public function leerUsuario(); 
    public function crearUsuario(Usuarios $usuario);
    public function eliminarUsuario(Usuarios $usuario); 
    public function actualizarNombre($nombre); 
    
}
