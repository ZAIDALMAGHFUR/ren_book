<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories', ['categories' => $categories]);
    }

    public function add()
    {
        return view('category-add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories|max:255',
        ]);
        $category = Category::create($request->all());
        return redirect('categories')->with('success', 'Category added successfully.');
    }

    public function edit($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('category-edit', ['category' => $category]);
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'name' => 'required|unique:categories|max:255',
        ]);
        $category = Category::where('slug', $slug)->first();
        $category->update($request->all());
        return redirect('categories')->with('success', 'Category updated successfully.');
    }

    public function delete($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('category-delete', ['category' => $category]);
    }

    public function destroy($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $category->delete();
        return redirect('categories')->with('success', 'Category deleted successfully.');
    }

    public function deletedcategory()
    {
        $categories = Category::onlyTrashed()->get();
        return view('category-deleted', ['categories' => $categories]);
    }

    public function restore($slug)
    {
        $category = Category::onlyTrashed()->where('slug', $slug)->first();
        $category->restore();
        return redirect('categories')->with('success', 'Category restored successfully.');
    }
}