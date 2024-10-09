<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminBlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('admin.blogs.index', compact('blogs'));
    }

    // Show create form
    public function create()
    {
        $categories = BlogCategory::latest()->get();
        return view('admin.blogs.create', compact('categories'));
    }

    // Store blog
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:blogs,name',
            'category_id' => 'required',
            'image' => 'nullable|image',
        ]);

        $blog = new Blog();
        $blog->name = $request->name;
        $blog->slug = Str::slug($request->name);
        $blog->description = $request->description;
        $blog->main_content = $request->main_content;
        $blog->status = $request->status;
        $blog->category_id = $request->category_id;
        $blog->seo_description = $request->seo_description;
        $blog->seo_tags = $request->seo_tags;
        $blog->seo_keywords = $request->seo_keywords;
        $blog->user_id = auth()->id();

        if ($request->hasFile('image')) {
            $blog->image = $this->saveImage($request);
        }

        $blog->save();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully');
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


    // Show edit form
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $categories = BlogCategory::all();
        return view('admin.blogs.edit', compact('blog', 'categories'));
    }

    // Update blog
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([
            'name' => 'required|unique:blogs,name,' . $id,
            'category_id' => 'required',
            'image' => 'nullable|image',
        ]);

        $blog->name = $request->name;
        $blog->slug = Str::slug($request->name);
        $blog->description = $request->description;
        $blog->main_content = $request->main_content;
        $blog->status = $request->status;
        $blog->category_id = $request->category_id;
        $blog->seo_description = $request->seo_description;
        $blog->seo_tags = $request->seo_tags;
        $blog->seo_keywords = $request->seo_keywords;

        if ($request->hasFile('image')) {
            $blog->image = $this->saveImage($request);
        }

        $blog->save();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully');
    }

    // Delete blog
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        if ($blog->image) {
            // Delete the associated image if it exists
            if (file_exists(public_path($blog->image))) {
                unlink(public_path($blog->image));
            }
        }
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully');
    }
}
