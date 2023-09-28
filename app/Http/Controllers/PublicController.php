<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Mail\RequestRoleMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function home()

    {
       
    
        $articles = Article::where('is_accepted', true )->orderBy('created_at','desc')->take(6)->get();
        return view('home', compact('articles'));
        
        
    }

    public function workWithUs(){
        return view('roles.workWithUs');
    }

    public function sendRoleRequest(Request $request){
        if (Auth::check()) {

         $user = Auth::user();
        $role = $request->input('role');
        $email = $request->input('email');
        $presentation = $request->input('presentation');
        $requestMail = new RequestRoleMail(compact('role','email','presentation'));
        Mail::to('admin@blog.it')->send($requestMail);

        $currentuser=User::find($user->id);

        switch($role){

            case 'admin':
                $currentuser->is_admin = NULL;
                break;
            case 'revisor':
                $currentuser->is_revisor = NULL;
                break;
            case 'writer':
                $currentuser->is_writer = NULL;
                break;
        }

        $currentuser->save();
        return redirect()->route('home')->with('success','Grazie per averci contattato');




        }else{
            return redirect()->route('home')->with('success','Devi essere loggato!');
        }
        
        
    }

   public function searchArticle(Request $request)
   {
    $key=$request->input('key');
    $articles=Article::search($key)->where('is_accepted', true)->get();
    return view('articles.index', compact('articles','key'));

   }

   public function setLanguage($lang){
    
    session()->put('locale', $lang);
    return redirect()->back();
   }

}

