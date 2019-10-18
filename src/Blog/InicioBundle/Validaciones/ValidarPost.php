<?php


namespace Blog\InicioBundle\Validaciones;


use Symfony\Component\Validator\Constraints\Length;

class ValidarPost
{
    public function ValidarNumericos($votos,$nro_post){
        $respuesta = false;
        if(is_numeric($votos)&& is_numeric($nro_post)){
            $respuesta = true;
        }
        return $respuesta;
    }

    public function ValidarContenido($contenido){
        $respuesta = false;

        if(strlen($contenido)<=200){
             $respuesta = true;
        }
        return $respuesta;
    }

}

