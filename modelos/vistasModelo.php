

    <?php
    
    class vistasModelo{

        /*--------- Modelo obtener vistas ---------*/
        protected static function obtener_vistas_modelo($vistas){
            $listaBlanca=["Ambientes-actualizar","Ambientes-buscar","Ambientes-lista","Ambientes-nuevo","Docente-actualizar","Docente-buscar","Docente-lista","Docente-nuevo","home","Horario-actualizar","Horario-buscar","Horario-cancelados","Horario-nuevo","Horario-pendiente","Institucion", "Reservacion","Usuario-nuevo","Usuario-actualizar","Usuario-buscar","Usuario-lista"];
            if(in_array($vistas, $listaBlanca)){
                if(is_file("./vistas/contenidos/".$vistas."-view.php")){
                    $contenido="./vistas/contenidos/".$vistas."-view.php";
                }else{
                    $contenido="404";
                }
            }elseif($vistas=="login" || $vistas=="index"){
                $contenido="login";
            }else{
                $contenido="404";
            }
            return $contenido;
        }
    }