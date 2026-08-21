@extends('layout')
@section('content')
<div>
    <div class="card">

        <div class="card-header">
            <h4 class="mb-0">Create Task</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('tasks.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title"
                           class="form-control"
                           id="title"
                           placeholder="Enter task title">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">
                        Description
                    </label>

                    <textarea class="form-control" name="description"
                              id="description"
                              rows="4"
                              placeholder="Enter task description"></textarea>
                </div>
                @include('partials.error')

                <button type="submit" class="btn btn-primary">
                    Create
                </button>


            </form>

        </div>

    </div>


@endsection