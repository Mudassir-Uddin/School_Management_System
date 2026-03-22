@section('dashboard-content')
@extends('layout.dashboard')


<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit Class</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Class Section Form</h5>

                        <form class="row g-3" method="POST" action="{{ route('ClassSections.update', $ClassSections->id) }}" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="col-12">
                                <label class="form-label">Class</label>
                                <select name="class_id" class="form-control">
                                    @foreach ($classes as $class)
                                        <option value="{{ $class->id }}"
                                            {{ old('class_id', $ClassSections->class_id) == $class->id ? 'selected' : '' }}>
                                            {{ $class->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('class_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-12">
                                <label class="form-label">Section</label>
                                <select name="section_id" class="form-control">
                                    @foreach ($sections as $section)
                                        <option value="{{ $section->id }}"
                                            {{ old('section_id', $class->section_id) == $section->id ? 'selected' : '' }}>
                                            {{ $section->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('section_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            
                                <div class="col-12">
                                    <label class="form-label">Subject</label>
                                    <div class="col-12">

                                        <label class="form-label">Subjects</label>

<select name="section_id[]" class="form-control" multiple>
    @foreach ($sections as $section)
        <option value="{{ $section->id }}"
            {{ in_array($section->id, $selectedSections) ? 'selected' : '' }}>
            {{ $section->name }}
        </option>
    @endforeach
</select>

                                    </div>


                                    @error('section_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                </div>
                            
                            <div class="col-12">
                                <label class="form-label">Academic Year</label>
                                <select name="academic_year_id" class="form-control">
                                    @foreach ($acdemic_years as $academic_year)
                                        <option value="{{ $academic_year->id }}"
                                            {{ old('academic_year_id', $class->academic_year_id) == $academic_year->id ? 'selected' : '' }}>
                                            {{ $academic_year->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('academic_year_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('ClassSections.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

@endsection