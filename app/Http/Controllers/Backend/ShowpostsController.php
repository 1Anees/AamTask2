<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\blog;
use Illuminate\Http\Request;

class ShowpostsController extends Controller
{
    public function show($id)
    {
        $blog = blog::find($id);
        if (!$blog) {
            abort(404);
        }
        return view('backend.blog.show');
    }
}
