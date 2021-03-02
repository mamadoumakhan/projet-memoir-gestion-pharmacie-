<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\CompteController;
use App\Http\Controllers\DepotController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\IndicationController;
use App\Http\Controllers\LigneDeFactureController;
use App\Http\Controllers\LotController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\TableauController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\VenteController;
use App\Http\Controllers\ArticleController;



use App\Models\Tableau;
use App\Models\Stock;
use App\Models\Fournisseur;
use App\Models\Admin;
use App\Models\Notice;
use App\Models\Indication;
use App\Models\Agent;
use App\Models\Client;
use App\Models\Produit;
use App\Models\Categorie;
use App\Models\Compte;
use App\Models\Utilisateur;
use App\Models\LigneDeFacture;
use App\Models\Indication_produit;
use App\Models\Article;



use App\Http\Controllers\TestsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});
// Route::get('/client', function () {
//     return view('client');
// });
// Route::get('/users', function () {
//     return view('users');
// });
// Route::get('/vente', function () {
//     return view('vente');
// });
// Route::get('/categorie', function () {
//     return view('categorie');
// });
// Route::get('/agent', function () {
//     return view('agent');
// });
Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
});
// Route::get('/fournisseur', function () {
//     return view('fournisseur');
// });
// Route::get('/admin', function () {
//     return view('admin');
// });
// Route::get('/produit', function () {
//     return view('produit');
// });
// Route::get('/tableau', function () {
//     return view('tableau/list');
// });
// Route::get('/stock', function () {
//     return view('stock/list');
// });


Route::get('/teste', function () {
    return view('teste');
});

// les routes pour categorie
//Route::get('categorie', [CategorieController::class, 'listeCategorie'])->name('afficher_categorie');
Route::post('categorie', [CategorieController::class, 'store'])->name('creer_categorie');
Route::post('categorie/{categorie}', [CategorieController::class, 'update'])->name('updatecategorie');
Route::get('categorie/edit/{id_categorie}', [CategorieController::class, 'edit'])->name('editcategorie');
Route::get('/categorie/delete/{id_categorie}', [CategorieController::class, 'delete'])->name('deletecategorie');
Route::get('/categorie', [CategorieController::class, 'getAll'])->name('getAllcategorie');

// les routes pour fournisseurs
Route::get('/fournisseur', [FournisseurController::class, 'listefournisseur'])->name('afficher_fournisseur');
Route::get('/fournisseur/edit/{id_fournisseur}', [FournisseurController::class, 'edit'])->name('editfournisseur');
Route::post('/fournisseur/{fournisseur}', [FournisseurController::class, 'update'])->name('updatefournisseur');
Route::get('/fournisseur/delete/{id_fournisseur}', [FournisseurController::class, 'delete'])->name('deletefournisseur');
Route::get('/fournisseur', [FournisseurController::class, 'getAll'])->name('getAllfournisseur');
Route::post('/fournisseur', [FournisseurController::class, 'store'])->name('creer_fournisseur');

// les routes pour stocks
Route::get('/stock', [StockController::class, 'listestock'])->name('afficher_stock');
Route::get('/stock/edit/{id_stock}', [StockController::class, 'edit'])->name('editstock');
Route::post('/stock/{stock}', [StockController::class, 'update'])->name('updatestock');
Route::get('/stock/delete/{id_stock}', [StockController::class, 'delete'])->name('deletestock');
Route::get('/stock', [StockController::class, 'getAll'])->name('getAllstock');
Route::post('/stock', [StockController::class, 'store'])->name('creer_stock');

// les routes pour tableau
Route::get('/notice', [NoticeController::class, 'listenotice'])->name('afficher_notice');
Route::get('/notice/edit/{id_notice}', [NoticeController::class, 'edit'])->name('editnotice');
Route::post('/notice/{notice}', [NoticeController::class, 'update'])->name('updatenotice');
Route::get('/notice/delete/{id_notice}', [NoticeController::class, 'delete'])->name('deletenotice');
Route::get('/notice', [NoticeController::class, 'getAll'])->name('getAllnotice');
Route::post('/notice', [NoticeController::class, 'store'])->name('creer_notice');

// les routes pour indication
Route::get('/indication', [IndicationController::class, 'listeindication'])->name('afficher_indication');
Route::get('/indication/edit/{id_indication}', [IndicationController::class, 'edit'])->name('editindication');
Route::post('/indication/{indication}', [IndicationController::class, 'update'])->name('updateindication');
Route::get('/indication/delete/{id_indication}', [IndicationController::class, 'delete'])->name('deleteindication');
Route::get('/indication', [IndicationController::class, 'getAll'])->name('getAllindication');
Route::post('/indication', [IndicationController::class, 'store'])->name('creer_indication');

//les routes pour les produits

Route::get('/produit/edit/{id_produit}', [ProduitController::class, 'edit'])->name('editproduit');
Route::post('/produit/{produit}', [ProduitController::class, 'update'])->name('updateproduit');
Route::get('/produit/delete/{id_produit}', [ProduitController::class, 'delete'])->name('deleteproduit');
Route::get('/produit', [ProduitController::class, 'getAll'])->name('getAllproduit');
//Route::get('/produit', [ProduitController::class, 'listeproduit'])->name('afficher_produit');
Route::post('produit', [ProduitController::class, 'store'])->name('creer_produit');
//persiste permet d'inserer dans la base  de donnee

//les routes pour tableau
Route::get('/tableau', [TableauController::class, 'listetableau'])->name('afficher_tableau');
Route::get('/tableau/edit/{id_tableau}', [TableauController::class, 'edit'])->name('edittableau');
Route::post('/tableau/{tableau}', [TableauController::class, 'update'])->name('updatetableau');
Route::get('/tableau/delete/{id_tableau}', [TableauController::class, 'delete'])->name('deletetableau');
Route::get('/tableau', [TableauController::class, 'getAll'])->name('getAlltableau');
Route::post('/tableau', [TableauController::class, 'store'])->name('creer_tableau');

//les routes pour agent
Route::post('/agent', [AgentController::class, 'store'])->name('agent.store');
Route::get('/agent', [AgentController::class, 'index'])->name('agent.index');
Route::get('/agent/{agent}/edit', [AgentController::class, 'edit'])->name('agent.edit');
Route::post('/agent/{agent}', [AgentController::class, 'update'])->name('agent.update');
Route::get('/agent/{agent}', [AgentController::class, 'destroy'])->name('agent.destroy');

// les routes pour client
Route::post('/client', [ClientController::class, 'store'])->name('client.store');
Route::get('/client', [ClientController::class, 'index'])->name('client.index');
Route::get('/client/{client}/edit', [ClientController::class, 'edit'])->name('client.edit');
Route::post('/client/{client}', [ClientController::class, 'update'])->name('client.update');
Route::get('/client/{client}', [ClientController::class, 'destroy'])->name('client.destroy');

//les routes pour l'administrateur
Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/{admin}/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::post('/admin/{admin}', [AdminController::class, 'update'])->name('admin.update');
Route::get('/admin/{admin}', [AdminController::class, 'destroy'])->name('admin.destroy');


//les routes pour les ventes

Route::get('/vente/edit/{id_vente}', [LigneDeFactureController::class, 'edit'])->name('editvente');
Route::post('/vente/{vente}', [LigneDeFactureController::class, 'update'])->name('updatevente');
Route::get('/vente/delete/{id_vente}', [LigneDeFactureController::class, 'delete'])->name('deletevente');
Route::get('/vente', [LigneDeFactureController::class, 'getAll'])->name('getAllvente');
//Route::get('/vente', [LigneDeFactureController::class, 'listevente'])->name('afficher_vente');
Route::post('vente', [LigneDeFactureController::class, 'store'])->name('creer_vente');
Route::get('/vente/inserer/{id_produit}', [LigneDeFactureController::class, 'inserer'])->name('inserervente');


// les routes pour les articles

Route::post('article', [ArticleController::class, 'store'])->name('creer_article');
Route::post('article/{article}', [ArticleController::class, 'update'])->name('updatearticle');
Route::get('article/edit/{id_article}', [ArticleController::class, 'edit'])->name('editarticle');
Route::get('/article/delete/{id_article}', [ArticleController::class, 'delete'])->name('deletearticle');
Route::get('/article', [ArticleController::class, 'getAll'])->name('getAllarticle');












//essaie  marche mais ne support pas la methode delete
//Route::get('/delete/{id}', 'CategorieController@delete')->name('categorie.delete');
//Route::resource('Categorie','CategorieController');
// fin essaie  marche mais ne support pas la methode delete

//Route::delete('{post}/delete','CategorieController@destroy')->name('testeur');
// nouvell teste de suppression
// Route::post('categorie/{id}/update', 'CategorieController@update');
// Route::delete('categorie/{id}/delete', 'CategorietController@delete');
// Route::get('/categorie/{id}/edit', 'CategorieController@edit');
//Route::resource('categorie', 'CategorieController', ['only' => ['index', 'edit', 'update', 'destroy','afficher']]);

//Route::get('produit', [ProduitController::class, 'create'])->name('form_produit');

// Route::post('agent', [AgentController::class, 'store'])->name('Ajoutagent');
//Route::post('admin', [AdminController::class, 'store'])->name('Ajoutadmin');
// Route::post('Produit', [ProduitController::class, 'store'])->name('produit');
//Route::post('fournisseur', [AgentController::class, 'store'])->name('Ajoutfournisseur');
//Route::post('tableau', [AgentController::class, 'store'])->name('Ajoutajent');
// Route::post('categorie', [CategorieController::class, 'store'])->name('Ajoutcategorie');
//Route::post('stock', [StockController::class, 'store'])->name('Ajoutstock');

// Route::get('tests', [TestsController::class, 'create']);
// Route::post('tests', [TestsController::class, 'store']);


// //les routes pour les fournisseurs
// Route::get('/fournisseur/add', [FournisseurController::class, 'add'])->name('addfournisseur');
// Route::get('/fournisseur/edit/{id}', [FournisseurController::class, 'edit'])->name('editfournisseur');
// Route::post('/fournisseur/update', [FournisseurController::class, 'update'])->name('updatefournisseur');
// Route::get('/fournisseur/delete/{id}', [FournisseurController::class, 'delete'])->name('deletefournisseur');
// Route::get('/fournisseur/getAll', [FournisseurController::class, 'getAll'])->name('getAllfournisseur');
// Route::post('/fournisseur/persiste', [FournisseurController::class, 'persiste'])->name('persistefournisseur');
// //persiste permet d'inserer dans la base de donnee

// Route::get('fournisseur', [FournisseurController::class, 'listefournisseur'])->name('afficher_fournisseur');
// Route::post('fournisseur', [FournisseurController::class, 'store'])->name('creer_fournisseur');
// Route::get('fournisseur/edit/{id_fournisseur}', [FournisseurController::class, 'edit'])->name('editfournisseur');
// Route::get('/fournisseur/delete/{id_fournisseur}', [FournisseurController::class, 'delete'])->name('deletefournisseur');

// route admin

// Route::get('admin', [adminController::class, 'listeadmin'])->name('afficher_admin');
// Route::post('admin', [adminController::class, 'store'])->name('creer_admin');

// //les routes pour tableau
// Route::get('/tableau/add', [TableauController::class, 'add'])->name('addtableau');
// Route::get('/tableau/edit/{id_tableau}', [TableauController::class, 'edit'])->name('edittableau');
// Route::post('/tableau/update', [TableauController::class, 'update'])->name('updatetableau');
// Route::get('/tableau/delete/{id_tableau}', [TableauController::class, 'delete'])->name('deletetableau');
// Route::get('/tableau', [TableauController::class, 'getAll'])->name('getAlltableau');
// Route::post('/tableau/persiste', [TableauController::class, 'persiste'])->name('persistetableau');
// //persiste permet d'inserer dans la base de donnee

// //les routes pour stock
// Route::get('/stock/add', [StockController::class, 'add'])->name('addstock');
// Route::get('/stock/edit/{id_stock}', [StockController::class, 'edit'])->name('editstock');
// Route::post('/stock/update', [StockController::class, 'update'])->name('updatestock');
// Route::get('/stock/delete/{id_stock}', [StockController::class, 'delete'])->name('deletestock');
// Route::get('/stock', [StockController::class, 'getAll'])->name('getAllstock');
// Route::post('/stock/persiste', [StockController::class, 'persiste'])->name('persistestock');
// //persiste permet d'inserer dans la base de donnee


// //les routes pour les fournisseurs

// Route::get('/fournisseur/add', [FournisseurController::class, 'add'])->name('addfournisseur');
// Route::post('/fournisseur/update', [FournisseurController::class, 'update'])->name('updatefournisseur');
// Route::get('/fournisseur/edit/{id_fournisseur}', [FournisseurController::class, 'edit'])->name('editfournisseur');
// Route::get('/fournisseur/delete/{id_fournisseur}', [FournisseurController::class, 'delete'])->name('deletefournisseur');
// Route::get('/fournisseur', [FournisseurController::class, 'getAll'])->name('getAllfournisseur');
// Route::post('/fournisseur/persiste', [FournisseurController::class, 'persiste'])->name('persistefournisseur');