<?php
namespace App\Http\controllers;

use Illuminate\Routing\Controller as BaseController;

class PruebaController extends BaseController{
    public function index(){
       // return "Bienvenido";
       return view('index');
    }
}
