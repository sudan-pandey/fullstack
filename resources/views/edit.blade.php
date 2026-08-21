<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Task</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <div class="card">

        <div class="card-header text-center">
            <h4 class="mb-0">Edit Task</h4>
        </div>

        <div class="card-body">

            <form>

                <!-- Title -->
                <div class="mb-3">
                    <label for="title" class="form-label">
                        Title
                    </label>

                    <input type="text"
                           class="form-control"
                           id="title"
                           value="Learn Laravel">
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label for="description" class="form-label">
                        Description
                    </label>

                    <textarea class="form-control"
                              id="description"
                              rows="4">Learn Laravel basics</textarea>
                </div>

                <!-- Status -->
                <div class="mb-3">
                    <label for="status" class="form-label">
                        Status
                    </label>

                    <select class="form-select" id="status">
                        <option value="pending" selected>Pending</option>
                        <option value="in_progress">In Progress</option>
                        <option value="completed">Completed</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">
                    Update
                </button>

                <a href="{{ route('tasks.index') }}" class="btn btn-secondary ms-2">
                    Cancel
                </a>

            </form>

        </div>

    </div>

</div>

</body>

</html>