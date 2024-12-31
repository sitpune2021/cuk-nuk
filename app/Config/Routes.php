<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'Home::index');
$routes->match(['get','post'],'/AboutUs'  	          , 'Home::AboutUs');
$routes->match(['get','post'],'/ContactUs'  	      , 'Home::ContactUs');
$routes->match(['get','post'],'/QualityPolicy'  	  , 'Home::QualityPolicy');
$routes->match(['get','post'],'/Product'  	          , 'Home::Product');
$routes->match(['get','post'],'/productDetails'  	  , 'Home::productDetails');
$routes->match(['get','post'],'/TermsConditions'  	  , 'Home::TermsConditions');
$routes->match(['get','post'],'/ViewCategories'  	  , 'Home::ViewCategories');

$routes->match(['get','post'],'/HydraulicDetail'  	  , 'Products::HydraulicDetail');
$routes->match(['get','post'],'/FluidDetails'  	      , 'Products::FluidDetails');
$routes->match(['get','post'],'/FilterationDetail'    , 'Products::FilterationDetail');
$routes->match(['get','post'],'/SealsDetail'  	      , 'Products::SealsDetail');

$routes->match(['get','post'],'/HydraulicsProducts'   , 'Products::HydraulicsProducts');
$routes->match(['get','post'],'/PnumaticProducts'     , 'Products::PnumaticProducts');
$routes->match(['get','post'],'/SSFittings'           , 'Products::SSFittings');
$routes->match(['get','post'],'/MSFittings'           , 'Products::MSFittings');
$routes->match(['get','post'],'/OilAndGrease'         , 'Products::OilAndGrease');
$routes->match(['get','post'],'/Lubrication'          , 'Products::Lubrication');
$routes->match(['get','post'],'/ManualValve'          , 'Products::ManualValve');
$routes->match(['get','post'],'/AutomationValve'      , 'Products::AutomationValve');
$routes->match(['get','post'],'/PressureGuages'       , 'Products::PressureGuages');

$routes->match(['get','post'],'/Login'                , 'AdminController::Login');
$routes->match(['get','post'],'/signIn'               , 'AdminController::signIn');
$routes->match(['get','post'],'/AdminDashboard'       , 'AdminController::AdminDashboard');
$routes->match(['get','post'],'/Logout'               , 'AdminController::Logout');

$routes->match(['get','post'],'/AddSlider'            , 'SliderController::AddSlider');
$routes->match(['get','post'],'/ViewSlider'           , 'SliderController::ViewSlider');
$routes->match(['get','post'],'/SliderInserted'       , 'SliderController::SliderInserted');
$routes->match(['get','post'],'/UpdateSlider'         , 'SliderController::UpdateSlider');
$routes->match(['get','post'],'/deleteSlider'         , 'SliderController::deleteSlider');

$routes->match(['get','post'],'/AddProducts'          , 'ProductController::AddProducts');
$routes->match(['get','post'],'/ViewProducts'         , 'ProductController::ViewProducts');
$routes->match(['get','post'],'/ProductInserted'      , 'ProductController::ProductInserted');
$routes->match(['get','post'],'/UpdateProduct'        , 'ProductController::UpdateProduct');
$routes->match(['get','post'],'/deleteProduct'        , 'ProductController::deleteProduct');
$routes->match(['get','post'],'/ProductDetails'       , 'ProductController::ProductDetails');
$routes->match(['get','post'],'/getCategoryProduct'   , 'ProductController::getCategoryProduct');

$routes->match(['get','post'],'/ViewContactDetails'   , 'ContactController::ViewContact');
$routes->match(['get','post'],'/ContactProcess'       , 'ContactController::ContactProcess');
$routes->match(['get','post'],'/UpdateContact'        , 'ContactController::UpdateContact');
$routes->match(['get','post'],'/ContactUs'            , 'ContactController::ContactUs');

$routes->match(['get','post'],'/AddCategory'          , 'CategoryController::AddCategory');
$routes->match(['get','post'],'/ViewCategory'         , 'CategoryController::ViewCategory');
$routes->match(['get','post'],'/CategoryInserted'     , 'CategoryController::CategoryInserted');
$routes->match(['get','post'],'/UpdateCategory'       , 'CategoryController::UpdateCategory');
$routes->match(['get','post'],'/deleteCategory'       , 'CategoryController::deleteCategory');
$routes->match(['get','post'],'/changeActiveStatus'   , 'CategoryController::changeActiveStatus');

$routes->match(['get','post'],'/UpdateBanner'         , 'SliderController::UpdateBanner');
$routes->match(['get','post'],'/UpdateBannerPro'      , 'SliderController::UpdateBannerPro');
$routes->match(['get','post'],'/ViewBanner'           , 'SliderController::ViewBanner');