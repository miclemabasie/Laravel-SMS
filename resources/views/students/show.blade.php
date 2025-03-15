<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Student Details</h2>
        <div class="card shadow p-4">
            <h4 class="mb-3">{{ $student->first_name }} {{ $student->last_name }}</h4>
            <ul class="list-group">
                <li class="list-group-item"><strong>Email:</strong> {{ $student->email ?? 'N/A' }}</li>
                <li class="list-group-item"><strong>Phone:</strong> {{ $student->phone ?? 'N/A' }}</li>
                <li class="list-group-item"><strong>Gender:</strong> {{ ucfirst($student->gender) }}</li>
                <li class="list-group-item"><strong>Date of Birth:</strong> {{ $student->dob ?? 'N/A' }}</li>
                <li class="list-group-item"><strong>Address:</strong> {{ $student->address ?? 'N/A' }}</li>
                <li class="list-group-item"><strong>Admission Number:</strong> {{ $student->admission_number ?? 'N/A' }}
                </li>
                <li class="list-group-item"><strong>Class:</strong> {{ $student->klass->name ?? 'N/A' }}</li>
                <li class="list-group-item"><strong>Created At:</strong> {{ $student->created_at->format('d M Y') }}
                </li>
            </ul>
            <div class="mt-3">
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>