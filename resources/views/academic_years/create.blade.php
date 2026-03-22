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
                            <h5 class="card-title">Academic Year Form</h5>

                            <!-- Vertical Form -->
                            <form class="row g-3" method="POST" action="/Academic_yearsStore"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="col-12">
                                    <label for="inputName4" class="form-label">Academic Year Name</label>
                                    <input type="text" name="name" class="form-control" id="inputName4"
                                    value="{{old('name',$academic_year->name ?? '')}}">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="inputName4" class="form-label">Academic Year Start Date</label>
                                    <input type="date" name="start_date" class="form-control" id="inputName4">
                                    @error('start_date')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="inputName4" class="form-label">Academic Year End Date</label>
                                    <input type="date" name="end_date" class="form-control" id="inputName4">
                                    @error('end_date')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="inputState" class="form-label">Academic Year Status</label>
                                    <select id="inputState" name="status" class="form-select">
                                        <option selected>Choose...</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                    @error('status')
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
            </Academic_year>
        @endsection
