@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-10 col-sm-8 col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Create New Task</h3>
                </div>

                <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="{{ route('newTask') }}">
                      {{ csrf_field() }}

                      <div class="form-group{{ $errors->has('TaskName') ? ' has-error' : '' }}">
                          <label for="TaskName" class="col-md-4 control-label">Task Name</label>

                          <div class="col-md-6">
                              <input id="TaskName" type="text" class="form-control" name="TaskName" value="{{ old('TaskName') }}" required autofocus>

                              @if ($errors->has('TaskName'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('TaskName') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('TaskDesc') ? ' has-error' : '' }}">
                          <label for="TaskDesc" class="col-md-4 control-label">Task Description</label>

                          <div class="col-md-6">
                              <input id="TaskDesc" type="text" class="form-control" name="TaskDesc" value="{{ old('TaskDesc') }}" required autofocus>

                              @if ($errors->has('TaskDesc'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('TaskDesc') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('DueDate') ? ' has-error' : '' }}">
                          <label for="DueDate" class="col-md-4 control-label">Completion Date</label>

                          <div class="col-md-6">
                              <input id="DueDate" type="date" class="form-control" name="DueDate" value="{{ old('DueDate') }}" required>

                              @if ($errors->has('DueDate'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('DueDate') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
                              <button type="submit" class="btn btn-primary">
                                  <i class="fa fa-plus"></i> Add Task
                              </button>
                          </div>
                      </div>
                  </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Current Tasks -->
    @if (count($tasks) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Tasks
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Due Date</th>
                        <th></th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $task->task_name }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $task->task_desc }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $task->due_date }}</div>
                                </td>
                                <td>
                                   <form action="/home/tasks/{{ $task->id }}" method="POST">
                                     {{ csrf_field() }}
                                     {{ method_field('DELETE') }}

                                     <button>Delete Task</button>
                                   </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
</div>
@endsection
