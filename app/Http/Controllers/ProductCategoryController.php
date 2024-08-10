<?php

namespace App\Http\Controllers;

use App\Models\CategoryProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductCategoryController extends Controller
{
    public function index()
    {
        return response()->json(CategoryProduct::all());
    }

    public function show($id)
    {
        $category = CategoryProduct::find($id);
        if ($category) {
            return response()->json($category);
        }
        return response()->json(['message' => 'Category not found'], 404);
    }
  
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = CategoryProduct::create([
            'name' => $request->name,
        ]);

        return response()->json($category, 201);
    }
    
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
          
            'name' => 'required|string|max:255',
           
        ]);
    
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $request->validate();

        $category = CategoryProduct::find($id);
        if ($category) {
            $category->update(['name' => $request->name]);
            return response()->json($category);
        }
        return response()->json(['message' => 'Category not found'], 404);
    }

    public function destroy($id)
    {
        $category = CategoryProduct::find($id);
        if ($category) {
            $category->delete();
            return response()->json(['message' => 'Category Product deleted successfully']);
        }
        return response()->json(['message' => 'Category Product not found'], 404);
    }
}
