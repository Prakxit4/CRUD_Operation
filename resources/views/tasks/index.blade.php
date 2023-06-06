<h1>Products</h1>

<a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Create Product</a>
<div>
    <table class="table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>
                        @if ($task->image)
                            <img src="{{ asset('storage/images/' . $task->image) }}" alt="Task Image" class="img-fluid task-image">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('tasks.edit', $task) }}" class="btn btn-primary btn-sm">Edit</a>

                        <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<style>
    .task-image {
        max-width: 100px;
        height: auto;
    }
</style>
