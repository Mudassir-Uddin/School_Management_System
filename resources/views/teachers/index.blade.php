@section('dashboard-content')
    @extends('layout.dashboard')



    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Teachers Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Teachers</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Teachers List</h5>
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    @php
                                        $i=0;
                                    @endphp
                                    <tr>
                                        <th scope="col">#</th>
                                        <th>
                                            Teacher
                                        </th>
                                        <th>
                                            Qualification
                                        </th>
                                        <th>
                                            Experience
                                        </th>
                                        <th>
                                            Joining
                                        </th>
                                        <th>
                                            salary
                                        </th>

                                        <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Teachers as $Teacher)
                                        <tr>
                                            <td scope="row">{{ ++$i }}</td>
                                            <td>{{ $Teacher->user->name }}</td>
                                            <td>{{ $Teacher->qualification }}</td>
                                            <td>{{ $Teacher->experience_years }}</td>
                                            <td>{{ $Teacher->joining_date }}</td>
                                            <td>{{ $Teacher->salary }}</td>
                                            
                                            <td>{{ $Teacher->created_at }}</td>
                                            {{-- <td>{{ $Teacher->updated_at }}</td> --}}
                                            <td>
                                                <a href="/TeachersEdit/{{ $Teacher->id }}"
                                                    class="btn btn-primary">Edit</a>
                                                <a href="/TeachersDestroy/{{ $Teacher->id }}"
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
