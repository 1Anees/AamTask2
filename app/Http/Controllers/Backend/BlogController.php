<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Contracts\Service\Attribute\Required;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $blogs = blog::all();
        return view('backend.blog.show', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'Required|max:55',
            'description' => 'Required|max:255'
        ]);

        blog::create([
            'title' => $request->title,
            'description' => $request->description

        ]);

        return to_route('blogs.index')->with('success', 'Blog has been stored');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = blog::find($id);
        return view('backend.blog.blogpost', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogs = blog::findOrFail($id);
        return view('backend.blog.edit', compact('blogs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blogs = blog::find($id);
        $blogs->title = $request->title;
        $blogs->description = $request->description;
        $blogs->save();
        // blog::find($request->id)->update([
        //     'title' => $request->title,
        //     'description' => $request->description
        // ]);
        return to_route('blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = blog::find($id);
        $data->delete();
        return to_route('blogs.index');
    }
}
