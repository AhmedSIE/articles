<?php

namespace Ahmedsie\Articles\Http\Controllers;

use Illuminate\Http\Request;
use Ahmedsie\Articles\Models\Categories;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index(){
        $categories=Categories::all();
        return view('articles::pages.backend.categories.categories',compact('categories'));
    }
    public function create(){
        return view('articles::pages.backend.categories.crud');
    }
    public function save(Request $request){
        $categories=new Categories();
        $categories->libelle=$request->libelle;
        $categories->description=$request->description;
        $categories->save();
        return redirect()->route('listecategories');
    }
}
