<?php

    if($peticionAjax) {  require_once "../modelos/loginModelo.php"; }
                  else{  require_once "./modelos/loginModelo.php";  }

class loginControlador extends loginModelo {

     /* ------------ Controlador para iniciar sesión ------------ */

   public function iniciar_sesion_controlador(){
     $usuario=mainModel::limpiar_cadena($_POST['usuario_log']);
     $clave=mainModel::limpiar_cadena($_POST['clave_log']);

   
     /* == Comprobar campos vacíos == */

     if($usuario=="" || $clave==""){
          echo '<script>
                       Swal.fire({
                       title: "Ocurrio un error inesperado" ,
                       text: "No has llenado todos los campos requeridos",
                       type: "error", 
                       confirmButtonText: "ACEPTAR"         
                                });
                </script>';
                exit();
     }


     /* == Verificar la integridad de los datos == */
        if(mainModel::verificar_datos("[a-zA-Z0-9]{1,35}", $usuario)){
          echo '<script>
                       Swal.fire({
                       title: "Ocurrio un error inesperado" ,
                       text: "EL NOMBRE DE USUARIO NO COINCIDE CON EL FORMATO SOLICITADO",
                       type: "error", 
                       confirmButtonText: "ACEPTAR"         
                                });
                </script>';
                exit();                
        }

        if(mainModel::verificar_datos("[a-zA-Z0-9$@]{7,100}", $clave)){
          echo '<script>
                       Swal.fire({
                       title: "Ocurrio un error inesperado" ,
                       text: "LA CLAVE NO COINCIDE CON EL FORMATO SOLICITADO",
                       type: "error", 
                       confirmButtonText: "ACEPTAR"         
                                });
                </script>';
                exit();
        }

             $clave=mainModel::encryption($clave);
     
              $datos_login=[
                "Usuario"=>$usuario,
                "Clave"=>$clave
              ];

              $datos_cuenta=loginModelo::iniciar_sesion_modelo($datos_login);
              if($datos_cuenta->rowCount()==1){
                   $row=$datos_cuenta->fetch();
                        
                        session_start(['name'=>'AAH']);
                        $_SESSION['id_aah']=$row['usuario_id'];
                        $_SESSION['nombre_aah']=$row['usuario_nombre'];
                        $_SESSION['apellido_aah']=$row['usuario_apellido'];
                        $_SESSION['usuario_aah']=$row['usuario_usuario'];

                        $_SESSION['token_aah']=md5(uniqid(mt_rand(),true));

                        return header("Location: ".SERVERURL."home/");

              }else{
                 echo '<script>
                       Swal.fire({
                       title: "Ocurrio un error inesperado" ,
                       text: "EL USUARIO O CLAVE SON INCORRECTOS",
                       type: "error", 
                       confirmButtonText: "ACEPTAR"         
                                });
                </script>';  

              }

   }

}
