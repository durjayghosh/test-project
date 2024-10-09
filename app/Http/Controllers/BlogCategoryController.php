<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = BlogCategory::latest()->get();
        return view('admin.blog_category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog_category.create');
    }


    public function store(Request $request)
    {
        // Validate form data
        $request->validate([
            'name' => 'required|unique:blog_categories,name|max:255',
            'slug' => 'required|unique:blog_categories,slug|max:255',
          //  'slug' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'status' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'seo_description' => 'nullable|string',
            'seo_tags' => 'nullable|string',
            'seo_keywords' => 'nullable|string',
        ]);

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $this->saveImage($request);
        }

        // Store blog category
        BlogCategory::create([
            'name' => $request->name,
            'slug' => Str::slug($request->slug) ?? Str::slug($request->name),
            'description' => $request->description,
            'status' => $request->status,
            'image' => $imagePath,
            'seo_description' => $request->seo_description,
            'seo_tags' => $request->seo_tags,
            'seo_keywords' => $request->seo_keywords,
        ]);

        // Redirect with success message
        return redirect()->route('admin.blog-category.index')->with('success', 'Blog Category created successfully!');
    }

    public function saveImage($request)
    {
        $image = $request->file('image');
        $imageName = rand().'.'.$image->getClientOriginalExtension();
        $directory = 'uploads/';
        $imagePath = $directory . $imageName;
        $image->move($directory, $imageName);
        return $imagePath;
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function show(BlogCategory $blogCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = BlogCategory::findOrFail($id);
        return view('admin.blog_category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate form data
        $request->validate([
            'name' => 'required|unique:blog_categories,name,' . $id . '|max:255',
            'slug' => 'required|unique:blog_categories,slug,' . $id . '|max:255',
           // 'slug' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'status' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'seo_description' => 'nullable|string',
            'seo_tags' => 'nullable|string',
            'seo_keywords' => 'nullable|string',
        ]);

        // Find the category
        $category = BlogCategory::findOrFail($id);

        // Update category details
        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->slug) ?? Str::slug($request->name),
            'description' => $request->description,
            'status' => $request->status,
            'seo_description' => $request->seo_description,
            'seo_tags' => $request->seo_tags,
            'seo_keywords' => $request->seo_keywords,
        ]);

        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            if ($category->image && file_exists(public_path($category->image))) {
                unlink(public_path($category->image)); // Delete the old image
            }
            $category->image = $this->saveImage($request); // Save the new image
            $category->save();
        }

        // Redirect with success message
        return redirect()->route('admin.blog-category.index')->with('success', 'Blog Category updated successfully!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogCategory = BlogCategory::find($id);
        if ($blogCategory->image) {
            // Delete the associated image if it exists
            if (file_exists(public_path($blogCategory->image))) {
                unlink(public_path($blogCategory->image));
            }
        }

        $blogCategory->delete();

        return redirect()->route('admin.blog-category.index')->with('success', 'Category deleted successfully!');
    }

}
