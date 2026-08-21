@extends('layout')

@section('content')

<div class="container mt-5">
      @include('partials.alerts')

    <div class="card">



        <div class="card-header d-flex justify-content-between align-items-center">

            <h4 class="mb-0">Task List</h4>

            <a href="{{ route('tasks.create') }}" class="btn btn-primary">
                Add Task
            </a>

        </div>

        <div class="card-body">

            <table class="table table-bordered mb-0 table-hover">

                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($tasks as $task)

                    <tr>
                        <th scope="row">{{ $task->id }}</th>

                        <td>{{ $task->title }}</td>

                        <td>{{ $task->description }}</td>

                        <td>{{ $task->status }}</td>

                        <td class="text-center">
                            <a href="{{ route('tasks.show', $task->id) }} "
                               class="btn btn-info btn-sm ms-2">
                                Show
                            </a>

                            <a href="{{ route('tasks.edit', $task->id) }} "
                               class="btn btn-warning btn-sm ms-2">
                                Edit
                        </td>
                    </tr>

                    @endforeach

                    @if($tasks->count() == 0)

                    <tr>
                        <td colspan="5" class="text-center">
                            No tasks found.
                        </td>
                    </tr>

                    @endif

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection