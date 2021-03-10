<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DataModel;


class Main extends BaseController   {

    
    function index()
    {   
        // $this->cachePage(900);
        $model = new DataModel();
        $zem = $model->get_data('zem');
        
        $data = [
        'style_header_main' => 'header_main-page',
        'title' => 'Сапропель',
        'style' => 'styles',
        'zem' => $zem,
        ];
        echo view('templates/header', $data);
        echo view('pages/main', $data);
        echo view('templates/footer');
                    
    }
    

}


    
    

