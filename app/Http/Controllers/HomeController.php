<?php

namespace App\Http\Controllers;

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

     protected $tasks;

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct(TaskRepository $tasks)
     {
       $this->tasks = $tasks;
     }

    public function getHome(Request $request)
    {
        return view('users.home', [
            'tasks' => $this->tasks->forUser($request->user()),
        ]);
    }
}
