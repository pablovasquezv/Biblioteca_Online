<?php

    require_once("ConexionPDO.php");

    /**
     * Clase PrestamoPDO 
     * Hereda de ConexionPDO para acceder a la Base de datos
     * 
     * Contiene funciones para agregar, modificar, obtener y eliminar
     * en el proceso completo relacionado al Prestamo de libros entre usuarios
     * 
     */
    class PrestamoPDO extends ConexionPDO{

        /**
         * Constructor clase PrestamoPDO
         * Ejecuta contructor de su clase Padre
         * 
         * @return void
         */
        public function PrestamoPDO(){

            parent::__construct();

        }

        //FUNCIONES CRUD BASICAS
        
        /**
         * Funcion para agregar un prestamo nuevo al registro de prestamos
         * 
         *
         * @param integer $id_estado_prestamoTP
         * @param string $rut_usuario_prestador
         * @param string $rut_usuario_prestatario
         * @param integer $id_libroTP
         * @param integer $id_pto_intercambioTP
         * @param integer $dias_prestamo
         * @param string $fecha_inicio_prestamo
         * @param string $fecha_termino_prestamo
         * @return void
         */
        public function agregaPrestamo($id_estado_prestamoTP=0,
                                       $rut_usuario_prestador='',
                                       $rut_usuario_prestatario='',
                                       $id_libroTP=0,
                                       $id_pto_intercambioTP=0,
                                       $dias_prestamo=0,
                                       $fecha_inicio_prestamo='',
                                       $fecha_termino_prestamo=''){

            $stmt = $this->conexionBD->prepare("INSERT INTO prestamo VALUES (0,?,?,?,?,?,?,?,?)");
            
            $stmt->bindparam(1, $id_estado_prestamoTP, PDO::PARAM_INT);
            $stmt->bindparam(2, $rut_usuario_prestador, PDO::PARAM_STR);
            $stmt->bindparam(3, $rut_usuario_prestatario, PDO::PARAM_STR);
            $stmt->bindparam(4, $id_libroTP, PDO::PARAM_INT);
            $stmt->bindparam(5, $id_pto_intercambioTP, PDO::PARAM_INT);
            $stmt->bindparam(6, $dias_prestamo, PDO::PARAM_INT);
            $stmt->bindparam(7, $fecha_inicio_prestamo, PDO::PARAM_STR);
            $stmt->bindparam(8, $fecha_termino_prestamo, PDO::PARAM_STR);

            $resultado = $stmt->execute();
            $stmt = null;
            return $resultado;

        }

        
        /**
         * Funcion Lista Todos los Prestamos existentes en el registro de prestamos
         * Devuelve un arreglo asociativo
         * 
         * @return $prestamos
         */
        public function obtienePrestamos(){

            $statement = $this->conexionBD->prepare("SELECT * FROM prestamo");
            $statement->execute();

            $prestamos = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $prestamos;
        }

        
        /**
         * Funcion Busca y devuelve Prestamos según id_prestamo
         * Devuelve un arreglo asociativo
         *
         * @param integer $id_prestamo
         * @return $prestamoPorId
         */
        public function obtienePrestamoPorId($id_prestamo=0){

            $statement = $this->conexionBD->prepare("SELECT * FROM prestamo WHERE id_prestamo=?");
            $statement->bindparam(1, $id_prestamo, PDO::PARAM_INT);
            $statement->execute();

            $prestamoPorId = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $prestamoPorId;

        }

        
        /**
         * Busca y obtiene listado de solicitudes de prestamo hechas por el usuario
         * Que estén en estado espera respuesta petición o petición cancelada
         * Devuelve un arreglo asociativo con todas las solicitudes
         *
         * @param string $rut_usuario_prestatario
         * @return $prestamoPorRutPrestatario
         */
        public function obtienePrestamoPorRutPrestatario($rut_usuario_prestatario=''){

            $statement = $this->conexionBD->prepare("SELECT * FROM vistaprestamos WHERE Rut_prestatario=? AND nombre_estado_prestamo='Petición Cancelada' OR nombre_estado_prestamo='En espera respuesta petición'");
            $statement->bindparam(1, $rut_usuario_prestatario, PDO::PARAM_STR);
            $statement->execute();

            $prestamoPorRutPrestatario = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $prestamoPorRutPrestatario;

        }

        /**
         * Funcion que busca todos los registros de prestamos que el prestatario (solicitante) está
         * en proceso. Busca segun el rut del prestatario y el nombre del estado de prestamo
         *
         * @param string $rut_usuario_prestatario
         * @return $prestamoPorRutPrestatario
         */
        public function obtieneEstadoPrestamoPorRutPrestatarioNombreEstado($rut_usuario_prestatario='', $nombre_estado_prestamo=''){

            $statement = $this->conexionBD->prepare("SELECT * FROM vistaprestamos WHERE Rut_prestatario=? AND nombre_estado_prestamo=?");
            $statement->bindparam(1, $rut_usuario_prestatario, PDO::PARAM_STR);
            $statement->bindparam(2, $nombre_estado_prestamo, PDO::PARAM_STR);
            $statement->execute();

            $prestamoPorRutPrestatario = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $prestamoPorRutPrestatario;

        }

        public function obtieneEstadoPrestamoPorRutPrestatarioNombreEstado2($rut_usuario_prestatario='', $nombre_estado_prestamo='', $nombre_estado_prestamo2=''){

            $statement = $this->conexionBD->prepare("SELECT * FROM vistaprestamos WHERE Rut_prestatario=? AND nombre_estado_prestamo=? AND nombre_estado_prestamo=?");
            $statement->bindparam(1, $rut_usuario_prestatario, PDO::PARAM_STR);
            $statement->bindparam(2, $nombre_estado_prestamo, PDO::PARAM_STR);
            $statement->bindparam(3, $nombre_estado_prestamo2, PDO::PARAM_STR);
            $statement->execute();

            $prestamoPorRutPrestatario = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $prestamoPorRutPrestatario;

        }

        /**
         * Busca y obtiene listado de solicitudes de prestamo hechas al dueno 
         * del libro (el prestador) segun rut_prestador (dueno del libro).
         * Devuelve un arreglo asociativo con todas las solicitudes
         *          
         * @param string $rut_usuario_prestador
         * @return array $prestamoPorRutPrestador
         */
        public function obtienePrestamoPorRutPrestador($rut_usuario_prestador=''){

            $statement = $this->conexionBD->prepare("SELECT * FROM vistaprestamosprestatario WHERE Rut_prestador=? AND nombre_estado_prestamo='En espera respuesta petición'");
            $statement->bindparam(1, $rut_usuario_prestador, PDO::PARAM_STR);
            $statement->execute();

            $prestamoPorRutPrestador = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $prestamoPorRutPrestador;

        }


        public function obtienePrestamoEnCursoPorRutPrestador($rut_usuario_prestador=''){

            $statement = $this->conexionBD->prepare("SELECT * FROM vistaprestamos WHERE Rut_prestatario=? AND nombre_estado_prestamo!='En espera respuesta petición' AND nombre_estado_prestamo != 'Petición Cancelada'");
            $statement->bindparam(1, $rut_usuario_prestador, PDO::PARAM_STR);
            $statement->execute();

            $prestamoPorRutPrestador = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $prestamoPorRutPrestador;

        }

        public function obtienePrestamoEnCursoPorIdPtoIntercambio($id_pto_intercambio=0){

            $statement = $this->conexionBD->prepare("SELECT * FROM vistaprestamos WHERE id_pto_intercambio=? AND nombre_estado_prestamo!='Petición Rechazada' AND nombre_estado_prestamo != 'Petición Cancelada'");
            $statement->bindparam(1, $id_pto_intercambio, PDO::PARAM_INT);
            $statement->execute();

            $prestamoPorRutPrestador = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $prestamoPorRutPrestador;

        }


         /**
         * Función que busca registros de prestamos que pertenescan a un punto de intercambio especifico y un estado especifico
         * Tiene 2 parametros: id punto intercambio para obtener todos los registros pertenecientes a ese punto de intercambio
         * Y, estado prestamo que es un string que contiene el nombre del estado prestamo en especifico a buscar
         * Devuelve un arreglo asociativo
         *
         * @param integer $id_pto_intercambio
         * @param string $estado_prestamo
         * @return void
         */
        public function obtienePrestamoSegunEstadoPrestamo($id_pto_intercambio=0, $estado_prestamo=''){

            $statement = $this->conexionBD->prepare("SELECT * FROM vistaprestamos WHERE id_pto_intercambio=? AND nombre_estado_prestamo =?");
            $statement->bindparam(1, $id_pto_intercambio, PDO::PARAM_INT);
            $statement->bindparam(2, $estado_prestamo, PDO::PARAM_STR);
            $statement->execute();

            $prestamoPorRutPrestador = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $prestamoPorRutPrestador;

        }


        public function obtienePrestamoPrestadoPorIdPtoIntercambio($id_pto_intercambio=0){

            $statement = $this->conexionBD->prepare("SELECT * FROM vistaprestamos WHERE id_pto_intercambio=? AND nombre_estado_prestamo='Prestado'");
            $statement->bindparam(1, $id_pto_intercambio, PDO::PARAM_INT);
            $statement->execute();

            $prestamoPorRutPrestador = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $prestamoPorRutPrestador;

        }

    
        public function obtienePrestamoAceptadosPorRutPrestador($rut_usuario_prestador=''){

            $statement = $this->conexionBD->prepare("SELECT * FROM `vistaprestamosprestatario` WHERE Rut_prestador=? AND nombre_estado_prestamo != 'En espera respuesta petición' ");
            $statement->bindparam(1, $rut_usuario_prestador, PDO::PARAM_STR);
            $statement->execute();

            $prestamoPorRutPrestador = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $prestamoPorRutPrestador;

        }

        /**
         * Funcion busca prestamos aceptados en curso para ser mostrados en detalle
         * desde el lado de el prestatario
         * Devuelve un arreglo
         *
         * @param string $id_prestamo
         * @return void
         */
        public function obtienePrestamoAceptadosPrestatario($id_prestamo=''){

            $statement = $this->conexionBD->prepare("SELECT * FROM `vistaprestamosprestatario` WHERE id_prestamo = ?");
            $statement->bindparam(1, $id_prestamo, PDO::PARAM_STR);
            $statement->execute();

            $prestamoPorIdPrestamo = $statement->fetch(PDO::FETCH_ASSOC);
            $statement = null;
            return $prestamoPorIdPrestamo;

        }



        public function obtienePrestamoAceptadosPorIdPrestamo($id_prestamo=''){

            $statement = $this->conexionBD->prepare("SELECT * FROM `vistaprestamosprestatario` WHERE id_prestamo = ? AND nombre_estado_prestamo != 'En espera respuesta petición' ");
            $statement->bindparam(1, $id_prestamo, PDO::PARAM_STR);
            $statement->execute();

            $prestamoPorIdPrestamo = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $prestamoPorIdPrestamo;

        }


        /**
         * Funcion busca prestamos aceptados en curso para ser mostrados en detalle
         * Devuelve un arreglo
         *
         * @param string $id_prestamo
         * @return void
         */
        public function obtienePrestamoEnCursoAceptadosPorIdPrestamo($id_prestamo=''){

            $statement = $this->conexionBD->prepare("SELECT * FROM `vistaprestamos` WHERE id_prestamo = ?");
            $statement->bindparam(1, $id_prestamo, PDO::PARAM_STR);
            $statement->execute();

            $prestamoPorIdPrestamo = $statement->fetch(PDO::FETCH_ASSOC);
            $statement = null;
            return $prestamoPorIdPrestamo;

        }


        /**
         * Funcion que busca un registro de prestamo segun id_libro
         * Devuelve un arreglo asociativo
         * 
         * @param integer $id_libroTP
         * @return $prestamoPorIdLibro
         */
        public function obtienePrestamoPorIdLibro($id_libroTP=0){

            $statement = $this->conexionBD->prepare("SELECT * FROM prestamo WHERE id_libroTP=?");
            $statement->bindparam(1, $id_libroTP, PDO::PARAM_INT);
              $statement->execute();

            $prestamoPorIdLibro = $statement->fetch(PDO::FETCH_ASSOC);
            $statement = null;
            return $prestamoPorIdLibro;

        }


        
        /**
         * Funcion modifica datos Prestamo 
         * NO SE PUEDE MODIFICAR EL id_prestamo
         * 
         *
         * @param integer $id_prestamo
         * @param integer $id_estado_prestamoTP
         * @param string $rut_usuario_prestador
         * @param string $rut_usuario_prestatario
         * @param integer $id_libroTP
         * @param integer $id_pto_intercambioTP
         * @param integer $dias_prestamo
         * @param string $fecha_inicio_prestamo
         * @param string $fecha_termino_prestamo
         * @return $resultado
         */
        public function actualizaPrestamo($id_prestamo=0,
                                        $id_estado_prestamoTP=0,
                                        $rut_usuario_prestador='',
                                        $rut_usuario_prestatario='',
                                        $id_libroTP=0,
                                        $id_pto_intercambioTP=0,
                                        $dias_prestamo=0,
                                        $fecha_inicio_prestamo='',
                                        $fecha_termino_prestamo=''){

            $statement = $this->conexionBD->prepare("UPDATE prestamo SET id_estado_prestamoTP=?, 
                                                                         rut_usuario_prestador=?, 
                                                                         rut_usuario_prestatario=?,
                                                                         id_libroTP=?,
                                                                         id_pto_intercambioTP=?,
                                                                         dias_prestamo=?,
                                                                         fecha_inicio_prestamo=?,
                                                                         fecha_termino_prestamo=?
                                                                         WHERE id_prestamo=?");
            
            $statement->bindparam(1, $id_estado_prestamoTP, PDO::PARAM_INT);
            $statement->bindparam(2, $rut_usuario_prestador, PDO::PARAM_STR);
            $statement->bindparam(3, $rut_usuario_prestatario, PDO::PARAM_STR);
            $statement->bindparam(4, $id_libroTP, PDO::PARAM_INT);
            $statement->bindparam(5, $id_pto_intercambioTP, PDO::PARAM_INT);
            $statement->bindparam(6, $dias_prestamo, PDO::PARAM_INT);
            $statement->bindparam(7, $fecha_inicio_prestamo, PDO::PARAM_STR);
            $statement->bindparam(8, $fecha_termino_prestamo, PDO::PARAM_STR);
            $statement->bindparam(9, $id_prestamo, PDO::PARAM_INT);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;

        }

    public function actualizaAceptaPrestamo($id_prestamo=0, $id_estado_prestamoTP=0, $id_pto_intercambioTP=0, $dias_prestamo=0){
        $statement = $this->conexionBD->prepare("UPDATE prestamo SET id_estado_prestamoTP=?, id_pto_intercambioTP=?, dias_prestamo=? WHERE id_prestamo=?");

        $statement->bindparam(1, $id_estado_prestamoTP, PDO::PARAM_INT);
        $statement->bindparam(2, $id_pto_intercambioTP, PDO::PARAM_INT);
        $statement->bindparam(3, $dias_prestamo, PDO::PARAM_INT);
        $statement->bindparam(4, $id_prestamo, PDO::PARAM_INT);

        $resultado = $statement->execute();
        $statement = null;
        return $resultado;

    }

    public function actualizaEstadoPrestamoGenerico($id_prestamo=0, $id_estado_prestamoTP=0){
        $statement = $this->conexionBD->prepare("UPDATE prestamo SET id_estado_prestamoTP=? WHERE id_prestamo=?");

        $statement->bindparam(1, $id_estado_prestamoTP, PDO::PARAM_INT);
        $statement->bindparam(2, $id_prestamo, PDO::PARAM_INT);

        $resultado = $statement->execute();
        $statement = null;
        return $resultado;

    }

    public function actualizaEstadoPrestamoRecepcionado($id_prestamo=0, $id_estado_prestamoTP=0, $fecha_inicio_prestamo='', $fecha_termino_prestamo=''){
        $statement = $this->conexionBD->prepare("UPDATE prestamo SET id_prestamo=?, id_estado_prestamoTP=?, fecha_inicio_prestamo=?, fecha_termino_prestamo=? WHERE id_prestamo=?");

        $statement->bindparam(1, $id_prestamo, PDO::PARAM_INT);
        $statement->bindparam(2, $id_estado_prestamoTP, PDO::PARAM_INT);
        $statement->bindparam(3, $fecha_inicio_prestamo, PDO::PARAM_STR);
        $statement->bindparam(4, $fecha_termino_prestamo, PDO::PARAM_STR);
        $statement->bindparam(5, $id_prestamo, PDO::PARAM_INT);

        $resultado = $statement->execute();
        $statement = null;
        return $resultado;

    }



    public function actualizaRechazaPrestamo($id_prestamo=0, $id_estado_prestamoTP=0){
        $statement = $this->conexionBD->prepare("UPDATE prestamo SET id_estado_prestamoTP=? WHERE id_prestamo=?");

        $statement->bindparam(1, $id_estado_prestamoTP, PDO::PARAM_INT);
        $statement->bindparam(2, $id_prestamo, PDO::PARAM_INT);

        $resultado = $statement->execute();
        $statement = null;
        return $resultado;

    }

    public function actualizaCancelaPrestamo($id_prestamo=0, $id_estado_prestamoTP=0){
        $statement = $this->conexionBD->prepare("UPDATE prestamo SET id_estado_prestamoTP=? WHERE id_prestamo=?");

        $statement->bindparam(1, $id_estado_prestamoTP, PDO::PARAM_INT);
        $statement->bindparam(2, $id_prestamo, PDO::PARAM_INT);

        $resultado = $statement->execute();
        $statement = null;
        return $resultado;

    }

        /**
         * Funcion elimina Prestamo por Id_prestamo
         *
         * @param integer $id_prestamo
         * @return $resultado
         */
        public function eliminaPrestamo($id_prestamo=0){

            $statement = $this->conexionBD->prepare("DELETE FROM prestamo WHERE id_prestamo=?");

            $statement->bindparam(1, $id_prestamo, PDO::PARAM_INT);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;

        }

        public function obtienePrestamoFinalizadosPtoIntercambio($id_pto_intercambio=0){

            $statement = $this->conexionBD->prepare("SELECT * FROM vistaprestamos WHERE id_pto_intercambio=? 
                                                                                   AND nombre_estado_prestamo ='Petición Rechazada' 
                                                                                   OR nombre_estado_prestamo = 'Petición Cancelada'
                                                                                   OR nombre_estado_prestamo = 'Devuelto a dueño'
                                                                                   OR nombre_estado_prestamo = 'Perdido'
                                                                                   OR nombre_estado_prestamo = 'Robado'");
            $statement->bindparam(1, $id_pto_intercambio, PDO::PARAM_INT);
            $statement->execute();

            $prestamoPorRutPrestador = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $prestamoPorRutPrestador;

        }

        

       


    }

?>