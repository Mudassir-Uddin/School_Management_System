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
                        <h5 class="card-title">Edit Class Form</h5>

                        <form class="row g-3" method="POST" action="{{ route('Classes.update', $class->id) }}" enctype="multipart/form-data">
                            @csrf

                            <div class="col-12">
                                <label for="inputNanme4" class="form-label">Class Name</label>
                                <input type="text" name="name" class="form-control" id="inputNanme4" value="{{ old('name', $class->name) }}">
                                @error('name')
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
                                <a href="{{ route('Classes.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

@endsection