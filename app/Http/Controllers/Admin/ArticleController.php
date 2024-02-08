<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Article;
use App\Models\Programming;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{

    public function index()
    {
        $data = Article::orderBy('id', 'desc')->with('tag', 'programming')->paginate(5);
        return view('admin.article.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tag = Tag::all();
        $programming = Programming::all();
        return view('admin.article.create', compact('tag', 'programming'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate
        $request->validate(
            [
                'title' => 'required',
                'content' => 'required',
                'image' => 'required'

            ]
        );

        //image store
        $file = $request->file('image');
        $file_name = uniqid() . $file->getClientOriginalName();
        $file->move(public_path('/images'), $file_name);

        //article store
        $createdArticle = Article::create([
            'slug' => Str::slug($request->title),
            'title' => $request->title,
            'content' => $request->content,
            'image' => $file_name,
            'view_count' => 0,
            'like_count' => 0,

        ]);

        //tag & programming sync
        $article = Article::find($createdArticle->id);
        $article->tag()->sync($request->tag);
        $article->programming()->sync($request->programming);
        return redirect()->back()->with('success', 'Created');
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
    public function edit(string $id)
    {
        $data = Article::where('slug', $id)->first();
        return view('admin.programming.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updateSlug = Str::slug($request->name);
        Article::where('slug', $id)->update([
            'slug' => $updateSlug,
            'name' => $request->name
        ]);

        return redirect(route('admin.programming.edit', $updateSlug))->with('success', 'Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Article::find($id);
        //file delete
        File::delete(public_path('/images/' . $data->image));
        //tag & programming
        $data->tag()->sync([]);
        $data->programming()->sync([]);
        //article delete
        $data->delete();

        return redirect()->back()->with('success', 'deleted!');
    }
}
