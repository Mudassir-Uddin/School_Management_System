@section('dashboard-content')
    @extends('layout.dashboard')


    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Edit Post</h1>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Student Form</h5>

                            <form class="row g-3" method="POST" action="{{ route('Student_enrollments.update', $St_En->id) }}"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label>Student</label>
                                    <select name="student_id" class="form-select">
                                        @foreach ($students as $student)
                                            <option value="{{ $student->id }}"
                                                {{ old('student_id', $St_En->student_id) == $student->id ? 'selected' : '' }}>
                                                {{ $student->user->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('student_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label>Class</label>
                                    <select name="class_id" class="form-select">
                                        @foreach ($classes as $class)
                                            <option value="{{ $class->id }}"
                                                {{ old('class_id', $St_En->class_id) == $class->id ? 'selected' : '' }}>
                                                {{ $class->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('class_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label>Academic Year</label>
                                    <select name="academic_year_id" class="form-select">
                                        @foreach ($academic_years as $year)
                                            <option value="{{ $year->id }}"
                                                {{ old('academic_year_id', $St_En->academic_year_id) == $year->id ? 'selected' : '' }}>
                                                {{ $year->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('academic_year_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label>Admission Date</label>
                                    <input type="date" name="admission_date" class="form-control"
                                        value="{{ old('admission_date', $St_En->admission_date) }}">
                                        
                                    @error('admission_date')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label>Status</label>
                                    <select name="status" class="form-select">
                                        @foreach (['Active', 'Promoted', 'Transferred', 'Left'] as $status)
                                            <option value="{{ $status }}"
                                                {{ old('status', $St_En->status) == $status ? 'selected' : '' }}>
                                                {{ $status }}
                                            </option>
                                        @endforeach
                                    </select>
                                    
                                    @error('status')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label>Roll Number</label>
                                    <input type="number" name="roll_number" class="form-control"
                                        value="{{ old('roll_number', $St_En->roll_number) }}">
                                        
                                    @error('roll_number')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="{{ route('Student_enrollments.index') }}" class="btn btn-secondary">Cancel</a>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
