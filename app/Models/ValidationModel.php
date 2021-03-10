<?php

namespace App\Models;

use CodeIgniter\Model;

class ValidationModel extends Model {


    public function valid_email($value){ //проверяет валидность email, возвращает false при неудаче

        return $value = filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    
    public function valid_text($value){ //валидность текста. false, если не соответствует regexp

        return $value = filter_var($value, FILTER_VALIDATE_REGEXP,
        [
            "options" => ["regexp" => "[^<>/%$#@*&`a-zA-Z]"]
        ]);
    }
    
    public function valid_telephone($value){ //проверка валидности номера, возвращает false при неудаче 

        return $value = filter_var($value, FILTER_VALIDATE_INT, 
        [
            "options" =>[
                "min_range" => 70000000000, "max_range" => 79999999999
                ]
        ]);
    }
    public function valid_password($value){//валидация пароля
        // return $value = filter_var($value, FILTER_VALIDATE_REGEXP,
        // [
        //     "options" => ["regexp" => "[^<>/%$#@*&`а-яА-ЯёЁ]"]
        // ]);
        return $value;
    }
    public function valid_login($value){//валидация логина
        // return $value = filter_var($value, FILTER_VALIDATE_REGEXP,
        // [
        //     "options" => ["regexp" => "[^<>/%$#@*&`а-яА-ЯёЁ]"]
        // ]);
        return $value;
        
    }

    public function strip_data($value){ //заменяем запретное на доступное

        $block = ["<", ">", "/", "%", "$", "@", "*", "&", "\\", "=", "+", "#", "^", "script"];
        $value = trim(strip_tags($value));
        $allow = " ";
        $value = str_replace($block, $allow , $value);
        $value = mb_strtolower($value, 'UTF-8');
        $value = htmlspecialchars($value);
        return $value;
    }
}