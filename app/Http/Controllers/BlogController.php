<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\InformationCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Log user actions.
     *
     * @param string $action
     * @param array $details
     */
    protected function logAction($action, $details = [])
{
    if (auth()->check()) {
        DB::table('logs')->insert([
            'user_id' => auth()->id(),
            'action' => $action,
            'details' => json_encode(array_merge([
                'email' => auth()->user()->email ?? 'guest', // Default to 'guest' if email is null
                'ip' => request()->ip(),
                'timestamp' => now(),
            ], $details)),
        ]);
    } else {
        DB::table('logs')->insert([
            'user_id' => null, // Set user_id to null when not authenticated
            'action' => $action,
            'details' => json_encode(array_merge([
                'email' => 'guest', // Default to 'guest' if email is null
                'ip' => request()->ip(),
                'timestamp' => now(),
            ], $details)),
        ]);
    }
}


    /**
     * Display a listing of blogs.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::paginate(4);

        // Log action: View all blogs
        $this->logAction('viewed all blogs');

        return view('blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new blog.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = InformationCategory::all(); // Fetch all categories from the database

        // Log action: Open create blog form
        $this->logAction('opened create blog form');

        return view('blog.create', compact('categories'));
    }

    /**
     * Store a newly created blog in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category' => 'required|exists:information_categories,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category,
            'image' => $imagePath,
            'author' => Auth::user()->name,
        ]);

        // Log action: Create blog post
        $this->logAction('created blog post', ['title' => $request->title, 'author' => Auth::user()->name]);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }

    /**
     * Remove the specified blog from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        // Log action: Delete blog post
        $this->logAction('deleted blog post', ['blog_id' => $blog->id, 'title' => $blog->title]);

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }

    /**
     * Show the form for editing the specified blog.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = InformationCategory::all(); // Fetch all categories from the database
        $blog = Blog::findOrFail($id);

        // Log action: Edit blog post
        $this->logAction('opened edit blog form', ['blog_id' => $blog->id, 'title' => $blog->title]);

        return view('blog.edit', compact('blog','categories'));
    }

    /**
     * Update the specified blog in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $blog = Blog::findOrFail($id);
        $blog->update($request->only(['title', 'content']));

        // Log action: Update blog post
        $this->logAction('updated blog post', ['blog_id' => $blog->id, 'title' => $request->title]);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully!');
    }

    /**
     * Display the specified blog.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = InformationCategory::all();
        $blog = Blog::find($id);

        if (!$blog) {
            abort(404, 'Blog not found.');
        }

        // Log action: View blog post
        $this->logAction('viewed blog post', ['blog_id' => $blog->id, 'title' => $blog->title]);

        $relatedBlogs = Blog::where('category_id', $blog->category_id)
                            ->where('id', '!=', $id)
                            ->latest()
                            ->take(3)
                            ->get();

        $categoryBlogs = Blog::where('category_id', $blog->category_id)
                             ->where('id', '!=', $id)
                             ->latest()
                             ->get();

        $noInformationMessage = 'No information found for this category';

        return view('blog.show', compact('blog', 'relatedBlogs', 'categoryBlogs', 'categories', 'noInformationMessage'));
    }

    /**
     * Display blogs by category.
     *
     * @param  string  $category
     * @return \Illuminate\Http\Response
     */
    public function category($category)
    {
        $blogs = Blog::where('category', $category)->get();

        // Log action: View blogs by category
        $this->logAction('viewed blogs by category', ['category' => $category]);

        return view('blogs.index', compact('blogs'));
    }

    /**
     * Store a comment for a blog.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeComment(Request $request, Blog $blog)
    {
        $request->validate([
            'author' => 'required|string',
            'email' => 'required|email',
            'content' => 'required|string',
        ]);

        $blog->comments()->create([
            'author' => $request->author,
            'email' => $request->email,
            'content' => $request->content,
        ]);

        // Log action: Post comment on blog
        $this->logAction('posted comment', ['blog_id' => $blog->id, 'title' => $blog->title]);

        return redirect()->back()->with('success', 'Your comment has been posted!');
    }

    /**
     * Display blogs by category page.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function categoryPage($id)
    {
        $categories = InformationCategory::findOrFail($id);
        $blogs = Blog::where('category_id', $id)->get();

        if ($blogs->isEmpty()) {
            abort(404, 'No blogs found for this category.');
        }

        // Log action: View category page
        $this->logAction('viewed category page', ['category' => $categories->name, 'category_id' => $id]);

        return view('category.show', compact('categories', 'blogs'));
    }
}
