<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use Glad\Glad;

class GladAuth extends Controller
{
    public function __construct()
    {
        Glad::setup(\Config::get('glad'));
    }

    public function login()
    {
         $request = new Request;

        // form validation
        $validator = Validator::make(['email' => 'ali.yildiz@example.com', 'password' => '1234123'], [
                'email'     => 'required|email',
                'password'  => 'required|min:6'
            ]);

         // run the validator
        if($validator->fails()) {
            return redirect('your/url')->withErrors($validator)->withInput();
        }

        Glad::login(['email' => 'ali.yildiz@example.com', 'password' => '1234123'])
            ->apply(function(Glad $glad){

                $glad->conditions(['activate' => 1, 'banned' => 0]);

                $glad->event('activate', function() {
                    exit('your account has not activated');
                });

                $glad->event('banned', function() {
                    exit('your account has been banned');
                });

            });


        if(Glad::status() === true) {

            // do something...

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function register()
    {
        $request = new Request;

        // form validation
        $validator = Validator::make($request->all(), [
                'firstname' => 'required|max:20',
                'lastname'  => 'required|max:25',
                'email'     => 'required|email|unique:users',
                'username'  => 'required|unique:users',
                'password'  => 'required|min:6'
            ]);

        // run the validator
        if($validator->fails()) {
            return redirect('your/url')->withErrors($validator)->withInput();
        }

        // user register
        Glad::register($request->all());

        // check the user register process
        if(Glad::status() === true) {

            // do something...
        
        }
    }

    public function change()
    {
        $request = new Request;

        // form validation
        $validator = Validator::make($request->all(), [
                'firstname' => 'required|max:20',
                'lastname'  => 'required|max:25',
                'password'  => 'required|min:6'
            ]);

        // run the validator
        if($validator->fails()) {
            return redirect('your/url')->withErrors($validator)->withInput();
        }

        // user register
        Glad::change($request->all());

        // check the user register process
        if(Glad::status() === true) {

            // do something...
        
        }
    }
}
