<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\MealsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\HomeController;
use App\Models\Cart;
use App\Models\Meals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

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
    return view('pages.home',['meals'=>Meals::all(),]);
})->name('home');
Route::get('/admin/index', function () {
    return view('admin.dashboard.index');
});

Route::resource('/admin/user', UserController::class);
Route::resource('/admin/categories', CategoriesController::class);
Route::resource('/admin/meals', MealsController::class);
Route::resource('/admin/products', ProductsController::class);
Route::resource('/admin/orders', OrdersController::class);

Route::get('/pages/singlePage', function(Request $request) {
    $meals= Meals::find($request->id);
    $categoryID=$meals->category_id;
    $related=Meals::where('category_id',$categoryID)->get();

    return view('pages.singlePage',['meals' => $meals, 'related'=>$related]);
    })->name('single-meal');

Route::get('/pages/shop',function() {
    $meals=Meals::all();
    return view('pages.shop',['meals'=>$meals]);
})->name('shop');

Route::post('/addToCart/{id}',function(Request $request,$id){
   if(Auth::id()){
    $user=auth()->user();

    $cart=new Cart();
    $meal=Meals::find($id);


    $cart->name=$user->name;
    $cart->phone=$user->phone;
    $cart->address=$user->address;
    $cart->product_title=$meal->name;
    $cart->price=$meal->price;
    $cart->quantity=$request->quantity;
    $cart->save();
    
    return redirect()->back()->with('message','Product added successfully');
   }

   else
   {
       return redirect('login');
   }
})->name('addToCart');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

Route::get('/showcart', [HomeController::class, 'showcart']);

Route::get('/checkout',function() {
   
    return redirect()->back()->with('done','Order recieved!');
})->name('checkout');