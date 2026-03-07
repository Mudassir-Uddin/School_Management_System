@section('dashboard-content')
    @extends('layout.dashboard')



    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Teacher Assignment Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Teacher Assignment</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Teacher Assignments List</h5>
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    @php
                                        $i = 0;
                                    @endphp
                                    <tr>
                                        <th scope="col">#</th>
                                        <th>
                                            Teacher
                                        </th>
                                        <th>
                                            Class Subjects
                                        </th>
                                        <th>
                                            Academic Year
                                        </th>

                                        <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teacher_assignments as $TA)
                                        <tr>
                                            <td scope="row">{{ ++$i }}</td>
                                            <td>{{ $TA->teacher->user->name }}</td>

                                            <td>{{ $TA->classSubject->class->name }} - {{ $TA->classSubject->subject->name }}</td>
                                            <td>{{ $TA->academic_year->name }}</td>
                                            <td>{{ $TA->created_at }}</td>
                                            {{-- <td>{{ $TA->updated_at }}</td> --}}
                                            <td>
                                                <a href="/Teacher_assignmentsEdit/{{ $TA->id }}"
                                                    class="btn btn-primary">Edit</a>
                                                <a href="/Teacher_assignmentsDestroy/{{ $TA->id }}"
                                                    class="btn btn-danger">Delete</a>
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
