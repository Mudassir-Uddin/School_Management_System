@section('dashboard-content')
    @extends('layout.dashboard')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="pt-4 card-body profile-card d-flex flex-column align-items-center">

                            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                            <h2>{{ Auth::user()->name }}</h2>
                            <h3>Web Designer</h3>
                            <div class="mt-2 social-links">
                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="pt-3 card-body">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profile-overview">Overview</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                        Profile</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#profile-change-password">Change Password</button>
                                </li>

                            </ul>
                            <div class="pt-2 tab-content">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <h5 class="card-title">About</h5>
                                    <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores
                                        cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure
                                        rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at
                                        unde.</p>

                                    <h5 class="card-title">Profile Details</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                        <div class="col-lg-9 col-md-8">{{ Auth::user()->name }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Company</div>
                                        <div class="col-lg-9 col-md-8">Lueilwitz, Wisoky and Leuschke</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Job</div>
                                        <div class="col-lg-9 col-md-8">Web Designer</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Country</div>
                                        <div class="col-lg-9 col-md-8">USA</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Address</div>
                                        <div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Phone</div>
                                        <div class="col-lg-9 col-md-8">(436) 486-3538 x29071</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8">{{ Auth::user()->email }}</div>
                                    </div>

                                </div>

                                <div class="pt-3 tab-pane fade profile-edit" id="profile-edit">

                                    <!-- Profile Edit Form -->
                                    {{-- Email Verification Form --}}
                                    <form id="send-verification" method="POST" action="{{ route('verification.send') }}">
                                        @csrf
                                    </form>

                                    {{-- Profile Update Form --}}
                                    <form method="POST" action="{{ route('profile.update') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')

                                        {{-- Profile Image --}}
                                        <div class="mb-4 row">
                                            <label class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                            <div class="col-md-8 col-lg-9">

                                                <img src="{{ $user->profile_image ? asset('storage/' . $user->profile_image) : asset('assets/img/profile-img.jpg') }}"
                                                    alt="Profile" class="mb-3 rounded-circle" width="120"
                                                    height="120">

                                                <input type="file" name="profile_image" class="form-control">

                                                @error('profile_image')
                                                    <div class="mt-1 text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Full Name --}}
                                        <div class="mb-3 row">
                                            <label class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="name" type="text" class="form-control"
                                                    value="{{ old('name', $user->name) }}" required>

                                                @error('name')
                                                    <div class="mt-1 text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Email --}}
                                        <div class="mb-3 row">
                                            <label class="col-md-4 col-lg-3 col-form-label">Email</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="email" class="form-control"
                                                    value="{{ old('email', $user->email) }}" required>

                                                @error('email')
                                                    <div class="mt-1 text-danger">{{ $message }}</div>
                                                @enderror

                                                {{-- Email Verification --}}
                                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                                                    <div class="mt-2">
                                                        <small class="mb-1 text-warning d-block">
                                                            Your email address is unverified.
                                                        </small>

                                                        <button form="send-verification" class="p-0 btn btn-link">
                                                            Click here to re-send verification email
                                                        </button>

                                                        @if (session('status') === 'verification-link-sent')
                                                            <div class="mt-2 text-success">
                                                                A new verification link has been sent to your email.
                                                            </div>
                                                        @endif
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        {{-- About --}}
                                        <div class="mb-3 row">
                                            <label class="col-md-4 col-lg-3 col-form-label">About</label>
                                            <div class="col-md-8 col-lg-9">
                                                <textarea name="about" class="form-control" rows="4">{{ old('about', $user->about ?? '') }}</textarea>
                                            </div>
                                        </div>

                                        {{-- Phone --}}
                                        <div class="mb-3 row">
                                            <label class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="phone" type="text" class="form-control"
                                                    value="{{ old('phone', $user->phone ?? '') }}">
                                            </div>
                                        </div>

                                        {{-- Address --}}
                                        <div class="mb-4 row">
                                            <label class="col-md-4 col-lg-3 col-form-label">Address</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="address" type="text" class="form-control"
                                                    value="{{ old('address', $user->address ?? '') }}">
                                            </div>
                                        </div>

                                        {{-- Submit Button --}}
                                        <div class="text-center">
                                            <button type="submit" class="px-4 btn btn-primary">
                                                Save Changes
                                            </button>

                                            @if (session('status') === 'profile-updated')
                                                <div class="mt-3 text-success">
                                                    Profile updated successfully.
                                                </div>
                                            @endif
                                        </div>

                                    </form>
                                    <!-- End Profile Edit Form -->
                                </div>

                                <div class="pt-3 tab-pane fade" id="profile-change-password">

                                    <!-- Change Password Form -->
                                    <form method="POST" action="{{ route('password.update') }}">
                                        @csrf
                                        @method('PUT')

                                        {{-- Current Password --}}
                                        <div class="mb-3 row">
                                            <label for="current_password" class="col-md-4 col-lg-3 col-form-label">
                                                Current Password
                                            </label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="current_password" type="password" class="form-control"
                                                    id="current_password" required>

                                                @error('current_password')
                                                    <div class="mt-1 text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- New Password --}}
                                        <div class="mb-3 row">
                                            <label for="password" class="col-md-4 col-lg-3 col-form-label">
                                                New Password
                                            </label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="password" type="password" class="form-control"
                                                    id="password" required>

                                                @error('password')
                                                    <div class="mt-1 text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Confirm New Password --}}
                                        <div class="mb-3 row">
                                            <label for="password_confirmation" class="col-md-4 col-lg-3 col-form-label">
                                                Re-enter New Password
                                            </label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="password_confirmation" type="password" class="form-control"
                                                    id="password_confirmation" required>
                                            </div>
                                        </div>

                                        {{-- Submit --}}
                                        <div class="text-center">
                                            <button type="submit" class="px-4 btn btn-primary">
                                                Change Password
                                            </button>

                                            @if (session('status') === 'password-updated')
                                                <div class="mt-3 text-success">
                                                    Password updated successfully.
                                                </div>
                                            @endif
                                        </div>

                                    </form>
                                    <!-- End Change Password Form -->
                                </div>

                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection


{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
            <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
