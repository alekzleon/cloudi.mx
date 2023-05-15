<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AppsController extends Controller
{
    public function register(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'min:4', 'max:255'],
            'company' => ['required', 'min:4', 'max:255'],
            'phone' => ['required', 'min:10', 'max:13'],
            'email' => ['required'],
            'message' => ['required']
        ], [
            'name.min' => "Debe indicar un nombre correcto, por lo menos un nombre y apellido.",
            'company.min' => "Debe indicar un nombre de empresa comercial correcto.",
            'phone.min' => "El número de telefono debe tener por lo menos 10 digitos",
            'message.required' => "Para nosotros es muy importante un mensaje suyo"
        ]);

        if ($validator->fails()) {
            return redirect('/#contacto')
                        ->withErrors($validator)
                        ->withInput();
        }

        Register::create([
            'name' => $request->name,
            'name_company' => $request->company,
            'phone' => $request->phone,
            'service' => $request->service,
            'email' => $request->email,
            'message' => $request->message
        ]);

        
        return view('thankyou')->with(['name', $request->name]);
    }

    public function privacy(){
        return view('privacy');
    }
}
