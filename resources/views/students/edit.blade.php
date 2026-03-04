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
                            <h5 class="card-title">Edit Student Form</h5>

                            <form class="row g-3" method="POST" action="{{ route('Students.update', $students->id) }}"
                                enctype="multipart/form-data">
                                @csrf
    
                                <div class="col-12">
                                    <label class="form-label">Users</label>
                                    <select name="user_id" class="form-control">
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}"
                                                {{ old('user_id', $user->user_id) == $user->id ? 'selected' : '' }}>
                                                {{ $user->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('user_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="col-12">
                                    <label for="inputName4" class="form-label">Admission Date</label>
                                    <input type="date" name="admission_date" class="form-control" id="inputName4"
                                        value="{{ old('admission_date', $students->admission_date) }}">
                                    @error('admission_date')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="inputName4" class="form-label">Dob</label>
                                    <input type="date" name="dob" class="form-control" id="inputName4"
                                        value="{{ old('dob', $students->dob) }}">
                                    @error('dob')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select id="gender" name="gender" class="form-select">
                                        <option value="">Choose...</option>
                                        <option value="Male"
                                            {{ old('gender', $students->gender) == 'Male' ? 'selected' : '' }}> Male </option>
                                        <option value="Female"
                                            {{ old('gender', $students->gender) == 'Female' ? 'selected' : '' }}> Female </option>
                                        <option value="Other"
                                            {{ old('gender', $students->gender) == 'Other' ? 'selected' : '' }}> Other </option>
                                    </select>
                                    @error('gender')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="inputState" class="form-label"> Status</label>
                                    <select id="inputState" name="status" class="form-select">
                                        <option value="1"
                                            {{ old('status', $students->status) == 1 ? 'selected' : '' }}>Active</option>
                                        <option value="0"
                                            {{ old('status', $students->status) == 0 ? 'selected' : '' }}>Inactive</option>
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
