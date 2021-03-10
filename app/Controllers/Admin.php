<?php

namespace App\Controllers;

use App\Models\DataModel;
use App\Models\ValidationModel;
use App\Models\SendMailModel;
use App\Models\UserModel;


class Admin extends BaseController{

    public function index(){

        helper(['form', 'uri']);

        $data = ['title' => 'Вход'];
    
        if($this->request->getMethod() == 'post'){

            $rules = [
                'login'=>'required|min_length[5]',
                'fullname'=>'required|min_length[5]',
                'email'=>'required|min_length[6]|valid_email',
                'password'=>'required|max_length[255]',
                // validateUser[email, password]
            ];

            $errors = [
                'login'=>[
                    'required'=>'Введите логин',
                    'min_length'=>'Минимальная длинна больше {param} символов',
                    ],
                'fullname'=>[
                    'required'=>'Введите имя',
                    ],
                'email'=>[
                    'required'=>'Введите email',
                    'min_length'=>'Минимальная длинна email не менее {param} символов',
                    'valid_email'=>'Введите корректный адрес электронной почты',
                    ],
                'password'=>[
                    'required'=>'Введите пароль',
                    'max_length'=>'Максимальная длинна пароля больше {param} символов',
                    // 'validateUser' => 'Не верный логин или пароль',
                    ],
                
                ];

            if(! $this->validate($rules, $errors)){ //выводим ошибки, если данные не прошли валидацию

                $data['validation'] = $this->validator;

            } 
            else { //достаем данные из массива POST

                $login = $this->request->getVar('login');
                $fullname = $this->request->getVar('fullname');
                $email = $this->request->getVar('email');
                $password = $this->request->getVar('password');
                
                $valid = new ValidationModel(); //валидация данных пользователя на корректность
                $login = $valid->valid_login($login);
                $fullname = $valid->valid_login($fullname);
                $email = $valid->valid_email($email);
                $password = $valid->valid_password($password);

                if($login != false && $password != false && $email != false && $fullname != false){

                     $value_db= new DataModel(); //берем данные из базы
                    
                    if( $value_db->get_data('users', $login, 'login') && //проверяем совпадения
                        $value_db->get_data('users', $password, 'password') &&
                        $value_db->get_data('users', $email, 'email') &&
                        $value_db->get_data('users', $fullname, 'fullname'))
                        {
                            $email = new SendMailModel(); //отправка сообщения на почту в случае успешной авторизации
                            $email->send_email( 'nuvotlyuba@gmail.com',
                                            'wtftestproject@gmail.ru', 
                                            'Произошел вход пользователя в административную часть сайта',
                                            'Авторизация Sapropel.info'); 

                        $model = new UserModel();

                        $user = $model->where('email', $this->request->getVar('email'))
                                                                        ->first();

                            $this->setUserSession($user);
                            return redirect()->to('/dashboard_admin');

                        } 
                }
            
            }
        }
        echo view('admin/templates/header');
		echo view('admin/pages/login', $data);
		echo view('admin/templates/footer');
        
    }
    private function setUserSession($user){
		$data = [
			'fullname' => $user['fullname'],
			'login' => $user['login'],
			'email' => $user['email'],
            'id' => $user['id'],
            'status' => $user['status'],
			'isLoggedIn' => true,
		];

		session()->set($data);
		return true;
	}

    public function register(){//добавление нового пользователя

        helper(['form']);
        $data = [];
        $model = new UserModel();

        if($this->request->getMethod() == 'post'){

            $rules = [
                'login'=>'required|min_length[5]|is_unique[users.login]',
                'fullname'=>'required|min_length[5]',
                'email'=>'required|min_length[6]|valid_email|is_unique[users.email]',
                'password'=>'required|max_length[255]',
                'password_confirm' => 'matches[password]',
                // validateUser[email, password]
                'status' => 'required',
            ];
            $errors = [
                'login'=>[
                    'required'=>'Введите логин',
                    'min_length'=>'Пароль должен содержать более {param} символов',
                    'is_unique' => 'Данный логин занят',
                    ],
                'fullname'=>[
                    'required'=>'Введите имя',
                    'min_length' => 'Имя должно быть более {param} символов',
                    ],
                'email'=>[
                    'required'=>'Введите email',
                    'min_length'=>'Email должен содержать более {param} символов',
                    'valid_email'=>'Введите корректный адрес электронной почты',
                    'is_unique' => 'Данный email уже существует',
                    ],
                'password'=>[
                    'required'=>'Введите пароль',
                    'max_length'=>'Пароль должен содержать более {param} символов',
                    // 'validateUser' => 'Не верный логин или пароль',
                    ],
                'password_confirm'=>[
                    'required'=>'Введите пароль повторно',
                    'matches'=>'Пароли не совпадают',
                ],
                'status' => [
                    'required' => 'Выберите статус'
                ],
            ];

                if(! $this->validate($rules, $errors)){

                    $data['validation'] = $this->validator;
                } else {
                    

				$newData = [
                    'login' => $this->request->getVar('login'),
                    'fullname' => $this->request->getVar('fullname'),
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                    'status' => $this->request->getVar('status'),
				];
                $model->save($newData);
                $session = session();
                $session->setFlashdata('success', 'Вы успешно зарегистрировались');
                return redirect()->to('/admin');
                }
        }
        echo view('admin/templates/header', $data);
		echo view('admin/pages/register', $data);
		echo view('admin/templates/footer');

    }

    public function logout(){ //выход и закрытие сессии

		session()->destroy();
		return redirect()->to('/admin');
	}

    public function profile(){ //изменение данных профиля пользователя

        
	
		helper(['form']);
		$model = new UserModel();

        print_r($_SESSION);

        $data = ['title' => 'Профиль пользователя'];

        if($this->request->getMethod() == 'post'){

            $rules = [
                // 'login' => 'required|min_length[3]|max_length[20]|is_unique[users.login]',
                // 'email' => 'valid_email|is_unique[users.email]',
                'fullname' => 'required',
                'password' => 'required|min_length[6]|max_length[50]',
                'password_confirm' => 'matches[password]',
                
            ];
            $errors = [
                // 'login' => [
                //     'required' => 'Введите логин',
                //     'min_length' => 'Логин должне содержать не менее {param} символов',
                //     'max_length' => 'Логин должен сожержать не более {param} символов',
                //     'is_unique' => 'Пользователь с таким логином существует',
                // ],
                // 'email' => [
                //     'required' => 'Введите email',
                //     'min_length' => 'Email должен содержать не менее {param} символов',
                //     'valid_email' => 'Email должен быть корректным',
                //     'is_unique' => 'Пользователь с таким email уже существует',
                // ],
                'password' => [
                    'required' => 'Введите пароль',
                    'min_length' => 'Новый пароль должен быть не менее {param} символов',
                    'max_length' => 'Новый пароль должен быть не более {param} символов',
                ],
                'password_confirm' => [
                    'matches' => 'Пароли не совпадают',
                ],
                'fullname' => [
                    'required' => 'Введите имя',
                ],
                
            ];
            if(! $this -> validate($rules, $errors)){

                $data['validation'] = $this->validator;

            } else {
                $newData = [
                    'id' => session()->get('id'),
					'fullname' => $this->request->getPost('fullname'),
					];
					if($this->request->getPost('password') != ''){
						$newData['password'] = $this->request->getPost('password');
					}


				$model->save($newData);//записываем обновление в базу

				session()->setFlashdata('success', 'Данные успешно изменины');
				return redirect()->to('/profile');

            }
        }
        
        $data['user'] = $model->where('id', session()->get('id'))->first();
        
		echo view('admin/templates/header', $data);
		echo view('admin/pages/profile', $data);
		echo view('admin/templates/footer');
    }
}