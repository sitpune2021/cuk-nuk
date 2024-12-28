<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\SliderModel;
use App\Models\LoginModel;

class SliderController extends BaseController
{
    protected $helpers = ["form","url"];
    
    public function __construct() {
        $this->session = \Config\Services::session();
        $this->session->start();
        $db = db_connect();
        $this->LoginModel = new LoginModel($db);
        }
    
     public function AddSlider()
    {
        
        return view('Admin/AddSlider');
    }
   
     public function SliderInserted()
    {
         $editId=(!empty($_POST['editId'])) ? $_POST['editId'] : "";
         $validation = \Config\Services::validation();
        
        if(empty($editId))
        {
            // Insert Slider
            $validationRules = [
                'alt_tag' => 'required',
                'index_no' => 'required'
            ];
            $validationMessages = [
                'alt_tag' => [
                'required'    => 'Please Enter Alt Tag'
                
                ],
                'index_no' => [
                'required'    => 'Please Enter Index No.'
                
                ]
            ];
            
            $maxsize   = 1024;
            if($_FILES['image']['size'] >= $maxsize || $_FILES['image']['error']  == 1 || $_FILES['image']['size']  == 0)
            {
            	$imageValidationRules = [
                'image'    => 'uploaded[image]|max_size[image,1024]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]'
            ];
                $imageValidationMessages = [
                    'image' => [
                    'uploaded' => 'Please upload an image.',
                    'max_size' => 'The image size should not exceed 1 MB.',
                    'is_image' => 'Please upload a valid image file.',
                    'mime_in' => 'Please upload a valid image file in JPG or PNG format.'
                ]
                ];
            }
            
            
            $validationRules = array_merge($validationRules, $imageValidationRules);
            $validationMessages = array_merge_recursive($validationMessages, $imageValidationMessages);

            $validation->setRules($validationRules, $validationMessages);
        
            if ($this->request->getMethod() === 'post' && $validation->withRequest($this->request)->run()) 
            {
                if($_FILES['image']['name']!='')
                    {
                        $documents = rand(1111,9999);
                        $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);    
                        $filename = $_FILES['image']['name'];
                        $upload_path="public/Admin/assets/images/Slider_image/";
                        $image = $documents.".".$extension;
                        $file_size =$_FILES['image']['size'];
                        $file_tmp =$_FILES['image']['tmp_name'];
                        $file_type=$_FILES['image']['type'];
                        $file_ext=strtolower(end(explode('.',$filename))); 
                        $reg = move_uploaded_file($file_tmp,$upload_path.$image);
                    }
        
                    $sliderData = array(
                    'image'   => $image,
                    'alt_tag' => $_POST['alt_tag'],
                    'index_no' => $_POST['index_no']
                    );
                    
                    $SliderModel = new SliderModel();
                    $SliderModel->insertSlider($sliderData);
                    $slidMsg = "Your Slider Inserted successfully.";
                    session()->set('slidMsg',$slidMsg);
                    return $this->response->redirect(base_url('AddSlider'));
                
            }else 
            {
                return view('Admin/AddSlider', ['validation' => $validation]);
            }
            
        }else
        {
            
            // Update Slider
            $validationRules = [
                'alt_tag' => 'required',
                'index_no' => 'required'
            ];
            $validationMessages = [
                'alt_tag' => [
                'required'    => 'Please Enter Alt Tag'
                
                ],
                'index_no' => [
                'required'    => 'Please Enter Index No.'
                
                ]
            ];
            
            $validation->setRules($validationRules, $validationMessages);
        
            if ($this->request->getMethod() === 'post' && $validation->withRequest($this->request)->run()) 
            {
                if($_FILES['image']['name']!='')
                    {
                        $documents = rand(1111,9999);
                        $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);    
                        $filename = $_FILES['image']['name'];
                        $upload_path="public/Admin/assets/images/Slider_image/";
                        $image = $documents.".".$extension;
                        $file_size =$_FILES['image']['size'];
                        $file_tmp =$_FILES['image']['tmp_name'];
                        $file_type=$_FILES['image']['type'];
                        $file_ext=strtolower(end(explode('.',$filename))); 
                        $reg = move_uploaded_file($file_tmp,$upload_path.$image);
                    }else
                    {
                      $image = $_POST['editImage']; 
                    }
                    
                   $sliderData = array(
                    
                    'image'     => $image,
                    'alt_tag'   => $_POST['alt_tag'],
                    'index_no'  => $_POST['index_no']
                    );
            
                     $SliderModel = new SliderModel();
                     $SliderModel->updateSlider($sliderData,$editId);
                     $slidMsg = "Your Slider Updated successfully.";
                     session()->set('slidMsg',$slidMsg);
                     $EID = base64_encode($editId);
                     return $this->response->redirect(base_url('UpdateSlider?ID='.$EID));
                }else 
                    $EID = base64_encode($editId);
                    session()->setFlashdata('validation', $validation);
                    return redirect()->to(base_url('UpdateSlider?ID=' . $EID));
                }
        return $this->response->redirect(base_url('ViewSlider'));
        //return view('Admin/ViewSlider');
    }
    
    public function ViewSlider()
    {
        $session = session();
        $session->remove('slidMsg');
        $SliderModel    = new SliderModel();
        $data['sliderD'] = $SliderModel->getSliderhList();
        return view('Admin/ViewSliders',$data);
    }
    public function UpdateSlider()
    {
        $SliderModel = new SliderModel();
        $id = base64_decode($_GET['ID']);
        $data['SliderD'] = $SliderModel->getSliderById($id);
        return view('Admin/AddSlider',$data);
    }
    
    public function deleteSlider()
    {
        $ID     = $_GET['ID'];
        $table  = $_GET['table'];
        $SliderModel = new SliderModel();
        
        if($table=='tbl_slider')
        {
            $SliderModel->DeleteSliderById($ID);
            return $this->response->redirect(site_url('ViewSlider')); 
        }
    }
    
    public function UpdateBanner()
    {
        $SliderModel = new SliderModel();
        $id = base64_decode($_GET['ID']);
        $data['BannerD'] = $SliderModel->getBannerById($id);
        return view('Admin/AddBanner',$data);
    }
    
    public function UpdateBannerPro()
    {
         $editId=(!empty($_POST['editId'])) ? $_POST['editId'] : "";
         $validation = \Config\Services::validation();
        
        
    if($_FILES['image']['name']!='')
        {
            $documents = rand(1111,9999);
            $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);    
            $filename = $_FILES['image']['name'];
            $upload_path="public/Admin/assets/images/Banner_image/";
            $image = $documents.".".$extension;
            $file_size =$_FILES['image']['size'];
            $file_tmp =$_FILES['image']['tmp_name'];
            $file_type=$_FILES['image']['type'];
            $file_ext=strtolower(end(explode('.',$filename))); 
            $reg = move_uploaded_file($file_tmp,$upload_path.$image);
        }else
        {
            $image = $_POST['editImage']; 
        }
        
        $bannerData = array(
            'image'     => $image,
            'index_no'  => $_POST['index_no']
        );

            $SliderModel = new SliderModel();
            $SliderModel->updateBanner($bannerData,$editId);
            $bannerMsg = "Your Banner Updated successfully.";
            session()->set('bannerMsg',$bannerMsg);
            $EID = base64_encode($editId);
            return $this->response->redirect(base_url('UpdateBanner?ID='.$EID));
}

    public function ViewBanner()
    {
        $session = session();
        $session->remove('bannerMsg');
        $SliderModel    = new SliderModel();
        $data['bannerD'] = $SliderModel->getBannerList();
        return view('Admin/ViewBanner',$data);
    }
    

}