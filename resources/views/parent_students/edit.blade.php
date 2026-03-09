@extends('layout.dashboard')
@section('dashboard-content')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Edit Parent Student</h1>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Parent Student Form</h5>

                            <form class="row g-3" method="POST"
                                action="{{ route('Parent_students.update', $parentStudents->id) }}">
                                @csrf

                                <!-- Parent -->
                                <div class="col-12">
                                    <label class="form-label">Parent</label>
                                    <select name="parent_id" class="form-control select2" id="parentSelect">
                                        <option value="">Select Parent</option>
                                        @foreach ($parents as $parent)
                                            <option value="{{ $parent->id }}" data-father="{{ $parent->father_name }}"
                                                data-mother="{{ $parent->mother_name }}" data-phone="{{ $parent->phone }}"
                                                {{ $parentStudents->parent_id == $parent->id ? 'selected' : '' }}>
                                                {{ $parent->father_name }} ( {{ $parent->mother_name }} -
                                                {{ $parent->phone }} )
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('parent_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Student -->
                                <div class="col-12">
                                    <label class="form-label">Student</label>
                                    <select name="student_id" class="form-control select2" id="studentSelect">
                                        <option value="">Select Student</option>
                                        @foreach ($student_enrollments as $student)
                                            <option value="{{ $student->id }}" data-class="{{ $student->class->name }}"
                                                data-section="{{ $student->class->section->name }}"
                                                {{ $parentStudents->student_id == $student->id ? 'selected' : '' }}>
                                                {{ $student->student->user->name }} ( {{ $student->class->name }} -
                                                {{ $student->class->section->name }} )
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('student_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="{{ route('Parent_students.index') }}" class="btn btn-secondary">Cancel</a>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            // Init Select2
            $('.select2').select2({
                placeholder: "Search...",
                allowClear: true
            });

            // Parent -> fill father/mother/phone
            $('#parentSelect').on('change', function() {
                let selected = this.options[this.selectedIndex];
                $('#fatherField').val(selected.getAttribute('data-father') ?? '');
                $('#motherField').val(selected.getAttribute('data-mother') ?? '');
                $('#phoneField').val(selected.getAttribute('data-phone') ?? '');
            });

            // Student -> fill class/section
            $('#studentSelect').on('change', function() {
                let selected = this.options[this.selectedIndex];
                $('#classField').val(selected.getAttribute('data-class') ?? '');
                $('#sectionField').val(selected.getAttribute('data-section') ?? '');
            });
        });
    </script>
@endsection
