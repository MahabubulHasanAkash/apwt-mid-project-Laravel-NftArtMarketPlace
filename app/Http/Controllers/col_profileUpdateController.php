<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class col_profileUpdateController extends Controller
{
    public function index(Request $req){

        $email = $req->session()->get('useremail');
        $user = DB::table('user')
                ->where( 'email', $email)->first();
        return view('collector.updateProfile')->with('user', $user);
    }

    public function update(Request $req){

        $email = $req->session()->get('useremail');

        DB::table('user')
                ->where( 'email', $email)
                ->update([
                        'name' => $req->name,
                        'phone' => $req->phone,
                        'email' => $req->email,
                        'dob' => $req->dob,
                        'address' => $req->address
                        ]);
        
        $user = DB::table('user')
                ->where( 'email', $email)->first();
                
        //return view()->Route('collectorProfile')->with('user', $user);
        return view('Collector.dashboard')->with('user', $user)->with('msg', '.');
    }
    public function update_api(Request $req, $id){

        $email = $req->json('email');

        DB::table('user')
                ->where( 'id', $id)
                ->update([
                        'name' => $req->json('name'),
                        'phone' => $req->json('phone'),
                        'email' => $req->json('email'),
                        'dob' => $req->json('dob'),
                        'address' => $req->json('address')
                        ]);     
    }

}
