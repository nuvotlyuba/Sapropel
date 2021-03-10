<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\SendMailModel;
use App\Models\DataModel;
use App\Models\ValidationModel;


class Ajax extends BaseController
{
    

    public function index(){

        helper(['form']);

        if($this->request->getMethod() == 'post'){

            $fullname = $post['fullname'] = $this->request->getPost('fullname');
            $theme = $post['theme'] = $this->request->getPost('theme');
            $email = $post['email'] = $this->request->getPost('email');
            $message = $post['message'] = $this->request->getPost('message');
            $telephone = $post['telephone'] = $this->request->getPost('telephone');

            $valid = new ValidationModel(); //валидация данных
            $email = $valid->valid_email($email);
            $telephone = $valid->valid_telephone($telephone);

            $strip = new ValidationModel(); //фильтрация данных
            $message  = $strip->strip_data($message );
            $theme = $strip->strip_data($theme);

            if( //условия проверки данных перед записью
                $email != false && 
                $telephone != false && 
                $valid->valid_text($fullname) == false
            ) {
                
                $mail = new SendMailModel(); //отправоляем на почту
                $text = "Имя:$fullname\r\nПочта:$email\r\nТелефон:$telephone\r\nТема:$theme\r\nСообщение:$message";
                $header = 'Новое сообщение в форме обратной связис с сайта';
                $mail->send_email('nuvotlyuba@gmail.com', 'wtftestproject@gmail.com', $text, $header);

                $insert = new DataModel(); //записываем в базу
                $insert->insert_data($post, 'form');

            }
        }
    }
}
