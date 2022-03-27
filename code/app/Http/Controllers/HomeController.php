<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Meals;
use App\Models\Cart;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   

        $name=Auth::user()->role->name;
        if($name=="admin"){
            return view('admin.dashboard.index');
        }

        else{
            $meals=Meals::paginate(10);
            $user=auth()->user();
            $count=Cart::where('phone',$user->phone)->count();

            return view('pages.home',compact('data','count'));
        }
        
    }

    public function showcart()
    {   
        $user=auth()->user();
        
        $carts=Cart::where('phone',$user->phone)->get();


        $count=Cart::where('phone',$user->phone)->count();

        return view('pages.showcart',compact('count','carts'));
    }
}
