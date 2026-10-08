<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blogs;

// Blogs sab countries me same hain; sirf header/footer/links country ke hisab se (config/sites.php).
// Country route ke ->defaults('country', '...') se aati hai, default india.
class BlogController extends Controller
{
    public function blog($country = 'india')
    {
        $site = config("sites.$country");
        $meta_title = "Check Out Our Latest Blog | PCS Global ";
        $meta_description = "Get expert tips, updates, and best practices on accounting, bookkeeping, payroll, strata, and property management for businesses at the PCS Global Blog.";
        $blogs = Blogs::orderBy('id', 'desc')->where('status', 'Active')->get();

        return view('shared.blogs', compact('meta_title', 'meta_description', 'blogs', 'site'));
    }

    public function BlogsDetail($url, $country = 'india')
    {
        $site = config("sites.$country");
        $blog = Blogs::where('url', $url)->firstOrFail();
        $blogs = Blogs::where('status', 'Active')
            ->where('id', '!=', $blog->id)
            ->latest()
            ->take(3)
            ->get();
        $meta_title = $blog->meta_title;
        $meta_description = $blog->meta_description;

        return view('shared.blogs-details', compact('blog', 'blogs', 'meta_title', 'meta_description', 'site'));
    }
}