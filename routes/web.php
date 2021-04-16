<?php

use Illuminate\Support\Facades\Route;
 use App\Models\Post;
 use App\Models\Events;
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
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UserController;

Route::get('/home', [WelcomeController::class,'index']);

Route::get('/', [WelcomeController::class,'welcome']);

/*Route::get('/', function () {
	

//	DB::select('DROP TABLE posts');
	/*$titre="super titre 3";
	$body="Super description 3";
	DB::insert('INSERT INTO posts(title, body) VALUES(?, ?)', [$titre,$body
]);*/

	//DB::table('posts')->whereId(5)->delete();

//	DB::select('DELETE FROM posts WHERE id=3');

//	$post = App\Models\Post::whereId(2)->first();
	
	/*Events::create([
		'nom'=>'NAK',
		'body'=>'La Nuit Atipique de Koidougou',
		'lieu'=>'Koudougou',
		'prix'=>24000,
		'date_debut'=> new dateTime('+10 days')
	]);
*/
	//Events::whereId(24)->delete();

	//dump(Post::all());
	//dump(Events::all());
	/*
	$post = new Events;
	$post->nom= 'le SIAO';
	$post->lieu= 'Ouagadougou';
	$post->prix= 17500;
	$post->body = "le Salon International de l'Artisanat de Ouagadougou" ;
	$post->save();
	*/
	//$post = Post::create(['title' =>'Collection', 'body' => 'les collection sont facile']);

	/*DB::table('posts')->insert([[
		'title'=>'film', 
		'body'=>'un film documentaire'
	],
	[
		'title'=>'Afrique', 
		'body'=>'un afrique documentaire'
	]
]);*/

/*	dump(DB::select('SELECT * FROM posts'));

	dump(DB::table('posts')->WHERE('id',5)->get('id','body'));


	$post=DB::select('SELECT * FROM posts')[2];
	dd($post->title);


	$name = 'Kientega';
	$prename = 'Francis' ;
   return view('welcome', compact('name', 'prename'));

   /*->with('name', $name, 'prename', $prename)->with('prename', $prename);*/


//});

Route::get('/about', function () {
    return view('about');
});


Route::get('/pages', function(){
	Events::whereId(28)->update(['prix' =>0]);
	$events = Events::all();
	return view('pages.event', compact('events'));
});

Route::get('/formulaire', [UserController::class,'getFormulaire']);

Route::post('/Confirm', [UserController::class,'postInfos'])->name('nom');


Route::post('/inscription', function(){
	
	dd($_get['login']);
	//return "Votre login est: ".request('login'). "et le mot de pase est" .request('pass'). "\nmerci";
});


//les facqde multiple

/*Route::get('{n}', function ($n) {
	return response('je suis a la page ' . $n. '!', 200);
})->where('n', '[1-3]');

*/

//Route::get('form', 'FormController@Ipostnfos');

//Route::post('form', 'FormController@getInfos');
