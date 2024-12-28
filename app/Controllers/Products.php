<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ProductModel;

class Products extends BaseController
{
    protected $helpers = ["form","url"];
    
    public function __construct() {
        $this->session = \Config\Services::session();
        $this->session->start();
        $db = db_connect();
        //$this->LoginModel = new LoginModel($db);
        }
    
    
    public function HydraulicDetail()
    {
        return view('Products/HydraulicDetail');
    }
    
    public function FluidDetails()
    {
        return view('Products/FluidDetails');
    }
    
    public function FilterationDetail()
    {
        return view('Products/FilterationDetail');
    }
    
    public function SealsDetail()
    {
        return view('Products/SealsDetail');
    }
    
    public function HydraulicsProducts()
    {
        $ProductModel     = new ProductModel();
        $data['ProductD'] = $ProductModel->getHydraulicProductList();
        return view('ProductsHeader/HydraulicsProducts',$data);
    }
    
    public function PnumaticProducts()
    {
        $ProductModel     = new ProductModel();
        $data['ProductD'] = $ProductModel->getPneumaticProductList();
        return view('ProductsHeader/PnumaticProducts',$data);
    }
    
    public function SSFittings()
    {
        $ProductModel     = new ProductModel();
        $data['ProductD'] = $ProductModel->getSSfittingProductList();
        return view('ProductsHeader/SSFittings',$data);
    }
    
    public function MSFittings()
    {
        $ProductModel     = new ProductModel();
        $data['ProductD'] = $ProductModel->getMSfittingProductList();
        return view('ProductsHeader/MSFittings',$data);
    }
    
    public function OilAndGrease()
    {
        $ProductModel     = new ProductModel();
        $data['ProductD'] = $ProductModel->getOilGreaseProductList();
        return view('ProductsHeader/OilAndGrease',$data);
    }
    
    public function Lubrication()
    {
        $ProductModel     = new ProductModel();
        $data['ProductD'] = $ProductModel->getLubricationProductList();
        return view('ProductsHeader/Lubrication',$data);
    }
    
    public function ManualValve()
    {
        $ProductModel     = new ProductModel();
        $data['ProductD'] = $ProductModel->getManualValveProductList();
        return view('ProductsHeader/ManualValve',$data);
    }
    
    public function AutomationValve()
    {
        $ProductModel     = new ProductModel();
        $data['ProductD'] = $ProductModel->getAutomationValveProductList();
        return view('ProductsHeader/AutomationValve',$data);
    }
    
     public function PressureGuages()
    {
        $ProductModel     = new ProductModel();
        $data['ProductD'] = $ProductModel->getPressureGuagesProductList();
        return view('ProductsHeader/PressureGuages',$data);
    }

}
