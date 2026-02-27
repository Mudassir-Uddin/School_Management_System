@section('dashboard-content')
@extends('layout.dashboard')


<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit Parent</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Parent Form</h5>

                        <form class="row g-3" method="POST" action="{{ route('Parents.update', $parent->id) }}" enctype="multipart/form-data">
                            @csrf

                            <div class="col-12">
                                <label for="inputName4" class="form-label">Father Name</label>
                                <input type="text" name="father_name" class="form-control" id="inputName4" value="{{ old('father_name', $parent->father_name) }}">
                                @error('father_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="inputName5" class="form-label">Mother Name</label>
                                <input type="text" name="mother_name" class="form-control" id="inputName5" value="{{ old('mother_name', $parent->mother_name) }}">
                                @error('mother_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="inputPhone" class="form-label">Phone Number</label>
                                <input type="number" name="phone" class="form-control" id="inputPhone" value="{{ old('phone', $parent->phone) }}">
                                @error('phone')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('Parents.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

@endsection