<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    public function list()
    {
        $tododb = Todo::all();
        return view('index', ['todos' => $tododb]);
    }

    public function create(TodoRequest $request)
    {
        $contents = $request->all();
        Todo::create($contents);
        return redirect('/');
    }

    public function update(TodoRequest $request)
    {
        $contents = Todo::find($request->id);
        unset($contents['_token']);
        $contents->update();
        return redirect('/');
    }

    public function delete(TodoRequest $request)
    {
        $contents = Todo::find($request->id);
        return view('delete', ['contents' => $id]);
        Todo::find($request->id)->delete();
        return redirect('/');
    }
}
