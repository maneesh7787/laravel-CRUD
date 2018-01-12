<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\TestRequest;
use Illuminate\Http\Request;

class CreatesController extends Controller
{
   public function home(){
       $articles = Article::all();
     // print_r($article);
       return view('home',['articles'=>$articles]);
   }

   public function createBlog()
   {
       return view('create');
   }

   public function insertBlog(TestRequest $request){
       $articles = new Article();
       $articles->title = $request->title;

       $articles->description = $request->description;
       $articles->save();
       return redirect('/')->with('successMsg','Article submitted successfully');
   }

   public function updateBlog($id){
       $articles = Article::find($id);
       return view('update',['articles'=>$articles]);
   }

    public function editBlog(TestRequest $request){
       $data = array('title'=>$request->title,'description' => $request->description);
       $id= $request->id;
        Article::where('id',$id)->update($data);

        return redirect('/')->with('successMsg','Article Updated successfully');
    }


    public function readBlog($id)
    {
        $articles = Article::find($id);
        return view('read',['articles'=>$articles]);
    }

    public function deleteBlog($id){
        Article::where('id',$id)->delete();
        return redirect('/')->with('successMsg','Article Deleted successfully');
    }
}
