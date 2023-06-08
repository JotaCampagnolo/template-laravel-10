@extends('base')

@section('base-container')
<div>
    <div class="row min-vh-100 d-flex justify-content-center">
        <div class="col-5 align-self-center">
            <h1 class="text-success">Signup</h1>
            <h2>Starter Template</h2>
            <p class="mt-3 font-200 text-justify">This is a starter tempalte created to implement a basic login and authentication system for Laravel 10, using bootstrap as main front-end toolkit. You can cumtomize everything very easily from here.</p>
        </div>
        <div class="col-5 align-self-center">
            <div class="card">
                <div class="card-body p-5">
                    @if ($errors->any())
                        <div class="alert alert-danger d-flex align-items-center mb-4" role="alert">
                            <div>
                                @foreach ($errors->all() as $error)
                                <div>
                                    <i class="bi bi-info-lg mx-1"></i><label class="form-label">{{ $error }}</label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf()
                        <div class="mb-4">
                            <i class="bi bi-person-fill"></i>
                            <label for="username" class="form-label font-400">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Username">
                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>
                        <div class="mb-4">
                            <i class="bi bi-at"></i>
                            <label for="email" class="form-label font-400">User Email</label>
                            <input type="email" class="form-control" name="email" placeholder="username@example.com">
                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>
                        <div class="mb-4">
                            <i class="bi bi-key"></i>
                            <label for="password" class="form-label font-400">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="********">
                        </div>
                        <div class="mb-4">
                            <i class="bi bi-key"></i>
                            <label for="password_confirmation" class="form-label font-400">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation" placeholder="********">
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success">
                                Register
                            </button>
                        </div>
                        <div class="mt-3 mb-0 text-center">
                            <a href="{{ route('login.show') }}" class="link-primary link-underline-opacity-0">Already have an account? Login instead!</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()
