<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct(){

    }
    public function index(){
        $config =$this->config();
            
        $template ='backend.dashboard.home.index';
        return view ('backend.dashboard.layout',compact(
            'template',
            'config'
        ));
    }
    private function config(){
        return [
            'js'=>[
                'admin/assets/js/core/popper.min.js',
                'admin/assets/js/core/bootstrap.min.js',
                'admin/assets/js/plugins/perfect-scrollbar.min.js',
                'admin/assets/js/plugins/smooth-scrollbar.min.js',
                'admin/assets/js/plugins/dragula/dragula.min.js',
                'admin/assets/js/plugins/jkanban/jkanban.js',
                'admin/assets/js/plugins/chartjs.min.js'
            ]
            ];
    }
}