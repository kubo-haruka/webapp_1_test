<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    public function list()
    {
        $tododb = todos::all();
        return view('index', ['list' => $list]);
    }

    public function create(TodoRequest $request)
    {
        $contents = $request->all();
        unset($contents['_token']);
        Todo::create($contents);
        return redirect('/');
    }

    public function update(TodoRequest $request)
    {
        $contents = $request->id();
        unset($contents['_token']);
        Todo::where('id', $request->id)->save($contents);
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
