@section('dashboard-content')
    @extends('layout.dashboard')



    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Student Enrollments Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Student Enrollments</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <a href="/Student_enrollmentsInsert" class="mt-3 mb-2 btn btn-warning">
                                <i class="bi bi-plus-circle"></i> Add Student Enrollments
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
                                            Student
                                        </th>
                                        <th>
                                            Class
                                        </th>
                                        <th>
                                            Year
                                        </th>
                                        <th>
                                            Admission Date
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th>
                                            Roll Number
                                        </th>

                                        <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($St_Ens as $St_En)
                                        <tr>
                                            <td scope="row">{{ ++$i }}</td>
                                            <td>{{ $St_En->student->user->name }}</td>
                                            <td>{{ $St_En->class->name }}</td>
                                            <td>{{ $St_En->academic_year->name }}</td>
                                            <td>{{ $St_En->admission_date }}</td>
                                            <td>{{ $St_En->status }}</td>
                                            <td>{{ $St_En->roll_number }}</td>

                                            <td>{{ $St_En->created_at }}</td>
                                            {{-- <td>{{ $St_En->updated_at }}</td> --}}
                                            <td>
                                                <a href="/Student_enrollmentsEdit/{{ $St_En->id }}"
                                                    class="btn btn-primary"><i class="bi bi-pencil-square"></i> Edit</a>
                                                <a href="/Student_enrollmentsDestroy/{{ $St_En->id }}"
                                                    class="btn btn-danger"><i class="bi bi-trash"></i> Delete</a>
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
