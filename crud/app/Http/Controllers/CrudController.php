<?php

namespace App\Http\Controllers;

use App\Mail\RegistrationMail;
use App\Models\Crud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CrudController extends Controller
{
    //
    function index(){
        $data=Crud::all();
        return view("crud.employees",["data"=>$data]);
    }

    function add(){
        return view('crud.add');
    }

    function addpost(Request $request){
        $validated=$request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'occupation'=>'required'
        ]);

        Crud::create($validated);
        return redirect('/')->with('success','Employee added successfully!');
    }

    function delete($id){
        $data=Crud::find($id);
        if($data){
            Mail::to($data->email)->send(new RegistrationMail("Employee updated successfully!"));
            $data->delete();
            return redirect('/')->with('success','Employee deleted successfully!');
        
        }else{
            return redirect('/')->with('error','Employee not found!');
        }
    }

    function update($id){
        $data=Crud::find($id);
        return view('crud.update',compact('data'));
    }
    function updatepost(Request $request,$id){
        //data validation
        $validated=$request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'phone'=> 'required',
            'occupation'=> 'required'
        ]);
        
        $data=Crud::find($id);
        if($data){
            $data->update($validated);
            //sending mails
            Mail::to($request->email)->send(new RegistrationMail("Employee updated successfully!"));
            return redirect('/')->with('success','Employee updated successfully!');
        }
        else{
            return redirect('/')->with('error','Employee not found!');
        }

    }
}
