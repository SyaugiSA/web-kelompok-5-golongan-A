<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('welcome');
});

Route::group(
    ['namespace' => 'Frontend', 'middleware' => ['auth']],
    function () {
        Route::resource('home', 'HomeController');
        Route::resource('aktakelahiran_user', 'AktaLahirController');
        Route::get('/aktakelahiran/detail/{No_Reg}', 'AktaLahirController@detail');

        Route::get('/aktakelahiran_user/create', 'AktaLahirController@create');

        Route::post('/aktakelahiran_user/store', 'AktaLahirController@store');

        //route ini mengarahkan ke controller DashboardController dan mengembalikan ke "view"
        Route::resource('ktp_user', 'KartuTandaPendudukUserController');

        //route ini mengarah ke controller kartutandapendudukusercontroller serta membawa nik user
        Route::get('ktp_user/create/{user}', 'KartuTandaPendudukUserController@create');

        //
        Route::post('ktp_user/store', 'KartuTandaPendudukUserController@store');
    }
);



Route::group(
    ['namespace' => 'Backend', 'middleware' => 'user'],
    function () {
        //route ini mengarahkan ke controller DashboardController dan mengembalikan ke "view.dashboard"
        Route::resource('dashboard', 'DashboardController');

        // route ini mengarahkan ke controller AktaKelahiranController dan mengembalikan ke "view.kartutandapenduduk.index"
        Route::resource('aktakelahiran', 'AktaKelahiranController');

        // route ini mengarah ke method detail di AktaKelahiranController
        Route::get('/aktakelahiran/detail/{No_Reg}', 'AktaKelahiranController@detail');

        //route ini mengarahkan ke controller KartuTandaPendudukController dan mengembalikan ke "view.kartutandapenduduk.index"
        Route::resource('kartutandapenduduk', 'KartuTandaPendudukController');

        // route ini mengarah ke method detail di KartuTandaPenduduk
        Route::get('/kartutandapenduduk/detail/{No_Reg}', 'KartuTandaPendudukController@detail');

        // route ini mengarah ke method update di KartuTandaPenduduk
        Route::put('/kartutandapenduduk/update/{No_Reg}', 'KartuTandaPendudukController@update');

        //route ini mengarah ke method update di controller aktakelahiran controller serta membawa nomor registrasi
        Route::put('/aktakelahiran/update/{No_Reg}', 'AktaKelahiranController@update');

        Route::put('/aktakelahiran/update_nik/{No_Reg}', 'AktaKelahiranController@update_nik');
    }
);
Route::group(
    ['namespace' => 'superadmin', 'middleware' => ['auth']],
    function () {
        Route::resource('super', 'AdminController');
    }
);
// });

// Route::middleware(['auth', 'user'])->group(function () {
// });



// Route::resource('super', 'superadmin\SuperController');

// Route::middleware(['auth', 'user'])->group(
//     function () {
//         Route::get('/dashboard', [\App\Http\Controllers\Backend\DashboardController::class, 'index']);
//         Route::get('/home', [App\Http\Controllers\Frontend\HomeController::class, 'index']);
//         Route::get('/super', [App\Http\Controllers\superadmin\SuperController::class, 'index']);
//     }
// );

Auth::routes();
