@section('dashboard-content')
    @extends('layout.dashboard')


    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Form Layouts</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item active">Layouts</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Student Enrollment Form</h5>

                            <!-- Vertical Form -->
                            <form class="row g-3" method="POST" action="/Student_enrollmentsStore"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="col-12">
                                    <label for="inputCategory4" class="form-label">student</label>
                                    <select name="student_id" class="form-control" id="inputCategory4">
                                        @foreach ($students as $student)
                                            <option value="{{ $student->id }}">{{ $student->user->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('student_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="inputCategory4" class="form-label">class</label>
                                    <select name="class_id" class="form-control" id="inputCategory4">
                                        @foreach ($classes as $class)
                                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('class_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="inputCategory4" class="form-label">academic_year</label>
                                    <select name="academic_year_id" class="form-control" id="inputCategory4">
                                        @foreach ($academic_years as $academic_year)
                                            <option value="{{ $academic_year->id }}">{{ $academic_year->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('academic_year_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="inputNanme4" class="form-label">admission date</label>
                                    <input type="date" name="admission_date" class="form-control" id="inputNanme4">
                                    @error('admission_date')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label>Status</label>
                                    <select name="status" class="form-select">
                                        <option value="">Choose Status</option>
                                        @foreach (['Active', 'Promoted', 'Transferred', 'Left'] as $status)
                                            <option value="{{ $status }}"
                                                {{ old('status') == $status ? 'selected' : '' }}>
                                                {{ $status }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('status')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="inputNanme4" class="form-label">roll_number</label>
                                    <input type="number" name="roll_number" class="form-control" id="inputNanme4">
                                    @error('roll_number')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form><!-- Vertical Form -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
