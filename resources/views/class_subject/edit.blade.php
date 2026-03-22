@extends('layout.dashboard')

@section('dashboard-content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Edit Class Subject</h1>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">

                            <h5 class="card-title">Edit Class Subject Form</h5>

                            <form class="row g-3" method="POST"
                                action="{{ route('ClassSubjects.update', $ClassSubject->id) }}">

                                @csrf

                                <div class="col-12">
                                    <label class="form-label">Class</label>

                                    <select name="class_section_id" class="form-control">

                                        @foreach ($ClassSection as $class)
                                            <option value="{{ $class->id }}"
                                                {{ $ClassSubject->class_section_id == $class->id ? 'selected' : '' }}>

                                                {{ $class->class->name }} - {{ $class->section->name }}

                                            </option>
                                        @endforeach

                                    </select>

                                    @error('class_section_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                </div>


                                <div class="col-12">
                                    <label class="form-label">Subject</label>
                                    <div class="col-12">

                                        <label class="form-label">Subjects</label>

                                        <select name="subject_id[]" class="form-control" multiple>

                                            @foreach ($subjects as $subject)
                                                <option value="{{ $subject->id }}"
                                                    {{ in_array($subject->id, $selectedSubjects) ? 'selected' : '' }}>

                                                    {{ $subject->name }}

                                                </option>
                                            @endforeach

                                        </select>

                                    </div>


                                    @error('subject_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                </div>


                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="{{ route('ClassSubjects.index') }}" class="btn btn-secondary">Cancel</a>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
