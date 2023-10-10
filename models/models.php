<?php

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../controllers/controllers.php';

// $conn = new database;

class models extends database{

     public function insert($table_name, $table_rows, $table_rows_values){

        $sql = "INSERT INTO `$table_name`($table_rows) VALUES ($table_rows_values)";

        $result = $this->connect()->query($sql);

        return $result;

        
     }
     public function update($table_name, $table_rows_values){

        $sql = "UPDATE `$table_name` SET $table_rows_values WHERE 1";

        $result = $this->connect()->query($sql);

        return $result;

     }
     public function update_where($table_name, $table_rows_values, $where_conditions_and_values){

        $sql = "UPDATE `$table_name` SET $table_rows_values WHERE $where_conditions_and_values";

        $result = $this->connect()->query($sql);

        return $result;


     }
     public function get_data($table_name){

        $sql = "SELECT * FROM `$table_name` WHERE 1";

        $result = $this->connect()->query($sql);

        return $result;



     }
     public function get_data_where($table_name, $where_conditions_and_values){

        $sql = "SELECT * FROM `$table_name` WHERE $where_conditions_and_values";

        $result = $this->connect()->query($sql);

        return $result;



     }

     public function pure_data($data){

        $result = htmlspecialchars(mysqlI_real_escape_string($this->connect(), $data), ENT_QUOTES);

        return $result;



     }




}




?>