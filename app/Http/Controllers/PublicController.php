<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Mail\RequestRoleMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function home()

    {
       
    
        $articles = Article::where('is_accepted', false )->orderBy('created_at','desc')->take(6)->get();
        return view('home', compact('articles'));
        
        
    }

    public function workWithUs(){
        return view('roles.workWithUs');
    }

    Public function sendRoleRequest(Request $request){

        $user = Auth::user();
        $role = $request->input('role');
        $email = $request->input('email');
        $presentation = $request->input('presentation');
        $requestMail = new RequestRoleMail(compact('role','email','presentation'));
        Mail::to('admin@blog.it')->send($requestMail);

        switch($role){

            case 'admin':
                $user->is_admin = NULL;
                break;
            case 'revisor':
                $user->is_revisor = NULL;
                break;
            case 'writer':
                $user->is_writer = NULL;
                break;
        }

        $user->update();
        return redirect()->route('home')->with('success','Grazie per averci contattato');

        
    }

   

}

