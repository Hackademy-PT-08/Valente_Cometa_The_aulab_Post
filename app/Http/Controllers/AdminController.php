<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){

        $adminRequests = User::where('is_admin', NULL)->get();
        $revisorRequests = User::where('is_revisor', NULL)->get();
        $writerRequests = User::where('is_writer', NULL)->get();
        $adminList = User::where('is_admin','!=', NULL)->get();
        $writerList = User::where('is_writer','!=', NULL)->get();
        $revisorList = User::where('is_revisor','!=', NULL)->get();
        $tags = Tag::all();
        $categories = Category::all();


        return view('admin.dashboard', compact('adminRequests','revisorRequests','writerRequests','adminList','revisorList','writerList','tags','categories'));



    }
    public function makeUserAdmin(User $user){
        $user->is_admin = true;
        $user->save();
        return redirect()->route('admin.dashboard');

    }

    public function removeUserAdmin(User $user){
        $user->is_admin = false;
        $user->save();
        return redirect()->route('admin.dashboard');

    }



    public function makeUserRevisor(User $user){
        $user->is_revisor = true;
        $user->save();
        return redirect()->route('admin.dashboard');

    }
    public function removeUserRevisor(User $user){
        $user->is_revisor= false;
        $user->save();
        return redirect()->route('admin.dashboard');

    }

    public function makeUserWriter(User $user){
        $user->is_writer = true;
        $user->save();
        return redirect()->route('admin.dashboard');

    }
    public function removeUserWriter(User $user){
        $user->is_writer = false;
        $user->save();
        return redirect()->route('admin.dashboard');

    }

    public function editTag(Request $request, Tag $tag){
        $tag->update(
            [
                'name'=> $request->input('name')
            ]
            );
            return redirect()->route('admin.dashboard');
    }


    
   public function deleteTag(Tag $tag){

        $tag->delete();
        return redirect()->route('admin.dashboard');


   }

   public function storeTag(Request $request)
   {
    Tag::create(['name'=> $request->input('name')]);

    return redirect ()->route('admin.dashboard');
   }

   public function editCategory(Request $request, Category $category)
   {
    $category->update(
        [
            'name'=>$request->input('name')
        ]
        );

    return redirect ()->route('admin.dashboard');
   }

   public function deleteCategory(Category $category)
   {
    $category->delete();

    return redirect ()->route('admin.dashboard');
   }

   public function storeCategory(Request $request)

   {
    Category::create (['name'=> $request->input('name')]);
    return redirect ()->route('admin.dashboard');
   }


    
    
}