<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    public function list()
    {
        $id = Author::all();
        return view('index', ['list' => $list]);
    }

    public function create(AuthorRequest $index)
    {
        $content = $request->all();
        Author::create($form);
        return redirect('/');
    }
    public function update(AuthorRequest $request)
    {
        $content = $request->id();
        unset($form['id']);
        Author::where('id', $request->id)->save($form);
        return redirect('/');
    }
    public function delete(Request $request)
    {
        $content = Author::find($request->id);
        return view('delete', ['form' => $id]);
        Author::find($request->id)->delete();
        return redirect('/');
    }
}
