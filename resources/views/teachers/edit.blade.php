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

                            <form class="row g-3" method="POST"
                                action="{{ route('Teachers.update', $Teachers->id) }}"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label class="form-label">Teacher</label>
                                    <select name="user_id" class="form-select">
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}"
                                                {{ old('user_id', $Teachers->user_id) == $user->id ? 'selected' : '' }}>
                                                {{ $user->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('user_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Qualification</label>
                                    <select name="qualification" class="form-select">
                                        <option value="">Choose Qualification</option>

                                        @foreach (['Matric', 'Intermediate', 'BA', 'BSc', 'MA', 'MSc', 'MPhil', 'PhD', 'B.Ed', 'M.Ed'] as $qualification)
                                            <option value="{{ $qualification }}"
                                                {{ old('qualification', $Teachers->qualification) == $qualification ? 'selected' : '' }}>
                                                {{ $qualification }}
                                            </option>
                                        @endforeach
                                    </select>

                                    @error('qualification')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3 col-12">
                                    <label class="form-label">Experience Years</label>
                                    <input type="text" name="experience_years" class="form-control"
                                        value="{{ old('experience_years', $Teachers->experience_years) }}">

                                    @error('experience_years')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3 col-12">
                                    <label class="form-label">Joining Date</label>
                                    <input type="date" name="joining_date" class="form-control"
                                        value="{{ old('joining_date', $Teachers->joining_date) }}">

                                    @error('joining_date')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3 col-12">
                                    <label class="form-label">Salary</label>
                                    <input type="number" name="salary" class="form-control"
                                        value="{{ old('salary', $Teachers->salary) }}">

                                    @error('salary')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="{{ route('Teachers.index') }}" class="btn btn-secondary">Cancel</a>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
