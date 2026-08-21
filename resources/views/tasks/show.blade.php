@extends('layout')

@section('content')

<div class="container mt-5">

    <div class="card">

        <div class="card-header text-center">
            <h4 class="mb-0">Task Details</h4>
        </div>

        <div class="card-body">

            <p>
                <strong>ID:</strong>
                {{ $tasks->id }}
            </p>

            <p>
                <strong>Title:</strong>
                {{ $tasks->title }}
            </p>

            <p>
                <strong>Description:</strong>
                {{ $tasks->description }}
            </p>

            <p>
                <strong>Status:</strong>
                {{ $tasks->status }}
            </p>

            <p>
                <strong>Created At:</strong>
                {{ $tasks->created_at }}
            </p>

            <p class="mb-0">
                <strong>Updated At:</strong>
                {{ $tasks->updated_at }}
            </p>

        </div>

        <div class="card-footer">

            <a href="{{ route('tasks.index') }}"
               class="btn btn-primary">
                Back to Task List
            </a>

        </div>

    </div>

</div>

@endsection