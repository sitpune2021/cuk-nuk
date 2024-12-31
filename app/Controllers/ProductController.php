<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ProductModel;
use App\Models\CategoryModel;

class ProductController extends BaseController
{
    protected $helpers = ["form","url"];
    
	public function __construct() {
        $this->session = \Config\Services::session();
        $this->session->start();
        $db = db_connect();
        }
		
    public function ViewProducts()
    {
        $session = session();
        $session->remove('productMsg');
        $CategoryModel = new CategoryModel();
        $data['categoryList'] = $CategoryModel->getCategoryList();
        $ProductModel    = new ProductModel();
        $data['ProductD'] = $ProductModel->getProductList();
        return view('Admin/ViewProducts',$data);
    }
    
    public function AddProducts()
    {
        $CategoryModel = new CategoryModel();
        $data['categoryList'] = $CategoryModel->getCategoryList();
        return view('Admin/AddProducts',$data);
    }
    
    public function ProductInserted()
    {
         $editId=(!empty($_POST['editId'])) ? $_POST['editId'] : "";
         $validation = \Config\Services::validation();
        
        if(empty($editId))
        {
            // Insert Product
            $validationRules = [
                'product_type' => 'required',
                'product_name' => 'required|max_length[20]'
            ];
            $validationMessages = [
                'product_type' => [
                'required'    => 'Please Choose Product Type'
             ],
             'product_name' => [
                'required'    => 'Please Enter Product Name',
				'max_length'  => 'Product name cannot exceed 20 characters.',
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
                        $upload_path="public/Admin/assets/images/Product_images/";
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
                    $seotitle = clean($_POST['product_name']);
                    $seotitle = trim($seotitle);
                    $titleseo = explode(' ',$seotitle);
                    
                    foreach ($titleseo as &$value) {
                    $seotit = $value."-";
                    }
                    $seotit = rtrim($seotit,'-');
                    $permalink = $seotit;
        
                    $ProductData = array(
                    'product_type'       => $_POST['product_type'],
                    'product_name'       => $_POST['product_name'],
                    // 'alt_tag'            => $_POST['alt_tag'],
                    'description'        => $_POST['description'],
                    'image'              => $image,
                    'permalink'          => $permalink
                    );
                    //print_r($ProductData);die;
                    $ProductModel = new ProductModel();
                    $ProductModel->insertProduct($ProductData);
                    $productMsg = "Product Inserted successfully.";
                    session()->set('productMsg',$productMsg);
                     return $this->response->redirect(base_url('ViewProducts'));
                
            }else 
            {
                $CategoryModel = new CategoryModel();
                $data['categoryList'] = $CategoryModel->getCategoryList();
                $data['validation'] = $validation;
                return view('Admin/AddProducts', $data);
            }
            
        }else
        {
            // Update Product

            $validationRules = [
                'product_type' => 'required',
                'product_name' => 'required|max_length[20]'
            ];
            $validationMessages = [
                'product_type' => [
                'required'    => 'Please Choose Product Type'
             ],
             'product_name' => [
                'required'    => 'Please Enter Product Name',
				'max_length'  => 'Product name cannot exceed 20 characters.',
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
                        $upload_path="public/Admin/assets/images/Product_images/";
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
                    
                    return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
                    }
                    $seotitle = clean($_POST['product_name']);
                    $seotitle = trim($seotitle);
                    $titleseo = explode(' ',$seotitle);
                    
                    foreach ($titleseo as &$value) {
                    $seotit = $value."-";
                    }
                    $seotit = rtrim($seotit,'-');
                    $permalink = $seotit;
        
                    $ProductData = array(
                    'product_type'       => $_POST['product_type'],
                    'product_name'       => $_POST['product_name'],
                    // 'alt_tag'            => $_POST['alt_tag'],
                    'description'        => $_POST['description'],
                    'image'              => $image,
                    'permalink'          => $permalink
                    );
            
                     $ProductModel = new ProductModel();
                     $ProductModel->updateProduct($ProductData,$editId);
                     $productMsg = "Product Updated successfully.";
                     session()->set('productMsg',$productMsg);
                     $EID = base64_encode($editId);
                     return $this->response->redirect(base_url('UpdateProduct?ID='.$EID));
            }else 
            {
                $EID = base64_encode($editId);
                session()->setFlashdata('validation', $validation);
                return redirect()->to(base_url('UpdateProduct?ID=' . $EID));
            }
        }
        
        return view('Admin/AddSlider');
    }
    
    public function UpdateProduct()
    {
        $CategoryModel = new CategoryModel();
        $data['categoryList'] = $CategoryModel->getCategoryList();
        $ProductModel = new ProductModel();
        $id = base64_decode($_GET['ID']);
        $data['ProductD'] = $ProductModel->getProductById($id);
        return view('Admin/AddProducts',$data);
    }
    
    public function deleteProduct()
    {
        $ID     = $_GET['ID'];
        $table  = $_GET['table'];
        $ProductModel = new ProductModel();
        
        if($table=='tbl_product')
        {
            $ProductModel->DeleteProductById($ID);
            
            $imageFileName = $ProductModel->getImageFileNameById($ID);

            if (!empty($imageFileName)) {
                $imagePath = FCPATH . 'public/Admin/assets/images/Product_images/' . $imageFileName;
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            return $this->response->redirect(site_url('ViewProducts')); 
        }
    }
     
    public function getCategoryProduct()
	{
		$ProductModel   = new ProductModel();
		$cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : [];
        $categories = "'" . implode("','", $cat_id) . "'";
		
		$data['ProductD'] = $ProductModel->getCatewiseProduct($categories);
		
        $html ='';
        $html .='<div class="grid-products grid-view-items">
                            <div class="row col-row product-options row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2 justify-content-center mt-2">';
							
			foreach ($data['ProductD'] as $row) {
				$html .= '
				<div class="item col-item">
					<div class="product-box">
						<div class="product-image">';
						if (!empty($row['image'])) {
							$html .= '<a href="' . base_url() . 'productDetails?per=' . $row['permalink'] . '" class="product-img rounded-0">
										<img class="rounded-0 blur-up lazyload img-height" src="' . base_url() . 'public/Admin/assets/images/Product_images/' . $row['image'] . '" alt="Product" title="Product" />
									  </a>';
						}
				$html .= '  </div>
							<div class="product-details text-center">
								<div class="product-name">
									<a href="' . base_url() . 'productDetails?per=' . $row['permalink'] . '">' . $row['product_name'] . '</a>
								</div>
							</div>
						</div>
					</div>';
			}
			$html .= '</div></div>';

			echo $html;
	}
    
}