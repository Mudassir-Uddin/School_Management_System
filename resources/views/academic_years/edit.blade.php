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
                        <h5 class="card-title">Edit Academic Year Form</h5>

                        <form class="row g-3" method="POST" action="{{ route('Academic_years.update', $academic_years->id) }}" enctype="multipart/form-data">
                            @csrf

                            <div class="col-12">
                                <label for="inputName4" class="form-label">Academic Years Name</label>
                                <input type="text" name="name" class="form-control" id="inputName4" value="{{ old('name', $academic_years->name) }}">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="inputName4" class="form-label">Academic Year Start Date</label>
                                <input type="date" name="start_date" class="form-control" id="inputName4" value="{{ old('start_date', $academic_years->start_date) }}">
                                @error('start_date')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="inputName4" class="form-label">Academic Year End Date</label>
                                <input type="date" name="end_date" class="form-control" id="inputName4" value="{{ old('end_date', $academic_years->end_date) }}">
                                @error('end_date')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="inputState" class="form-label">Academic Year Status</label>
                                <select id="inputState" name="status" class="form-select">
                                    <option value="1" {{ old('status', $academic_years->status) == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ old('status', $academic_years->status) == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('Academic_years.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

@endsection