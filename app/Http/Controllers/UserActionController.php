<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Task;
use Illuminate\Http\Request;

class UserActionController extends Controller
{
    public function postNewTask(Request $request)
    {
      $this->validate($request, [
        'TaskName'  => 'required|max:160',
        'TaskDesc'  => 'required|max:255',
        'DueDate'   => 'required',
      ]);

      $request->user()->tasks()->create([
        'task_name'   => $request->TaskName,
        'task_desc'   => $request->TaskDesc,
        'due_date'    => $request->DueDate,
      ]);

      return redirect('/home');
    }

    public function destroy(Request $request, Task $task)
    {
      $this->authorize('destroy', $task);

      $task->delete();

      return redirect('/home');
    }
}
