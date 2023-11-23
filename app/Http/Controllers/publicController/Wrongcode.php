<?php

namespace App\Http\Controllers\publicController;

use App\Http\Controllers\Controller;
use App\Models\WcContact;
use App\Rules\ReCaptcha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Wrongcode extends Controller
{
    public function index(){
        $data=[
            "title" => "WrongCode | Digital Solutions For All Inteligents & Creative People",
            "keywords" => "WrongCode, Wrong Code, WrongCode,wrong code,WRONGCODE, WRONG CODE",
            "description" => "WrongCode provides a dynamic blend of strategy consulting and systems integration services to help companies shape and build their businesses in the economy"
            ];
        return view('wrongcode.index')->with($data);
    }


    public function about(){
        $data=[
            "title" => "WrongCode | About Us | Digital Solutions For All Inteligents & Creative People",
            "keywords" => "WrongCode, Wrong Code, WrongCode,wrong code,WRONGCODE, WRONG CODE",
            "description" => "At WrongCode, our mission is to empower businesses by leveraging the latest technologies and industry best practices. We strive to deliver innovative software solutions that optimize efficiency, increase productivity, and drive business growth. We are committed to building long-term partnerships with our customers and helping them stay ahead in today's competitive digital landscape."
            ];
        return view('wrongcode.about')->with($data);
    }



    public function contact(){
        $data=[
            "title" => "WrongCode | Contact | Contact Us For Any Query",
            "keywords" => "WrongCode, Wrong Code, WrongCode,wrong code,WRONGCODE, WRONG CODE",
            "description" => "WrongCode provides a dynamic blend of strategy consulting and systems integration services to help companies shape and build their businesses in the economy"
            ];
        return view('wrongcode.contact')->with($data);
    }

    public function service(){
        $data=[
            "title" => "WrongCode | Service | We Provide Best S ",
            "keywords" => "WrongCode, Wrong Code, WrongCode,wrong code,WRONGCODE, WRONG CODE",
            "description" => "WrongCode provides a dynamic blend of strategy consulting and systems integration services to help companies shape and build their businesses in the economy"
            ];
        return view('wrongcode.service')->with($data);
    }
    public function team(){
        $data=[
            "title" => "WrongCode | Team | Our Team Members ",
            "keywords" => "WrongCode, Wrong Code, WrongCode,wrong code,WRONGCODE, WRONG CODE",
            "description" => "WrongCode provides a dynamic blend of strategy consulting and systems integration services to help companies shape and build their businesses in the economy"
            ];
        return view('wrongcode.team')->with($data);
    }
    public function testimonial(){
        $data=[
            "title" => "WrongCode | Testimonial | Our Testimonial ",
            "keywords" => "WrongCode, Wrong Code, WrongCode,wrong code,WRONGCODE, WRONG CODE",
            "description" => "WrongCode provides a dynamic blend of strategy consulting and systems integration services to help companies shape and build their businesses in the economy"
            ];
        return view('wrongcode.testimonial')->with($data);
    }


    public function project(){
        $data=[
            "title" => "WrongCode | Project | Our Project ",
            "keywords" => "WrongCode, Wrong Code, WrongCode,wrong code,WRONGCODE, WRONG CODE",
            "description" => "WrongCode provides a dynamic blend of strategy consulting and systems integration services to help companies shape and build their businesses in the economy"
            ];
        return view('wrongcode.project')->with($data);
    }


    public function contuct_data(Request $r){
        $validator = Validator::make($r->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        WcContact::create([
            "name"=>$r->name,
            "email"=>$r->email,
            "subject"=>$r->subject,
            "message"=>$r->message
        ]);

        return redirect()->route('root');
    }
}
