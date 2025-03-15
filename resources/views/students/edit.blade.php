<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Edit Student</h2>
        <div class="card shadow p-4">
            <form action="{{ route('students.update', $student->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- First Name -->
                <div class="mb-3">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control"
                        value="{{ $student->first_name }}" required>
                </div>

                <!-- Last Name -->
                <div class="mb-3">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="form-control"
                        value="{{ $student->last_name }}" required>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ $student->email }}">
                </div>

                <!-- Phone -->
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" value="{{ $student->phone }}">
                </div>

                <!-- Gender -->
                <div class="mb-3">
                    <label class="form-label">Gender</label>
                    <select name="gender" class="form-select" required>
                        <option value="male" {{ $student->gender == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ $student->gender == 'female' ? 'selected' : '' }}>Female</option>
                        <option value="other" {{ $student->gender == 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                </div>

                <!-- Date of Birth -->
                <div class="mb-3">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" name="dob" id="dob" class="form-control" value="{{ $student->dob }}">
                </div>

                <!-- Address -->
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" id="address" class="form-control" value="{{ $student->address }}">
                </div>

                <!-- Admission Number -->
                <div class="mb-3">
                    <label for="admission_number" class="form-label">Admission Number</label>
                    <input type="text" name="admission_number" id="admission_number" class="form-control"
                        value="{{ $student->admission_number }}">
                </div>

                <!-- Class Selection -->
                <div class="mb-3">
                    <label for="klass_id" class="form-label">Class</label>
                    <select name="klass_id" class="form-select" required>
                        @foreach($klasses as $klass)
                            <option value="{{ $klass->id }}" {{ $student->klass_id == $klass->id ? 'selected' : '' }}>
                                {{ $klass->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Submit Button -->
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update Student</button>
                    <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>