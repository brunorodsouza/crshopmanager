<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index()
    {
        return view('login.login');
    }

    public function registrar(){
        return view('login.registrar');
    }

    public function esqueceusenha(){
        return view('login.esqueceusenha');
    }

    public function novasenha(){
        return view('login.novasenha');
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
