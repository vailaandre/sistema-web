<?php

namespace App\Http\Controllers;

//utilizar o db
use Illuminate\Support\Facades\DB;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController{
    
    public function index(){
       
        $companies = Company::all();
        //dd($companies); 

        return view('companies.index')->with('companies', $companies);

    }

    public function show(Company $company){
        return view('companies.show')->with('company', $company);
    }

    public function create(){
         return view('companies.create');
    }

    public function store(Request $request){

        Company::create($request->all());

        return redirect('companies')->with('sucesso', 'Concedente cadastrada com sucesso!');
   }


}
