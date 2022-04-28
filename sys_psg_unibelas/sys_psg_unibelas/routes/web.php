<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('/login');
});

Route::group(['middleware' => 'guest'], function () {
    Route::post('login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');
    Route::get('login',  'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
});

Route::group(['middleware' => 'auth'], function () {

    Route::post('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

    Route::group(['middleware' => 'admin.sistema'], function () {
        Route::prefix('admin-sistema')->name('admin.sistema.')->group(function () {
            Route::get('/', function () {
                return redirect('/admin-sistema/dashboard');
            });

            Route::get('/dashboard',   'App\Http\Controllers\Dashboard\AdminSistemaController@index')->name('dashboard');
            Route::get('/perfil', 'App\Http\Controllers\Dashboard\AdminSistemaController@getPerfilAdmin')->name('perfil');

            Route::get('/dashboardPainel',   'App\Http\Controllers\Dashboard\AdminSistemaController@indexDashboard')->name('dashboardPainel');
            Route::get('/propinas',    'App\Http\Controllers\Dashboard\AdminSistemaController@getPropinas')->name('propinas');
            Route::post('/pagamento/propinas',    'App\Http\Controllers\Config\ConfigPagamentoPropinaController@store')->name('pagamento.propinas.store');
            Route::post('/pagamento/documentos',    'App\Http\Controllers\Config\ConfigPagamentoController@store')->name('pagamento.documentos.store');
            Route::get('/pagamento/propinas', 'App\Http\Controllers\Dashboard\AdminSistemaController@getPagamentoPropinas')->name('pagamento.propinas');
            Route::get('/pagamento/documentos', 'App\Http\Controllers\Dashboard\AdminSistemaController@getPagamentoDocumentos')->name('pagamento.documentos');

            Route::get('/propinas/lista', 'App\Http\Controllers\Dashboard\AdminSistemaController@getListaPagamentosPropinas')->name('pagamento.verpropinas');
            Route::get('/pagamento/documentos', 'App\Http\Controllers\Dashboard\AdminSistemaController@getPagamentoDocumentos')->name('pagamento.documentos');
            Route::get('/documentos/lista', 'App\Http\Controllers\Dashboard\AdminSistemaController@getListaDocumentos')->name('pagamento.verdocumentos');




            // Route::resource('/enterprises', 'App\Http\Controllers\Enterprise\EnterpriseController')->only([
            //     'show',
            //     'store',
            //     'update',
            //     'destroy'
            // ]);

            // // rotas para os usuários de empresas
            // Route::resource('/users/enterprises', 'App\Http\Controllers\User\UserEnterpriseController')->only([
            //     'show',
            //     'store',
            //     'update',
            //     'destroy'
            // ])->name('store', 'store.user.enterprise');
        });
    });

    Route::group(['middleware' => 'aluno.sistema'], function () {
        Route::prefix('aluno-sistema')->name('aluno.sistema.')->group(function () {
            Route::get('/', function () {
                return redirect('/aluno-sistema/dashboard');
            });

            Route::get('/dashboard', 'App\Http\Controllers\Dashboard\AlunoSistemaController@index')->name('dashboard');
            Route::get('/pagamentos', 'App\Http\Controllers\Dashboard\AlunoSistemaController@getListPagamentos')->name('pagamentos');

            Route::get('/perfil', 'App\Http\Controllers\Dashboard\AlunoSistemaController@getPerfil')->name('perfil');
            Route::get('/pagamentos', 'App\Http\Controllers\Dashboard\AlunoSistemaController@getListPagamentos')->name('pagamentos');
            Route::get('/pagar/{id}', 'App\Http\Controllers\Dashboard\AlunoSistemaController@getFormPagamento')->name('formpagar');
            Route::get('/pagamentos/propinas', 'App\Http\Controllers\Dashboard\AlunoSistemaController@getFormPagamentoPropina')->name('formpagar.propinas');
            Route::post('/documentos/pagar', 'App\Http\Controllers\Pagamento\PagamentoDocumentoController@store')->name('docs.pagar');
            Route::post('/pagamentos/pagar', 'App\Http\Controllers\Pagamento\PagamentoPropinaController@store')->name('pagamentos.propinas.pagar');
        });
    });
});

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
