<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Auth\Access\Response;

class TaskController extends Controller
{
    /**
     * @param Request
     * @return Response
     */
    public function index(Request $request)
    {
        return view('tasks.index');
    }

    /**
     * @param Request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|255,'
        ]);
    }
}
