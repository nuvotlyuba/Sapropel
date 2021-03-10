<?php 

namespace App\Models;
use CodeIgniter\Model;

class DataModel extends Model { //модель для записи и поднятия данных с базы данных

    public function get_data(string $table_name, string $value ="", string $column_name=""){ //берем данные из базы

        $db = \Config\Database::connect();

        $db->protectIdentifiers($table_name);

        $builder = $db->table($table_name);
        if($value){
            return $this->query = $builder->getWhere([$column_name => $value]);
        } else {
            return $this->query = $builder->get();
        }
        
    }

    public function insert_data(array $array, string $table_name) //запись в базу
    {
        $db = \Config\Database::connect();

        $db->protectIdentifiers($table_name);

        // if(! $db = \Config\Database::connect())
        // {
        //     $error = $db->error();
        //     echo $error;
        // } 
        $db->table($table_name)->insert($array);

    }
     public function get_data_first($table_name, $value ="", $column_name =""){

        $db = \Config\Database::connect();

        $db->protectIdentifiers($table_name);

        $builder = $db->table($table_name);

        return $this->query = $builder->getWhere([$column_name => $value])->getFirstRow();
     }



}