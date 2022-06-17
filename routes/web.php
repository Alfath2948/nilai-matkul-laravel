 <?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\model_Post;
use App\Http\Controllers\DetaildataController;
use App\Http\Controllers\EditdataController;

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

Route::get('/', [PostController::class, 'index']);

Route::get('/editdata/{data_slug}', 'App\Http\Controllers\EditdataController@index')->name('view_editdata');

Route::get('/editdata/{id}/{mhs_full_name}/{mhs_nrp}/{nilai_nilai}', 'App\Http\Controllers\EditdataController@editnilai')->name('view_editdata');

Route::get('/detaildata/{data_slug}', 'App\Http\Controllers\DetaildataController@index')->name('view_detaildata');

