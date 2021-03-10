<?php 

namespace App\Controllers;

use App\Models\DataModel;
// use App\Models\DredgerTemplateModel;

class Pages extends BaseController
{
    
	function index($page, $id ="")
    
	{
        // $this->cachePage(900);
        if(! is_file(APPPATH.'/Views/pages/'.$page.'.php')){

            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        
        $model = new DataModel();
         //данные из базы для карточек земснарядов
        $zem = $model->get_data('zem');

        //данные из базы для странички Нижегородец 1,2,3
        $zem_id = $model->get_data('dredger_template', $id,'id');
        
        $data = [
            'style_header_main' => '',
            'zem' =>  $zem,
            'zem_id' => $zem_id,
        ];
        switch ($page) { 
            case 'types_of_jobs':
                $data['title'] = 'Виды работ';
                $data['style'] = 'types_of_jobs';
                break;
            case 'rent_and_sale':
                $data['title'] = 'Аренда и покупка земснаряда';
                $data['style'] = 'rent_and_sale';
                break;
            case 'about_us':
                $data['title'] = 'О компании';
                $data['style'] = 'about_us';
                break;
            case 'patents':
                $data['title'] = 'Патенты и изобретения';
                $data['style'] = 'patents';
                break;
            case 'reviews':
                $data['title'] = 'Отзывы';
                $data['style'] = 'reviews';
                break;
            case 'contacts':
                $data['title'] = 'Контакты';
                $data['style'] = 'contacts';
                break;
            case 'cleaning_of_reservoirs':
                $data['title'] = 'Очистка водоемов';
                $data['style'] = 'cleaning_of_reservoirs';
                break;
            case 'extraction_and_sand_reclamation':
                $data['title'] = 'Добыча и намы песков';
                $data['style'] = 'extraction_and_sand_reclamation';
                break;
            case 'sand_reclamation':
                $data['title'] = 'Намыв пляжей';
                $data['style'] = 'sand_reclamation';
                break;
            case 'sapropel_extraction':
                $data['title'] = 'Добыча сапропеля';
                $data['style'] = 'sapropel_extraction';
                break;
            case 'dredger_template':
                $data['title'] = 'Земснаряд';
                $data['style'] = 'dredger_template';
                break; 
            case 'not_ready':
                $data['title'] = 'Страница в разработке';
                $data['style'] = 'not_ready';
                break; 

        }
        echo view('templates/header', $data);
        echo view('pages/'.$page, $data);
        echo view('templates/footer');
		
		
    }

	//--------------------------------------------------------------------

}
