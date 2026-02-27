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
                            <h5 class="card-title"> Parents Form</h5>

                            <!-- Vertical Form -->
                            <form class="row g-3" method="POST" action="/ParentsStore" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="col-12">
                                    <label for="inputName4" class="form-label">Father Name</label>
                                    <input type="text" name="father_name" class="form-control" id="inputName4">
                                    @error('father_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="col-12">
                                    <label for="inputName5" class="form-label">Mother Name</label>
                                    <input type="text" name="mother_name" class="form-control" id="inputName5">
                                </div>

                                <div class="col-12">
                                    <label for="inputPhone" class="form-label">Phone Number</label>
                                    <input type="number" name="phone" class="form-control" id="inputPhone">
                                    @error('phone')
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