<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function filterStudents() {
            let input = document.getElementById("search").value.toLowerCase();
            let tableRows = document.getElementsByTagName("tr");

            for (let i = 1; i < tableRows.length; i++) {
                let name = tableRows[i].getElementsByTagName("td")[1]?.innerText.toLowerCase() || "";
                tableRows[i].style.display = name.includes(input) ? "" : "none";
            }
        }
    </script>
</head>

<body>
    <div class="container mt-4">
        <h2 class="text-center">Student List</h2>

        <div class="mb-3">
            <input type="text" id="search" class="form-control" onkeyup="filterStudents()" placeholder="Search by name">
        </div>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Class</th>
                    <th>Admission Number</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop through students and display them -->
                @foreach($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                        <td>{{ $student->email ?? 'N/A' }}</td>
                        <td>{{ $student->phone ?? 'N/A' }}</td>
                        <td>{{ ucfirst($student->gender) }}</td>
                        <td>{{ $student->klass->name ?? 'N/A' }}</td>
                        <td>{{ $student->admission_number ?? 'N/A' }}</td>
                        <td>
                            <a href="{{ route('students.show', $student->id) }}" class="btn btn-primary btn-sm">View</a>
                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>