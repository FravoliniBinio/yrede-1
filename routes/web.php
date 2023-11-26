<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $posts = Post::all();

    return view('inicial', compact('posts'));
});


Route::get('/teste', function () {
    return "TESTADO!!!";
});

Route::get('/lista-usuarios', function () {
    $usuarios = User::all();

    return view('listaUsuarios', compact('usuarios'));

})->name('lista-usuarios');


Route::view('/cadastra-usuario','cadastraUsuarios');

Route::post('/salva-usuario',
 function(Request $request){

    $request->validate([
        'usuario' => 'required',
        'nome' => 'required',
        'bio' => 'required',
        'email' => 'required|email|unique:users,email',
        'senha' => 'required',
        ]);

    $usuario = new User();
    $usuario->usuario =$request->input('usuario');
    $usuario->nome =$request->input('nome');
    $usuario->bio =$request->input('bio');
    $usuario->email =$request->input('email');
    $usuario->senha =$request->input('senha');
    $usuario->save();

    return redirect()->intended('/');

})->name('salva-usuario');

Route::view('/login', 'login')->name('login');

Route::post('/logar', function (Request $request) {
            $credentials = $request->validate([
            'email' => ['required', 'email'],
            'senha' => ['required'],
        ]);
        
        // dd($credentials);

        if (Auth::attempt(['email' => $credentials['email'],
         'password' =>$credentials['senha']])) {
            
            $request->session()->regenerate();

            return redirect()->intended('/');
            

            
        }
        return redirect('/login')->with('mensagem_erro', 'Usuário ou senha inválidos');
});

Route::middleware(['auth'])->group(function () {
Route::view('/cria-post', 'criaPost');

Route::post('/salva-post', function (Request $request) {
    $post = new Post();

    $post->user_id= Auth::id();
    $post->mensagem = $request->mensagem;

    $post->save();

    return redirect ('/');
    
    

});



});