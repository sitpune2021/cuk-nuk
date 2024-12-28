<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\SliderModel;
use App\Models\CategoryModel;
use App\Models\ProductModel;

class Home extends BaseController
{
    protected $helpers = ["form","url"];
    
    public function __construct() {
        $this->session = \Config\Services::session();
        $this->session->start();
        $db = db_connect();
        //$this->LoginModel = new LoginModel($db);
        }
    
    
    public function index()
    {
        $session = session();
        $session->remove('enquiryMsg');
        $SliderModel     = new SliderModel();
        $data['sliderDIndex1'] = $SliderModel->getSliderList(1);
        $data['sliderDIndex2'] = $SliderModel->getSliderList2(2);
        $data['sliderDIndex3'] = $SliderModel->getSliderList2(3);
        $data['Banner1'] = $SliderModel->getBannerIndex(1);
        $data['Banner2'] = $SliderModel->getBannerIndex(2);
        $data['Banner3'] = $SliderModel->getBannerIndex(3);
        $data['Banner4'] = $SliderModel->getBannerIndex(4);
        $data['Banner5'] = $SliderModel->getBannerIndex(5);
        $ProductModel   = new ProductModel();
        $data['productD'] = $ProductModel->getSpecialProductList();
        $CategoryModel    = new CategoryModel();
        $data['categoryD']= $CategoryModel->getCategoryListHome();
        $data['catD']= $CategoryModel->getCategory();
        return view('index',$data);
    }
    
    public function AboutUs()
    {
        return view('AboutUs');
    }
    
     public function ContactUs()
    {
        return view('ContactUs');
    } 
    
    public function QualityPolicy()
    {
        return view('QualityPolicy');
    }

    public function TermsConditions()
    {
        return view('TermsConditions');
    }

    public function ViewCategories()
    {
        $Id  = base64_decode($_GET['ID']);
        $ProductModel   = new ProductModel();
        $CategoryModel  = new CategoryModel();
        $data['ProductD'] = $ProductModel->getCategoryProduct($Id);
        $data['CatName'] = $CategoryModel->getCategoryName($Id);
        return view('ViewCategories',$data);
    }
    
    public function Product()
    {   
        $CategoryModel   = new CategoryModel();
        $ProductModel   = new ProductModel();
        //$data['categoryD'] = $CategoryModel->getCategoryList();
        $data['ProductD'] = $ProductModel->getProductListNew();
        return view('Product',$data);
    }
    public function productDetails()
    {   
        $per = $_GET['per'];
        $ProductModel   = new ProductModel();
        $pcategory = $ProductModel->getProdDetailsByPer($per);
        $data['pDetails'] = $pcategory;
        return view('productDetails',$data);
    }
    
}
