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
                            <h5 class="card-title">Teacher Form</h5>

                            <!-- Vertical Form -->
                            <form class="row g-3" method="POST" action="/TeachersStore" enctype="multipart/form-data">
                                @csrf

                                <div class="col-12">
                                    <label for="inputCategory4" class="form-label">student</label>
                                    <select name="user_id" class="form-control" id="inputCategory4">
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('user_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="mb-3">
                                    <label>Qualification</label>
                                    <select name="qualification" class="form-select">
                                        <option value="">Choose Qualification</option>
                                        @foreach (['Matric', 'Intermediate', 'BA', 'BSc', 'MA', 'MSc', 'MPhil', 'PhD', 'B.Ed', 'M.Ed'] as $qualification)
                                            <option value="{{ $qualification }}"
                                                {{ old('qualification') == $qualification ? 'selected' : '' }}>
                                                {{ $qualification }}
                                            </option>
                                        @endforeach
                                    </select>

                                    @error('qualification')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="col-12">
                                    <label for="inputNanme4" class="form-label">experience_years</label>
                                    <input type="text" name="experience_years" class="form-control" id="inputNanme4">
                                    @error('experience_years')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="col-12">
                                    <label for="inputNanme4" class="form-label">joining_date</label>
                                    <input type="date" name="joining_date" class="form-control" id="inputNanme4">
                                    @error('joining_date')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="inputNanme4" class="form-label">salary</label>
                                    <input type="number" name="salary" class="form-control" id="inputNanme4">
                                    @error('salary')
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
