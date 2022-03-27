<?php
namespace App\Http\Controllers;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::all();

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        Categories::create([
            "name"  => $request->name,
            
        ]);
        return redirect()->route('categories.index');
    }

    public function show(Categories $categories)
    {
        
    }

    public function edit($id)
    {
        $categoriesEdit = Categories::find($id);
        return view('admin.categories.edit', compact('categoriesEdit'));
    }

    public function update(Request $request, $id)
    {
        $categoriesEdit = Categories::find($id);
        $categoriesEdit->name = $request->name;
        $categoriesEdit->update();
        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        $categoriesDestroy = Categories::find($id);
        $categoriesDestroy->destroy($id);
        return redirect()->route('categories.index');
    }
}
