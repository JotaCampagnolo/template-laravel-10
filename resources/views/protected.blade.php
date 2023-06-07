@extends('base')

@section('base-container')
<div>
    <div class="row min-vh-100 d-flex justify-content-center">
        <div class="col-5 align-self-center">
            <h1 class="text-success">You're In</h1>
            <h2>A Protected Page</h2>
            <p class="mt-3 font-200 text-justify">This page is protected by authentication. If you can see this page it means you're authenticated.</p>
            <form action="{{ url('logout') }}" method="POST">
                @csrf()
                <button type="submit" class="btn btn-danger">
                    Logout
                </button>
            </form>
        </div>
    </div>
</div>
@endsection()