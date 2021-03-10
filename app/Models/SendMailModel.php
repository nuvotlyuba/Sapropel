<?php

namespace App\Models;

use CodeIgniter\Model;


class SendMailModel extends Model 
{


    public function send_email($to, $from, $text, $header) //отправка почты
    {
        $send_to = $to;
        $send_from = $from;
        
        $config['SMTPHost'] = 'smtp.gmail.com';
        $config['SMTPUser'] = 'Люба Ильенкова';
        $config['SMTPPass'] = 'yt[eqcj,fxbq';
        $config['SMTPPort'] = 587;
        $config['SMTPCrypto'] = 'tls';
        $config['priority'] = 1;
        //Инициализация класса email
        $email = \Config\Services::email();
        $email->initialize($config);
        $email->setFrom($send_from);
        $email->setTo($send_to);
        $email->setHeader('Сапропель', $header);
        $email->setSubject('Новое сообщение с Sapropel.info');
        $email->setMessage($text);
        
            if($email->send())
            {
                return TRUE;
            }
            else
            {
                return FALSE;
                //echo $email->printdebugger();
            }
    }
}