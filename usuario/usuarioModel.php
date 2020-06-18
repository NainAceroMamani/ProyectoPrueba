<?php
    require 'conexion.php';
    
    class Model extends Db{

        public function __construct(){
        }

        public function all(){
            $sql = 'SELECT * from usuario';
    
            try{
                return ($rows = parent::query($sql)) ? $rows : false;
            } catch(Exception $e) {
                throw $e;
            }
        }
    }