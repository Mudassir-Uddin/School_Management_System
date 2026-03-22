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
                            <h5 class="card-title">Edit Teacher Assignment Form</h5>

                            <form method="POST" action="/Teacher_assignmentsUpdate/{{ $teacher_assignments->id }}">
                                @csrf

                                <div class="col-12">
                                    <label for="inputCategory4" class="form-label">Teachers</label>
                                    <select name="teacher_id" class="form-control" id="inputCategory4">
                                        @foreach ($teachers as $teacher)
                                            <option value="{{ $teacher->id }}"
                                                {{ $teacher->id == $teacher_assignments->teacher_id ? 'selected' : '' }}>
                                                {{ $teacher->user->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="inputCategory4" class="form-label">Class Subjects</label>
                                    <select name="class_subjects_ids[]" class="form-control select2" multiple>
                                        @foreach ($class_subjects as $cs)
                                            <option value="{{ $cs->id }}"
                                                {{ in_array(
                                                    $cs->id,
                                                    $teacher_assignments->where('teacher_id', $teacher_assignments->teacher_id)->pluck('class_subjects_id')->toArray(),
                                                )
                                                    ? 'selected'
                                                    : '' }}>
                                                {{ $cs->classSection->class->name }} - {{ $cs->classSection->section->name }} - {{ $cs->subject->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label for="inputCategory4" class="form-label">Year</label>
                                    <select name="academic_year_id" class="form-control" id="inputCategory4">
                                        @foreach ($academic_years as $year)
                                            <option value="{{ $year->id }}"
                                                {{ $year->id == $teacher_assignments->academic_year_id ? 'selected' : '' }}>
                                                {{ $year->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="{{ route('Teacher_assignments.index') }}" class="btn btn-secondary">Cancel</a>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
