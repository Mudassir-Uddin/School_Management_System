@section('dashboard-content')
    @extends('layout.dashboard')



    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Parent Student Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Parent Students</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Parent Students List</h5>
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    @php
                                        $i=0;
                                    @endphp
                                    <tr>
                                        <th scope="col">#</th>
                                        <th>
                                            Student
                                        </th>
                                        <th>
                                            Parent Name - phone
                                        </th>
                                        <th>
                                            Class
                                        </th>
                                        <th>
                                            Section
                                        </th>

                                        <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($parent_students as $parent_student)
                                        <tr>
                                            <td scope="row">{{ ++$i }}</td>
                                            <td>{{ $parent_student->student->student->user->name }}</td>
                                            <td>{{ $parent_student->parent->father_name }} - {{ $parent_student->parent->phone }}</td>
                                            <td>{{ $parent_student->student->class->name }}</td>
                                            <td>{{ $parent_student->student->class->section->name }}</td>
                                            
                                            <td>{{ $parent_student->created_at }}</td>
                                            {{-- <td>{{ $parent_student->updated_at }}</td> --}}
                                            <td>
                                                <a href="/Parent_studentsEdit/{{ $parent_student->id }}"
                                                    class="btn btn-primary">Edit</a>
                                                <a href="/Parent_studentsDestroy/{{ $parent_student->id }}"
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
