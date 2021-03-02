<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Article;
use App\Models\Fournisseur;
class ArticleController extends Controller
{
    
    public function store(request $request)
    {
        Article::create($request->all());
      
    return redirect()->route("creer_article");
    
    }
    public function getAll()
    {
       
        $fournisseurs = Fournisseur::All();
        $produits = Produit::All();
        $articles = DB::table('articles')
        ->join('produits', 'articles.id_produit', '=', 'produits.id_produit')
        ->join('fournisseurs', 'articles.id_fournisseur', '=', 'fournisseurs.id_fournisseur')
        ->get();
     
       return view('/article')->with('articles', $articles)->with('produits', $produits)->with('fournisseurs', $fournisseurs);
    }
    public function edit($id)
    {
        $article = Article::find($id);
        return view('article',['articles'=>$article]);
    }
   
    public function update(request $request,Article $article)
    {
        $article->update( $request->All());
        return redirect()->route("creer_article");
    }
    public function delete($id)
    {
        $article = Article::find($id);
        if($article != null)
        {
            $article->delete();
        }
        // return $this->getAll();
        return redirect()->route('creer_article');
    }
}