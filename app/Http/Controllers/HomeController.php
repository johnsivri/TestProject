<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Task;
use App\Repositories\TaskRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct(TaskRepository $tasks)
     {
       $this->tasks = $tasks;
     }

    public function index(Request $request)
    {
        //$tasks = Task::where('id', $request->user()->id)->get();

        return view('users.home', [
            'tasks' => $this->tasks->forUser($request->user()),
        ]);
    }
}
