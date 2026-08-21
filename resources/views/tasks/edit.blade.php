@extends('layout')

@section('content')

<div class="container py-5">

    <h2 class="mb-4">Edit Task</h2>

    <div class="card shadow-sm">

        <div class="card-body">

            <form action="{{ route('tasks.update', $task->id) }}"
                  method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">

                    <label class="form-label">
                        Task Title
                    </label>

                    <input type="text"
                           name="title"
                           value="{{ old('title', $task->title) }}"
                           class="form-control"
                           required>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Description
                    </label>

                    <textarea name="description"
                              class="form-control"
                              rows="4">{{ old('description', $task->description) }}</textarea>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Priority
                    </label>

                    <select name="priority" class="form-select">

                        @foreach(['LOW', 'MEDIUM', 'HIGH', 'URGENT'] as $priority)

                            <option value="{{ $priority }}"
                                {{ $task->priority == $priority ? 'selected' : '' }}>
                                {{ $priority }}
                            </option>

                        @endforeach

                    </select>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Deadline
                    </label>

                    <input type="date"
                           name="deadline"
                           value="{{ $task->deadline }}"
                           class="form-control">

                </div>

                <button type="submit" class="btn btn-success">
                    Update Task
                </button>

                <a href="{{ route('tasks.index') }}"
                   class="btn btn-secondary">
                    Cancel
                </a>

            </form>

        </div>

    </div>

</div>

@endsection