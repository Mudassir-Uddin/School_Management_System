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
                            <h5 class="card-title">Teacher Assignment Form</h5>

                            <!-- Vertical Form -->
                            <form class="row g-3" method="POST" action="/Teacher_assignmentsStore" enctype="multipart/form-data">
                                @csrf

                                <div class="col-12">
                                    <label for="inputCategory4" class="form-label">Teachers</label>
                                    <select name="teacher_id" class="form-control" id="inputCategory4">
                                        @foreach ($teachers as $teacher)
                                            <option value="{{ $teacher->id }}">{{ $teacher->user->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('teacher_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="mb-3">
                                    <label for="inputCategory4" class="form-label">Assign Teacher</label>
                                    <select name="class_subject_id[]" class="form-control select2" multiple>
                                        @foreach ($class_subjects as $cs)
                                            <option value="{{ $cs->id }}">
                                                {{ $cs->class->name }} - {{ $cs->subject->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('class_subject_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="inputCategory4" class="form-label">Year</label>
                                    <select name="academic_year_id" class="form-control" id="inputCategory4">
                                        @foreach ($academic_years as $academic_year)
                                            <option value="{{ $academic_year->id }}">{{ $academic_year->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('academic_year_id')
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
