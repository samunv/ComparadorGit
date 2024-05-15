<?php
interface SistemaOperativoDAO{
    public function leerSO();
    public function subirSO(SistemaOperativo $so);
    public function actualizarSO(SistemaOperativo $so);
    public function eliminar(SistemaOperativo $so); 
}

