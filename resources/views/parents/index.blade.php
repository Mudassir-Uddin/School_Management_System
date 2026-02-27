@section('dashboard-content')
    @extends('layout.dashboard')



    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Parents Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Parents</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Parents List</h5>
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    @php
                                        $i=0;
                                    @endphp
                                    <tr>
                                        <th scope="col">#</th>
                                        <th>
                                            Father <b>Name</b>
                                        </th>
                                        <th>
                                            Mother <b>Name</b>
                                        </th>
                                        <th>
                                            Phone <b>Number</b>
                                        </th>
                                        <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($parents as $parent)
                                        <tr>
                                            <td scope="row">{{ ++$i }}</td>
                                            <td>{{ $parent->father_name}}</td>
                                            <td>{{ $parent->mother_name }}</td>
                                            <td>{{ $parent->phone }}</td>
                                            <td>{{ $parent->created_at }}</td>
                                            {{-- <td>{{ $parent->updated_at }}</td> --}}
                                            <td>
                                                <a href="/ParentsEdit/{{ $parent->id }}"
                                                    class="btn btn-primary">Edit</a>
                                                <a href="/ParentsDestroy/{{ $parent->id }}"
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