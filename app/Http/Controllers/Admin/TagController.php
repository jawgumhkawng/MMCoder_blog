<?php

namespace App\Http\Controllers\Admin;


use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Tag::orderBy('id', 'desc')->paginate(5);
        return view('admin.tag.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required'
            ],
            ['name.required' => 'Fill Programming Name! ']
        );

        Tag::create([
            'slug' => Str::slug($request->name),
            'name' => $request->name
        ]);


        return redirect()->back()->with('success', 'Programming Create Successfuly');
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
        $data = Tag::where('slug', $id)->first();
        return view('admin.tag.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updateSlug = Str::slug($request->name);
        Tag::where('slug', $id)->update([
            'slug' => $updateSlug,
            'name' => $request->name
        ]);

        return redirect(route('admin.tag.edit', $updateSlug))->with('success', 'Updated Successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tag::where('slug', $id)->delete();
        return redirect()->back()->with('success', 'deleted!');
    }
}
