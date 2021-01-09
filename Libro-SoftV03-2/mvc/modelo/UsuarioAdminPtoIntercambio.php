<?php

    require_once("ConexionPDO.php");

    class UsuarioAdminPtoIntercambioPDO extends ConexionPDO{

        public function UsuarioAdminPtoIntercambioPDO(){

            parent::__construct();

        }

        //FUNCIONES CRUD BASICAS
        //Funcion Agrega un usuario a un punto de intercambio CRUD 1/4
        public function agregaUsuarioPtoIntercambio($id_pto_intercambioTAPI=0, $rut_usuarioTAPI=''){

            $statement = $this->conexionBD->prepare("INSERT INTO usuario_admin_pto_intercambio VALUES (0,?,?)");
            $statement->bindparam(1, $id_pto_intercambioTAPI, PDO::PARAM_INT);
            $statement->bindparam(2, $rut_usuarioTAPI, PDO::PARAM_STR);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;

        }

        //Funcion elimina Asociacion entre Punto de intercambio y un uruario de tipo administrador de punto de intercambio
        public function eliminaVinculoUsuarioAdminYPtoIntercambio($id_usu_admin_pto_inter=0){

            $statement = $this->conexionBD->prepare("DELETE FROM usuario_admin_pto_intercambio WHERE id_usu_admin_pto_inter=?");

            $statement->bindparam(1, $id_usu_admin_pto_inter, PDO::PARAM_INT);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;

        }

        //Funcion modifica Asociacion entre Punto de intercambio y un uruario de tipo administrador de punto de intercambio
        public function actualizaVinculoUsuarioAdminYPtoIntercambio($id_usu_admin_pto_inter=0, $id_pto_intercambioTAPI=0, $rut_usuarioTAPI=''){

            $statement = $this->conexionBD->prepare("UPDATE usuario_admin_pto_intercambio SET id_usu_admin_pto_inter=?, id_pto_intercambioTAPI=?, rut_usuarioTAPI=? WHERE id_usu_admin_pto_inter=?");

            $statement->bindparam(1, $id_usu_admin_pto_inter, PDO::PARAM_INT);
            $statement->bindparam(2, $id_pto_intercambioTAPI, PDO::PARAM_INT);
            $statement->bindparam(3, $rut_usuarioTAPI, PDO::PARAM_STR);
            $statement->bindparam(4, $id_usu_admin_pto_inter, PDO::PARAM_INT);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;

        }


        //Funcion que obtiene asignacion pto intercambio segun rut usuario
        public function obtieneUsuariosAdminPtoIntercambioPorRut($rut_usuario=''){

            $statement = $this->conexionBD->prepare("SELECT * FROM usuario_admin_pto_intercambio WHERE rut_usuarioTAPI=?");
            $statement->bindparam(1, $rut_usuario, PDO::PARAM_STR);
            $statement->execute();

            $usuarios = $statement->fetch(PDO::FETCH_ASSOC);
            $statement = null;
            return $usuarios;
        }

    }


?>