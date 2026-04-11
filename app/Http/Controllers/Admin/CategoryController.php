<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryFormRequest;
use App\Http\Requests\UpdateCategoryFormRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $categories = Category::withCount('items')->get();
        return view('pages.admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('pages.admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryFormRequest $request): RedirectResponse
    {
        // dd($request->all());
        try {
            $data = $request->validated();
            Category::create($data);

            return redirect()->route('admin.categories.index')->with('success', 'Category created successfylly.');
        } catch (\Throwable $th) {
            report($th);
            return back()->with('error', 'Failed to create category.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category): View
    {
        return view('pages.admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryFormRequest $request, Category $category): RedirectResponse
    {
        try {
            $data = $request->validated();
            $category->update($data);

            return redirect()->route('admin.categories.index')->with('success', 'Category updated successfylly.');
        } catch (\Throwable $th) {
            report($th);
            return back()->with('error', 'Failed to update category.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
