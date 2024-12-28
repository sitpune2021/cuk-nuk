<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\LoginModel;
use App\Models\ProductModel;
use App\Models\ContactModel;
use App\Models\SliderModel;
use App\Models\CategoryModel;

class AdminController extends BaseController
{
   protected $helpers = ["form","url"];
    
    public function __construct() 
	{
		$this->session = \Config\Services::session();
        $this->session->start();
        $db = db_connect();
        $this->LoginModel = new LoginModel($db);
	}
   
    public function AdminDashboard()
    {
        $ProductModel          = new ProductModel();
        $data['ProductC']      = $ProductModel->getProductCount();
        $ContactModel          = new ContactModel();
        $data['ContactC']      = $ContactModel->getContactCount();
        $SliderModel           = new SliderModel();
        $data['SliderC']       = $SliderModel->getSliderCount();
        $CategoryModel         = new CategoryModel();
        $data['CategoryC']       = $CategoryModel->getCategoryCount();
        return view('Admin/AdminDashboard',$data);
    }
    
    public function Login()
    {
        return view('Admin/Login');
    }
    
    public function signIn()
    {
        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];
        
        if($this->validate($rules))
        {
            $result = $this->LoginModel->checkUsernamePass();
            
            // print_r($result);die;
			if(!empty($result))
			{
                $session = session();
				$id         = $result['id'];
				$username   = $result['username'];
				$password   = $result['password'];
				$user_type  = $result['user_type'];
                session()->set('id',$id);
				session()->set('username',$username);
				session()->set('password',$password);
				session()->set('user_type',$user_type);
                
				if($user_type == 1)
                {
                    return $this->response->redirect(site_url('user')); 
                }
                else if($user_type == 2)
                {
                    return $this->response->redirect(site_url('AdminDashboard')); 
                }
                else
                {
                    return $this->response->redirect(site_url('Login')); 
                }
		    }
			else
            {

               $invalid = 'Provide valid credentials for login.';
               session()->set('invalidLoginD',$invalid);
               $this->session->set('invalidLoginD',$invalid);
               return $this->response->redirect(site_url('Login')); 
           }      
          
        }else
        {
            $session = session();
            $session->set(array('invalidLoginD' => ''));
            $session->destroy();

            $data['validation'] = $this->validator;
            echo view('Admin/Login',$data);
        }
    }
    
   public function Logout()
    {
        $session = session();
        $session->set(array('id' => '','username' => '','password' => '','user_type' => ''));
        $session->destroy();
        return $this->response->redirect(site_url('Login'));
    } 
}