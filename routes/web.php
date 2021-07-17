<?php
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
Route::group(['middleware'=>'web'],function(){
// ************************************************************************************************
//=================================== Public  routes =========================================
     Route::get('/',[
        'uses'=>'LoginController@signin',
        'as'=>'signIn',
        ]);

    Route::post('/login', [
        'uses' => 'LoginController@login',
        'as' => 'login'
    ]);

    Route::get('/logout', [
        'uses' => 'LoginController@logout',
        'as' => 'logout'
    ]);

    Route::get('/Lock', [
        'uses' => 'LoginController@lock',
        'as' => 'LockUser'
    ]);

    Route::post('/unlock', [
        'uses' => 'LoginController@unlock',
        'as' => 'unlockuser'
    ]);

// ************************************************************************************************
//=================================== End Public  routes =======================================
// ************************************************************************************************
//===================================== Admin routes ===========================================

    Route::get('/admin/home',[
        'uses'=>'HomeController@adminHome',
         'as'=>'admin.home',
         'middleware'=>'roles',
         'roles'=>['Admin']
     ]);

    Route::get('/admin/user/add',[
        'uses'=>'UserController@index',
        'as'=>'admin.user.add',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::post('/admin/user/store',[
        'uses'=>'UserController@store',
        'as'=>'admin.user.store',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

// ************************************************************************************************

//// -------------------------- Employee Routes -------------------------------------------------
//    Route::get('/admin/employee/index',[
//        'uses'=>'EmployeeController@index',
//        'as'=>'admin.employee.index',
//        'middleware'=>'roles',
//        'roles'=>['Admin']
//    ]);
//
//    Route::post('/admin/employee/store',[
//        'uses'=>'EmployeeController@store',
//        'as'=>'admin.employee.store',
//        'middleware'=>'roles',
//        'roles'=>['Admin']
//    ]);
//
//    Route::get('/admin/employee/list',[
//        'uses'=>'EmployeeController@index_list',
//        'as'=>'admin.employee.list',
//        'middleware'=>'roles',
//        'roles'=>['Admin']
//    ]);
//
//    /* Section for update and delete */
//
//    Route::get('/admin/employee/destroy/{id}',[
//        'uses'=>'EmployeeController@destroy',
//        'as'=>'admin.employee.destroy',
//        'middleware'=>'roles',
//        'roles'=>['Admin']
//    ]);
//
//    Route::get('/admin/employee/edit/{id}',[
//        'uses'=>'EmployeeController@edit',
//        'as'=>'admin.employee.edit',
//        'middleware'=>'roles',
//        'roles'=>['Admin']
//    ]);
//
//    Route::post('/admin/employee/update/{id}',[
//        'uses'=>'EmployeeController@update',
//        'as'=>'admin.employee.update',
//        'middleware'=>'roles',
//        'roles'=>['Admin']
//    ]);
//
//    Route::post('/admin/employee/create/user/{id}',[
//        'uses'=>'EmployeeController@createUser',
//        'as'=>'admin.employee.create.user',
//        'middleware'=>'roles',
//        'roles'=>['Admin']
//    ]);

    /* End Section for update and delete */

// -------------------------- End Employee Routes -------------------------------------------------
// ************************************************************************************************
//===================================== End Admin routes ===========================================
// ************************************************************************************************
//===================================== Start Users routes ===========================================

    Route::get('/admin/user/add',[
        'uses'=>'EmployeeController@create',
        'as'=>'admin.employee.create',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

// ************************************************************************************************
//===================================== Start Users routes ===========================================



//---------------------------------User Routes-----------------------------------------
Route::get('/user/home',[
    'uses'=>'HomeController@userHome',
    'as'=>'user.home',
    'middleware'=>'roles',
    'roles'=>['User']
]);
// ----------------------------- End User Routes
});


