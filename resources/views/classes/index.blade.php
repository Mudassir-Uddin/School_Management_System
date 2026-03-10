@section('dashboard-content')
    @extends('layout.dashboard')



    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Class Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Classes</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <a href="/ClassesInsert" class="mt-3 mb-2 btn btn-warning">
                                <i class="bi bi-plus-circle"></i> Add Classes
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
                                            Section <b>Name</b>
                                        </th>
                                        <th>
                                            Academic Year <b>Name</b>
                                        </th>

                                        <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($classes as $class)
                                        <tr>
                                            <td scope="row">{{ ++$i }}</td>
                                            <td>{{ $class->name }}</td>
                                            <td>{{ $class->section->name }}</td>
                                            <td>{{ $class->academicYear->name }}</td>

                                            <td>{{ $class->created_at }}</td>
                                            {{-- <td>{{ $class->updated_at }}</td> --}}
                                            <td>
                                                <a href="/ClassesEdit/{{ $class->id }}" class="btn btn-primary"><i
                                                        class="bi bi-pencil-square"></i> Edit</a>
                                                <a href="/ClassesDestroy/{{ $class->id }}" class="btn btn-danger"><i
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
