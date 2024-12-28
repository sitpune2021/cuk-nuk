<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\CategoryModel;

class CategoryController extends BaseController
{
    protected $helpers = ["form","url"];
    
	public function __construct() {
        $this->session = \Config\Services::session();
        $this->session->start();
        $db = db_connect();
        }
		
    public function ViewCategory()
    {
        $session = session();
        $session->remove('categoryMsg');
        $CategoryModel    = new CategoryModel();
        $data['CategoryD'] = $CategoryModel->getCategoryList();
        return view('Admin/ViewCategory',$data);
    }
    
    public function AddCategory()
    {
        return view('Admin/AddCategory');
    }
    
    public function CategoryInserted()
    {
         $editId=(!empty($_POST['editId'])) ? $_POST['editId'] : "";
         $validation = \Config\Services::validation();
        
        if(empty($editId))
        {
            // Insert Category
            $validationRules = [
                'category_name' => 'required'
            ];
            
            $validationMessages = [
             'category_name' => [
                'required'    => 'Please Enter Category Name'
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
                        $upload_path="public/Admin/assets/images/Category_images/";
                        $image = $documents.".".$extension;
                        $file_size =$_FILES['image']['size'];
                        $file_tmp =$_FILES['image']['tmp_name'];
                        $file_type=$_FILES['image']['type'];
                        $file_ext=strtolower(end(explode('.',$filename))); 
                        $reg = move_uploaded_file($file_tmp,$upload_path.$image);
                    }
                    
                    
                    function clean($string) {
                    $string = str_replace('    ', '-', $string);
                    $string = str_replace('   ', '-', $string);
                    $string = str_replace('  ', '-', $string); 
                    $string = str_replace(' ', '-', $string);
                    $string = str_replace('.','-',$string);
                    $string = str_replace(',','',$string);
                    //$string = str_replace('-','',$string);
                    
                    return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
                    }
                    $seotitle = clean($_POST['category_name']);
                    $seotitle = trim($seotitle);
                    $titleseo = explode(' ',$seotitle);
                    
                    foreach ($titleseo as &$value) {
                    $seotit = $value."-";
                    }
                    $seotit = rtrim($seotit,'-');
                    $permalink = $seotit;
        
                    $CategoryData = array(
                    'category_name'       => $_POST['category_name'],
                    'image'               => $image,
                    'permalink'           => $permalink
                    );
                    
                    $CategoryModel = new CategoryModel();
                    $CategoryModel->insertCategory($CategoryData);
                    $categoryMsg = "Category Inserted successfully.";
                    session()->set('categoryMsg',$categoryMsg);
                    return $this->response->redirect(base_url('ViewCategory'));
                
            }else 
            {
                return view('Admin/AddCategory', ['validation' => $validation]);
            }
            
        }else
        {
            // Update Category
                $validationRules = [
                    'category_name' => 'required'
                ];
                
                $validationMessages = [
                'category_name' => [
                    'required'    => 'Please Enter Category Name'
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
                        $upload_path="public/Admin/assets/images/Category_images/";
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
                    
                    function clean($string) {
                    $string = str_replace('    ', '-', $string);
                    $string = str_replace('   ', '-', $string);
                    $string = str_replace('  ', '-', $string); 
                    $string = str_replace(' ', '-', $string);
                    $string = str_replace('.','-',$string);
                    $string = str_replace(',','',$string);
                    //$string = str_replace('-','',$string);
                    
                    return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
                    }
                    $seotitle = clean($_POST['category_name']);
                    $seotitle = trim($seotitle);
                    $titleseo = explode(' ',$seotitle);
                    
                    foreach ($titleseo as &$value) {
                    $seotit = $value."-";
                    }
                    $seotit = rtrim($seotit,'-');
                    $permalink = $seotit;
        
        
                    $CategoryData = array(
                    'category_name'       => $_POST['category_name'],
                    'image'               => $image,
                    'permalink'           => $permalink
                    );
            
                     $CategoryModel = new CategoryModel();
                     $CategoryModel->UpdateCategory($CategoryData,$editId);
                     $categoryMsg = "Category Updated successfully.";
                     session()->set('categoryMsg',$categoryMsg);
                     $EID = base64_encode($editId);
                     return $this->response->redirect(base_url('UpdateCategory?ID='.$EID));
            }else 
            {
                $EID = base64_encode($editId);
                session()->setFlashdata('validation', $validation);
                return redirect()->to(base_url('UpdateCategory?ID=' . $EID));
            }
        }
        
        return view('Admin/AddCategory');
    }
    
    public function UpdateCategory()
    {
        $CategoryModel = new CategoryModel();
        $id = base64_decode($_GET['ID']);
        $data['CategoryD'] = $CategoryModel->getCategoryById($id);
        return view('Admin/AddCategory',$data);
    }
    
    public function deleteCategory()
    {
        $ID     = $_GET['ID'];
        $table  = $_GET['table'];
        $CategoryModel = new CategoryModel();
        
        if($table=='tbl_category')
        {
            $CategoryModel->DeleteCategoryById($ID);
            return $this->response->redirect(site_url('ViewCategory')); 
        }
    }
     
        public function changeActiveStatus()
    {
          $CategoryModel = new CategoryModel();
          $id = $_POST['id'];
          $is_active = $_POST['is_active'];
          $CategoryModel->updateStatus($is_active,$id);
          return true;
    }
    
}