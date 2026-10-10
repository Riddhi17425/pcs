<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blogs;

// Blogs sab countries me same hain (main India site par). Header/footer: route middleware 'country:<key>' -> $site
class BlogController extends Controller
{
    public function blog()
    {
        $meta_title = "Check Out Our Latest Blog | PCS Global ";
        $meta_description = "Get expert tips, updates, and best practices on accounting, bookkeeping, payroll, strata, and property management for businesses at the PCS Global Blog.";
        $blogs = Blogs::orderBy('id', 'desc')->where('status', 'Active')->get();

        return view('pages.shared.blogs', compact('meta_title', 'meta_description', 'blogs'));
    }

    public function BlogsDetail($url)
    {
        $blog = Blogs::where('url', $url)->firstOrFail();
        $blogs = Blogs::where('status', 'Active')
            ->where('id', '!=', $blog->id)
            ->latest()
            ->take(3)
            ->get();
        $meta_title = $blog->meta_title;
        $meta_description = $blog->meta_description;

        return view('pages.shared.blogs-details', compact('blog', 'blogs', 'meta_title', 'meta_description'));
    }
}