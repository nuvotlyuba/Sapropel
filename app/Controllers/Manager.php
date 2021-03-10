<?php 
namespace App\Controllers;

use App\Models\DataModel;


class Manager extends BaseController {

    public function index() {
        
        $model = new DataModel();
        $data_form = $model->get_data('form');

        $data =[
            'title' => 'Данные с формы обратной связи',
            'data_form' => $data_form,
        ];
        

        echo view('admin/templates/header', $data);
		echo view('admin/pages/form_table', $data);
		echo view('admin/templates/footer');
    }

}