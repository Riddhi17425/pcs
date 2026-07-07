<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blogs;

class BlogController extends Controller
{
    public function blog()
    {
        $meta_title="Check Out Our Latest Blog | PCS Global ";
        $meta_description="Get expert tips, updates, and best practices on accounting, bookkeeping, payroll, strata, and property management for businesses at the PCS Global Blog.";
        $blogs = Blogs::orderBy('id','desc')->where('status','Active')->get();
        return view('front.blogs',compact('meta_title','meta_description','blogs'));
    }
    public function BlogsDetail($url)
    {
        $blog = Blogs::where('url', $url)->firstOrFail();
        $blogs = Blogs::where('status','Active')
                  ->where('id', '!=', $blog->id)
                  ->latest()
                  ->take(3)
                  ->get();
        $meta_title = $blog->meta_title;
        $meta_description = $blog->meta_description;
        return view('front.blogs-details', compact('blog','blogs','meta_title','meta_description'));
    }
}
