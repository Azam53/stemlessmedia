<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Article;
use Auth;

class ArticleController extends Controller
{ 
    /**
     * function to show blog articles of the user who is currently logged in 
     */
    public function index()
    {
        $user_id = Auth::user()->id;
    	$articles = Article::where('user_id',$user_id)->get();
        return view('article.index',compact('articles'));
    }


    public function create()
    {
        return view('article.add');
    }

     public function edit($id)
    {
        $article = Article::find($id);
        return view('article.edit',compact('article'));
    }

    /**
     * function to manage articles.
     */
    public function show()
    {
        $user_id = Auth::user()->id;
    	$articles = Article::where('user_id',$user_id)->get();
        return view('article.manage',compact('articles'));
    }

    /**
     * function to store articles.
     */
    public function store(Request $request)
    {
    	$this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'tags' => 'required',
        ]);
        
    	$input = $request->all();
        $input['user_id'] = Auth::user()->id;

    	$tags = explode(",", $request->tags);

    	$article = Article::create($input);
    	$article->tag($tags);

        return back()->with('success','Article created successfully.');
    }

     /**
     * function to update articles.
     */
    public function update(Request $request,$id)
    {
        $article = Article::find($id);   
    	$article->title = $request->title;
        $article->content = $request->content;
        $article->save();
        
        return back()->with('success','Article updated successfully.');
    }

    /**
     * function to destroy articles.
     */

    public function destroy($id){
		 
                   $articles = Article::find($id);
                   $articles->delete();
                   
		return back()->with('success','Article deleted successfully.');
	}
}
