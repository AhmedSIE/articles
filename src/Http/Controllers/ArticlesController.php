<?php

namespace Ahmedsie\Articles\Http\Controllers;

use Illuminate\Http\Request;
use Ahmedsie\Articles\Models\Articles;
use Ahmedsie\Articles\Models\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ArticlesController extends Controller
{
    public function index(){
        $articles=Articles::all();
        return view('articles::pages.backend.articles.articles',compact('articles'));
    }
    public function index2(){
        $articles=Articles::all();
        return view('articles::pages.frontend.articles.index',compact('articles'));
    }
    public function create(){
       $articles=Articles::all();
       $categories=Categories::all();
        return view('articles::pages.backend.articles.crud',compact('articles','categories'));
   }

   public function store(Request $request)
   {
       // phpinfo();
       $this->validate($request,[
           'libelle'=>'required',
       ]);
       $article = new Articles();
       $article->libelle         = $request->libelle;
       $article->note            = $request->note;    
       if ($request->image != null) {
        
           //Recuperation de nom de fichier sans l'extension
           $nomimage=pathinfo($_FILES['image']['name']);
           $article->image=$nomimage['filename'];

           //Création des tableaux d'extension
           $imagesextension=array('.png', '.gif', '.jpg', '.jpeg','.svg');
           // dd($imagesextension);

           //recuperation de l'extension du fichier
           // strtoupper() => fonction PHP qui met tous les caractères de la chaîne en majuscules.
           // strtolower() =>fonction PHP qui passe tous les caractères d’une chaîne en minuscules.
           // ucwords() => fonction PHP qui met les premières lettres de chaque mot de la chaîne en majuscule.
           $extension =strtolower(strrchr($_FILES['image']['name'], '.'));
          
           //Début des vérifications de sécurité...
           if(in_array($extension, $imagesextension)) //Si l'extension est pas dans le tableau
           {
               $article->lienimage= $request->file('image')->store('fichiers/images');
               $article->save();
           } else {
               session()->flash('message', "Le format du fichier n'est pas pris en compte !");
               return redirect()->route('detailnotefront',$article->id);
           }  

       } 
       
       session()->flash('message', 'Votre mise à jour a bien été prise en compte !');   
       return redirect()->route('listearticles');  
   }
}
