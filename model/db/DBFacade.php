<?php

abstract class DBFacade {

    private static $db_host = 'localhost';
    private static $db_user = 'root';
    private static $db_pass = '';
    protected $db_name = 'red';
    protected $query;
    protected $result;
    protected $rows = array();
    private $conn;

# métodos abstractos para ABM de clases que hereden
    #abstract protected function getAll();
    #abstract protected function insert();
    #abstract protected function edit();
    #abstract protected function delete();
# los siguientes métodos pueden definirse con exactitud
# y no son abstractos
# Conectar a la base de datos

    private function open_connection() {
        $this->conn = mysqli_connect(self::$db_host, self::$db_user, self::$db_pass, $this->db_name);
    }

# Desconectar la base de datos

    private function close_connection() {
        mysqli_close($this->conn);
    }

# Ejecutar un query simple del tipo INSERT, DELETE, UPDATE

    protected function execute_single_query() {
        $this->open_connection();        
        $this->conn->query($this->query);        
        $this->close_connection();        
    }

# Traer resultados de una consulta en un Array

    protected function get_results_from_query() {
        $this->open_connection();
        if ($this->result = mysqli_query($this->conn, $this->query)) {
            while ($obj = mysqli_fetch_object($this->result)) {
                $this->rows[] = $obj;
            }
            mysqli_free_result($this->result);
        }
        $this->close_connection();
    }

}

?>
