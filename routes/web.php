<?php

use Illuminate\Support\Facades\Route;
use App\Models\Person;
use Spatie\Permission\Models\Role;

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

Route::get('/test', function () {

    $person = Person::find(6);
    $person->assignRole('admin');
    $person = Person::find(7);
    $person->assignRole('person');
    // $person = Person::find(8);
    // $person->assignRole('foreign');

    dd($person->toArray());
    // $role = Role::create(['name' => 'person']);
    // return $role;
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::group(['prefix' => 'Person'], function () {
    Route::post('/store', [App\Http\Controllers\PersonController::class, 'store'])->name('person.store');  //->middleware((['role:admin'])) 
    Route::delete('/delete/{person}', [App\Http\Controllers\PersonController::class, 'delete'])->name('person.delete');;
    //Route :: get('/edit/{person}', [App\Http\Controllers\PersonController  :: class, 'edit'])-> name('person.edit');;
    Route::put('/update/{person}', [App\Http\Controllers\PersonController::class, 'update'])->name('person.update');;
});
