@section('dashboard-content')
    @extends('layout.dashboard')



    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Academic Years Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Academic Years</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <a href="/Academic_yearsInsert" class="mt-3 mb-2 btn btn-warning">
                                <i class="bi bi-plus-circle"></i> Add Academic Years
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
                                            Academic Year <b>Name</b>
                                        </th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Status</th>
                                        <th data-type="date" data-format="YYYY/DD/MM">Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($academic_years as $academic_years)
                                        <tr>
                                            <td scope="row">{{ ++$i }}</td>
                                            <td>{{ $academic_years->name }}</td>
                                            <td>{{ $academic_years->start_date }}</td>
                                            <td>{{ $academic_years->end_date }}</td>
                                            <td>{{ $academic_years->status ? 'Active' : 'Inactive' }}</td>
                                            {{-- <td>{{ $academic_years->updated_at }}</td> --}}
                                            <td>{{ $academic_years->created_at }}</td>
                                            <td>
                                                <a href="/Academic_yearsEdit/{{ $academic_years->id }}"
                                                    class="btn btn-primary"><i class="bi bi-pencil-square"></i> Edit</a>
                                                <a href="/Academic_yearsDestroy/{{ $academic_years->id }}"
                                                    class="btn btn-danger"><i class="bi bi-trash"></i>  Delete</a>
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
