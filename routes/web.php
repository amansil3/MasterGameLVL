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

Route::get('/template', function () {
    return view('index');
});
Route::get('/', function () {
    return view('index2');
});

Route::get('admin/socios', ['uses' => 'MostrarSocios@index']);
Route::get('admin/empleados', ['uses' => 'MostrarEmpleados@index']);
Route::get('admin/facturacion', ['uses' => 'Facturacion@index']);
Route::get('admin/stock', ['uses' => 'Stock@index']);
Route::get('admin/proveedores', ['uses' => 'Proveedores@index']);
Route::get('admin/estadisticas', ['uses' => 'Estadisticas@index']);

Route::get('admin/empleados/loquesea', ['uses' => 'MostrarEmpleados@Form']);
Route::post('admin/empleados/alta', ['uses' => 'MostrarEmpleados@EmployeeForm']);
