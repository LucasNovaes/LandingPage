<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Redirect;
use DB;

class Controller extends BaseController
{
    function insert(Request $req){

    	$validator = Validator::make($req->all(), [
    		'nome' => 'required|max:255',
    		'email' => 'required|max:255',
    		'telefone' => 'required',
    		'data_de_nascimento' => 'required|date',
    		'cep' => 'required'
    	]);

    	if($validator->fails()){
    		return redirect('/')
    					->withErrors($validator)
    					->withInput();
    	}

    	else{

	    	$name=$req->input('nome');
	    	$email=$req->input('email');
	    	$phone=$req->input('telefone');
	    	$birth_date=$req->input('data_de_nascimento');
	    	$adress=$req->input('cep');
	    	$street=$req->input('street');
	    	$neighb=$req->input('neighb');
	    	$city=$req->input('city');
	    	$state=$req->input('state');

	    	$data = array("name"=>$name, "email"=>$email, "phone"=>$phone, "birth_date"=>$birth_date, "adress"=>$adress, "street"=>$street, "neighb"=>$neighb,"city"=>$city,"state"=>$state);

	    	DB::table('contacts')->insert($data);

	    	

	    	return redirect()->back();
    	}

    }
}
