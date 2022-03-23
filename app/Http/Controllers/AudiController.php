<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AudiController extends Controller
{
    public function  index(){

     return view('audi.index',[
         'vetimg'=>['https://sejaleve.com/wp-content/uploads/2018/02/pequenas-alegrias-diarias.png','https://sejaleve.com/wp-content/uploads/2018/02/pequenas-alegrias-diarias.png']





     ]);

}
}
