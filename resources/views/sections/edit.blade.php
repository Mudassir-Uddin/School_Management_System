@section('dashboard-content')
@extends('layout.dashboard')


<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit Post</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Section Form</h5>

                        <form class="row g-3" method="POST" action="{{ route('Sections.update', $section->id) }}" enctype="multipart/form-data">
                            @csrf

                            <div class="col-12">
                                <label for="inputName4" class="form-label">Section Name</label>
                                <input type="text" name="name" class="form-control" id="inputName4" value="{{ old('name', $section->name) }}">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('Sections.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

@endsection