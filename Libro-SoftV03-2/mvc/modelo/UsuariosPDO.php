<?php

    require_once("ConexionPDO.php");

    //Clase que hereda de la clase con la conexion
    class UsuariosPDO extends ConexionPDO{
     

        public function UsuariosPDO(){
            //Para que se ejecute la conexión desde el constructor de la clase conexionPDO
            parent::__construct();//Llamamos al constructor para que se ejecute

        }

        //FUNCIONES CRUD BASICAS
        //Funcion para agregar usuarios normales CRUD 1/4
        public function agregaUsuario($rut_usuario='', 
                                      $nombres_usuario='', 
                                      $ap_paterno_usuario='', 
                                      $ap_paterno_materno='', 
                                      $fecha_nacimiento_usuario='', 
                                      $email='', 
                                      $clave_usuario='', 
                                      $telefono_usuario=0, 
                                      $fecha_ingreso_usuario='', 
                                      $id_tipo_usuarioTU=0, 
                                      $id_ciudadTU=0){
            
            $stmt = $this->conexionBD->prepare("INSERT INTO usuario VALUES (?,?,?,?,?,?,?,?,?,?,?)");
            $stmt->bindparam(1, $rut_usuario, PDO::PARAM_STR);
            $stmt->bindparam(2, $nombres_usuario, PDO::PARAM_STR);
            $stmt->bindparam(3, $ap_paterno_usuario, PDO::PARAM_STR);
            $stmt->bindparam(4, $ap_paterno_materno, PDO::PARAM_STR);
            $stmt->bindparam(5, $fecha_nacimiento_usuario, PDO::PARAM_STR);
            $stmt->bindparam(6, $email, PDO::PARAM_STR);
            $stmt->bindparam(7, $clave_usuario, PDO::PARAM_STR);
            $stmt->bindparam(8, $telefono_usuario, PDO::PARAM_INT);
            $stmt->bindparam(9, $fecha_ingreso_usuario, PDO::PARAM_STR);
            $stmt->bindparam(10, $id_tipo_usuarioTU, PDO::PARAM_INT);
            $stmt->bindparam(11, $id_ciudadTU, PDO::PARAM_INT);
            
            $resultado = $stmt->execute();
            $stmt = null;
            return $resultado;

        }

        //Funcion Lista Usuarios CRUD 2/4
        public function obtieneUsuarios(){

            $statement = $this->conexionBD->prepare("SELECT * FROM usuario");
            $statement->execute();

            $usuarios = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $usuarios;
        }

        public function obtieneUsuariosAdminPtoIntercambio(){

            $statement = $this->conexionBD->prepare("SELECT * FROM vista_usu_admin_pto_intercambio");
            $statement->execute();

            $usuarios = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $usuarios;
        }

        
        public function obtieneUsuariosAdminPtoIntercambioPorRut($rut_usuario=''){

            $statement = $this->conexionBD->prepare("SELECT * FROM vista_usu_admin_pto_intercambio WHERE rut_usuario=?");
            $statement->bindparam(1, $rut_usuario, PDO::PARAM_STR);
            $statement->execute();

            $usuarios = $statement->fetch(PDO::FETCH_ASSOC);
            $statement = null;
            return $usuarios;
        }

        //Funcion Busca y devuelve Usuario por Rut
        public function obtieneUsuarioPorRut($rut_usuario=''){

            $statement = $this->conexionBD->prepare("SELECT * FROM usuario WHERE rut_usuario=?");
            $statement->bindparam(1, $rut_usuario, PDO::PARAM_STR);
            $statement->execute();

            $usuarioPorRut = $statement->fetch(PDO::FETCH_ASSOC);
            $statement = null;
            return $usuarioPorRut;

        }

        public function obtieneDatosPersonalesUsuarioPorRut($rut_usuario=''){

            $statement = $this->conexionBD->prepare("SELECT * FROM vistadatospersonales WHERE rut_usuario=?");
            $statement->bindparam(1, $rut_usuario, PDO::PARAM_STR);
            $statement->execute();

            $usuarioPorRut = $statement->fetch(PDO::FETCH_ASSOC);
            $statement = null;
            return $usuarioPorRut;

        }

        //Funcion Busca y devuelve Usuario por Rut y Clave Para Login
        public function obtieneUsuarioLogin($rut_usuario='', $clave_usuario=''){

            $statement = $this->conexionBD->prepare("SELECT * FROM usuario WHERE rut_usuario = ? AND clave_usuario = ? ;");
            $statement->bindparam(1, $rut_usuario, PDO::PARAM_STR);
            $statement->bindparam(2, $clave_usuario, PDO::PARAM_STR);
            $statement->execute();

            $usuarioLogin = $statement->fetch(PDO::FETCH_ASSOC);
            $statement = null;
            return $usuarioLogin;

        }

        //Funcion modifica datos usuario NO SE PUEDE MODIFICAR EL RUT CRUD 3/4
        public function actualizaUsuario($rut_usuario='', 
                                         $nombres_usuario='', 
                                         $ap_paterno_usuario='', 
                                         $ap_paterno_materno='', 
                                         $fecha_nacimiento_usuario='', 
                                         $email='', $clave_usuario='', 
                                         $telefono_usuario=0, 
                                         $fecha_ingreso_usuario='', 
                                         $id_tipo_usuarioTU=0, 
                                         $id_ciudadTU=0){

            $statement = $this->conexionBD->prepare("UPDATE usuario SET nombres_usuario=?, 
                                                                        ap_paterno_usuario=?, 
                                                                        ap_paterno_materno=?,
                                                                        fecha_nacimiento_usuario=?,
                                                                        email=?,
                                                                        telefono_usuario=?,
                                                                        fecha_ingreso_usuario=?,
                                                                        id_tipo_usuarioTU=?,
                                                                        id_ciudadTU=?
                                                                        WHERE rut_usuario=?");
            
            $stmt->bindparam(1, $nombres_usuario, PDO::PARAM_STR);
            $stmt->bindparam(2, $ap_paterno_usuario, PDO::PARAM_STR);
            $stmt->bindparam(3, $ap_paterno_materno, PDO::PARAM_STR);
            $stmt->bindparam(4, $fecha_nacimiento_usuario, PDO::PARAM_STR);
            $stmt->bindparam(5, $email, PDO::PARAM_STR);
            $stmt->bindparam(6, $clave_usuario, PDO::PARAM_STR);
            $stmt->bindparam(7, $telefono_usuario, PDO::PARAM_INT);
            $stmt->bindparam(8, $fecha_ingreso_usuario, PDO::PARAM_STR);
            $stmt->bindparam(9, $id_tipo_usuarioTU, PDO::PARAM_INT);
            $stmt->bindparam(10, $id_ciudadTU, PDO::PARAM_INT);
            $stmt->bindparam(11, $rut_usuario, PDO::PARAM_STR);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;

        }

        public function actualizaUsuarioPerfil($rut_usuario='', $nombres_usuario='', $ap_paterno_usuario='', $ap_paterno_materno='', $fecha_nacimiento_usuario='', $email='', $telefono_usuario=0){

            $statement = $this->conexionBD->prepare("UPDATE usuario SET nombres_usuario=?, ap_paterno_usuario=?, ap_paterno_materno=?, fecha_nacimiento_usuario=?, email=?, telefono_usuario=? WHERE rut_usuario=?");
            
            $statement->bindparam(1, $nombres_usuario, PDO::PARAM_STR);
            $statement->bindparam(2, $ap_paterno_usuario, PDO::PARAM_STR);
            $statement->bindparam(3, $ap_paterno_materno, PDO::PARAM_STR);
            $statement->bindparam(4, $fecha_nacimiento_usuario, PDO::PARAM_STR);
            $statement->bindparam(5, $email, PDO::PARAM_STR);
            $statement->bindparam(6, $telefono_usuario, PDO::PARAM_INT);
            $statement->bindparam(7, $rut_usuario, PDO::PARAM_STR);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;

        }

        public function actualizaClaveUsuario($rut_usuario='', $clave_usuario=''){

            $statement = $this->conexionBD->prepare("UPDATE usuario SET clave_usuario=? WHERE rut_usuario=?");
            
            $statement->bindparam(1, $clave_usuario, PDO::PARAM_STR);
            $statement->bindparam(2, $rut_usuario, PDO::PARAM_STR);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;

        }

        public function actualizaAdminPtoIntercambio($rut_usuario='', $nombres_usuario='', $ap_paterno_usuario='', $ap_paterno_materno='', $fecha_nacimiento_usuario='', $email='', $clave_usuario='', $telefono_usuario=0, $id_ciudadTU=0 ){

            $statement = $this->conexionBD->prepare("UPDATE usuario SET nombres_usuario=?, ap_paterno_usuario=?, ap_paterno_materno=?, fecha_nacimiento_usuario=?, email=?, clave_usuario=?, telefono_usuario=?, id_ciudadTU=? WHERE rut_usuario=?");
            
            $statement->bindparam(1, $nombres_usuario, PDO::PARAM_STR);
            $statement->bindparam(2, $ap_paterno_usuario, PDO::PARAM_STR);
            $statement->bindparam(3, $ap_paterno_materno, PDO::PARAM_STR);
            $statement->bindparam(4, $fecha_nacimiento_usuario, PDO::PARAM_STR);
            $statement->bindparam(5, $email, PDO::PARAM_STR);
            $statement->bindparam(6, $clave_usuario, PDO::PARAM_STR);
            $statement->bindparam(7, $telefono_usuario, PDO::PARAM_INT);
            $statement->bindparam(8, $id_ciudadTU, PDO::PARAM_INT);
            $statement->bindparam(9, $rut_usuario, PDO::PARAM_STR);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;

        }

        //Funcion elimina usuario por rut CRUD 4/4
        public function eliminaUsuario($rut_usuario=''){

            $statement = $this->conexionBD->prepare("DELETE FROM usuario WHERE rut_usuario=?");

            $statement->bindparam(1, $rut_usuario, PDO::PARAM_STR);
            $resultado = $statement->execute();
            
            $statement = null;
            return $resultado;

        }

    }

?>