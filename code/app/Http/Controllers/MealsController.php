<?php

namespace App\Http\Controllers;

use App\Models\Meals;
use Illuminate\Http\Request;

class MealsController extends Controller
{
    public function index()
    {
        $meals = Meals::all();
        return view('admin.meals.index', compact('meals'));
    }

    public function create()
    {
        return view('admin.meals.create');
    }

    public function store(Request $request)
    {   
       
        if ($request->hasFile('image')) {
            $file = $request->image;
            $new_file = time() . $file->getClientOriginalName();
            $file->move('uploads', $new_file);
        
            Meals::create([
                "name"  => $request->name,
                "description"  => $request->description,
                "price" => $request->price,
                "sale_price"=>$request->sale_price,
                "in_stock"=>$request->in_stock,
                "fats" => $request->fats,
                "proteins" => $request->proteins,
                "carbohydrates" => $request->carbohydrates,
                "status"=>$request->status,
                "image" => 'uploads/' . $new_file,
                "category_id" => $request->category_id,
            ]);
        }
        
       
        return redirect()->route('meals.index');
    
    }

    public function show()
    {
       
    }

    public function edit($id)
    {
        $mealsEdit = Meals::find($id);
        return view('admin.meals.edit', compact('mealsEdit'));
    }

    public function update(Request $request, $id)
    {   

        if ($request->hasFile('image')) {
            $file = $request->image;
            $new_file = time() . $file->getClientOriginalName();
            $file->move('uploads', $new_file);   
        }


        $mealsEdit = Meals::find($id);
        $mealsEdit->name = $request->name;
        $mealsEdit->description = $request->description;
        $mealsEdit->price = $request->price;
        $mealsEdit->sale_price = $request->sale_price;
        $mealsEdit->in_stock = $request->in_stock;
        $mealsEdit->fats = $request->fats;
        $mealsEdit->proteins = $request->proteins;
        $mealsEdit->carbohydrates = $request->carbohydrates;
        $mealsEdit->status=$request->status;
        $mealsEdit->image ='uploads/' . $new_file;
        $mealsEdit->category_id = $request->category_id;
        $mealsEdit->update();
        return redirect()->route('meals.index');
    }

    public function destroy($id)
    {
        $mealsDestroy = Meals::find($id);
        $mealsDestroy->destroy($id);
        return redirect()->route('meals.index');
    }
}
