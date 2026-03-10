@section('dashboard-content')
    @extends('layout.dashboard')



    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Student Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Student</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <a href="/StudentsInsert" class="mt-3 mb-2 btn btn-warning">
                                <i class="bi bi-plus-circle"></i> Add Students
                            </a>
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    @php
                                        $i = 0;
                                    @endphp
                                    <tr>
                                        <th scope="col">#</th>
                                        <th>
                                            User Id
                                        </th>
                                        <th>
                                            Admission Date
                                        </th>
                                        <th>
                                            Dob
                                        </th>
                                        <th>
                                            gender
                                        </th>
                                        <th>
                                            status
                                        </th>

                                        <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            <td scope="row">{{ ++$i }}</td>
                                            <td>{{ $student->user->name }}</td>
                                            <td>{{ $student->admission_date }}</td>
                                            <td>{{ $student->dob }}</td>
                                            <td>{{ $student->gender }}</td>
                                            <td>{{ $student->status ? 'Active' : 'Inactive' }}</td>

                                            <td>{{ $student->created_at }}</td>
                                            {{-- <td>{{ $student->updated_at }}</td> --}}
                                            <td>
                                                <a href="/StudentsEdit/{{ $student->id }}" class="btn btn-primary"><i
                                                        class="bi bi-pencil-square"></i> Edit</a>
                                                <a href="/StudentsDestroy/{{ $student->id }}" class="btn btn-danger"><i
                                                        class="bi bi-trash"></i> Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
