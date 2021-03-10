<?php

namespace App\Controllers;

class DashboardAdmin extends BaseController {
    
    public function index() {
        

        $data = [
            'title' => 'Главная страница',
            
            
        ];
            echo view('admin/templates/header', $data);
            echo view('admin/pages/main', $data);
            echo view('admin/templates/footer');
    }
}