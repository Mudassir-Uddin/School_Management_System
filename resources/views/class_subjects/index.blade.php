@section('dashboard-content')
    @extends('layout.dashboard')



    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Class Subject Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Class Subjects</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <a href="/ClassSubjectsInsert" class="mt-3 mb-2 btn btn-warning">
                                <i class="bi bi-plus-circle"></i> Add Class Subjects
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
                                            Class <b>Name</b>
                                        </th>
                                        <th>
                                            Subject <b>Name</b>
                                        </th>

                                        <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($classsubjects as $classsubject)
                                        <tr>
                                            <td scope="row">{{ ++$i }}</td>
                                            <td>{{ $classsubject->class->name }}</td>
                                            <td>{{ $classsubject->subject->name }}</td>

                                            <td>{{ $classsubject->created_at }}</td>
                                            {{-- <td>{{ $classsubject->updated_at }}</td> --}}
                                            <td>
                                                <a href="/ClassSubjectsEdit/{{ $classsubject->id }}"
                                                    class="btn btn-primary"><i class="bi bi-pencil-square"></i> Edit</a>
                                                <a href="/ClassSubjectsDestroy/{{ $classsubject->id }}"
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
