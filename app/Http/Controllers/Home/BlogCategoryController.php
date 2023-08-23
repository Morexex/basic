<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;

class BlogCategoryController extends Controller
{
    public function AllBlogCategory(){
        $blogcategory = BlogCategory::latest()->get();
        return view('admin.blog_category.all_blog_category', compact('blogcategory'));
    }//End Method

    public function AddBlogCategory(){
        return view('admin.blog_category.add_blog_category');
    }//End Method

    public function StoreBlogCategory(Request $request){
        $request->validate([
            'blog_category' => 'required',
        ],[
            'blog_category.required' =>'Blog Category is Required',
        ]);

        BlogCategory::insert([
            'blog_category' => $request->blog_category,
        ]);

        $notification = array(
            'message' =>'Blog Category Inserted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.blog.category')->with($notification);
    }//End Method

    public function EditBlogCategory($id){
        $blogcategory = BlogCategory::findOrFail($id);
        return view('admin.blog_category.blog_category_edit', compact('blogcategory'));
    }//End Method

    public function UpdateBlogCategory(Request $request){
        $blogcategory_id = $request->id;
        BlogCategory::findOrFail($blogcategory_id)->update([
            'blog_category' => $request->blog_category,
        ]);

        $notification = array(
            'message' =>'Blog Category Updated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.blog.category')->with($notification);
    }//End Method


    public function DeleteBlogCategory($id){
        BlogCategory::findOrFail($id)->delete();
        $notification = array(
            'message' =>'Blog Category Deleted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.blog.category')->with($notification);
    }//End Method
}
